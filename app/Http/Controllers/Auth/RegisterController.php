<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendOtp;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

      public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'otp' => ['required', 'string', 'size:4'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $otp = mt_rand(1000, 9999);
        Mail::to($data['email'])->send(new SendOtp($otp,$data));
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'otp' => $otp,
        ]);
    }


    public function storeVerficationCodeCheck(HttpRequest $request)
    {
        $request->validate([
            'verification_code' => 'required|string',
        ]);
        // find the code
        $user = User::where('otp', $request->verification_code)->first();

        if (isset($user) && $user->email_verified_at < now()->addHour() && (!is_null($user))) {
            User::where('id', $user->id)
                ->update([
                    'email_verified_at' => now()
                ]);
            return redirect()->route('base');
        } elseif (!$user) {
            return back()->with('success', 'Invalid OTP');
        } else {
            return back()->with('success', 'Verification code is expired');
        }
    }


    public function resendEmailOtp()
    {
        $data = User::where('email', Auth::user()->email)->first();
        $otp = mt_rand(1000, 9999);
        $data->update([
            'otp' => $otp,
        ]);
        Mail::to($data->email)->send(new SendOtp($otp,$data));
        if (isset($data) && (!is_null($data))) {
            return back()->with('success', 'OTP verification code has been sent to you email. Please Verify');
        }
    }



}
