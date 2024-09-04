<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{Find_me_a_roomie,Room_image,User,Find_me_a_room,User_image,RoomRoomieLike,Passport,DrivingLiscence,FeedbackRoomRoomie,Plan,Payment};
use Auth,Session,Validator;
use App\Http\Controllers\Admin\PlanController;

class DashboardController extends Controller
{
    public function listingFeedbackForAdmin()
    {
        $data=FeedbackRoomRoomie::join('users','users.id','=','feedback_room_roomies.user_id')->select('feedback_room_roomies.*','users.your_first_name','users.email')->orderBy('feedback_room_roomies.id','DESC')->get();
        return view('admin.listingFeedback',["payments"=>$data]);
    }

    public function index()
    {
        $data=Find_me_a_roomie::with('room_image')->where('user_id',Auth::id())->get();
        $room=Find_me_a_room::where('user_id',Auth::id())->get();

        
        return view('pages.frontend.userdashboard',['data'=>$data,'room'=>$room]);
    }

    public function data()
    {
        $data=Find_me_a_roomie::with('room_image')->where('user_id',Auth::id())->get();
        $room=Find_me_a_room::where('user_id',Auth::id())->get();
        $arr['data']=$data;
        $arr['room']=$room;

        //for dashboard additional data like pause ,resume ,remaining days,plan name from planController frontpage method
        $plan_roomie=Plan::where('room_roomie','Roomie')->get();
        $roomie_active_plan_data=Payment::where('users_id',Auth::id())->where('user_type',1)->orderBy('id','DESC')->first();
        
        if($roomie_active_plan_data!=null)
        {
            if(($roomie_active_plan_data->ends_strtotime > strtotime('now')))
            {
                if($roomie_active_plan_data->ends_strtotime!='')
                {
                    $remaining_days_timestamp=$roomie_active_plan_data->ends_strtotime-strtotime('now');
                    $arr['plan_id']=$roomie_active_plan_data->plan_id;
                    $arr['pause_resume_status']=$roomie_active_plan_data->pause_resume_status;
                    
                    $arr['remaining_days']=(int)($remaining_days_timestamp/84000);
    
                    foreach($plan_roomie as $plan_roomieVal2)
                    {
                        if($plan_roomieVal2->id==$roomie_active_plan_data->plan_id)
                        {
                            $arr['free_plan_name']=$plan_roomieVal2->title;
                        }
                    }
                }
                else
                {
                      
                       
                        $arr['pause_resume_status']=0;
                        $arr['remaining_days']='Free';

                        foreach($plan_roomie as $plan_roomieVal2)
                        {
                            if($plan_roomieVal2->id==$roomie_active_plan_data->plan_id)
                            {
                                $arr['free_plan_name']=$plan_roomieVal2->title;
                            }
                        }
                }
                


            }
            else
            {
                foreach($plan_roomie as $plan_roomieVal2)
                {
                    if($plan_roomieVal2->id==$roomie_active_plan_data->plan_id)
                    {
                        $arr['free_plan_name']=$plan_roomieVal2->title;
                    }
                }

                $arr['plan_id']=$roomie_active_plan_data->plan_id;
                $arr['free_plan_name']=$arr['free_plan_name'].' expired!';
                $arr['pause_resume_status']=0;

                $arr['remaining_days']=0;

            }
           

        }
        else
        {
            foreach($plan_roomie as $plan_roomie_free_plan_id_extract)
            {
                if((($plan_roomie_free_plan_id_extract->title=="Free") || ($plan_roomie_free_plan_id_extract->free=="free")) && (($plan_roomie_free_plan_id_extract->price=="") || ($plan_roomie_free_plan_id_extract->price=='0')))
                {
                    $arr['plan_id']=$plan_roomie_free_plan_id_extract->id;  
                     $arr['pause_resume_status']=0;
                     $arr['free_paid']='Free';
                     $arr['remaining_days']=0;

                }
            }
        }


         //end for dashboard additional data like pause ,resume ,remaining days,plan name from planController frontpage method


        return $arr;
        
    }


