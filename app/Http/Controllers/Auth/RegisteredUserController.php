<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
//use Validator;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //print_r($request->all());


        $validator = Validator::make($request->all(), [
            'your_first_name' => 'required|alpha',
            'email' => 'required|email|unique:users,email',
            'password' =>'required|min:8|confirmed',
            
        ]);
 
        if ($validator->fails()) {
          return response()->json([
                'validation_errors' =>$validator->messages(),
            ]);
        }
        else
        {
            //echo "ttttttttt";
            $user=User::create([
                $okroomie_id='OKRIN'.time().rand(1111,9999),
                'your_first_name'=>$request->your_first_name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'okroomie_id'=>$okroomie_id,
            ]);

            
             event(new Registered($user));
            Auth::login($user);

            //return redirect(RouteServiceProvider::HOME);
           $token=$user->createToken($user->email.'_token')->plainTextToken;
            return response()->json([
                'status' => 200 ,
                'userName' =>$user->name,
                'token' => $token,
                'message'=> 'Registered Successfully',
                'route' =>"/",

            ]);
           
        }
       


        // $validator=Validator::make(
        //     $request->all(),[
        //         'name' =>'min:1|max:50|required',
        //         'email'=> 'min:2|max:50|required|email|unique:users,email',
        //         'password'=> 'required'|'confirmed'|'min:8',

        //     ]);
           
        // if($validator->fails())
        // {
        //     echo "wwwwwwwwwwww";
        //     // return response()->json([
        //     //     'validation_errors' =>$validator->messages(),
        //     // ]);
        // }
        // else
        // {
        //     echo "ttttttttt";
        //     $user=User::create([
        //         'name'=>$request->name,
        //         'email'=>$request->email,
        //         'password'=>Hash::make($request->password),
        //     ]);
        //    $token=$user->createToken($user->email.'_token')->plainTextToken;
        //     return response()->json([
        //         'status' => 200 ,
        //         'userName' =>$user->name,
        //         'token' => $token,
        //         'message'=> 'Registered Successfully',

        //     ]);
        //}
        
        
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
