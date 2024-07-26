<?php

namespace App\Http\Controllers;

use App\Models\OnlineInspection;
use Illuminate\Http\Request;
use Auth,Validator;

class OnlineInspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validation=Validator::make($request->all(),[
            'message'=>'required',
        ]);
        if($validation->fails())
        {
            return response()->json(['status'=>400,'message'=>'Message field is mandatory!']);

        }
        else
        {
            $res=OnlineInspection::create(['message'=>$request->message,'sender_id'=>Auth::id(),'receiver_id'=>$request->receiver_id,'find_me_a_roomies_id'=>$request->ids]);
            if($res->id)
            {
                return response()->json(['status'=>200,'message'=>'Message send successfully']);
            }
            else
            {
                return response()->json(['status'=>400,'message'=>'Something went wrong!']);
            }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnlineInspection  $onlineInspection
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineInspection $onlineInspection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnlineInspection  $onlineInspection
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlineInspection $onlineInspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnlineInspection  $onlineInspection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnlineInspection $onlineInspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnlineInspection  $onlineInspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlineInspection $onlineInspection)
    {
        //
    }
}
