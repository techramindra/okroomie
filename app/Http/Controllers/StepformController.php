<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class StepformController extends Controller
{
    //

   

    public function step2(Request $request,$step2)
    {
        
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-roomie/step-2',["data"=>$data]);
    }

    public function store(Request $request)
    {
      
        $request->validate([
                'accomodation_type'=>'required',
                'house_flate'=>'required',
                'about_yourself' =>'required',

        ]);
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('find-me-a-roomie/3/'.encrypt(203));
    }

    public function step3(Request $request,$step3)
    {
        
        $id=Auth::id();
        $data=User::where('id',$id)->first();
       return view('pages/frontend/find-me-a-roomie/step-3',["data"=>$data]);
            
       
       
    }

    public function store_step3(Request $request)
    {
        
        $request->validate([
            'property_address'=>'required', 
            'room_description'=>'required',
            'room_size'=>'required',
            'total_bedrooms'=>'',
            'total_bathrooms'=>'',
            'parking'=>'required',
            'public_transport'=>'required',
            'internet'=>'required|not_in:0',
    ]);
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-roomie/4/'.encrypt(204));
    }

    public function step4(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-roomie/step-4',["data"=>$data]);
    }

    public function store_step4(Request $request)
    {
       
        $request->validate([
            'room_size'=>'required',
            'bedsize'=>'required',
            'mattress'=>'required',
            'bathroom'=>'required',
        ]);
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-roomie/5/'.encrypt(205));
    }

    public function step5(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-roomie/step-5',["data"=>$data]);
    }

    public function store_step5(Request $request)
    {
        $request->validate([
            'weekely_rent'=>'required|numeric|min:0|not_in:0',
            'bond'=>'required',
            'date_available'=>'required|after:yesterday',
            'min_length_of_stay'=>'required',
            'max_length_of_stay'=>'required',
            'about_yourself'=>'required',

        ]);
         $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-roomie/6/'.encrypt(206));
    }

    public function step6(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-roomie/step-6',["data"=>$data]);
    }

    public function store_step6(Request $request)
    {
        $request->validate([
            'bedsize'=>'required',
        ]);

        $id = Auth::id(); // Retrieve the currently authenticated user...
        if(!empty($request->bed_side_table)){$bed_side_table=1;}else{$bed_side_table=0;}
        if(!empty($request->wardrobe)){$wardrobe=1;}else{$wardrobe=0;}
        if(!empty($request->drawers)){$drawers=1;}else{$drawers=0;}
        if(!empty($request->air_conditioner)){$air_conditioner=1;}else{$air_conditioner=0;}
        if(!empty($request->heater)){$heater=1;}else{$heater=0;}
        $array=["bed_side_table"=>$bed_side_table,"wardrobe"=>$wardrobe,"drawers"=>$drawers,"air_conditioner"=>$air_conditioner,"heater"=>$heater,"bedsize"=>$request->bedsize];
       $user=User::where('id',$id)->update($array);
       return redirect('/find-me-a-roomie/7/'.encrypt(207));
    }


    public function step7(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-roomie/step-7',["data"=>$data]);
    }

    public function store_step7(Request $request)
    {
         $request->validate([
            'preferences_user'=>'required',
           
        ]);

        $id = Auth::id(); // Retrieve the currently authenticated user...
     $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-roomie/8/'.encrypt(208));
    }

    public function step8(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-roomie/step-8',["data"=>$data]);
    }

    public function store_step8(Request $request)
    {
        // $request->validate([
        //     'max_length_of_stay'=>'required|not_in:0',
        //     'min_length_of_stay'=>'required|not_in:0',
        //     'date_available'=>'required|after:yesterday',  
        // ]);
        $id = Auth::id(); // Retrieve the currently authenticated user...
     $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-roomie/9/'.encrypt(209));
    }

    // public function step10(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where('id',$id)->first();
    //     return view('pages/frontend/list-my-place/step-10',["data"=>$data]);
    // }

    // public function store_step10(Request $request)
    // {
    //     $request->validate([
    //         'preferences_user'=>'required',
            
    //     ]);

    //     $id = Auth::id(); // Retrieve the currently authenticated user...
    //    $user=User::where('id',$id)->update($request->except(["_token"]));
    //    return redirect('/find-me-a-roomie/step-11');
    // }

    // public function step11(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=User::where(['id'=>$id,'type'=>1])->first();//and condition in where we can also use where('type',1)
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
    //    return redirect('/find-me-a-roomie/step-12');
    // }
    public function step9(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-roomie/step-9',["data"=>$data]);
    }
    public function store_step9(Request $request)
    {
        $request->validate([
            'about_yourself'=>'required',
        ]);
        $id = Auth::id(); // Retrieve the currently authenticated user...
       $user=User::where('id',$id)->update($request->except(["_token"]));
       return redirect('/find-me-a-roomie/dashboard/');
    }


    public function dashboard(Request $request)
    {
        $id=Auth::id();
         $data=User::where('id',$id)->first();
        return view('pages/frontend/find-me-a-roomie/dashboard',["data"=>$data]);
    }
    

    
}
