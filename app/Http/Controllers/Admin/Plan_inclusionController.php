<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Plan_inclusion;
use Validator;

use Illuminate\Http\Request;
class Plan_inclusionController extends Controller
{
    //

    public function index()
    {
        return view('admin.inclusion.inclusion',["inclusion"=>Plan_inclusion::all()]);
    }

    
    public function show()
    {
        return view('admin.inclusion.add_inclusion');
    }

     
    public function destroy(Request $request,$id)
    {
        
         $res=Plan_inclusion::findOrfail(decrypt($id));
        
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
            'inclusion'=>'required',
            'free'=>'required',
            'basic'=>'required',
            'full'=>'required',
            'help'=>'required',
        ]);
        if($validator->fails())
        {
            return response()->json(["validation_errors"=>$validator->messages()]);
        }
        else
        {
            $result=Plan_inclusion::create(["room_roomie"=>$request->room_roomie,"inclusion"=>$request->inclusion,"free"=>$request->free,"basic"=>$request->basic,"full"=>$request->full,"help"=>$request->help]);
            if($result)
            {
                return response()->json(["status"=>200,"message"=>"Added Successfully!","route"=>"../../admin/inclusion"]);   
            }
            else
            {
                return response()->json(["status"=>401,"message"=>"Something went wrong!"]);
            }
        }
    }


    public function edit(Request $req,$id)
    {
        $res=Plan_inclusion::findOrfail(decrypt($id));
        return view('admin.inclusion.edit_inclusion',["plan"=>$res]);
    }

    public function update(Request $request)
    {
       
        $res=Plan_inclusion::findOrfail(decrypt($request->id));
        // $validator=Validator::make($request->all(),[
        //     'inclusion'=>'required',
        //     'free'=>'required',
        //     'basic'=>'required',
        //     'full'=>'required',
        //     'help'=>'required',
        // ]);
        // if($validator->fails())
        // {
        //     return response()->json(["validation_errors"=>$validator->messages()]);
        // }
        
            $result=Plan_inclusion::where('id',$res->id)
            ->update(["room_roomie"=>$request->room_roomie,"inclusion"=>$request->inclusion,"free"=>$request->free,"basic"=>$request->basic,"full"=>$request->full,"help"=>$request->help]);
            if($request)
            {
                return response()->json(["status"=>200,"message"=>"Updated Successfully!","route"=>"../../admin/inclusion"]);   
            }
            else
            {
                return response()->json(["status"=>401,"message"=>"Something went wrong!"]);
            }
        

    }
}