    public function edit(Request $request,$id)
    {
        $data=Find_me_a_roomie::with('room_image')->where('user_id',Auth::id())->where('id',decrypt($id))->first();
        $room_image=$data->room_image->take(5);
        $first_image=Room_image::where('find_me_a_roomies_users_id',Auth::id())->where('find_me_a_roomies_id',decrypt($id))->first();
       
        $potential_matches=Find_me_a_room::join('users','users.id','=','find_me_a_rooms.user_id')->with('user_images')
        ->where('room_listing_status',0)
        ->orWhere('find_me_a_rooms.suburb',$data->property_address)
        ->orWhere('find_me_a_rooms.this_place_is_for',$data->preferences_user)
        ->orWhere('find_me_a_rooms.weekely_budget',$data->weekely_rent)
        ->orWhere('find_me_a_rooms.kitchen',$data->kitchen)        
        ->orWhere('find_me_a_rooms.wifi',$data->wifi)
        ->orWhere('find_me_a_rooms.tv',$data->tv)
        ->select('find_me_a_rooms.*','users.okroomie_id')
        ->get();

        // echo "<pre>";
        // print_r($potential_matches);
        // echo "</pre>";
        // die;
        return view('pages/frontend/find-me-a-roomie/edit_listing',compact('data','room_image','first_image','potential_matches'));
    }

    public function editListingRoom(Request $request,$id)
    {
        $data=Find_me_a_room::with('user_images')->where('user_id',Auth::id())->where('id',decrypt($id))->first();
        $first_image=User_image::where('find_me_a_rooms_users_id',Auth::id())->where('find_me_a_rooms_id',decrypt($id))->first();

        $potential_matches=Find_me_a_roomie::join('users','users.id','=','find_me_a_roomies.user_id')->with('room_image')
        ->where('roomie_listing_status','!=','0')
        ->orWhere('find_me_a_roomies.property_address',$data->suburb)
        ->orWhere('find_me_a_roomies.preferences_user',$data->this_place_is_for)
        ->orWhere('find_me_a_roomies.weekely_rent',$data->weekely_budget)
        ->orWhere('find_me_a_roomies.kitchen',$data->kitchen)
        ->orWhere('find_me_a_roomies.wifi',$data->wifi)
        ->orWhere('find_me_a_roomies.tv',$data->tv)
        ->select('find_me_a_roomies.*','users.okroomie_id')
        ->get();



        if(!empty($data->user_images))
        {
            $userImages=$data->user_images->take(5);
            return view('pages/frontend/find-me-a-room/editdashboard',compact('data','userImages','first_image','potential_matches'));
        }
        else
        {
            $userImages=null; 
            return view('pages/frontend/find-me-a-room/editdashboard',compact('data','userImages','first_image','potential_matches'));
        }
       
      
       
        
    }

    public function convertID(Request $request)
    {
        if(!empty($request->id))
        {
            $encripted=encrypt($request->id);
            return $encripted;
        }
        else
        {
            return false;
        }

    }


    public function roomDetails(Request $request,$id)
    {
        
        $user=user::where('okroomie_id',$id)->first();
         $data=Find_me_a_room::where('user_id',$user->id)->first();
       
         $user_images=User_image::where('find_me_a_rooms_users_id',$user->id)->where('find_me_a_rooms_id',$data->id)->limit(5)->get();

        return view('pages/frontend/find-me-a-room/dashboard',["data"=>$data,"user"=>$user,"user_images"=>$user_images]);
    }
    public function roomieDetails(Request $request,$slug)
    {
       
        $slug_array=explode('-',$slug);
        $arr_length=count($slug_array);
        //table find-me-a-roomie's id
        $id=$slug_array[$arr_length-2];
        $active_plan_data=PlanController::getCurrentPlan();
        $ttt=json_decode($active_plan_data);
        $data=Find_me_a_roomie::where('id',$id)->first();
        $user=User::where('id',$data->user_id)->first();
        $room_image=Room_image::where('find_me_a_roomies_users_id',$data->user_id)->where('find_me_a_roomies_id',$id)->limit(5)->get();
           return view('pages/frontend/find-me-a-roomie/dashboard',["data"=>$data,"user"=>$user,"room_image"=>$room_image,'plan'=>$ttt]);

       
    }

