<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room_image;
use App\Models\User_image;

use Auth,Validator;

class Room_imageController extends Controller
{
    //

    public function room_images(Request $request)
    {
        
        return view('pages/frontend/find-me-a-roomie/upload');
    }

    public function destroy(Request $request)
    {
        $res=Room_image::findOrfail($request->id);
        unlink("public/images/".$res->image);
        $res->delete();
    }

    public function room_images_upload(Request $request)
    {
        $id=Auth::id();
        if($request->hasFile("image"))
        {
            Room_image::where('user_id',$id)->delete();
                foreach ($request->file('image') as $imagefile)
                {
                    $ext=$imagefile->extension();
                    $name="img".md5(time()).rand(11111,99999).'.'.$ext;
                    $imagefile->move(storage_path("app/"),$name);
                     Room_image::create(["user_id"=>$id,"image"=>$name]);
                }  
        }
    }

    public function uploadImage(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'image' => 'required' // max 10000kb
        ]);
        
        if($validator->fails())
        {
            return response()->json(["error"=>$validator->messages(),"status"=>400]);
        }

        $id=Auth::id();
        $oldimage=Room_image::where('find_me_a_roomies_id',decrypt($request->id))->where('find_me_a_roomies_users_id',$id)->get();
        if((count($oldimage)>0) && ($oldimage!=null))
        {
            foreach($oldimage as $oldimageVal)
            {
                $oldimageVal->delete();
                unlink('public/images/'.$oldimageVal->image);
            }
        }
       

        $data='';
        foreach($request->file('image') as $image)
        {
            $ext=$image->extension();
            $name="img".md5(time()).rand(11111,99999).'.'.$ext;
            $image->move(public_path("images/"),$name); 
            $find_me_a_roomies_id=decrypt($request->id);
            $room_image_id=Room_image::create(["find_me_a_roomies_users_id"=>$id,"image"=>$name,"find_me_a_roomies_id"=>$find_me_a_roomies_id]);  
            // $res=Room_image::find($room_image_id->id);
            // $link="$res->image";
            // $data.='<div id="imageid'.$res->id.'" class="imageclass"><div class="main_img_icone"><a onclick="deleteImage('.$res->id.')"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div><img src="https://okroomie.com/public/images/'.$link.'" height="auto" width="150px"></div>';

        }
        $res=Room_image::where('find_me_a_roomies_users_id',$id)->where('find_me_a_roomies_id',decrypt($request->id))->get();
       


        return response()->json(["imageData"=>$res,"status"=>200]);
    }


    public function destroy_user_image(Request $request)
    {
        $res=User_image::findOrfail($request->id);
        unlink("public/images/".$res->image);
        $res->delete();
    }

    public function setFetatured(Request $request)
    {
        $res=Room_image::findOrfail($request->id);
        Room_image::where('id',$request->id)->update(['featured_image'=>$request->status]);
        $data= Room_image::where('id',$request->id)->first();
        return $data;
 
    }

    /************************************** USER IMAGES***************************************/

    public function uploadImageUser(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'image' => 'required' // max 10000kb
        ]);
        
        if($validator->fails())
        {
            return response()->json(["error"=>$validator->messages(),"status"=>400]);
        }

        $id=Auth::id();
        $oldimage=User_image::where('find_me_a_rooms_id',decrypt($request->id))->where('find_me_a_rooms_users_id',$id)->get();
       
        if((count($oldimage)>0) && ($oldimage!=null))
        {
            foreach($oldimage as $oldimageVal)
            {
                $oldimageVal->delete();
                unlink('public/images/'.$oldimageVal->image);
            }
        }
       

        $data='';
        foreach($request->file('image') as $image)
        {
            $ext=$image->extension();
            $name="img".md5(time()).rand(11111,99999).'.'.$ext;
            $image->move(public_path("images/"),$name); 
            $find_me_a_rooms_id=decrypt($request->id);
            $room_image_id=User_image::create(["find_me_a_rooms_users_id"=>$id,"image"=>$name,"find_me_a_rooms_id"=>$find_me_a_rooms_id]);  
            // $res=Room_image::find($room_image_id->id);
            // $link="$res->image";
            // $data.='<div id="imageid'.$res->id.'" class="imageclass"><div class="main_img_icone"><a onclick="deleteImage('.$res->id.')"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div><img src="https://okroomie.com/public/images/'.$link.'" height="auto" width="150px"></div>';

        }
        $res=User_image::where('find_me_a_rooms_users_id',$id)->where('find_me_a_rooms_id',decrypt($request->id))->get();
        return response()->json(["imageData"=>$res,"status"=>200]);
    }


    public function destroy_user_imageUser(Request $request)
    {
       
        $res=User_image::findOrFail($request->id);
       
        unlink("public/images/".$res->image);
        User_image::where('id',$res->id)->delete();
        
    }

    public function setFetaturedUser(Request $request)
    {
        $res=User_image::findOrfail($request->id);
        User_image::where('id',$request->id)->update(['featured_image'=>$request->status]);
        $data= User_image::where('id',$request->id)->first();
        return $data;
 
    }
}