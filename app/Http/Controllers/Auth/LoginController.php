<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\File;
use Redirect,Session,Storage;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    //use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // Facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    // Facebook callback
    public function handleFacebookCallback()
    {
        try {
            $data = Socialite::driver('facebook')->user();
            
            $user = User::where('email', $data->email)->first();
            if($user){
                if($user->user_block!=1)
                {
                Auth::login($user);
                return redirect('/');
                }
                elseif($user->deactivate_account==1 &&($user->deactivate_account!=1))
                {
                    Session::flash('blockUser',"This Account is Deactivated!");
                    return redirect('/');
                }
                else
                {
                    Session::flash('blockUser',"This email is BLOCKED! by Admin!");
                    return redirect('/');
                }
            }else{
                $url=$data->avatar;
                $image=file_get_contents($data->avatar);
                $image_name = "img".md5(time()).rand(1111,999999).'.'."jpg";
                Storage::put($image_name, $image);
                $okroomie_id='OKRIN'.time().rand(1111,9999);
                $newUser = User::create([
                    'your_first_name' => $data->name,
                    'email' => $data->email,
                    'facebook_id' => $data->id,
                    'image' => $image_name,
                    'password' => encrypt('123456dummy'),
                    'okroomie_id' =>$okroomie_id,
                ]);
                Auth::login($newUser);
                return redirect('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
   
    }
    // Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    // Google callback
    public function handleGoogleCallback()
    {
        // echo "<pre>";
        // print_r($_GET);
        // echo "</pre>";
        // die;
        try {
            $data = Socialite::driver('google')->user();
            $user = User::where('email', $data->email)->first();
           
                if($user){
                    if(($user->user_block!=1) &&($user->deactivate_account!=1))
                    {
                        Auth::login($user);
                        return redirect('/');
                    }
                    else
                    {
                        Session::flash('blockUser',"This email is BLOCKED! by Admin!");
                        return redirect('/');
                    }
                   
                }else{
                    $url=$data->avatar;
                    $image=file_get_contents($data->avatar);
                    $image_name = "img".md5(time()).rand(1111,999999).'.'."jpg";
                    Storage::put($image_name, $image);
                    $okroomie_id='OKRIN'.time().rand(1111,9999);
                    $newUser = User::create([
                        'your_first_name' => $data->name,
                        'email' => $data->email,
                        'google_id' => $data->id,
                        'image' => $image_name,
                        'password' => encrypt('123456dummy'),
                        'okroomie_id' =>$okroomie_id,
                    ]);
                    Auth::login($newUser);
                    return redirect('/');
                }
            
            
        } catch (Exception $e) {
            //dd($e->getMessage());
        }
   
    }
    // protected function _registerOrLoginUser($data)
    // {
       
    // }
}