    public function favourite()
    {
        if(Auth::check())
        {
            $like='';
            $like2='';
            $likechcek='';
            $likechcek1='';
            $auth_id=Auth::id();
            //for authenticate user
            $room1=array();
            $room=array();

            $roomie1=array();
           

            $data=array();
            $data4=array();


            $roomieIDs=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_roomie_id','!=',null)->where('status',1)->get();
            
           if($roomieIDs->isNotEmpty())
           {

                foreach($roomieIDs as $roomieIDsVal)
                {
                    $roomie[]=Find_me_a_roomie::with('room_image')->where('id',$roomieIDsVal->find_me_a_roomie_id)->where('roomie_listing_status',1)->get()->toArray(); 
                }
           
               
                
           
                    if(count($roomie)>0)
                    {
                        foreach($roomie as $key=>$val)
                        {
                            //prevention of deactivate listing 

                            if(count($val)<1)
                            {
                                continue;
                            }
                            // end prevention of deactivate listing 

                            
                            $likechcek=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_roomie_id',$val[0]['id'])->first();
                            if($likechcek!=null)
                            {
                            if($likechcek->status==1)
                            {
                                $like=1;
                            }
                            else
                            {
                                $like=0;
                            }
                            }
                            else
                            {
                                $like=0;
                            }
                            $val['like_status']=$like;
                            $val['outputType']="ROOMIE";
                            array_push($data,$val);
                        }
                        
                    }

           }
          
            
            
            $roomIDs=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_room_id','!=',null)->where('status',1)->get();
            if($roomIDs->isNotEmpty())
            {

                foreach($roomIDs as $roomIDsVal)
                {
                    $room[]=Find_me_a_room::with('user_images')->where('id',$roomIDsVal->find_me_a_room_id)->where('room_listing_status',1)->get()->toArray();
                
                }
            

  
                    if(count($room)>0)
                    {
                        foreach($room as $key1=>$val1)
                        {
                            //prevention of deactivate listing 
                            if(count($val1)<1)
                            {
                                continue;
                            }
                            // end prevention of deactivate listing 

                                
                            $likechcek1=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_room_id',$val1[0]['id'])->first();
                            
                            
                            if($likechcek1!=null)
                            {
                                if($likechcek1->status==1)
                                {
                                    $like2=1;
                                }
                                else
                                {
                                    $like2=0;
                                }
                            }
                            else
                            {
                                $like2=0;
                            }
                            $val1['like_status']=$like2;
                           


                            $user=User::where('id',$val1[0]['user_id'])->first();
                            if(count($val1[0]['user_images'])<1)
                            {
                                $val1[0]['user_images']=null;
                            }
                            $val1['okroomie_id']=$user->okroomie_id;

                            $val1['outputType']="ROOM";
                            array_push($data,$val1);
                        }
                                           
                    }

            }
           
           dd($data);
          
             return view('pages.frontend.favourite',["data"=>$data]);
        }
        else
        {
            return view('pages.frontend.favourite');
        }

       
    }
    

    public function deactivateAccount(Request $request)
    {
        $auth_id=Auth::id();
        
        $user=User::where('id',$auth_id)->first();
        if($user->deactivate_account!=0)
        {
            Auth::logout();
            return response()->json(['status'=>400,'message'=>'Already Deactivate']);
            
        }
        else
        {
            $res=User::where('id',$auth_id)->update(['deactivate_account'=>$auth_id]);
            if($res)
            {
                     Auth::logout();
                     return response()->json(['status'=>200,'message'=>'Account Deactivated Successfully']);
                     
            }
            else
            {
                    return response()->json(['status'=>400,'message'=>'Something went wrong!']);
            }
        }
        
    }

