<?php

namespace App\Http\Controllers;

use App\Models\{Message, User, MessageBlockUser, Find_me_a_roomie, Find_me_a_room, AdminMessage};
use Illuminate\Http\Request;
use Auth, DB;
use Cache;
use Carbon\Carbon;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dataR = Message::where('receiverID', Auth::id())->get();
        $dataS = Message::where('senderID', Auth::id())->get();
        $emojies=DB::table('emojis')->get();
        $emoji1=array();
        $emoji2=array();
        foreach($emojies as $emojies1)
        {
            if($emojies1->emoji>128512 && $emojies1->emoji<128567)
            {
                array_push($emoji1, $emojies1->emoji);
            }
            else{
                array_push($emoji2, $emojies1->emoji);
            }
        }
        $emoji = array_merge($emoji1,$emoji2);
        //dd($emoji);
        $data1 = array();
        $data = array();
        $unseen = 0;
        $unseenData = '';
        foreach ($dataR as $key => $val1) {

            if ($val1['senderID'] == Auth::id()) {
                continue;
            }

            array_push($data1, $val1['senderID']);
        }


        foreach ($dataS as $key2 => $val2) {

            if ($val2['receiverID'] == Auth::id()) {
                continue;
            }

            array_push($data1, $val2['receiverID']);
        }


        $unique_arr = array_unique($data1);



        if (!empty($unique_arr)) //alteast one user messaged to the auth user
        {
            foreach ($unique_arr as $key3 => $val3) {

                $auth_id = Auth::id();
                $data[$key3] = User::where('id', $val3)->first();
                $unseenData = Message::where('receiverID', Auth::id())->where('senderID', $val3)->where('seen_unseen', 0)->get();
                $lastMessage = DB::select("SELECT * FROM `messages` WHERE (senderID=$val3 AND receiverID=$auth_id) OR (senderID=$auth_id AND receiverID=$val3) ORDER BY id DESC LIMIT 1");



                if ($lastMessage != null) {
                    $data[$key3]['lastMessage'] = $lastMessage[0]->message;
                    // $data[$key3]['online_status']=Carbon::parse($lastMessage[0]->created_at)->diffForHumans();
                    $data[$key3]['online_status'] = Carbon::parse($data[$key3]->last_seen_online)->diffForHumans();
                    if (Cache::has('user-is-online-' . $val3)) {
                        $data[$key3]['online_offline'] = 'Online';
                    } else {
                        $data[$key3]['online_offline'] = 'Offline';
                    }
                } else {
                    $data[$key3]['lastMessage'] = '';
                }

                if ($unseenData != null) {
                    $data[$key3]['unseen'] = count($unseenData);
                } else {
                    $data[$key3]['unseen'] = 0;
                }

            }

            return view('pages.frontend.message', ['data' => $data, 'type' => 'user','emoji'=>$emoji]);
        } else //no user message to auth user
        {
            $str = '';
            $last_message = AdminMessage::orderBy('id', 'DESC')->first();
            if (strlen($last_message->message) > 20) {
                $str = substr($last_message->message, 0, 17) . '...';
            } else {
                $str = $last_message->message;
            }

            for ($i = 0; $i < 1; $i++) {
                $data[$i] = AdminMessage::first();
                $data[$i]['lastMessage'] = $str;
                $data[$i]['unseen'] = 0;
                $data[$i]['allMessages'] = AdminMessage::all();
            }

            return view('pages.frontend.message', ['data' => $data, 'type' => 'admin','emoji'=>$emoji]);
        }



    }


    public function getChatData(Request $request, $id)
    {
        $auth_id = Auth::id();
        $chatList = array();
        $unseenData = Message::where('receiverID', Auth::id())->where('senderID', $id)->where('seen_unseen', 0)->update(['seen_unseen' => 1, 'readmessage' => strtotime('now')]);

        $chatList1 = \DB::select("SELECT * FROM `messages` WHERE (receiverID=$id AND senderID=$auth_id) OR (receiverID=$auth_id AND senderID=$id)");

        $listing_id = \DB::select("SELECT * FROM `messages` WHERE (receiverID=$id AND senderID=$auth_id) OR (receiverID=$auth_id AND senderID=$id) order by id desc limit 1");

        if ($listing_id[0]->room_roomie != null) {
            $table = '';
            if ($listing_id[0]->room_roomie != 'room') {
                $table = Find_me_a_roomie::where('id', $listing_id[0]->room_roomie_id)->first();
                $listing_status = $table->roomie_listing_status;
                $listing_location = $table->property_address;
            } else {
                $table = Find_me_a_room::where('id', $listing_id[0]->room_roomie_id)->first();
                $listing_status = $table->room_listing_status;
                $listing_location = $table->suburb;


            }
        } else {
            $listing_status = 0;
            $listing_location = '';
            $table = '';
        }




        $headerData = User::where('id', $id)->first();
        $senderData = User::where('id', $auth_id)->first();
        $messageBlock = MessageBlockUser::where('blocked_to', $id)->where('blocked_by', $auth_id)->first();




        foreach ($chatList1 as $val) {
            $val->messageTimeHuman = date('h:i A', $val->messageTime);
            $val->senderUserData = $senderData;
            $val->headerData = $headerData;
            if (($val->readmessage != null) && ($val->seen_unseen != 0)) {
                $val->onread = 'Read ' . date('h:i A', $val->readmessage);
            } else {
                $val->onread = 'Not Read';
            }


            if ($messageBlock != null) {
                $val->messageBlock = 1;
            } else {
                $val->messageBlock = 0;
            }


            array_push($chatList, $val);
        }
        //left side panel of users


        $data = array();
        $unseen = 0;
        $unseenData = '';

        $data = User::where('id', $id)->first();
        $unseenData = Message::where('receiverID', Auth::id())->where('senderID', $id)->where('seen_unseen', 0)->get();


        if ($unseenData != null) {
            $data['unseen'] = count($unseenData);
        } else {
            $data['unseen'] = 0;
        }

        // $arrs=['res' => $chatList, 'data' => $data, 'listing_info' => $listing_id, 'listing_status' => $listing_status, 'listing_location' => $listing_location, 'table' => $table];
        // echo "<pre>";
         // print_r($arrs['res']);
         // echo "</pre>";
        // die;



        // end left side panel of users


        return response()->json(['res' => $chatList, 'data' => $data, 'listing_info' => $listing_id, 'listing_status' => $listing_status, 'listing_location' => $listing_location, 'table' => $table]);
    }

    public function getSingleChatData(Request $request, $id)
    {
        $auth_id = Auth::id();
        $chatList = array();

        $chatList1 = \DB::select("SELECT * FROM `messages` WHERE (receiverID=$auth_id AND senderID=$id) and  seen_unseen=0");
        //    $chatList1->setAttribute('time',date('h:i A',strtotime($chatList1->created_at)));

        $unseenData = Message::where('receiverID', Auth::id())->where('senderID', $id)->where('seen_unseen', 0)->update(['seen_unseen' => 1, 'readmessage' => strtotime('now')]);

        //    $update=Message::where(function ($query) use($id,$auth_id){
        //        $query->where('receiverID',$id)
        //        ->where('senderID',$auth_id);
        //    })
        //    ->orWhere(function ($query2) use($id,$auth_id){
        //     $query2->where('receiverID',$auth_id)
        //     ->where('senderID',$id);
        //    })
        //    ->where('seen_unseen',0)->update(['seen_unseen'=>1]);


        $headerData = User::where('id', $id)->first();
        $senderData = User::where('id', $auth_id)->first();
        $messageBlock = MessageBlockUser::where('blocked_to', $id)->where('blocked_by', $auth_id)->first();

        foreach ($chatList1 as $val) {
            $val->messageTimeHuman = date('h:i A', $val->messageTime);
            $val->senderUserData = $senderData;
            $val->headerData = $headerData;
            $val->onread = date('h:i A', $val->readmessage);

            if ($messageBlock != null) {
                $val->messageBlock = 1;
            } else {
                $val->messageBlock = 0;
            }


            array_push($chatList, $val);
        }


        return response()->json(['singleData' => $chatList]);
    }


    public function getInstantMessagesCount()
    {




        $data = array();
        $user = array();
        $tt = array();

        $unseen = 0;
        $unseenData = '';
        $unseenData = Message::where('receiverID', Auth::id())->where('seen_unseen', 0)->groupBy('senderID')->get();



        if ($unseenData != null) {
            foreach ($unseenData as $unseenDataVal) {
                $user = User::where('id', $unseenDataVal->senderID)->first();
                $messageData = Message::where('receiverID', Auth::id())->where('senderID', $unseenDataVal->senderID)->where('seen_unseen', 0)->get();
                $last_message = Message::where('receiverID', Auth::id())->where('senderID', $unseenDataVal->senderID)->orderBy('id', 'DESC')->first();
                $user['unseen'] = count($messageData);
                $user['last_message_data'] = $last_message;
                array_push($tt, $user);
            }

        } else {
            $tt = array('unseen' => '');
            ;
        }

        return response()->json(['user' => $tt]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function sendMessageByDashboard(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => 'Message field is Mandatory!']);
        } else {

            $current_timestamp = Carbon::now()->timestamp;
            $sender = Auth::id();
            $row_id = $request->input('ids');
            $find_me_a_roomie = Find_me_a_roomie::where('id', $row_id)->first();
            $receiverID = $find_me_a_roomie->user_id;

            $mes = Message::create(['receiverID' => $receiverID, 'senderID' => $sender, 'message' => $request->message, 'messageTime' => $current_timestamp, 'room_roomie' => $request->room_roomie, 'room_roomie_id' => $row_id]);

            if (($mes->id) > 0) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 400]);
            }

        }



    }

    public function store(Request $request)
    {

        $current_timestamp = Carbon::now()->timestamp;
        $sender = Auth::id();
        $row_id = $request->input('room_roomie_id');
        $receiverID = $request->input('ids');

        $mes = Message::create(['receiverID' => $receiverID, 'senderID' => $sender, 'message' => $request->message, 'messageTime' => $current_timestamp, 'room_roomie' => $request->room_roomie, 'room_roomie_id' => $row_id]);
        $mes->setAttribute('messageTimeHuman', date('h:i A', strtotime($mes->created_at)));
        if (($mes->readmessage != null) && ($mes->seen_unseen != 0)) {
            $mes->setAttribute('onread', date('h:i A', strtotime($mes->readmessage)));
        } else {
            $mes->setAttribute('onread', null);
        }


        if (($mes->id) > 0) {
            $ll = User::where('id', $sender)->first();
            return response()->json(['status' => 200, 'id' => $receiverID, 'message' => $mes, 'senderUserData' => $ll]);
        } else {
            return response()->json(['status' => 400]);
        }

    }

    public function messageUserBlock(Request $request)
    {
        $data = MessageBlockUser::where('blocked_to', $request->id)->where('blocked_by', Auth::id())->first();
        if ($data == null) {
            $res = MessageBlockUser::create(['blocked_to' => $request->id, 'blocked_by' => Auth::id()]);
            return $res;
        } else {
            return false;
        }
    }

    public function deleteConversation(Request $request)
    {
        $auth_id = Auth::id();
        $data = User::where('id', $request->id)->first();
        if ($data->messageBlock != 1) {
            $res = \DB::select("SELECT * FROM `messages` WHERE (receiverID=$request->id AND senderID=$auth_id) OR (receiverID=$auth_id AND senderID=$request->id)");
            if (count($res) > 0) {
                foreach ($res as $val) {
                    $del = Message::where('id', $val->id)->delete();
                }
                return $del;
            } else {
                return false;
            }

        } else {
            $blocked_user = "400";
            return $blocked_user;
        }

    }

    //last_seen_online function
    public function userOnlineStatus()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo $user->your_first_name . " is online. Last seen: " . Carbon::parse($user->last_seen_online)->diffForHumans() . " <br>";
            else
                echo $user->your_first_name . " is offline. Last seen: " . Carbon::parse($user->last_seen_online)->diffForHumans() . " <br>";
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        //
    }
}