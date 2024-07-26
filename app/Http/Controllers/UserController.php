<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    //
    public function upload_image_dashboard(Request $request)
    {
      $id=Auth::id();
      //return print_r($request->all());
      if ($request->hasFile('image')) {
         $ext=$request->image->extension();
         $name="img".md5(time()).rand(11111,999999).'.'.$ext;
         $request->image->move(storage_path("app/"),$name);
        echo User::where('id',$id)->update(["image"=>$name]);
      }
      
      
    }

    public function show()
    {
        $data=User::all();
        return view('admin.userData',["users"=>$data]);
    }

    public function blockuser(Request $request,$id)
    {
      $res=User::findOrfail(decrypt($id));
      if($res->user_block!=1)
      {
        $upd=User::where('id',$res->id)->update(["user_block"=>1]);
      }
      else
      {
        $upd=User::where('id',$res->id)->update(["user_block"=>0]);
      }
     
      if($upd)
      {
          return redirect("admin/users");
      }

    }
}
