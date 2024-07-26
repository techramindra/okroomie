<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_group_detail;
use Auth;

class StepformControllerPlace extends Controller
{
    //
   
    public function step1(Request $request)
    {
        $id=Auth::id();
        $data=User::where('id',$id)->first();
       return view('pages/frontend/find-me-a-room/step1',["data"=>$data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'accomodation_type' => 'required',
        ]);
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update(["accomodation_type"=>$request->accomodation_type,"type"=>2]);
       return redirect('/find-me-a-room/step-2');
    }

    public function step2(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-room/step2',["data"=>$data]);
    }
    public function store_step2(Request $request)
    {
        $request->validate([
            'suburb' => 'required',
        ]);

         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-room/step-2');
    }

    public function step3(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-room/step3',["data"=>$data]);
    }

    public function store_step3(Request $request)
    {
        $request->validate([
            'preferred_move_date' => 'required|after:today',
            'weekely_budget'=>'required|numeric|min:0|not_in:0',
            'preferred_length_of_stay'=>'required',
        ]);
        
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-room/step-4');
    }

    public function step4(Request $request)
    {
        
        $id=Auth::id();
         $data=User::where('id',$id)->first();
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
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-room/step-5');
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
            $user2=User::where('id',$id)->update($array);

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
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-room/step7',["data"=>$data]);
    }

    public function store_step7(Request $request)
    {
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-room/step-8');
    }

    public function step8(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-room/step8',["data"=>$data]);
    }

    public function store_step8(Request $request)
    {
        
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-room/step-9');
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

    public function step11(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-room/dashboard',["data"=>$data]);
    }


    // public function store_step3(Request $request)
    // {
        
    //      $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($request->except(["_token"]));
    //    return redirect('/list-my-place/step-4');
    // }

    // public function step4(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-4',["data"=>$data]);
    // }

    // public function store_step4(Request $request)
    // {
        
    //      $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($request->except(["_token"]));
    //    return redirect('/list-my-place/step-5');
    // }

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

    // public function store_step10(Request $request)
    // {
        
    //     $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($request->except(["_token"]));
    //    return redirect('/list-my-place/step-11');
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
