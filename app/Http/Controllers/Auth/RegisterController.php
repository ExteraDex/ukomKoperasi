<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'member',
            'alamat' => 'kosong',
            'tgl_lhr' => 'kosong',
            'tmp_lhr' => 'kosong',
            'j_kel' => 'kosong',
            'no_tlp' => 'kosong',
            'status' => 'kosong',
            'image' => 'default1.jpg',
        ]);        
    }

     public function update(UpdateAccount $request)
        {
            $user = Auth::user();
            
            $user->username = Request::input('name');
            $user->email = Request::input('email');

            if ( ! Request::input('password') == '')
            {
                $user->password = bcrypt(Request::input('password'));
            }

            $user->save();

            Flash::message('Your account has been updated!');
            return Redirect::to('/profile');
        }

}
