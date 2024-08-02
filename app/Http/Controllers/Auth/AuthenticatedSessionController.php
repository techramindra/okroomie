<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
      

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' =>'required',
            
        ]);
 
        if ($validator->fails()) {
          return response()->json([
                'validation_errors' =>$validator->messages(),
            ]);
        }
        // else
        // {
        //         // $request->authenticate();
        //         // $request->session()->regenerate();
        //         // return response()->json([
        //         // 'status' => 200 ,
        //         // 'message'=> 'Login Successfully',
        //         // 'route' =>"/",

        //     //]);
        // }
        

        //return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login(Request $request)
    {

        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' =>'required',
            
        ]);
 
        if ($validator->fails()) {
          return back()->withErrors([
                'validation_errors' =>$validator->messages()->first(),
            ]);
        }
         else
        {
            $user_data=User::where('email',$request->email)->first();
            //dd($user_data);
            if(isset($user_data->id))
            {
                if(($user_data->user_block!=1) && ($user_data->deactivate_account!=1))
                {
                    $credentials = $request->only('email', 'password');
                    if(Auth::attempt($credentials))
                    {
                        // Authentication passed...
                        $request->session()->regenerate();
                        return redirect()->route('homepage');
                    }
                    else
                    {
                        return back()->withError("Authentication Failed!");  
                    }
                
                
                }
                elseif($user_data->user_block==1)
                {
                    return back()->withError("You are Blocked by Admin!");
                }
            }
            else
            {
                return back()->withError("Register yourself, Have a great Journey!");
            }
            
        }
    }

    public function changePassword(Request $request)
    {

        $validator=\Validator::make($request->all(),[
            'current_password'=>'required',
            'new_password'=>'required',
            'confirm_password'=>'required',
        ]);
        if($validator->fails())
        {
            return response()->json(['message'=>$validator->messages()->first(),"status"=>400]);
        }
        $auth_id=Auth::id();
        $user=User::where('id',$auth_id)->first();
        if(Hash::check($request->current_password, $user->password))
        {
            if($request->new_password==$request->confirm_password)
            {
                $hassedPass=Hash::make($request->confirm_password);
                $res=User::where('id',$auth_id)->update(['password'=>$hassedPass]);
                if($res)
                {
                    return response()->json(['status'=>200,'message'=>"Password updated successfully"]);
                }
                else
                {
                    return response()->json(['status'=>400,'message'=>"Something went wrong"]);
                }
            }
            else
            {
                return response()->json(['status'=>400,'message'=>"Password does not matched!"]);
            }
        }
        else
        {
            return response()->json(['status'=>400,'message'=>"Incorrect Password!"]);
        }
    }
}
