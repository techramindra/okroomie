<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Validator,Hash;
use  App\Models\Admin;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\AdminLoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function store(AdminLoginRequest $request)
    // {
    //    $request->authenticate();
    //     $request->session()->regenerate();
    //     return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    // }

    public function store(Request $request)
    {
       $validator=Validator::make($request->all(),[
           'email' =>'required|email',
           'password' => 'required',
       ]);
       if($validator->fails())
       {
           return response()->json(["validation_errors"=>$validator->messages()]);
       }
       $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json([
            'status' => 200 ,
            'message'=> 'Login Successfully please wait...',
            'route' =>"/admin/dashboard",
            ]);
        }
        else
        {
            return response()->json(["status"=>"400","message"=>"Unathenticate access denied!"]);
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function adminPasswordIndex(Request $request)
    {
        return view('/admin/changePassword');
    }

    public function adminPassword(Request $request)
    {
       
        $validator=Validator::make($request->all(),[
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:new_password',
        ]);
        if($validator->fails())
        {
            return response()->json(['validation_errors'=>$validator->messages()],);
        }
        else
        {
            
            $input=$request->all();
             $user= Admin::all();
            $userid=Auth::guard('admin')->id();
            $userData=$user->where('id',$userid)->first();
         
           
            if ((Hash::check(request('old_password'), $userData->password)) == false) {
                $arr = array("status" => 401, "message" => "Check your old password.");
            } else if ((Hash::check(request('new_password'), $userData->password)) == true) {
                $arr = array("status" => 400, "message" => "Please enter a password which is not similar then current password.");
            } else {
                Admin::where('id', $userid)->update(['password' => Hash::make($input['new_password'])]);
                $arr = array("status" => 200,"route"=>"dashboard", "message" => "Password updated successfully.");
            }
            return \Response::json($arr);
        }

    }
}
