<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{Find_me_a_roomie,Room_image,User,Find_me_a_room,User_image,RoomRoomieLike};
use Auth,Session;


class RoomRoomieLikeController extends Controller
{
    public function like(Request $request)
    {
       
        
        if($request->type=="ROOM")
        {
            $res=RoomRoomieLike::where('user_id',Auth::id())->where('find_me_a_room_id',$request->id)->first();
            if($res!=null)
            {
                if($request->status!=1)
                {
                    $res->update(['find_me_a_room_id'=>$request->id,'user_id'=>Auth::id(),'status'=>0]);
                }
                else
                {
                    $res->update(['find_me_a_room_id'=>$request->id,'user_id'=>Auth::id(),'status'=>1]);
                }
            }
            else
            {
                RoomRoomieLike::create(['find_me_a_room_id'=>$request->id,'user_id'=>Auth::id(),'status'=>1]);
            }
            $response=RoomRoomieLike::where('user_id',Auth::id())->where('find_me_a_room_id',$request->id)->first();
            return $response;
            
        }
        else
        {

            $res=RoomRoomieLike::where('user_id',Auth::id())->where('find_me_a_roomie_id',$request->id)->first();
            if($res!=null)
            {
                if($request->status!=1)
                {
                    $res->update(['find_me_a_roomie_id'=>$request->id,'user_id'=>Auth::id(),'status'=>0]);
                }
                else
                {
                    $res->update(['find_me_a_roomie_id'=>$request->id,'user_id'=>Auth::id(),'status'=>1]);
                }
            }
            else
            {
                RoomRoomieLike::create(['find_me_a_roomie_id'=>$request->id,'user_id'=>Auth::id(),'status'=>1]);
            }

            $response=RoomRoomieLike::where('user_id',Auth::id())->where('find_me_a_roomie_id',$request->id)->first();
            return $response;
           
        }

       
    }
}