    public function emailAlertSetting()
    {
        return view('pages.frontend.email_alert_setting');
    }

    
    public function myAccountSetting()
    {
        if(Auth::check())
        {
            $myAccountSetting=User::where('id',Auth::id())->first();
            return $myAccountSetting;
        }
        
    }

    public function myAccountSettingUpdate(Request $request)
    {
        $auth_id=Auth::id();
        $validator=Validator::make($request->all(),[
            'your_first_name'=> 'required',
            'email' => 'unique:users,email,'.$auth_id,
        ]);
        if($validator->fails())
        {
           $errors= $validator->messages()->first();
            return response()->json([
                'success' => false,
                'message' => $errors,
            ]);
        }
        else
        {
            if(!empty($request->allowed_verified_members_to_contact)){$allowed_verified_members_to_contact=1;}else{$allowed_verified_members_to_contact=0;}
            User::where('id',Auth::id())->update(['your_first_name'=>$request->your_first_name,"email"=>$request->email,"allowed_verified_members_to_contact"=>$allowed_verified_members_to_contact]);

            return response()->json([
                'success'=>true,
                'message' => 'Successfully Updated...'
            ]);
        }
       
    }

    public function helpCenter()
    {
        return view('pages.frontend.helpCenter.help_center');
    }


    public function helpCenterHowTo()
    {
        return view('pages.frontend.helpCenter.how_to_s');
    }

    public function helpCenterCurrentArticles()
    {
        return view('pages.frontend.helpCenter.current_articles');
    }

    public function helpCenterAgreementsAndLegalInfo()
    {
        return view('pages.frontend.helpCenter.agreements_and_legal_info');
    }

    public function helpCenterForms()
    {
        return view('pages.frontend.helpCenter.forms');
    }

