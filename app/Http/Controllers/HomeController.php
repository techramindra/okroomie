<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{User,Find_me_a_roomie,Find_me_a_room,RoomRoomieLike};
use Auth;
use App\Http\Controllers\Admin\PlanController;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function PaginateCount(Request $request)
    {
        if(Auth::check())
        {
            $roomie=Find_me_a_roomie::with('room_image')->where('roomie_listing_status','!=','1')->where('completed_step','yes')->orderBy('id', 'desc')->get();
            $roomie=$roomie->toArray();
            $room=Find_me_a_room::with('user_images')->where('room_listing_status','!=','1')->where('completed_step','yes')->orderBy('id', 'desc')->get();
            $room=$room->toArray();
            $data=array_merge($roomie,$room);
        }
        else
        {
            $roomie=Find_me_a_roomie::with('room_image')->where('roomie_listing_status','!=','1')->where('completed_step','yes')->orderBy('id', 'desc')->get();
            $roomie=$roomie->toArray();
            $room=Find_me_a_room::with('user_images')->where('room_listing_status','!=','1')->where('completed_step','yes')->orderBy('id', 'desc')->get();
            $room=$room->toArray();
            $data=array_merge($roomie,$room);
        }
        ///$data=sizeof($data??[]);
        return view('Home.PaginateCount',compact('data'));
    }
    public function PagiNate(Request $request)
    {
            $like='';
            $plandData='';
            $plandData1='';
            $like2='';
            $likechcek='';
            $likechcek1='';
            $auth_id=Auth::id();
            //for authenticate user
            $room1=array();
            $roomie1=array();
            $page=$request->page;
            $skip=0;
            if($page>1)
            {
                $skip=($page-1)*6;
            }
            $take=6;
            $data=array();

        $plandData1=PlanController::getCurrentPlan();
        $plandData=json_decode($plandData1);

        if(Auth::check())
        {
            $roomie=Find_me_a_roomie::with('room_image')->where('roomie_listing_status','!=','1')->where('completed_step','yes')->orderBy('id', 'desc')->skip($skip)->take($take)->get();
            $roomie=$roomie->toArray();
            if(count($roomie)>0)
            {
                foreach($roomie as $key=>$val)
                {
                    $likechcek=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_roomie_id',$val['id'])->first();
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
           
            $room=Find_me_a_room::with('user_images')->where('room_listing_status','!=','1')->where('completed_step','yes')->orderBy('id', 'desc')->skip($skip)->take($take)->get();
            $room=$room->toArray();
            if(count($room)>0)
            {
                foreach($room as $key1=>$val1)
                {

                    $likechcek1=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_room_id',$val1['id'])->first();
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


                    $user=User::where('id',$val1['user_id'])->first();
                    if(count($val1['user_images'])<1)
                    {
                        $val1['user_images']=null;
                    }
                    $val1['okroomie_id']=$user->okroomie_id;

                    $val1['outputType']="ROOM";
                    array_push($data,$val1);
                }
            }
          
       
             return view('Home.Listing',["data"=>$data,'plan'=>$plandData]);
        }
        else
        {
            $roomie=Find_me_a_roomie::with('room_image')->where('roomie_listing_status','!=','1')->where('completed_step','yes')->orderBy('id', 'desc')->skip($skip)->take($take)->get();
            $roomie=$roomie->toArray();
            if(count($roomie)>0)
            {
                foreach($roomie as $key=>$val)
                {
                    $likechcek=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_roomie_id',$val['id'])->first();
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
           
            $room=Find_me_a_room::with('user_images')->where('room_listing_status','!=','1')->where('completed_step','yes')->orderBy('id', 'desc')->skip($skip)->take($take)->get();
            $room=$room->toArray();
            if(count($room)>0)
            {
                foreach($room as $key1=>$val1)
                {

                    $likechcek1=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_room_id',$val1['id'])->first();
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


                    $user=User::where('id',$val1['user_id'])->first();
                    if(count($val1['user_images'])<1)
                    {
                        $val1['user_images']=null;
                    }
                    $val1['okroomie_id']=$user->okroomie_id;

                    $val1['outputType']="ROOM";
                    array_push($data,$val1);
                }
            }
          
           
             return view('Home.Listing',["data"=>$data]);
        }
       
    }

    public function searchOnHomePage(Request $request)
    {
        $like='';
            $like2='';
            $likechcek='';
            $likechcek1='';
            $auth_id=Auth::id();
            //for authenticate user
            $room1=array();
            $roomie1=array();
            $data=array();

       if($request->search_type=="Roomie")
       {
           
            if(Auth::check())
            {
                $roomie=Find_me_a_roomie::with('room_image')->where('roomie_listing_status','!=','1')->where('completed_step','yes')->whereRaw("property_address like '%$request->search_query%'")->orderBy('id', 'desc')->get();
                $roomie=$roomie->toArray();
                if(count($roomie)>0)
                {
                    foreach($roomie as $key=>$val)
                    {
                        $likechcek=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_roomie_id',$val['id'])->first();
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
                return view('welcome',["data"=>$data]); 
            }
            else//unauthorize users
            {
                      
                $roomie=Find_me_a_roomie::with('room_image')->where('roomie_listing_status','!=','1')->where('completed_step','yes')->whereRaw("property_address like '%$request->search_query%'")->orderBy('id', 'desc')->get();
                $roomie=$roomie->toArray();
                if(count($roomie)>0)
                {
                    foreach($roomie as $key=>$val)
                    {
                       
                        $like=0;
                        $val['like_status']=$like;
                        $val['outputType']="ROOMIE";
                        array_push($data,$val);
                    }
                }
                return view('welcome',["data"=>$data]);
                
            }//unauthorize users end roomie
            
       }
       //roomie end
       elseif($request->search_type=="Room")
       {
            if(Auth::check())
            {
               
                $room=Find_me_a_room::with('user_images')->where('room_listing_status','!=','1')->where('completed_step','yes')->whereRaw("suburb like '%$request->search_query%'")->orderBy('id', 'desc')->get();
                $room=$room->toArray();
                if(count($room)>0)
                {
                    foreach($room as $key1=>$val1)
                    {
    
                        $likechcek1=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_room_id',$val1['id'])->first();
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
    
    
                        $user=User::where('id',$val1['user_id'])->first();
                        if(count($val1['user_images'])<1)
                        {
                            $val1['user_images']=null;
                        }
                        $val1['okroomie_id']=$user->okroomie_id;
    
                        $val1['outputType']="ROOM";
                        array_push($data,$val1);
                    }
                }
                return view('welcome',["data"=>$data]);
            }
            else//unauthorize users
            {
                
                $room=Find_me_a_room::with('user_images')->where('room_listing_status','!=','1')->where('completed_step','yes')->whereRaw("suburb like '%$request->search_query%'")->orderBy('id', 'desc')->get();
                $room=$room->toArray();
                if(count($room)>0)
                {
                    foreach($room as $key1=>$val1)
                    {
    
                       
                        $like2=0;
                        $val1['like_status']=$like2;
    
    
                        $user=User::where('id',$val1['user_id'])->first();
                        if(count($val1['user_images'])<1)
                        {
                            $val1['user_images']=null;
                        }
                        $val1['okroomie_id']=$user->okroomie_id;
    
                        $val1['outputType']="ROOM";
                        array_push($data,$val1);
                    }
                }
                return view('welcome',["data"=>$data]);

            }

       }//room end
       
       else //group may in both room and roomie
       {

        /**** roomie start */
        if(Auth::check())
            {
                $roomie=Find_me_a_roomie::with('room_image')->where('roomie_listing_status','!=','1')->where('completed_step','yes')->whereRaw("property_address like '%$request->search_query%'")->orderBy('id', 'desc')->get();
                $roomie=$roomie->toArray();
                if(count($roomie)>0)
                {
                    foreach($roomie as $key=>$val)
                    {
                        $likechcek=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_roomie_id',$val['id'])->first();
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
            else//unauthorize users
            {
                      
                $roomie=Find_me_a_roomie::with('room_image')->where('roomie_listing_status','!=','1')->where('completed_step','yes')->whereRaw("property_address like '%$request->search_query%'")->orderBy('id', 'desc')->get();
                $roomie=$roomie->toArray();
                if(count($roomie)>0)
                {
                    foreach($roomie as $key=>$val)
                    {
                       
                        $like=0;
                        $val['like_status']=$like;
                        $val['outputType']="ROOMIE";
                        array_push($data,$val);
                    }
                }
               
                
            }//unauthorize users end roomie
            
            

            /** roomie end **/

            /** room start */

            if(Auth::check())
            {
               
                $room=Find_me_a_room::with('user_images')->where('room_listing_status','!=','1')->where('completed_step','yes')->whereRaw("suburb like '%$request->search_query%'")->orderBy('id', 'desc')->get();
                $room=$room->toArray();
                if(count($room)>0)
                {
                    foreach($room as $key1=>$val1)
                    {
    
                        $likechcek1=RoomRoomieLike::where('user_id',$auth_id)->where('find_me_a_room_id',$val1['id'])->first();
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
    
    
                        $user=User::where('id',$val1['user_id'])->first();
                        if(count($val1['user_images'])<1)
                        {
                            $val1['user_images']=null;
                        }
                        $val1['okroomie_id']=$user->okroomie_id;
    
                        $val1['outputType']="ROOM";
                        array_push($data,$val1);
                    }
                }
                
            }
            else//unauthorize users
            {
                
                $room=Find_me_a_room::with('user_images')->where('room_listing_status','!=','1')->where('completed_step','yes')->whereRaw("suburb like '%$request->search_query%'")->orderBy('id', 'desc')->get();
                $room=$room->toArray();
                if(count($room)>0)
                {
                    foreach($room as $key1=>$val1)
                    {
    
                       
                        $like2=0;
                        $val1['like_status']=$like2;
    
    
                        $user=User::where('id',$val1['user_id'])->first();
                        if(count($val1['user_images'])<1)
                        {
                            $val1['user_images']=null;
                        }
                        $val1['okroomie_id']=$user->okroomie_id;
    
                        $val1['outputType']="ROOM";
                        array_push($data,$val1);
                    }
                }
              

            }

            /**** room end ****/
            return view('welcome',["data"=>$data]);
    
       }//group end
    }

    public function taskScheduling()
    {
        $a='<script>alert("task scheduling every minute");</script>';
        return $a;
    }
}

