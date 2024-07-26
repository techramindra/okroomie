<?php

namespace App\Http\Controllers\Admin;
use App\Models\{Plan,Payment,Find_me_a_roomie};
use App\Http\Controllers\Controller;
use Validator;
use Stripe;
use Session;
use Auth;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //

    public function frontpage()
    {
        $css[]="plan__one";
        $css[]="plan__two";
        $css[]="plan__three";
        $css[]="plan__four";
        $icon[]="wrench";
        $icon[]="bolt";
        $icon[]="lock";
        $icon[]="star";

        $plan=Plan::where('room_roomie','Room')->get();

        $room_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',0)->orderBy('id','DESC')->first();
        $room_active_plan_id=array();
        if($room_active_plan_data!=null)
        {
            if($room_active_plan_data->ends_strtotime > strtotime('now'))
            {
                $remaining_days_timestamp_room=$room_active_plan_data->ends_strtotime-strtotime('now');

                $room_active_plan_id['plan_id']=$room_active_plan_data->plan_id;
                $room_active_plan_id['free_paid']='paid';
                $room_active_plan_id['remaining_days']=(int)($remaining_days_timestamp_room/84000);


            }
            else
            {
                $room_active_plan_id['plan_id']=$room_active_plan_data->plan_id;
                $room_active_plan_id['free_paid']='expired';
                $room_active_plan_id['remaining_days']=0;

            }
           

        }
        else
        {
            foreach($plan as $plan_room_free_plan_id_extract)
            {
                if((($plan_room_free_plan_id_extract->title=="Free") || ($plan_room_free_plan_id_extract->free=="free")) && (($plan_room_free_plan_id_extract->price=="") || ($plan_room_free_plan_id_extract->price=='0')))
                {
                    $room_active_plan_id['plan_id']=$plan_room_free_plan_id_extract->id;  
                    $room_active_plan_id['free_paid']='Free';

                }
            }
        }

        $days=Plan::where('room_roomie','Room')->pluck('days');
        $appear_in_popular_searches=Plan::where('room_roomie','Room')->pluck('appear_in_popular_searches');
       
        $book_inspections=Plan::where('room_roomie','Room')->pluck('book_inspections');
        $mobile_info=Plan::where('room_roomie','Room')->pluck('mobile_info');
        $thirty_days_guarantee=Plan::where('room_roomie','Room')->pluck('thirty_days_guarantee');
        $video_tours=Plan::where('room_roomie','Room')->pluck('video_tours');
        $receive_messages=Plan::where('room_roomie','Room')->pluck('receive_messages');
        $send_messages=Plan::where('room_roomie','Room')->pluck('send_messages');
        $in_app_voice_and_video_call=Plan::where('room_roomie','Room')->pluck('in_app_voice_and_video_call');

        /*
        ***************************** ROOMIE*********************************************************************
        *********************************************************************************************************
        */
        $plan_roomie=Plan::where('room_roomie','Roomie')->get();
        $roomie_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',1)->orderBy('id','DESC')->first();
        $roomie_active_plan_id=array();
        if($roomie_active_plan_data!=null)
        {
            if($roomie_active_plan_data->ends_strtotime > strtotime('now'))
            {
                $remaining_days_timestamp=$roomie_active_plan_data->ends_strtotime-strtotime('now');

                $roomie_active_plan_id['plan_id']=$roomie_active_plan_data->plan_id;
                $roomie_active_plan_id['free_paid']='paid';
                $roomie_active_plan_id['remaining_days']=(int)($remaining_days_timestamp/84000);


            }
            else
            {
                $roomie_active_plan_id['plan_id']=$roomie_active_plan_data->plan_id;
                $roomie_active_plan_id['free_paid']='expired';
                $roomie_active_plan_id['remaining_days']=0;

            }
           

        }
        else
        {
            foreach($plan_roomie as $plan_roomie_free_plan_id_extract)
            {
                if((($plan_roomie_free_plan_id_extract->title=="Free") || ($plan_roomie_free_plan_id_extract->free=="free")) && (($plan_roomie_free_plan_id_extract->price=="") || ($plan_roomie_free_plan_id_extract->price=='0')))
                {
                    $roomie_active_plan_id['plan_id']=$plan_roomie_free_plan_id_extract->id;  
                    $roomie_active_plan_id['free_paid']='Free';

                }
            }
        }
        $days_roomie=Plan::where('room_roomie','Roomie')->pluck('days');
        $listed_as_a_featured_property_roomie=Plan::where('room_roomie','Roomie')->pluck('listed_as_a_featured_property');
        $listing_included_roomie=Plan::where('room_roomie','Roomie')->pluck('listing_included');
        $book_inspections_roomie=Plan::where('room_roomie','Roomie')->pluck('book_inspections');
        $mobile_info_roomie=Plan::where('room_roomie','Roomie')->pluck('mobile_info');
        $thirty_days_guarantee_roomie=Plan::where('room_roomie','Roomie')->pluck('thirty_days_guarantee');
        $video_tours_roomie=Plan::where('room_roomie','Roomie')->pluck('video_tours');
        $receive_messages_roomie=Plan::where('room_roomie','Roomie')->pluck('receive_messages');
        $send_messages_roomie=Plan::where('room_roomie','Roomie')->pluck('send_messages');
        $in_app_voice_and_video_call_roomie=Plan::where('room_roomie','Roomie')->pluck('in_app_voice_and_video_call');
         return view('pages.frontend.plan',compact("plan","icon","css","days","appear_in_popular_searches","book_inspections","mobile_info","thirty_days_guarantee","video_tours","receive_messages","send_messages","in_app_voice_and_video_call","plan_roomie","days_roomie","book_inspections_roomie","mobile_info_roomie","thirty_days_guarantee_roomie","video_tours_roomie","receive_messages_roomie","send_messages_roomie","in_app_voice_and_video_call_roomie","listing_included_roomie","listed_as_a_featured_property_roomie","roomie_active_plan_id","room_active_plan_id"));
         
    }

    public function paymentView($id)
    {
        $planData=Plan::where('id',decrypt($id))->first();
        return view('pages.frontend.payment_page',compact('planData'));
    }

    public function stripePost(Request $request,$id)
    {
        $planData=Plan::where('id',decrypt($id))->first();

        require_once('vendor/stripe/stripe-php/init.php');

        \Stripe\Stripe::setApiKey('sk_test_51LFto8CbzOhIGHWBMGPE4aa3BcszOGuc5yooManaPanDxy6NPgS75WiLOJdeb2ztUOmte1QH1JCYNTkrRfP3fUaB00kM92mDOQ');
       $res= \Stripe\Charge::create ([
                "amount" => ($planData->price)*100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment for Okroomie.com." 
        ]);
        
        if($res!=null)
        {
            if(($res->status=="succeeded") && ($res->paid==true))
            {
                $starts=date('d F Y',strtotime('now'));
                $daysfilter = (int) filter_var($planData->days, FILTER_SANITIZE_NUMBER_INT);
                $starts_strtotime=strtotime($starts);
               
                $ends=date('d F Y',strtotime("+$daysfilter days"));
                $ends_strtotime=strtotime($ends);
                
                if($planData->room_roomie=="Room")
                {
                    $room_roomie=0;
                }
                if($planData->room_roomie=="Roomie")
                {
                    $room_roomie=1;
                }
               
                $arr=['users_id'=>Auth::id(),'plan_id'=>$planData->id,'user_type'=>$room_roomie,'plan'=>$planData->title,'amount'=>$planData->price,'day'=>$planData->days,'starts'=>$starts,'starts_strtotime'=>$starts_strtotime,'ends'=>$ends,'ends_strtotime'=>$ends_strtotime,'receipt_url'=>$res->receipt_url,'payment_stripe_id'=>$res->id,'balance_transaction'=>$res->balance_transaction];
                
                $created=Payment::create($arr);
                if($created)
                {
                    Session::flash('success', 'Payment successful!');
                    return redirect()->route('showplan');
                    
                }
                else
                {
                    Session::flash('error', 'Try after some time later!');
                }
            }
        }
  
        return back();
       
          
    }

    public function index()
    {
        $plan=Plan::all();
        return view('admin.plan.plan',["plan"=>$plan]);
    }
    public function show()
    {
        return view('admin.plan.add_plan');
    }

    public function destroy(Request $request,$id)
    {
         $res=Plan::findOrfail(decrypt($id));
        $deleted=$res->delete();
        if($deleted)
        {
                return redirect()->back();  
        }
        else
        {
                return redirect()->back();
        } 
    }


    public function create(Request $request)
    {
       
        $validator=Validator::make($request->all(),[
            'room_roomie'=>'required',
            'title'=>'required',
            'description'=>'required',
            
            
            'book_inspections'=>'required',
            'thirty_days_guarantee'=>'required',
            
            'receive_messages'=>'required',
            'send_messages'=>'required',
            'in_app_voice_and_video_call'=>'required',
            'mobile_info'=>'required',
            
        ]);
        if($validator->fails())
        {
            return response()->json(["validation_errors"=>$validator->messages()]);
        }
        else
        {
            if($request->room_roomie=="Roomie")
            {
                $result=Plan::create(["room_roomie"=>$request->room_roomie,"title"=>$request->title,"price"=>$request->price,"days"=>$request->days,"description"=>$request->description,"listed_as_a_featured_property"=>$request->listed_as_a_featured_property,"listing_included"=>$request->listing_included,"book_inspections"=>$request->book_inspections,"thirty_days_guarantee"=>$request->thirty_days_guarantee,"video_tours"=>$request->video_tours,"receive_messages"=>$request->receive_messages,"send_messages"=>$request->send_messages,"in_app_voice_and_video_call"=>$request->in_app_voice_and_video_call,"mobile_info"=>$request->mobile_info]);
            }
            else
            {
                $result=Plan::create(["room_roomie"=>$request->room_roomie,"title"=>$request->title,"price"=>$request->price,"days"=>$request->days,"description"=>$request->description,"appear_in_popular_searches"=>$request->appear_in_popular_searches,"listing_included"=>$request->listing_included,"book_inspections"=>$request->book_inspections,"thirty_days_guarantee"=>$request->thirty_days_guarantee,"video_profile"=>$request->video_profile,"receive_messages"=>$request->receive_messages,"send_messages"=>$request->send_messages,"in_app_voice_and_video_call"=>$request->in_app_voice_and_video_call,"mobile_info"=>$request->mobile_info]);
            }
            
            if($result)
            {
                return response()->json(["status"=>200,"message"=>"Added Successfully!","route"=>"../../admin/plan"]);   
            }
            else
            {
                return response()->json(["status"=>401,"message"=>"Something went wrong!"]);
            }
        }

    }


    public function edit(Request $request,$id)
    {  
         $res=Plan::findOrfail(decrypt($id));
         return view('admin.plan.edit',["plan"=>$res]);
    }

    public function update(Request $request)
    {
        $res=Plan::findOrfail(decrypt($request->id));
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'price'=>'required',
            'days'=>'required',
            'description'=>'required',
            
        ]);
        if($validator->fails())
        {
            return response()->json(["validation_errors"=>$validator->messages()]);
        }
        else
        {
            $result=Plan::where('id',$res->id)
            ->update(["room_roomie"=>$request->room_roomie,"title"=>$request->title,"price"=>$request->price,"days"=>$request->days,"description"=>$request->description,"listed_as_a_featured_property"=>$request->listed_as_a_featured_property,"listing_included"=>$request->listing_included,"book_inspections"=>$request->book_inspections,"thirty_days_guarantee"=>$request->thirty_days_guarantee,"video_tours"=>$request->video_tours,"receive_messages"=>$request->receive_messages,"send_messages"=>$request->send_messages,"in_app_voice_and_video_call"=>$request->in_app_voice_and_video_call,"mobile_info"=>$request->mobile_info]);
            if($request)
            {
                return response()->json(["status"=>200,"message"=>"Updated Successfully!","route"=>"../../admin/plan"]);   
            }
            else
            {
                return response()->json(["status"=>401,"message"=>"Something went wrong!"]);
            }
        }

    }

    function pausePlan()
    {
        $auth_id=Auth::id();
        $paymentData=Payment::where('users_id',$auth_id)->where('user_type',1)->orderBy('id','DESC')->first();
        if($paymentData->ends_strtotime > strtotime('now'))
        {
            if($paymentData->pause_resume_status==1)
            {
                return response()->json(['status'=>400,'message'=>'Already Paused!']);

            }
            else
            {
                $res=Payment::findOrfail($paymentData->id);
                $upd=$res->update(['pause_time'=>strtotime('now'),'pause_resume_status'=>1]);
                if($upd)
                {
                    return response()->json(['status'=>200,'message'=>'Paused']);
                }
                else
                {
                    return response()->json(['status'=>400,'message'=>'Something went wrong!']);
    
                }
            }
           

        }
        else
        {
            return response()->json(['status'=>400,'message'=>'Plan is Expired!']);

        }

    }



    function resumePlan()
    {
        $auth_id=Auth::id();
        $paymentData=Payment::where('users_id',$auth_id)->where('user_type',1)->orderBy('id','DESC')->first();
        if($paymentData->ends_strtotime > strtotime('now'))
        {
            if($paymentData->pause_resume_status==2)
            {
                return response()->json(['status'=>400,'message'=>'Already Resumed!']);
            }
            elseif($paymentData->pause_resume_status==0)
            {
                return response()->json(['status'=>400,'message'=>'']);
            }
            else
            {
                $res=Payment::findOrfail($paymentData->id);
                $upd=$res->update(['resume_time'=>strtotime('now'),'pause_resume_status'=>2]);
                if($upd)
                {
                    return response()->json(['status'=>200,'message'=>'Resumed']);
                }
                else
                {
                    return response()->json(['status'=>400,'message'=>'Something went wrong!']);
    
                }
            }
           

        }
        else
        {
            return response()->json(['status'=>400,'message'=>'Plan is Expired!']);

        }

    }

    public function frontpageDemo()
    {
        
        $css[]="plan__one";
        $css[]="plan__two";
        $css[]="plan__three";
        $css[]="plan__four";
        $icon[]="wrench";
        $icon[]="bolt";
        $icon[]="lock";
        $icon[]="star";

        $plan=Plan::where('room_roomie','Room')->get();

        $room_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',0)->orderBy('id','DESC')->first();
        $room_active_plan_id=array();
        if($room_active_plan_data!=null)
        {
            if($room_active_plan_data->ends_strtotime > strtotime('now'))
            {
                $remaining_days_timestamp_room=$room_active_plan_data->ends_strtotime-strtotime('now');

                $room_active_plan_id['plan_id']=$room_active_plan_data->plan_id;
                $room_active_plan_id['free_paid']='paid';
                $room_active_plan_id['remaining_days']=(int)($remaining_days_timestamp_room/84000);


            }
            else
            {
                $room_active_plan_id['plan_id']=$room_active_plan_data->plan_id;
                $room_active_plan_id['free_paid']='expired';
                $room_active_plan_id['remaining_days']=0;

            }
           

        }
        else
        {
            foreach($plan as $plan_room_free_plan_id_extract)
            {
                if((($plan_room_free_plan_id_extract->title=="Free") || ($plan_room_free_plan_id_extract->free=="free")) && (($plan_room_free_plan_id_extract->price=="") || ($plan_room_free_plan_id_extract->price=='0')))
                {
                    $room_active_plan_id['plan_id']=$plan_room_free_plan_id_extract->id;  
                    $room_active_plan_id['free_paid']='Free';

                }
            }
        }

        $days=Plan::where('room_roomie','Room')->pluck('days');
        $appear_in_popular_searches=Plan::where('room_roomie','Room')->pluck('appear_in_popular_searches');
       
        $book_inspections=Plan::where('room_roomie','Room')->pluck('book_inspections');
        $mobile_info=Plan::where('room_roomie','Room')->pluck('mobile_info');
        $thirty_days_guarantee=Plan::where('room_roomie','Room')->pluck('thirty_days_guarantee');
        $video_tours=Plan::where('room_roomie','Room')->pluck('video_tours');
        $receive_messages=Plan::where('room_roomie','Room')->pluck('receive_messages');
        $send_messages=Plan::where('room_roomie','Room')->pluck('send_messages');
        $in_app_voice_and_video_call=Plan::where('room_roomie','Room')->pluck('in_app_voice_and_video_call');

        /*
        ***************************** ROOMIE*********************************************************************
        *********************************************************************************************************
        */
        $plan_roomie=Plan::where('room_roomie','Roomie')->get();
        $roomie_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',1)->orderBy('id','DESC')->first();
        $roomie_active_plan_id=array();
        if($roomie_active_plan_data!=null)
        {
            if($roomie_active_plan_data->ends_strtotime > strtotime('now'))
            {
                $remaining_days_timestamp=$roomie_active_plan_data->ends_strtotime-strtotime('now');

                $roomie_active_plan_id['plan_id']=$roomie_active_plan_data->plan_id;
                $roomie_active_plan_id['free_paid']='paid';
                $roomie_active_plan_id['remaining_days']=(int)($remaining_days_timestamp/84000);


            }
            else
            {
                $roomie_active_plan_id['plan_id']=$roomie_active_plan_data->plan_id;
                $roomie_active_plan_id['free_paid']='expired';
                $roomie_active_plan_id['remaining_days']=0;

            }
           

        }
        else
        {
            foreach($plan_roomie as $plan_roomie_free_plan_id_extract)
            {
                if((($plan_roomie_free_plan_id_extract->title=="Free") || ($plan_roomie_free_plan_id_extract->free=="free")) && (($plan_roomie_free_plan_id_extract->price=="") || ($plan_roomie_free_plan_id_extract->price=='0')))
                {
                    $roomie_active_plan_id['plan_id']=$plan_roomie_free_plan_id_extract->id;  
                    $roomie_active_plan_id['free_paid']='Free';

                }
            }
        }
        $days_roomie=Plan::where('room_roomie','Roomie')->pluck('days');
        $listed_as_a_featured_property_roomie=Plan::where('room_roomie','Roomie')->pluck('listed_as_a_featured_property');
        $listing_included_roomie=Plan::where('room_roomie','Roomie')->pluck('listing_included');
        $book_inspections_roomie=Plan::where('room_roomie','Roomie')->pluck('book_inspections');
        $mobile_info_roomie=Plan::where('room_roomie','Roomie')->pluck('mobile_info');
        $thirty_days_guarantee_roomie=Plan::where('room_roomie','Roomie')->pluck('thirty_days_guarantee');
        $video_tours_roomie=Plan::where('room_roomie','Roomie')->pluck('video_tours');
        $receive_messages_roomie=Plan::where('room_roomie','Roomie')->pluck('receive_messages');
        $send_messages_roomie=Plan::where('room_roomie','Roomie')->pluck('send_messages');
        $in_app_voice_and_video_call_roomie=Plan::where('room_roomie','Roomie')->pluck('in_app_voice_and_video_call');
         return view('pages.frontend.planOld',compact("plan","icon","css","days","appear_in_popular_searches","book_inspections","mobile_info","thirty_days_guarantee","video_tours","receive_messages","send_messages","in_app_voice_and_video_call","plan_roomie","days_roomie","book_inspections_roomie","mobile_info_roomie","thirty_days_guarantee_roomie","video_tours_roomie","receive_messages_roomie","send_messages_roomie","in_app_voice_and_video_call_roomie","listing_included_roomie","listed_as_a_featured_property_roomie","roomie_active_plan_id","room_active_plan_id"));
         
    }

    public static function getCurrentPlan()
    {
        //this method is statically called in DashboardController's roomieDetails method

        $plan=Plan::where('room_roomie','Room')->get();
        $room_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',0)->orderBy('id','DESC')->first();
        $room_active_plan_id=array();
        if($room_active_plan_data!=null)
        {
            if($room_active_plan_data->ends_strtotime > strtotime('now'))
            {
                $remaining_days_timestamp_room=$room_active_plan_data->ends_strtotime-strtotime('now');

                $room_active_plan_id['plan_id']=$room_active_plan_data->plan_id;
                $room_active_plan_id['free_paid']='paid';
                $room_active_plan_id['remaining_days']=(int)($remaining_days_timestamp_room/84000);


            }
            else
            {
                $room_active_plan_id['plan_id']=$room_active_plan_data->plan_id;
                $room_active_plan_id['free_paid']='expired';
                $room_active_plan_id['remaining_days']=0;

            }
           

        }
        else
        {
            foreach($plan as $plan_room_free_plan_id_extract)
            {
                if((($plan_room_free_plan_id_extract->title=="Free") || ($plan_room_free_plan_id_extract->free=="free")) && (($plan_room_free_plan_id_extract->price=="") || ($plan_room_free_plan_id_extract->price=='0')))
                {
                    $room_active_plan_id['plan_id']=$plan_room_free_plan_id_extract->id;  
                    $room_active_plan_id['free_paid']='Free';

                }
            }
        }

        

        /*
        ***************************** ROOMIE*********************************************************************
        *********************************************************************************************************
        */
        $roomie_listing_count=0;
        $plan_roomie=Plan::where('room_roomie','Roomie')->get();
        $Find_me_a_roomie=Find_me_a_roomie::where('user_id',Auth::id())->get();
        if(($Find_me_a_roomie!=null) && ($Find_me_a_roomie!=''))
        {
            $roomie_listing_count=count($Find_me_a_roomie);
        }
        else
        {
           $roomie_listing_count=0; 
        }
        $roomie_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',1)->orderBy('id','DESC')->first();
        $roomie_active_plan_id=array();
        if($roomie_active_plan_data!=null)
        {
            if($roomie_active_plan_data->ends_strtotime > strtotime('now'))
            {
                $remaining_days_timestamp=$roomie_active_plan_data->ends_strtotime-strtotime('now');

                $roomie_active_plan_id['plan_id']=$roomie_active_plan_data->plan_id;
                $roomie_active_plan_id['free_paid']='paid';
                $roomie_active_plan_id['remaining_days']=(int)($remaining_days_timestamp/84000);
             
                foreach($plan_roomie as $vvv)
                {
                    if($vvv->id==$roomie_active_plan_data->plan_id)
                    {
                        $roomie_active_plan_id['mobile_info']=$vvv->mobile_info;
                        $roomie_active_plan_id['book_inspections']=$vvv->book_inspections;
                        $roomie_active_plan_id['listing_included']=$vvv->listing_included;
                        $roomie_active_plan_id['roomie_listing_count']=$roomie_listing_count;


                    }
                }


            }
            else
            {
                $roomie_active_plan_id['plan_id']=$roomie_active_plan_data->plan_id;
                $roomie_active_plan_id['free_paid']='expired';
                $roomie_active_plan_id['remaining_days']=0;
                $roomie_active_plan_id['listing_included']=0;
                $roomie_active_plan_id['roomie_listing_count']=0;



            }
           

        }
        else
        {
            foreach($plan_roomie as $plan_roomie_free_plan_id_extract)
            {
                if((($plan_roomie_free_plan_id_extract->title=="Free") || ($plan_roomie_free_plan_id_extract->free=="free")) && (($plan_roomie_free_plan_id_extract->price=="") || ($plan_roomie_free_plan_id_extract->price=='0')))
                {
                    $roomie_active_plan_id['plan_id']=$plan_roomie_free_plan_id_extract->id;  
                    $roomie_active_plan_id['free_paid']='Free';
                    $roomie_active_plan_id['listing_included']=0;
                    $roomie_active_plan_id['roomie_listing_count']=0;
                    $roomie_active_plan_id['remaining_days']=0;

                }
            }
        }

       

        return response()->json(['plan'=>$plan,'roomie_active_plan_id'=>$roomie_active_plan_id,'room_active_plan_id'=>$room_active_plan_id,'plan_roomie'=>$plan_roomie])->getContent();

    }

    public static function getCurrentPlan2()
    {
        //this method is statically called in DashboardController's roomieDetails method

        $plan=Plan::where('room_roomie','Room')->get();
        $room_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',0)->orderBy('id','DESC')->first();
        $room_active_plan_id=array();
        if($room_active_plan_data!=null)
        {
            if($room_active_plan_data->ends_strtotime > strtotime('now'))
            {
                $remaining_days_timestamp_room=$room_active_plan_data->ends_strtotime-strtotime('now');

                $room_active_plan_id['plan_id']=$room_active_plan_data->plan_id;
                $room_active_plan_id['free_paid']='paid';
                $room_active_plan_id['remaining_days']=(int)($remaining_days_timestamp_room/84000);


            }
            else
            {
                $room_active_plan_id['plan_id']=$room_active_plan_data->plan_id;
                $room_active_plan_id['free_paid']='expired';
                $room_active_plan_id['remaining_days']=0;

            }
           

        }
        else
        {
            foreach($plan as $plan_room_free_plan_id_extract)
            {
                if((($plan_room_free_plan_id_extract->title=="Free") || ($plan_room_free_plan_id_extract->free=="free")) && (($plan_room_free_plan_id_extract->price=="") || ($plan_room_free_plan_id_extract->price=='0')))
                {
                    $room_active_plan_id['plan_id']=$plan_room_free_plan_id_extract->id;  
                    $room_active_plan_id['free_paid']='Free';

                }
            }
        }

        

        /*
        ***************************** ROOMIE*********************************************************************
        *********************************************************************************************************
        */
        $roomie_listing_count=0;
        $plan_roomie=Plan::where('room_roomie','Roomie')->get();
        $Find_me_a_roomie=Find_me_a_roomie::where('user_id',Auth::id())->get();
        if(($Find_me_a_roomie!=null) && ($Find_me_a_roomie!=''))
        {
            $roomie_listing_count=count($Find_me_a_roomie);
        }
        else
        {
           $roomie_listing_count=0; 
        }
        $roomie_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',1)->orderBy('id','DESC')->first();
        $roomie_active_plan_id=array();
        if($roomie_active_plan_data!=null)
        {
            if($roomie_active_plan_data->ends_strtotime > strtotime('now'))
            {
                $remaining_days_timestamp=$roomie_active_plan_data->ends_strtotime-strtotime('now');

                $roomie_active_plan_id['plan_id']=$roomie_active_plan_data->plan_id;
                $roomie_active_plan_id['free_paid']='paid';
                $roomie_active_plan_id['remaining_days']=(int)($remaining_days_timestamp/84000);
             
                foreach($plan_roomie as $vvv)
                {
                    if($vvv->id==$roomie_active_plan_data->plan_id)
                    {
                        $roomie_active_plan_id['mobile_info']=$vvv->mobile_info;
                        $roomie_active_plan_id['book_inspections']=$vvv->book_inspections;
                        $roomie_active_plan_id['listing_included']=$vvv->listing_included;
                        $roomie_active_plan_id['roomie_listing_count']=$roomie_listing_count;


                    }
                }


            }
            else
            {
                $roomie_active_plan_id['plan_id']=$roomie_active_plan_data->plan_id;
                $roomie_active_plan_id['free_paid']='expired';
                $roomie_active_plan_id['remaining_days']=0;
                $roomie_active_plan_id['listing_included']=0;
                $roomie_active_plan_id['roomie_listing_count']=0;



            }
           

        }
        else
        {
            foreach($plan_roomie as $plan_roomie_free_plan_id_extract)
            {
                if((($plan_roomie_free_plan_id_extract->title=="Free") || ($plan_roomie_free_plan_id_extract->free=="free")) && (($plan_roomie_free_plan_id_extract->price=="") || ($plan_roomie_free_plan_id_extract->price=='0')))
                {
                    $roomie_active_plan_id['plan_id']=$plan_roomie_free_plan_id_extract->id;  
                    $roomie_active_plan_id['free_paid']='Free';

                }
            }
        }

       

        return response()->json(['plan'=>$plan,'roomie_active_plan_id'=>$roomie_active_plan_id,'room_active_plan_id'=>$room_active_plan_id,'plan_roomie'=>$plan_roomie]);

    }
   


   


}