    public function verifyMobileNumber(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'mobile'=>'required',
            'countrycode'=>'required',
        ]);
        if($validator->fails())
        {
            return response()->json(['status'=>400,"message"=>$validator->messages()->first()]);

        }
        if(empty($request->otp))
        {
            $otp=111111;
            // $otp=rand(111111,999999);
            // $id = "AC57b8ba7117dd3869cfb494969b3ac7f0";
            // $token = "970c8a39e4b2af988bce29c410c61d76";
            // $url = "https://api.twilio.com/2010-04-01/Accounts/$id/SMS/Messages.json";
            // $from = "+14794691692";
            // //$to = "+61414086469"; // twilio trial verified number
            // $countrycodeArr=explode('-',$request->countrycode);
            // $countryCode='+'.$countrycodeArr[1];
            // $mobile=$countryCode.$request->mobile;
            // $to=$mobile;
            // $body = "Okroomie OTP : $otp";
            // $data = array (
            //     'From' => $from,
            //     'To' => $to,
            //     'Body' => $body,
            // );
            // $post = http_build_query($data);
            // $x = curl_init($url );
            // curl_setopt($x, CURLOPT_POST, true);
            // curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
            // curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            // curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
            // curl_setopt($x, CURLOPT_POSTFIELDS, $post);
            // $y = curl_exec($x);
            // curl_close($x);
            // $tt=json_decode($y);
            $y=json_encode(['status'=>200]);
            $tt=json_decode($y);
            if($tt->status==200)
            {
                $otp_expires_at=strtotime("+5 minutes");
                if(!empty($request->allowed_verified_members_to_contact)){$flag=1;}else{$flag=0;}
                $user=User::where('id',Auth::id())->update(['mobile'=>$request->mobile,"mobile_verified"=>0,"otp"=>$otp,"allowed_verified_members_to_contact"=>$flag,"countrycode"=>$request->countrycode,"otp_expires_at"=>$otp_expires_at]);
                if($user)
                {
                    return response()->json(['status'=>200,"message"=>"OTP send successfully"]);
                }
                else
                {
                    return response()->json(['status'=>400,"message"=>"Something went wrong"]);
                }
            }
            else
            {
                return response()->json(['status'=>400,"message"=>"Something went wrong"]); 
            }
           
        }
        else
        {
            $user=User::where('id',Auth::id())->first();
            $strtotime=strtotime('now');
            
            if(($user->mobile==$request->mobile) && ($user->otp==$request->otp) && ($user->countrycode==$request->countrycode)&&($user->otp_expires_at>$strtotime))
            {
                User::where('id',Auth::id())->update(['mobile_verified'=>1]);
                return response()->json(['status'=>200,"message"=>"OTP Verified successfully"]);
            } 
            else
            {
                return response()->json(['status'=>400,"message"=>"Invalid otp!"]);
            }
        }
       
        
    }

    public function documentType()
    {
        return view('pages.frontend.verification-document.document_type');
    }

    public function drivingLiscence()
    {
        return view('pages.frontend.verification-document.driving_liscence');
    }

    public function passport()
    {
        return view('pages.frontend.verification-document.passport');
    }

    public function passportImageUploadView()
    {
        return view('pages.frontend.verification-document.passport_upload');
    }

    public function drivingLiscenceUploadView()
    {
        return view('pages.frontend.verification-document.driving_liscence_upload');
    }

    public function passportStore(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'passport_number'=>'required',
            'family_name'=>'required',
            'first_name'=>'required',
            'dob'=>'required',
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator->messages()->first());
        }
        else
        {
            $exist=Passport::where('user_id',Auth::id())->first();
            if($exist!=null)
            {
                $res=Passport::where('user_id',Auth::id())->update($request->except(['_token'])); 
            }
            else
            {
                $request->request->add(['user_id'=>Auth::id()]);
                $res=Passport::create($request->except(['_token']));
            }
          
            if($res)
            {
                //return back()->withSuccess("Uploaded successfully!");
                return redirect()->route('passportImageUploadView');
            }
            else
            {
                return back()->withError("Something went wrong!");
            }
            
        }
    }


    public function drivingLiscenceStore(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'issue_by'=>'required|not_in:0',
            'liscence_number'=>'required',
            'first_name'=>'required',
            'dob'=>'required',
            'last_name'=>'required'
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator->messages()->first());
        }
        else
        {
            $exist=DrivingLiscence::where('user_id',Auth::id())->first();
            if($exist!=null)
            {
                $res=DrivingLiscence::where('user_id',Auth::id())->update($request->except(['_token']));
               
            }
            else
            {
                $request->request->add(['user_id'=>Auth::id()]);
                $res=DrivingLiscence::create($request->except(['_token']));
               
            }

            if($res)
            {
                //return back()->withSuccess("Uploaded successfully!");
                return  redirect()->route('drivingLiscenceUploadView');
            }
            else
            {
                return back()->withError("Something went wrong!");
            }
            
            
        }
    }

    public function drivingLiscenceUpload(Request $request)
    {
        
        $validator=Validator::make($request->all(),[
            'image'=>'required',
           
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator->messages()->first());
        }
        else
        {
            if($request->file('image')!=null)
            {
                $folder=$request->file('image')->store('driving-liscence');
                $path=$folder;
                $res=DrivingLiscence::where('user_id',Auth::id())->update(['image'=>$path]);
                if($res)
                {

                    return back()->withSuccess("Uploaded successfully!");
                }
                else
                {
                    return back()->withError("Something went wrong!");
                }
                
            }
            else
            {
                return back()->withError("Upload an image!");
            }
        }
    }

    public function passportImageUpload(Request $request)
    {
             
        $validator=Validator::make($request->all(),[
            'image'=>'required',
           
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator->messages()->first());
        }
        else
        {
            if($request->file('image')!=null)
            {
                $folder=$request->file('image')->store('passport');
                $path=$folder;
                $res=Passport::where('user_id',Auth::id())->update(['image'=>$path]);
                if($res)
                {

                    return back()->withSuccess("Uploaded successfully!");
                }
                else
                {
                    return back()->withError("Something went wrong!");
                }
                
            }
            else
            {
                return back()->withError("Upload an image!");
            }
        }
    }

    public function ActivateRoomie(Request $request,$id)
    {
        $exist=Find_me_a_roomie::where('id',decrypt($id))->where('user_id',Auth::id())->first();
        if($exist->roomie_listing_status==0)
        {
            return back()->withError('Listing already activated.');

        }
        else
        {
            $res=Find_me_a_roomie::where('id',decrypt($id))->where('user_id',Auth::id())->update(['roomie_listing_status'=>0]);
            if($res)
            {
                return back()->withSuccess('Listing Activated Successfully.');
            }
            else
            {
                return back()->withError('Something went wrong.');
            }
        }

       
    }

    public function DeactivateRoomie(Request $request,$id)
    {
        $exist=Find_me_a_roomie::where('id',decrypt($id))->where('user_id',Auth::id())->first();
        if($exist->roomie_listing_status==1)
        {
            return back()->withError('Listing already deactivated.');

        }
        else
        {
            $res=Find_me_a_roomie::where('id',decrypt($id))->where('user_id',Auth::id())->update(['roomie_listing_status'=>1]);
            if($res)
            {
                return back()->withSuccess('Listing Deactivated Successfully.');
            }
            else
            {
                return back()->withError('Something went wrong.');
            }
        }
        
       
    }

    public function DeleteListingRoomie(Request $request,$id)
    {
        $res=Find_me_a_roomie::where('id',decrypt($id))->where('user_id',Auth::id())->delete();
        if($res)
        {
            return redirect('/')->withSuccess('Listing Deleted Successfully.');
        }
        else
        {
            return back()->withError('Something went wrong.');
        }
    }

    //room active deactive and delete listing

    public function ActivateRoom(Request $request,$id)
    {
        $exist=Find_me_a_room::where('id',decrypt($id))->where('user_id',Auth::id())->first();
        if($exist->room_listing_status==1)
        {
            return back()->withError('Listing already activated.');

        }
        else
        {
            $res=Find_me_a_room::where('id',decrypt($id))->where('user_id',Auth::id())->update(['room_listing_status'=>1]);
            if($res)
            {
                return back()->withSuccess('Listing Activated Successfully.');
            }
            else
            {
                return back()->withError('Something went wrong.');
            }
        }
        
    }

    public function DeactivateRoom(Request $request,$id)
    {

        $exist=Find_me_a_room::where('id',decrypt($id))->where('user_id',Auth::id())->first();
        if($exist->room_listing_status==0)
        {
            return back()->withError('Listing already deactivated.');

        }
        else
        {
            $res=Find_me_a_room::where('id',decrypt($id))->where('user_id',Auth::id())->update(['room_listing_status'=>0]);
            if($res)
            {
                return back()->withSuccess('Listing Deactivated Successfully.');
            }
            else
            {
                return back()->withError('Something went wrong.');
            }
        }

        
    }

    public function DeleteListingRoom(Request $request,$id)
    {
        $res=Find_me_a_room::where('id',decrypt($id))->where('user_id',Auth::id())->delete();
        if($res)
        {
            return  redirect('/')->withSuccess('Listing Deleted Successfully.');
        }
        else
        {
            return back()->withError('Something went wrong.');
        }
    }



    public function feedbackRoomRoomie(Request $request,$id)
    {
        $request->request->add(['user_id'=>Auth::id()]);
        $request->request->add(['room_roomie_id'=>$id]);

        $res=FeedbackRoomRoomie::create($request->except(['_token'])); 
        if($res)
        {
            return response()->json(['status'=>200,'message'=>"Recorded successfully"]);
        }
        else
        {
            return response()->json(['status'=>400,'message'=>"Something went wrong!"]);

        }
    }


   


}