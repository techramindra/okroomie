<?php

namespace App\Http\Controllers;

use App\Models\{Find_me_a_roomie, Find_me_a_room};
use App\Models\Room_image;
use Illuminate\Http\Request;
use App\Models\User;
use Auth, Session;
use Illuminate\Contracts\Encryption\DecryptException;

class FindMeARoomUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update1(Request $request)
    {

        $data = Find_me_a_room::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-room1.step2', ['data' => $data]);
    }

    public function update_update1(Request $request)
    {
        Find_me_a_room::where('id', decrypt($request->id))->update($request->except(['_token', 'id']));
        $res=Find_me_a_roomie::findOrfail(decrypt($request->id));
        
            return redirect()->route('editListingRoom',['id'=>encrypt($res->id)]);
    }

    public function update2(Request $request)
    {

        $data = Find_me_a_room::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-room1.step5', ['data' => $data]);
    }

    public function update_update2(Request $request)
    {

        if (!empty($request->self_employed)) {
            $self_employed = 1;
        } else {
            $self_employed = 0;
        }
        if (!empty($request->working_full_time)) {
            $working_full_time = 1;
        } else {
            $working_full_time = 0;
        }
        if (!empty($request->working_part_time)) {
            $working_part_time = 1;
        } else {
            $working_part_time = 0;
        }
        if (!empty($request->backpackers)) {
            $backpackers = 1;
        } else {
            $backpackers = 0;
        }
        if (!empty($request->students)) {
            $students = 1;
        } else {
            $students = 0;
        }
        if (!empty($request->unemployed)) {
            $unemployed = 1;
        } else {
            $unemployed = 0;
        }
        if (!empty($request->children)) {
            $children = 1;
        } else {
            $children = 0;
        }
        if (!empty($request->self_funded)) {
            $self_funded = 1;
        } else {
            $self_funded = 0;
        }
        if (!empty($request->other)) {
            $other = 1;
        } else {
            $other = 0;
        }

        $array = ["self_employed" => $self_employed, "working_full_time" => $working_full_time, "working_part_time" => $working_part_time, "backpackers" => $backpackers, "students" => $students, "unemployed" => $request->unemployed, "children" => $request->children, "self_funded" => $request->self_funded, "other" => $request->other];


        Find_me_a_room::where('id', decrypt($request->id))->update($array);
        $res=Find_me_a_roomie::findOrfail(decrypt($request->id));
        
            return redirect()->route('editListingRoom',['id'=>encrypt($res->id)]);
    }


    public function update3(Request $request)
    {

        $data = Find_me_a_room::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-room1.step1', ['data' => $data]);
    }

    public function update_update3(Request $request)
    {
        $array = ['about_yourself' => $request->about_yourself];
        Find_me_a_room::where('id', decrypt($request->id))->update($array);
        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));

        return redirect()->route('editListingRoom', ['id' => encrypt($res->id)]);
    }

    public function update4(Request $request)
    {

        $data = Find_me_a_room::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-room1.step6', ['data' => $data]);
    }

    public function update_update4(Request $request)
    {


        if (!empty($request->kitchen)) {
            $kitchen = 1;
        } else {
            $kitchen = 0;
        }
        if (!empty($request->tv)) {
            $tv = 1;
        } else {
            $tv = 0;
        }
        if (!empty($request->dryer)) {
            $dryer = 1;
        } else {
            $dryer = 0;
        }
        if (!empty($request->wifi)) {
            $wifi = 1;
        } else {
            $wifi = 0;
        }
        if (!empty($request->hot_tub)) {
            $hot_tub = 1;
        } else {
            $hot_tub = 0;
        }
        if (!empty($request->washing_mashine)) {
            $washing_mashine = 1;
        } else {
            $washing_mashine = 0;
        }
        if (!empty($request->microwave)) {
            $microwave = 1;
        } else {
            $microwave = 0;
        }
        if (!empty($request->air_conditioner)) {
            $air_conditioner = 1;
        } else {
            $air_conditioner = 0;
        }
        if (!empty($request->refrigerator)) {
            $refrigerator = 1;
        } else {
            $refrigerator = 0;
        }
        if (!empty($request->dining_table)) {
            $dining_table = 1;
        } else {
            $dining_table = 0;
        }
        if (!empty($request->gym)) {
            $gym = 1;
        } else {
            $gym = 0;
        }
        if (!empty($request->heater)) {
            $heater = 1;
        } else {
            $heater = 0;
        }
        if (!empty($request->cctv)) {
            $cctv = 1;
        } else {
            $cctv = 0;
        }
        if (!empty($request->pet_friendly_home)) {
            $pet_friendly_home = 1;
        } else {
            $pet_friendly_home = 0;
        }
        if (!empty($request->outdoor_area)) {
            $outdoor_area = 1;
        } else {
            $outdoor_area = 0;
        }



        $arr = ["kitchen" => $kitchen, "tv" => $tv, "dryer" => $dryer, "wifi" => $wifi, "hot_tub" => $hot_tub, "washing_mashine" => $washing_mashine, "microwave" => $microwave, "air_conditioner" => $air_conditioner, "refrigerator" => $refrigerator, "dining_table" => $dining_table, "gym" => $gym, "heater" => $heater, "cctv" => $cctv, "pet_friendly_home" => $pet_friendly_home, "outdoor_area" => $outdoor_area];


        Find_me_a_room::where('id', decrypt($request->id))->update($arr);
        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));

        return redirect()->route('editListingRoom', ['id' => encrypt($res->id)]);
    }

    public function update5(Request $request)
    {

        $data = Find_me_a_room::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-room1.step3', ['data' => $data]);
    }

    public function update_update5(Request $request)
    {
        $array = $request->except(['id', '_token']);
        Find_me_a_room::where('id', decrypt($request->id))->update($array);
        $res=Find_me_a_roomie::findOrfail(decrypt($request->id));
        
            return redirect()->route('editListingRoom',['id'=>encrypt($res->id)]);
    }

    public function update6(Request $request)
    {

        $data = Find_me_a_room::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-room1.step6_2', ['data' => $data]);
    }

    public function update_update6(Request $request)
    {
        if (!empty($request->queen_bed)) {
            $queen_bed = 1;
        } else {
            $queen_bed = 0;
        }
        if (!empty($request->wardrobe)) {
            $wardrobe = 1;
        } else {
            $wardrobe = 0;
        }
        if (!empty($request->lamp)) {
            $lamp = 1;
        } else {
            $lamp = 0;
        }
        if (!empty($request->chair)) {
            $chair = 1;
        } else {
            $chair = 0;
        }
        if (!empty($request->mattress)) {
            $mattress = 1;
        } else {
            $mattress = 0;
        }
        if (!empty($request->study_desk)) {
            $study_desk = 1;
        } else {
            $study_desk = 0;
        }
        if (!empty($request->bed_side_table)) {
            $bed_side_table = 1;
        } else {
            $bed_side_table = 0;
        }

        $array = ["queen_bed" => $queen_bed, "bed_side_table" => $bed_side_table, "mattress" => $mattress, "study_desk" => $study_desk, "wardrobe" => $wardrobe, "lamp" => $lamp, "chair" => $chair];


        Find_me_a_room::where('id', decrypt($request->id))->update($array);
        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));

        return redirect()->route('editListingRoom', ['id' => encrypt($res->id)]);
    }




    public function index(Request $request)
    {
        $data = Find_me_a_roomie::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-roomie1.index', ['data' => $data]);
    }

    public function store_index(Request $request)
    {
        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));
        Find_me_a_roomie::where('id', decrypt($request->id))->update($request->except(['submit', 'id', '_token']));
        return redirect()->route('editListingRommie', ['id' => encrypt($res->id)]);
    }

    public function update2view(Request $request)
    {
        $data = Find_me_a_roomie::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-roomie1.step-8', ['data' => $data]);
    }

    public function store_update2view(Request $request)
    {

        if (!empty($request->backpackers)) {
            $backpackers = 1;
        } else {
            $backpackers = 0;
        }
        if (!empty($request->students)) {
            $students = 1;
        } else {
            $students = 0;
        }
        if (!empty($request->smokers)) {
            $smokers = 1;
        } else {
            $smokers = 0;
        }
        if (!empty($request->children)) {
            $children = 1;
        } else {
            $children = 0;
        }
        if (!empty($request->professionals)) {
            $professionals = 1;
        } else {
            $professionals = 0;
        }
        if (!empty($request->retirees)) {
            $retirees = 1;
        } else {
            $retirees = 0;
        }
        if (!empty($request->jobseeker_welfare)) {
            $jobseeker_welfare = 1;
        } else {
            $jobseeker_welfare = 0;
        }
        if (!empty($request->lgbt)) {
            $lgbt = 1;
        } else {
            $lgbt = 0;
        }

        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));

        $arr = ["backpackers" => $backpackers, "students" => $students, "smokers" => $smokers, "children" => $children, "professionals" => $professionals, "retirees" => $retirees, "jobseeker_welfare" => $jobseeker_welfare, "lgbt" => $lgbt, "preferences_user" => $request->preferences_user];

        Find_me_a_roomie::where('id', decrypt($request->id))->update($arr);
        return redirect()->route('editListingRommie', ['id' => encrypt($res->id)]);
    }

    public function update3view(Request $request)
    {
        $data = Find_me_a_roomie::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-roomie1.step-2', ['data' => $data]);
    }

    public function store_update3view(Request $request)
    {
        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));
        Find_me_a_roomie::where('id', decrypt($request->id))->update($request->except(['submit', 'id', '_token']));
        return redirect()->route('editListingRommie', ['id' => encrypt($res->id)]);
    }

    public function update4view(Request $request)
    {
        $data = Find_me_a_roomie::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-roomie1.step-4', ['data' => $data]);
    }

    public function store_update4view(Request $request)
    {
        if (!empty($request->kitchen)) {
            $kitchen = 1;
        } else {
            $kitchen = 0;
        }
        if (!empty($request->tv)) {
            $tv = 1;
        } else {
            $tv = 0;
        }
        if (!empty($request->dryer)) {
            $dryer = 1;
        } else {
            $dryer = 0;
        }
        if (!empty($request->wifi)) {
            $wifi = 1;
        } else {
            $wifi = 0;
        }
        if (!empty($request->hot_tub)) {
            $hot_tub = 1;
        } else {
            $hot_tub = 0;
        }
        if (!empty($request->washing_mashine)) {
            $washing_mashine = 1;
        } else {
            $washing_mashine = 0;
        }
        if (!empty($request->microwave)) {
            $microwave = 1;
        } else {
            $microwave = 0;
        }
        if (!empty($request->balcony)) {
            $balcony = 1;
        } else {
            $balcony = 0;
        }
        if (!empty($request->big_yard_space)) {
            $big_yard_space = 1;
        } else {
            $big_yard_space = 0;
        }
        if (!empty($request->air_conditioner)) {
            $air_conditioner = 1;
        } else {
            $air_conditioner = 0;
        }
        if (!empty($request->refrigerator)) {
            $refrigerator = 1;
        } else {
            $refrigerator = 0;
        }
        if (!empty($request->dining_table)) {
            $dining_table = 1;
        } else {
            $dining_table = 0;
        }
        if (!empty($request->bbq_area)) {
            $bbq_area = 1;
        } else {
            $bbq_area = 0;
        }
        if (!empty($request->gym)) {
            $gym = 1;
        } else {
            $gym = 0;
        }
        if (!empty($request->heater)) {
            $heater = 1;
        } else {
            $heater = 0;
        }


        $arr = ["kitchen" => $kitchen, "tv" => $tv, "dryer" => $dryer, "wifi" => $wifi, "hot_tub" => $hot_tub, "washing_mashine" => $washing_mashine, "microwave" => $microwave, "balcony" => $balcony, "big_yard_space" => $big_yard_space, "air_conditioner" => $air_conditioner, "refrigerator" => $refrigerator, "dining_table" => $dining_table, "bbq_area" => $bbq_area, "gym" => $gym, "heater" => $heater];

        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));
        Find_me_a_roomie::where('id', decrypt($request->id))->update($arr);
        return redirect()->route('editListingRommie', ['id' => encrypt($res->id)]);
    }

    public function update5view(Request $request)
    {
        $data = Find_me_a_roomie::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-roomie1.step-3', ['data' => $data]);
    }

    public function store_update5view(Request $request)
    {
        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));
        Find_me_a_roomie::where('id', decrypt($request->id))->update($request->except(['submit', 'id', '_token']));
        return redirect()->route('editListingRommie', ['id' => encrypt($res->id)]);
    }

    public function update6view(Request $request)
    {
        $data = Find_me_a_roomie::where('id', decrypt($request->id))->first();
        return view('pages.frontend.find-me-a-roomie1.step-5', ['data' => $data]);
    }

    public function store_update6view(Request $request)
    {

        if (!empty($request->bed_side_table)) {
            $bed_side_table = 1;
        } else {
            $bed_side_table = 0;
        }
        if (!empty($request->wardrobe)) {
            $wardrobe = 1;
        } else {
            $wardrobe = 0;
        }
        if (!empty($request->drawers)) {
            $drawers = 1;
        } else {
            $drawers = 0;
        }
        if (!empty($request->study_desk)) {
            $study_desk = 1;
        } else {
            $study_desk = 0;
        }
        if (!empty($request->chair)) {
            $chair = 1;
        } else {
            $chair = 0;
        }
        $arr = ["bed_side_table" => $bed_side_table, "wardrobe" => $wardrobe, "drawers" => $drawers, "study_desk" => $study_desk, "chair" => $chair];

        $res = Find_me_a_roomie::findOrfail(decrypt($request->id));
        Find_me_a_roomie::where('id', decrypt($request->id))->update($arr);
        return redirect()->route('editListingRommie', ['id' => encrypt($res->id)]);
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
     * @param  \App\Models\Find_me_a_roomie  $find_me_a_roomie
     * @return \Illuminate\Http\Response
     */
    public function show(Find_me_a_roomie $find_me_a_roomie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Find_me_a_roomie  $find_me_a_roomie
     * @return \Illuminate\Http\Response
     */
    public function edit(Find_me_a_roomie $find_me_a_roomie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Find_me_a_roomie  $find_me_a_roomie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Find_me_a_roomie $find_me_a_roomie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Find_me_a_roomie  $find_me_a_roomie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Find_me_a_roomie $find_me_a_roomie)
    {
        //
    }
    public function step1(Request $request)
    {
        return view('pages/frontend/find-me-a-roomie/index');
    }

    public function store_step1(Request $request)
    {
        //<a href="{{url('find-me-a-roomie/2/'.encrypt(202))}}">
        $id = Auth::id();
        $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();
        if ((empty($data)) || ($data == null)) {
            return redirect('find-me-a-roomie/2/' . encrypt(202));
        } else {

            return redirect('find-me-a-roomie/2/' . encrypt(202));
            // return view('pages/frontend/find-me-a-roomie/step-2',['data'=>$data]);
        }
    }


    public function step2(Request $request, $step2)
    {

        $id = Auth::id();
        $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

        //    if(empty($data))
        //    {
        //     return view('pages/frontend/find-me-a-roomie/step-2',["data"=>$data]);
        //    }
        //    else
        //    {
        //     if($data->completed_step<11 && $data->completed_step!=null && $data->completed_step!=2 && $data->completed_step!='')
        //     {

        //         if($data->completed_step<10)
        //         {
        //             $enc="20".$data->completed_step;
        //         }
        //         else
        //         {
        //             $enc="2".$data->completed_step;
        //         }

        //         $remaining_step=$data->completed_step;

        //         return redirect("find-me-a-roomie/$remaining_step/".encrypt($enc));
        //     }
        //     elseif($data->completed_step==2 || $data->completed_step==null || $data->completed_step=='')
        //     {

        //        // die;
        //                 try {
        //                 $decrypted = decrypt($step2);
        //                 if($decrypted==202)
        //                 {

        //                     return view('pages/frontend/find-me-a-roomie/step-2',["data"=>$data]);
        //                 }
        //                 else
        //                 {
        //                     return view('pages/frontend/find-me-a-roomie/index');

        //                 }
        //             } catch (DecryptException $e) {

        //                 return view('pages/frontend/find-me-a-roomie/index');
        //             }


        //     }
        //     elseif($data->completed_step==11)
        //     { 
        //         $user=User::where('id',$id)->first();
        //         $user_auto_id=$user->okroomie_id;
        //         return redirect("find-me-a-roomie/dashboard/$user_auto_id");

        //     }
        //     else
        //     {
        //         return redirect("plans");
        //     }
        // }



        try {
            $decrypted = decrypt($step2);
            if ($decrypted == 202) {
                if ($data != null) //preventing no record of user
                {

                    if ($data->completed_step != 'yes') {
                        return view('pages/frontend/find-me-a-roomie/step-2', ["data" => $data]);
                    } else {
                        $data['accomodation_type'] = null;
                        $data['house_flate'] = null;
                        $data['about_yourself'] = null;
                        return view('pages/frontend/find-me-a-roomie/step-2', ["data" => $data]);
                    }
                } else {

                    $data['accomodation_type'] = null;
                    $data['house_flate'] = null;
                    $data['about_yourself'] = null;

                    return view('pages/frontend/find-me-a-roomie/step-2', ["data" => ((object)$data)]);
                }
            } else {
                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {

            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'accomodation_type' => 'required',
            'house_flate' => 'required',
            'about_yourself' => 'required',

        ]);
        $id = Auth::id(); // Retrieve the currently authenticated user...
        $userData = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();
        if ($userData != null) //preventing on no records of the user
        {
            if (($userData->completed_step != 'yes') && ($userData->completed_step != 'no')) {
                $user = Find_me_a_roomie::where('user_id', $id)->where('id', $userData->id)->update($request->except(["_token"]));
            } else {
                $data = array();
                $data = $request->except(["_token"]);
                $find_me_a_roomie = $user = Find_me_a_roomie::create($data);
                Find_me_a_roomie::where('id', $find_me_a_roomie->id)->update(['user_id' => $id, 'completed_step' => 2]);
                session(['find_me_a_roomie' => $find_me_a_roomie->id]);
            }
        } else {
            $data = array();
            $data = $request->except(["_token"]);
            $find_me_a_roomie = $user = Find_me_a_roomie::create($data);
            Find_me_a_roomie::where('id', $find_me_a_roomie->id)->update(['user_id' => $id, 'completed_step' => 2]);
            session(['find_me_a_roomie' => $find_me_a_roomie->id]);
        }


        return redirect('find-me-a-roomie/3/' . encrypt(203));
    }

    public function step3(Request $request, $step3)
    {
        try {
            $decrypted = decrypt($step3);
            if ($decrypted == 203) {
                $id = Auth::id();
                $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();
                if (($data->completed_step != 'yes') || ($data->completed_step != 'no')) {
                    return view('pages/frontend/find-me-a-roomie/step-3', ["data" => $data]);
                } else {
                    $data['room_size'] = null;
                    $data['total_bedrooms'] = null;
                    $data['total_bathrooms'] = null;
                    $data['total_number_of_flatemates'] = null;
                    $data['parking'] = null;
                    $data['public_transport'] = null;
                    $data['internet'] = null;
                    return view('pages/frontend/find-me-a-roomie/step-3', ["data" => $data]);
                }
            } else {
                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {
            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

    public function store_step3(Request $request)
    {

        $request->validate([
            'property_address' => 'required',
            'room_size' => 'required',
            'total_number_of_flatemates' => 'required|integer|not_in:0',
            'total_bedrooms' => 'required|integer|not_in:0',
            'total_bathrooms' => 'required|integer|not_in:0',
            'parking' => 'required',
            'public_transport' => 'required',
            'internet' => 'required|not_in:0',
        ]);
        $id = Auth::id(); // Retrieve the currently authenticated user...
        $userData = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();
        $arr = $request->except(["_token"]);
        $arr['completed_step'] = 3;
        $user = Find_me_a_roomie::where('user_id', $id)->where('id', $userData->id)->update($arr);
        return redirect('/find-me-a-roomie/4/' . encrypt(204));
    }

    public function step4(Request $request, $step4)
    {
        try {
            $decrypted = decrypt($step4);
            if ($decrypted == 204) {
                $id = Auth::id();
                $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

                if (($data->completed_step != 'yes') || ($data->completed_step != 'no')) {
                    return view('pages/frontend/find-me-a-roomie/step-4', ["data" => $data]);
                } else {
                    $data['tv'] = 0;
                    $data['kitchen'] = 0;
                    $data['dryer'] = 0;
                    $data['wifi'] = 0;
                    $data['hot_tub'] = 0;
                    $data['washing_mashine'] = 0;
                    $data['microwave'] = 0;
                    $data['balcony'] = 0;
                    $data['big_yard_space'] = 0;
                    $data['air_conditioner'] = 0;
                    $data['refrigerator'] = 0;
                    $data['dining_table'] = 0;
                    $data['bbq_area'] = 0;
                    $data['gym'] = 0;
                    $data['heater'] = 0;

                    return view('pages/frontend/find-me-a-roomie/step-4', ["data" => $data]);
                }
            } else {
                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {
            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

    public function store_step4(Request $request)
    {
        $id = Auth::id(); // Retrieve the currently authenticated user...
        if (!empty($request->kitchen)) {
            $kitchen = 1;
        } else {
            $kitchen = 0;
        }
        if (!empty($request->tv)) {
            $tv = 1;
        } else {
            $tv = 0;
        }
        if (!empty($request->dryer)) {
            $dryer = 1;
        } else {
            $dryer = 0;
        }
        if (!empty($request->wifi)) {
            $wifi = 1;
        } else {
            $wifi = 0;
        }
        if (!empty($request->hot_tub)) {
            $hot_tub = 1;
        } else {
            $hot_tub = 0;
        }
        if (!empty($request->washing_mashine)) {
            $washing_mashine = 1;
        } else {
            $washing_mashine = 0;
        }
        if (!empty($request->microwave)) {
            $microwave = 1;
        } else {
            $microwave = 0;
        }
        if (!empty($request->balcony)) {
            $balcony = 1;
        } else {
            $balcony = 0;
        }
        if (!empty($request->big_yard_space)) {
            $big_yard_space = 1;
        } else {
            $big_yard_space = 0;
        }
        if (!empty($request->air_conditioner)) {
            $air_conditioner = 1;
        } else {
            $air_conditioner = 0;
        }
        if (!empty($request->refrigerator)) {
            $refrigerator = 1;
        } else {
            $refrigerator = 0;
        }
        if (!empty($request->dining_table)) {
            $dining_table = 1;
        } else {
            $dining_table = 0;
        }
        if (!empty($request->bbq_area)) {
            $bbq_area = 1;
        } else {
            $bbq_area = 0;
        }
        if (!empty($request->gym)) {
            $gym = 1;
        } else {
            $gym = 0;
        }
        if (!empty($request->heater)) {
            $heater = 1;
        } else {
            $heater = 0;
        }


        $arr = ["kitchen" => $kitchen, "tv" => $tv, "dryer" => $dryer, "wifi" => $wifi, "hot_tub" => $hot_tub, "washing_mashine" => $washing_mashine, "microwave" => $microwave, "balcony" => $balcony, "big_yard_space" => $big_yard_space, "air_conditioner" => $air_conditioner, "refrigerator" => $refrigerator, "dining_table" => $dining_table, "bbq_area" => $bbq_area, "gym" => $gym, "heater" => $heater, "completed_step" => 4];

        $userData = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();


        $user = Find_me_a_roomie::where('user_id', $id)->where('id', $userData->id)->update($arr);


        return redirect('/find-me-a-roomie/5/' . encrypt(205));
    }

    public function step5(Request $request, $step5)
    {
        try {
            $decrypted = decrypt($step5);
            if ($decrypted == 205) {
                $id = Auth::id();
                $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

                if (($data->completed_step != 'yes') || ($data->completed_step != 'no')) {
                    return view('pages/frontend/find-me-a-roomie/step-5', ["data" => $data]);
                } else {
                    $data['mattress'] = 0;
                    $data['bathroom'] = 0;
                    $data['bed_side_table'] = 0;
                    $data['bedsize'] = 0;
                    $data['study_desk'] = 0;
                    $data['wardrobe'] = 0;
                    $data['drawers'] = 0;
                    $data['study_desk'] = 0;
                    $data['chair'] = 0;

                    return view('pages/frontend/find-me-a-roomie/step-5', ["data" => $data]);
                }
            } else {
                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {
            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

    public function store_step5(Request $request)
    {


        $request->validate([
            'mattress' => 'required',
            'bathroom' => 'required',
        ]);


        if (!empty($request->bed_side_table)) {
            $bed_side_table = 1;
        } else {
            $bed_side_table = 0;
        }
        if (!empty($request->wardrobe)) {
            $wardrobe = 1;
        } else {
            $wardrobe = 0;
        }
        if (!empty($request->drawers)) {
            $drawers = 1;
        } else {
            $drawers = 0;
        }
        if (!empty($request->study_desk)) {
            $study_desk = 1;
        } else {
            $study_desk = 0;
        }
        if (!empty($request->chair)) {
            $chair = 1;
        } else {
            $chair = 0;
        }

        $id = Auth::id(); // Retrieve the currently authenticated user...
        $userData = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();
        $arr = ["mattress" => $request->mattress, "bathroom" => $request->bathroom, "bedsize" => $request->bedsize, "bed_side_table" => $bed_side_table, "wardrobe" => $wardrobe, "drawers" => $drawers, "study_desk" => $study_desk, "chair" => $chair, "completed_step" => 5];

        $user = Find_me_a_roomie::where('user_id', $id)->where('id', $userData->id)->update($arr);
        return redirect('/find-me-a-roomie/6/' . encrypt(206));
    }

    public function step6(Request $request, $step6)
    {

        try {
            $decrypted = decrypt($step6);
            if ($decrypted == 206) {
                $id = Auth::id();
                $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

                if (($data->completed_step != 'yes') || ($data->completed_step != 'no')) {
                    return view('pages/frontend/find-me-a-roomie/step-6', ["data" => $data]);
                } else {
                    $data['weekely_rent'] = 0;
                    $data['bond'] = null;
                    $data['bills'] = null;
                    $data['date_available'] = null;
                    $data['min_length_of_stay'] = null;
                    $data['max_length_of_stay'] = null;
                    $data['about_roommates'] = null;



                    return view('pages/frontend/find-me-a-roomie/step-6', ["data" => $data]);
                }
            } else {
                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {
            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

    public function store_step6(Request $request)
    {
        $request->validate([
            'weekely_rent' => 'required|numeric|min:0|not_in:0',
            'bond' => 'required',
            'date_available' => 'required|after:yesterday',
            'min_length_of_stay' => 'required',
            'max_length_of_stay' => 'required',
            'about_roommates' => 'required',

        ]);
        $id = Auth::id(); // Retrieve the currently authenticated user...
        $userData = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();
        $arr = $request->except(["_token"]);
        $arr['completed_step'] = 6;
        $user = Find_me_a_roomie::where('user_id', $id)->where('id', $userData->id)->update($arr);


        return redirect('/find-me-a-roomie/7/' . encrypt(207));
    }


    public function step7(Request $request, $step7)
    {
        try {
            $decrypted = decrypt($step7);
            if ($decrypted == 207) {
                $id = Auth::id();
                $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

                if (($data->completed_step != 'yes') || ($data->completed_step != 'no')) {
                    return view('pages/frontend/find-me-a-roomie/step-7', ["data" => $data]);
                } else {
                    $data['preferences_user'] = null;
                    return view('pages/frontend/find-me-a-roomie/step-7', ["data" => $data]);
                }
            } else {

                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {
            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

    public function store_step7(Request $request)
    {
        $request->validate([
            'preferences_user' => 'required',

        ]);
        $id = Auth::id(); // Retrieve the currently authenticated user...
        $userData = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();
        $arr = $request->except(["_token"]);
        $arr['completed_step'] = 7;
        $user = Find_me_a_roomie::where('user_id', $id)->where('id', $userData->id)->update($arr);

        return redirect('/find-me-a-roomie/8/' . encrypt(208));
    }

    public function step8(Request $request, $step8)
    {
        try {
            $decrypted = decrypt($step8);
            if ($decrypted == 208) {
                $id = Auth::id();
                $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

                if (($data->completed_step != 'yes') || ($data->completed_step != 'no')) {
                    return view('pages/frontend/find-me-a-roomie/step-8', ["data" => $data]);
                } else {
                    $data['backpackers'] = 0;
                    $data['students'] = 0;
                    $data['smokers'] = 0;
                    $data['children'] = 0;
                    $data['professionals'] = 0;
                    $data['retirees'] = 0;
                    $data['jobseeker_welfare'] = 0;
                    $data['lgbt'] = 0;
                    return view('pages/frontend/find-me-a-roomie/step-8', ["data" => $data]);
                }
            } else {
                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {
            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

    public function store_step8(Request $request)
    {

        if (!empty($request->backpackers)) {
            $backpackers = 1;
        } else {
            $backpackers = 0;
        }
        if (!empty($request->students)) {
            $students = 1;
        } else {
            $students = 0;
        }
        if (!empty($request->smokers)) {
            $smokers = 1;
        } else {
            $smokers = 0;
        }
        if (!empty($request->children)) {
            $children = 1;
        } else {
            $children = 0;
        }
        if (!empty($request->professionals)) {
            $professionals = 1;
        } else {
            $professionals = 0;
        }
        if (!empty($request->retirees)) {
            $retirees = 1;
        } else {
            $retirees = 0;
        }
        if (!empty($request->jobseeker_welfare)) {
            $jobseeker_welfare = 1;
        } else {
            $jobseeker_welfare = 0;
        }
        if (!empty($request->lgbt)) {
            $lgbt = 1;
        } else {
            $lgbt = 0;
        }

        $arr = ["backpackers" => $backpackers, "students" => $students, "smokers" => $smokers, "children" => $children, "professionals" => $professionals, "retirees" => $retirees, "jobseeker_welfare" => $jobseeker_welfare, "lgbt" => $lgbt, "completed_step" => $request->completed_step];
        $arr['completed_step'] = 8;
        $id = Auth::id(); // Retrieve the currently authenticated user...
        $userData = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

        $user = Find_me_a_roomie::where('user_id', $id)->where('id', $userData->id)->update($arr);


        return redirect('/find-me-a-roomie/9/' . encrypt(209));
    }

    public function step9(Request $request, $step9)
    {
        try {
            $decrypted = decrypt($step9);
            if ($decrypted == 209) {
                $id = Auth::id();
                $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

                if (($data->completed_step != 'yes') || ($data->completed_step != 'no')) {
                    return view('pages/frontend/find-me-a-roomie/step-9');
                } else {

                    return view('pages/frontend/find-me-a-roomie/step-9');
                }
            } else {
                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {
            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

    public function store_step9(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);
        $id = Auth::id();
        $userData = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();
        if ($request->file('image')) {
            $data = "";
            foreach ($request->file('image') as $image) {
                $ext = $image->extension();
                $name = "img" . md5(time()) . rand(11111, 99999) . '.' . $ext;
                $image->move(public_path("images/"), $name);
                $find_me_a_roomies_id = $userData->id;
                $room_image_id = Room_image::create(["find_me_a_roomies_users_id" => $id, "image" => $name, "find_me_a_roomies_id" => $find_me_a_roomies_id]);
                $res = Room_image::find($room_image_id->id);
                $link = "$res->image";
                $data .= '<div id="imageid' . $res->id . '" class="imageclass"><div class="main_img_icone"><a onclick="deleteImage(' . $res->id . ')"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div><img src="https://okroomie.com/public/images/' . $link . '" height="auto" width="150px"></div>';
            }
            $user = Find_me_a_roomie::where('user_id', $id)->where('id', $userData->id)->update(['completed_step' => 9]);


            return response()->json(["imageData" => $data, "status" => 200]);
        }


        // $ext = pathinfo(
        //     parse_url($request->image, PHP_URL_PATH), 
        //     PATHINFO_EXTENSION
        // );
        // $name="img".md5(time()).rand(11111,99999).'.'.$ext; 
        // // $path=public_path("images/").$name;

        // $image->move(public_path("images/"),$name);

        // $request->validate([
        //     'image' => 'required',
        // ]);

        // $id=Auth::id();
        // if($request->hasFile("image"))
        // {
        //     //get preveious uploaded files
        //     $getPrevious=Room_image::where('find_me_a_roomies_users_id',$id)->get();
        //     if(count($getPrevious)>0)
        //     {
        //        foreach($getPrevious as $oldData)
        //        {
        //              $image = Room_image::find($oldData->id);
        //                 unlink("public/images/".$image->image);
        //              Room_image::where('id',$oldData->id)->delete();
        //        }

        //     }

        //         foreach ($request->file('image') as $imagefile)
        //         {
        //             $ext=$imagefile->extension();
        //             $name="img".md5(time()).rand(11111,99999).'.'.$ext;
        //             $imagefile->move(public_path("images/"),$name);
        //             $find_me_a_roomies_id=55;
        //              Room_image::create(["find_me_a_roomies_users_id"=>$id,"image"=>$name,"find_me_a_roomies_id"=>$find_me_a_roomies_id]);   
        //         }      

        //         $arr=["completed_step"=>$request->completed_step];
        //         Find_me_a_roomie::where('user_id',$id)->update($arr);
        // } 
        // return redirect('/find-me-a-roomie/10/'.encrypt(210));
    }

    public function step10(Request $request, $step10)
    {
        try {
            $decrypted = decrypt($step10);
            if ($decrypted == 210) {
                $id = Auth::id();
                $data = Find_me_a_roomie::where('user_id', $id)->orderBy('id', 'desc')->first();

                if (($data->completed_step != 'yes') || ($data->completed_step != 'no')) {
                    return view('pages/frontend/find-me-a-roomie/step-10');
                } else {

                    return view('pages/frontend/find-me-a-roomie/step-10');
                }
            } else {
                return view('pages/frontend/find-me-a-roomie/index');
            }
        } catch (DecryptException $e) {
            return view('pages/frontend/find-me-a-roomie/index');
        }
    }

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
    // public function step9(Request $request)
    // {
    //     $id=Auth::id();
    //      $data=Find_me_a_roomie::where('user_id',$id)->first();
    //     return view('pages/frontend/find-me-a-roomie/step-9',["data"=>$data]);
    // }
    public function store_step10(Request $request)
    {


        $id = Auth::id(); // Retrieve the currently authenticated user...
        Find_me_a_roomie::where('user_id', $id)->update($request->except(["_token"]));
        $user = User::where('id', $id)->first();
        if ($user->okroomie_id == null) {
            $auto_id = "OKR22" . time() . rand(1111, 9999);
            User::where('id', $id)->update(["okroomie_id" => $auto_id]);
            Find_me_a_roomie::where('user_id', $id)->update(["completed_step" => 'yes']);
            return redirect("/find-me-a-roomie/dashboard/$auto_id");
        } else {
            $getid = $user->okroomie_id;
            Find_me_a_roomie::where('user_id', $id)->update(["completed_step" => 'yes']);
            return redirect("/find-me-a-roomie/dashboard/$getid");
        }
        //unset session for more than one room entry
        \Session::forget('find_me_a_roomie');
    }


    public function dashboard(Request $request)
    {

        $id = Auth::id();
        $data = Find_me_a_roomie::where('user_id', $id)->first();
        $user = User::where('id', $id)->first();
        $room_image = Room_image::where('find_me_a_roomies_users_id', $id)->limit(5)->get();
        return view('pages/frontend/find-me-a-roomie/dashboard', ["data" => $data, "user" => $user, "room_image" => $room_image]);
    }
}
