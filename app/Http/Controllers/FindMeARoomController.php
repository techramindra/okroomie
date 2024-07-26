<?php

namespace App\Http\Controllers;

use App\Models\Find_me_a_room;
use Illuminate\Http\Request;
use App\Models\{User,Payment};
use App\Models\User_image;

use App\Models\User_group_detail;
use Auth;


class FindMeARoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function roomListingForAdmin()
     {
        $data=Find_me_a_room::join('users','users.id','=','find_me_a_rooms.user_id')->select('find_me_a_rooms.*','users.your_first_name','users.image','users.email')->orderBy('id','DESC')->get();
        return view('admin.roomListing',["payments"=>$data]);
     }
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
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Find_me_a_room  $find_me_a_room
     * @return \Illuminate\Http\Response
     */
    public function show(Find_me_a_room $find_me_a_room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Find_me_a_room  $find_me_a_room
     * @return \Illuminate\Http\Response
     */
    public function edit(Find_me_a_room $find_me_a_room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Find_me_a_room  $find_me_a_room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Find_me_a_room $find_me_a_room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Find_me_a_room  $find_me_a_room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Find_me_a_room $find_me_a_room)
    {
        //
    }



    public function step1(Request $request)
    {
        $id=Auth::id();
         $data=Find_me_a_room::where('user_id',$id)->first();
        return view('pages/frontend/find-me-a-room/step2',["data"=>$data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'suburb' => 'required',
            'about_yourself'=>'required',
        ]);

         $id = Auth::id(); // Retrieve the currently authenticated user...
       $userData=Find_me_a_room::where('user_id',$id)->first();
       if($userData)
       {
        $user=Find_me_a_room::where('user_id',$id)->update($request->except(["_token"]));
       }
       else
       {
        $data=array();
            $data1=array();
             $data=$request->except(["_token"]);
             $data1=array("user_id"=>$id);
             $mergeArray=array_merge($data1,$data);
            $user=Find_me_a_room::create($mergeArray);
       }
    return redirect('/find-me-a-room/step-2');
    }

    public function step2(Request $request)
    {
        $id=Auth::id();
        $data=Find_me_a_room::where('user_id',$id)->first();

       //  echo "ravi";
       //  die;
       return view('pages/frontend/find-me-a-room/step6',["data"=>$data]);
    }
    public function store_step2(Request $request)
    {
        $id = Auth::id(); // Retrieve the currently authenticated user...
        $selection_value=$request->input("this_place_is_for");

        if($selection_value=="Group")
        { 
            
         $request->validate([
             'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'age'=>'required',
             'your_first_name'=>'required',
             'this_place_is_for'=>'required',
             'gender'=>'required',
         ]);
 
         if ($request->hasFile('image')) {
             $ext = $request->image->extension();
             $imageName = "img".md5(time()).rand(1111,99999999).'.'.$ext;  
             $request->image->move(storage_path('app/'), $imageName);
             $array2=["image"=>$imageName];
             $user2=Find_me_a_room::where('user_id',$id)->update($array2);
 
         }
         $array=["this_place_is_for"=>$request->this_place_is_for,"your_first_name"=>$request->your_first_name,"age"=>$request->age,"gender"=>$request->gender];

         foreach($request->group_partner_name as $key=>$values)
         {
            $user= new User_group_detail();
            $user->user_id=$id;
            $user->group_partner_name=$request["group_partner_name"][$key];
            $user->group_partner_age=$request["group_partner_age"][$key];
            $user->group_partner_gender=$request["group_partner_gender"][$key];
            $user->save();
         }

         return redirect('/find-me-a-room/step-3');
        }


       if($selection_value=="Couple")
       {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age'=>'required',
            'your_first_name'=>'required',
            'this_place_is_for'=>'required',
            'gender'=>'required',
            'partner_name'=>'required',
            'partner_age'=>'required',
            'partner_gender'=>'required',
        ]);

        if ($request->hasFile('image')) {
            $ext = $request->image->extension();
            $imageName = "img".md5(time()).rand(1111,99999999).'.'.$ext;  
            $request->image->move(storage_path('app/'), $imageName);
            $array2=["image"=>$imageName];
            $user2=Find_me_a_room::where('user_id',$id)->update($array2);

        }
        $array=["this_place_is_for"=>$request->this_place_is_for,"your_first_name"=>$request->your_first_name,"age"=>$request->age,"gender"=>$request->gender,"partner_name"=>$request->partner_name,"partner_age"=>$request->partner_age,"partner_gender"=>$request->partner_gender];
       
       $user=Find_me_a_room::where('user_id',$id)->update($array);
       return redirect('/find-me-a-room/step-3');

       }

       if($selection_value=="Me")
       {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age'=>'required',
            'your_first_name'=>'required',
            'this_place_is_for'=>'required',
            'gender'=>'required',
            
        ]);
            if ($request->hasFile('image')) {
                $ext = $request->image->extension();
                $imageName = "img".md5(time()).rand(1111,99999999).'.'.$ext;  
                $request->image->move(storage_path('app/'), $imageName);
                $array2=["image"=>$imageName];
                $user2=Find_me_a_room::where('user_id',$id)->update($array2);

            }
        $array=["this_place_is_for"=>$request->this_place_is_for,"your_first_name"=>$request->your_first_name,"age"=>$request->age,"gender"=>$request->gender];
       
       $user=Find_me_a_room ::where('user_id',$id)->update($array);
       return redirect('/find-me-a-room/step-3');
       }


       if($selection_value=="Family")
       {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age'=>'required',
            'your_first_name'=>'required',
            'this_place_is_for'=>'required',
            'gender'=>'required',
            
        ]);
            if ($request->hasFile('image')) {
                $ext = $request->image->extension();
                $imageName = "img".md5(time()).rand(1111,99999999).'.'.$ext;  
                $request->image->move(storage_path('app/'), $imageName);
                $array2=["image"=>$imageName];
                $user2=Find_me_a_room::where('user_id',$id)->update($array2);

            }
        $array=["this_place_is_for"=>$request->this_place_is_for,"your_first_name"=>$request->your_first_name,"age"=>$request->age,"gender"=>$request->gender];
       
       $user=Find_me_a_room ::where('user_id',$id)->update($array);
       return redirect('/find-me-a-room/step-3');
       }
    }

    public function step3(Request $request)
    {
        $id=Auth::id();
        $data=Find_me_a_room::where('user_id',$id)->first();
        return view('pages/frontend/find-me-a-room/step3',["data"=>$data]);
    }

    public function store_step3(Request $request)
    {
        $request->validate([
            'date_available' => 'required|after:today',
            'weekely_budget'=>'required|numeric|min:0|not_in:0',
            'preferred_length_of_stay'=>'required',
            

        ]);
        
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=Find_me_a_room::where('user_id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-room/step-5');
    }

    public function step4(Request $request)
    {
        
        $id=Auth::id();
        $data=Find_me_a_room::where('user_id',$id)->first();
        return view('pages/frontend/find-me-a-room/step4',["data"=>$data]);
    }

    public function store_step4(Request $request)
    {
        $request->validate([
            'room_furnishing' => 'required',
            'bathroom' => 'required',
            'parking'=>'required',
            'internet'=>'required',
            'maximum_number_of_flatemates'=>'required',
        ]);

         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=Find_me_a_room::where('user_id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-room/step-4');
    }

    public function step5(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-room/step5',["data"=>$data]);
    }

    public function step6(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        //  echo "ravi";
        //  die;
        return view('pages/frontend/find-me-a-room/step6',["data"=>$data]);

    }

    public function store_step6(Request $request)
    {
        $id = Auth::id(); // Retrieve the currently authenticated user...
        $selection_value=$request->input("this_place_is_for");

        if($selection_value=="Group")
        { 
            
         $request->validate([
             'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'age'=>'required',
             'your_first_name'=>'required',
             'this_place_is_for'=>'required',
             'gender'=>'required',
         ]);
 
         if ($request->hasFile('image')) {
             $ext = $request->image->extension();
             $imageName = "img".md5(time()).rand(1111,99999999).'.'.$ext;  
             $request->image->move(storage_path('app/'), $imageName);
             $array2=["image"=>$imageName];
             $user2=User::where('id',$id)->update($array);
 
         }
         $array=["this_place_is_for"=>$request->this_place_is_for,"your_first_name"=>$request->your_first_name,"age"=>$request->age,"gender"=>$request->gender];

         foreach($request->group_partner_name as $key=>$values)
         {
            $user= new User_group_detail();
            $user->user_id=$id;
            $user->group_partner_name=$request["group_partner_name"][$key];
            $user->group_partner_age=$request["group_partner_age"][$key];
            $user->group_partner_gender=$request["group_partner_gender"][$key];
            $user->save();
         }

         return redirect('/find-me-a-room/step-3');
        }


       if($selection_value=="Couple")
       {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age'=>'required',
            'your_first_name'=>'required',
            'this_place_is_for'=>'required',
            'gender'=>'required',
            'partner_name'=>'required',
            'partner_age'=>'required',
            'partner_gender'=>'required',
        ]);

        if ($request->hasFile('image')) {
            $ext = $request->image->extension();
            $imageName = "img".md5(time()).rand(1111,99999999).'.'.$ext;  
            $request->image->move(storage_path('app/'), $imageName);
            $array2=["image"=>$imageName];
            $user2=User::where('id',$id)->update($array);

        }
        $array=["this_place_is_for"=>$request->this_place_is_for,"your_first_name"=>$request->your_first_name,"age"=>$request->age,"gender"=>$request->gender,"partner_name"=>$request->partner_name,"partner_age"=>$request->partner_age,"partner_gender"=>$request->partner_gender];
       
       $user=User::where('id',$id)->update($array);
       return redirect('/find-me-a-room/step-7');

       }

       if($selection_value=="Me")
       {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age'=>'required',
            'your_first_name'=>'required',
            'this_place_is_for'=>'required',
            'gender'=>'required',
            
        ]);
        if ($request->hasFile('image')) {
            $ext = $request->image->extension();
            $imageName = "img".md5(time()).rand(1111,99999999).'.'.$ext;  
            $request->image->move(storage_path('app/'), $imageName);
            $array2=["image"=>$imageName];
            $user2=User::where('user_id',$id)->update($array2);

        }
        $array=["this_place_is_for"=>$request->this_place_is_for,"your_first_name"=>$request->your_first_name,"age"=>$request->age,"gender"=>$request->gender];
       
       $user=User::where('id',$id)->update($array);
       return redirect('/find-me-a-room/step-7');
       }

    //    if($selection_value=="Group")
    //    {
    //     $request->validate([
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'age'=>'required',
    //         'your_first_name'=>'required',
    //         'this_place_is_for'=>'required',
    //         'gender'=>'required',
            
    //     ]);
    //    }

       
       
       
       
    }

    public function step7(Request $request)
    {
        $id=Auth::id();
        $data=Find_me_a_room::where('user_id',$id)->first();

        return view('pages/frontend/find-me-a-room/step7',["data"=>$data]);
    }

    public function store_step7(Request $request)
    {
         $id = Auth::id(); // Retrieve the currently authenticated user...
         if(!empty($request->self_employed)){$self_employed=1;}else{$self_employed=0;}
             if(!empty($request->working_full_time)){$working_full_time=1;}else{$working_full_time=0;}
             if(!empty($request->working_part_time)){$working_part_time=1;}else{$working_part_time=0;}
             if(!empty($request->backpackers)){$backpackers=1;}else{$backpackers=0;}
             if(!empty($request->students)){$students=1;}else{$students=0;}
             if(!empty($request->unemployed)){$unemployed=1;}else{$unemployed=0;}
             if(!empty($request->children)){$children=1;}else{$children=0;}
             if(!empty($request->self_funded)){$self_funded=1;}else{$self_funded=0;}
             if(!empty($request->other)){$other=1;}else{$other=0;}

            $array=["self_employed"=>$self_employed,"working_full_time"=>$working_full_time,"working_part_time"=>$working_part_time,"backpackers"=>$backpackers,"students"=>$students,"unemployed"=>$request->unemployed,"children"=>$request->children,"self_funded"=>$request->self_funded,"other"=>$request->other];

        $user=Find_me_a_room::where('user_id',$id)->update($array);
      return redirect('/find-me-a-room/step-6');
    }

    public function step8(Request $request)
    {
       
        $id=Auth::id();
      

        $data=Find_me_a_room::where('user_id',$id)->first();
        return view('pages/frontend/find-me-a-room/step8',["data"=>$data]);
    }

    public function store_step8(Request $request)
    {
       
         $id = Auth::id(); // Retrieve the currently authenticated user...
         if(!empty($request->lgbt)){$lgbt=1;}else{$lgbt=0;}
         if(!empty($request->pets)){$pets=1;}else{$pets=0;}
         if(!empty($request->smokers)){$smokers=1;}else{$smokers=0;}
         if(!empty($request->children)){$children=1;}else{$children=0;}

         $array=["lgbt"=>$lgbt,"pets"=>$pets,"smokers"=>$smokers,"children"=>$children];

       $user=Find_me_a_room::where('user_id',$id)->update($array);
       return redirect('/find-me-a-room/step-8');
    }

    public function step9(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-room/step9',["data"=>$data]);
    }

    public function store_step9(Request $request)
    {
        $request->validate([
            'about_yourself' => 'required',
        ]);
        
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-room/step-10');
    }

    public function step10(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-room/step10',["data"=>$data]);
    }

    public function store_step10(Request $request)
    {
        $id = Auth::id(); // Retrieve the currently authenticated user...
        $user=User::where('id',$id)->first();
        if($user->okroomie_id==null)
          {
             $auto_id="OKR22".time().rand(1111,9999);
             User::where('id',$id)->update(["okroomie_id"=>$auto_id]);
             Find_me_a_room::where('user_id',$id)->update(["completed_step"=>'yes']);
             return redirect("/find-me-a-room/dashboard/$auto_id");
             
          }
          else
          {
              $getid=$user->okroomie_id;
              Find_me_a_room::where('user_id',$id)->update(["completed_step"=>'yes']);
             return redirect("/find-me-a-room/dashboard/$getid");
          }
          
         


        // return redirect('/find-me-a-room/dashboard');
    }

    public function step11(Request $request)
    {
        $id=Auth::id();
         $data=Find_me_a_room::where('user_id',$id)->first();
         $user=user::where('id',$id)->first();
         $user_images=User_image::where('find_me_a_rooms_users_id',$id)->limit(5)->get();

        return view('pages/frontend/find-me-a-room/dashboard',["data"=>$data,"user"=>$user,"user_images"=>$user_images]);
    }


    public function step18(Request $request)
    {
        $id=Auth::id();
         $data=Find_me_a_room::where('user_id',$id)->first();
         $user=user::where('id',$id)->first();

        return view('pages/frontend/find-me-a-room/step11',["data"=>$data,"user"=>$user]);
    }

   

    public function store_step18(Request $request)
    {
        
        if(!empty($request->kitchen)){$kitchen=1;}else{$kitchen=0;}
        if(!empty($request->tv)){$tv=1;}else{$tv=0;}
        if(!empty($request->dryer)){$dryer=1;}else{$dryer=0;}
        if(!empty($request->wifi)){$wifi=1;}else{$wifi=0;}
        if(!empty($request->hot_tub)){$hot_tub=1;}else{$hot_tub=0;}
        if(!empty($request->washing_mashine)){$washing_mashine=1;}else{$washing_mashine=0;}
        if(!empty($request->microwave)){$microwave=1;}else{$microwave=0;}
        if(!empty($request->air_conditioner)){$air_conditioner=1;}else{$air_conditioner=0;}
        if(!empty($request->refrigerator)){$refrigerator=1;}else{$refrigerator=0;}
        if(!empty($request->dining_table)){$dining_table=1;}else{$dining_table=0;}
        if(!empty($request->queen_bed)){$queen_bed=1;}else{$queen_bed=0;}
        if(!empty($request->gym)){$gym=1;}else{$gym=0;}
        if(!empty($request->heater)){$heater=1;}else{$heater=0;}
        if(!empty($request->cctv)){$cctv=1;}else{$cctv=0;}
        if(!empty($request->pet_friendly_home)){$pet_friendly_home=1;}else{$pet_friendly_home=0;}
        if(!empty($request->bed_side_table)){$bed_side_table=1;}else{$bed_side_table=0;}
        if(!empty($request->mattress)){$mattress=1;}else{$mattress=0;}
        if(!empty($request->study_desk)){$study_desk=1;}else{$study_desk=0;}
        if(!empty($request->wardrobe)){$wardrobe=1;}else{$wardrobe=0;}
        if(!empty($request->lamp)){$lamp=1;}else{$lamp=0;}
        if(!empty($request->chair)){$chair=1;}else{$chair=0;}
        if(!empty($request->outdoor_area)){$outdoor_area=1;}else{$outdoor_area=0;}

       
    $arr=["kitchen"=>$kitchen,"tv"=>$tv,"dryer"=>$dryer,"wifi"=>$wifi,"hot_tub"=>$hot_tub,"washing_mashine"=>$washing_mashine,"microwave"=>$microwave,"air_conditioner"=>$air_conditioner,"refrigerator"=>$refrigerator,"dining_table"=>$dining_table,"queen_bed"=>$queen_bed,"gym"=>$gym,"heater"=>$heater,"cctv"=>$cctv,"pet_friendly_home"=>$pet_friendly_home,"bed_side_table"=>$bed_side_table,"mattress"=>$mattress,"study_desk"=>$study_desk,"wardrobe"=>$wardrobe,"lamp"=>$lamp,"chair"=>$chair,"outdoor_area"=>$outdoor_area];
        
           $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=Find_me_a_room::where('user_id',$id)->update($arr);
       return redirect('/find-me-a-room/step-7');
    }

    public function step19(Request $request)
    {
        return view('pages/frontend/find-me-a-room/step12');
    }

    public function store_step19(Request $request)
    { 
        $request->validate([
            'image' => 'required',
        ]);
        $id=Auth::id();
        $userData=Find_me_a_room::where('user_id',$id)->orderBy('id','desc')->first();
       if($request->file('image'))
       {
                    $data="";
                    foreach ($request->file('image') as $image)
                    {
                        $ext=$image->extension();
                        $name="img".md5(time()).rand(11111,99999).'.'.$ext;
                        $image->move(public_path("images/"),$name); 
                        $find_me_a_rooms_id=$userData->id;
                        $user_image=User_image::create(["find_me_a_rooms_users_id"=>$id,"image"=>$name,"find_me_a_rooms_id"=>$find_me_a_rooms_id]);  
                        $res=User_image::find($user_image->id);
                        $link="$res->image";
                        $data.='<div id="imageid'.$res->id.'" class="imageclass"><div class="main_img_icone"><a onclick="deleteImage('.$res->id.')"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div><img src="https://okroomie.com/public/images/'.$link.'" height="auto" width="150px"></div>';

                    }
                    
                
                    
        }
        return response()->json(["imageData"=>$data,"status"=>200]);
   
    }

    public function inspectionsVideo(Request $request)
    {
        $validator=\Validator::make($request->all(),[
            'inspection_video'=>'required',
        ]);
        if($validator->fails())
        {
            return back()->witherrors(['message'=>"inspection video is required!"]);
        }
        else
        {
           
                $res=Find_me_a_room::where('id',decrypt($request->id))->update(['inspection_video'=>$request->inspection_video]);
                if($res)
                {
                    return back()->withSuccess("Uploaded successfully");
                }
                else
                {
                    return back()->witherrors("Something went wrong!");
                }
        }
        
    }

    // public function step5(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-5',["data"=>$data]);
    // }

    // public function store_step5(Request $request)
    // {
        
    //      $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($request->except(["_token"]));
    //    return redirect('/list-my-place/step-6');
    // }

    // public function step6(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-6',["data"=>$data]);
    // }

    // public function store_step6(Request $request)
    // {
    //     $id = Auth::id(); // Retrieve the currently authenticated user...
    //     if(!empty($request->bed_side_table)){$bed_side_table=1;}else{$bed_side_table=0;}
    //     if(!empty($request->wardrobe)){$wardrobe=1;}else{$wardrobe=0;}
    //     if(!empty($request->drawers)){$drawers=1;}else{$drawers=0;}
    //     if(!empty($request->air_conditioner)){$air_conditioner=1;}else{$air_conditioner=0;}
    //     if(!empty($request->heater)){$heater=1;}else{$heater=0;}
    //     $array=["bed_side_table"=>$bed_side_table,"wardrobe"=>$wardrobe,"drawers"=>$drawers,"air_conditioner"=>$air_conditioner,"heater"=>$heater,"bedsize"=>$request->bedsize];
    //    $user=User::where('id',$id)->update($array);
    //    return redirect('/list-my-place/step-7');
    // }


    // public function step7(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-7',["data"=>$data]);
    // }

    // public function store_step7(Request $request)
    // {
        
    //     $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($request->except(["_token"]));
    //    return redirect('/list-my-place/step-8');
    // }

    // public function step8(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-8',["data"=>$data]);
    // }

    // public function store_step8(Request $request)
    // {
        
    //     $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($request->except(["_token"]));
    //    return redirect('/list-my-place/step-9');
    // }

    // public function step10(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-10',["data"=>$data]);
    // }

   

    // public function step11(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-11',["data"=>$data]);
    // }

    // public function store_step11(Request $request)
    // {
    //     if(!empty($request->backpackers)){$backpackers=1;}else{$backpackers=0;}
    //     if(!empty($request->students)){$students=1;}else{$students=0;}
    //     if(!empty($request->smokers)){$smokers=1;}else{$smokers=0;}
    //     if(!empty($request->children)){$children=1;}else{$children=0;}
    //     $arr=["backpackers"=>$backpackers,"students"=>$students,"smokers"=>$smokers,"children"=>$children];
        
    //     $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($arr);
    //    return redirect('/list-my-place/step-12');
    // }
    // public function step13(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-13',["data"=>$data]);
    // }
    // public function store_step13(Request $request)
    // {
        
    //     $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($request->except(["_token"]));
    //    return redirect('/list-my-place/step-14');
    // }


    // public function dashboard(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/dashboard',["data"=>$data]);
    // }

}
