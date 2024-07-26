<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Find_me_a_roomie,Room_image,User,Find_me_a_room,User_image,RoomRoomieLike,Payment};
use Auth,Session,Validator;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1=Payment::where('users_id',Auth::id())->orderBy('id','DESC')->get()->toArray();
        $data=array();
        if(($data1!=null) && ($data1!=''))
        {
            $len=count($data1);
            foreach($data1 as $key=>$dataVal)
            {

                if($key==0)
                {
                    $dataVal['used']='Active';
                }
                else
                {
                    $dataVal['used']='USED';
                }
                
                array_push($data,$dataVal);
            }
            
            return response()->json(['payment'=>(object)$data,"status"=>200]);
        }
        else
        {
            return response()->json(["status"=>400]); 
        }
       
    }

    function paymentShowForAdmin()
    {
        $data=Payment::join('users','users.id','=','payments.users_id')->select('payments.*','users.your_first_name','users.image','users.email')->get();
        return view('admin.payment',["payments"=>$data]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
