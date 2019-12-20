<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', ['user'=>$user]);
    }

    public function edit(User $user)
    {

        return view('profiles.edit', ['user'=>$user]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'bio' => 'required|max:100',
        ]);

        // $u = new User;
        // $u->title = $data['title'];
        // $u->bio = $data['bio'];
        // $u->save();
        //
        // dd($u);

        $user->profile->update($data);
        //Trying to get property of non-object error

        return redirect("/profile/{user->id}");
    }
}
