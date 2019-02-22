<?php

namespace App\Http\Controllers;

use App\User;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('auth.edit', ['user' => Auth::user()]);
    }

    /**
     * @param Request $request
     * @return
     */
    public function update(Request $request)
    {
        // Get current user
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        // Validate the data submitted by user
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255|'. Rule::unique('users')->ignore($user->id),
            'email' => 'required|email|max:225|'. Rule::unique('users')->ignore($user->id),
        ]);

        // if fails redirects back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // Fill user model
        $user->fill([
            'username' => $request->username,
            'email' => $request->email
        ]);

        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
            $filename = $avatar->store('profile', ['disk' => 'profile_files']);
    		$user->avatar = $filename;
    		$user->save();
    	}
    
        // Save user to database
        $user->save();

        // Redirect to route
        return redirect('profile/'.$request->username);
    }
}