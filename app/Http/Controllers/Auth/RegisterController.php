<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'othernames' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|phone:GH',
            'national_card_id' => 'required|string',
            'profile_pic' => 'required|image',
            'age' => 'required|numeric',
            'gender' => 'required|string',
            'occupation' => 'required|string',
            'region' => 'required|string',
            'district' => 'required|string',
            'town' => 'required|string',
            'landmark' => 'required|string',
            'residential_address' => 'required|string',
            'next_of_kin' => 'required|string',
            'nok_phone_number' => 'required|phone:GH',
        ]);

        $user = User::create($request->except(['profile_pic']));

        if($request->profile_pic){
            $image = $request->file('profile_pic');
            $name = $user->id . '_profile_pic' . '.' .
            $image->getClientOriginalExtension();
            $folder = '/uploads/patients';
            $filePath = $this->uploadOne($image, $folder, $name);
            $user->profile_pic = $filePath;
            $user->save();
        }

        if (Auth::login($user)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect('login')->withError('Login not SUccessful.');
    }
}
