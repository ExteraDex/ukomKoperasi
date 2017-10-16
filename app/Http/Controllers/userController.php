<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use User;

class ProfilController extends Controller
{
    public function indexprofil()
    {
      
       return view('profile');
    }

    public function editprofil(Request $request)
    {
        // // Bagian yang mengHandle upload avatar user
        // if($request->hasFile('avatar'))
        //     {
        //         $avatar = $request->file('avatar');
        //         $filename = time() . '.' . $avatar->getClientOriginalExtension();
        //         Image::make($avatar)->resize(300, 300)->save( public_path('/img/upload/avatar/' . $filename ) );

        //         $user = Auth::user();
        //         $user->avatar = $filename;
        //         $user->save();
        //     }
        // return view('profile', array('user' => Auth::user()) );
    }


    public function sudahupdateprofil(Request $request)
    {
        $this->validate($request,[
          'name' => 'required|max:255',
          'username' => 'required|min:3|max:20|unique:users',
          'password' => 'required|min:6|confirmed',
        ]);

        Auth::user()->update([
           'name' => $request->name,
           'username' => $request->username,
           'password' => $request->password
        ]);

        return redirect('profile');
}
}