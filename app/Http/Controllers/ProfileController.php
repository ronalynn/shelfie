<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $profiles = Profile::all();
      return view('profiles.index', ['profiles' => $profiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'about_me' => 'max:255',
        'avatar' => 'max:255',
        'city' => 'max:255',
        'country' => 'max:255',
        'age' => 'integer',
        'user_id' => 'required|integer'
        ,
      ]);

      $p = new Profile;
      $p->about_me = $validatedData['about_me'];
      $p->avatar= $validatedData['avatar'];
      $p->city = $validatedData['city'];
      $p->country = $validatedData['country'];
      $p->age = $validatedData['age'];
      $p->user_id = $validatedData['user_id'];
      $p->save();

      session()->flash('message', 'profile added');
      return redirect()->route('profiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $profile = Profile::findOrFail($id);
      return view('profiles.show', ['profile' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $profile = Profile::findOrFail($id);
      $profile->delete();
      return redirect()->route('profiles.index')->with('message','Profile was deleted');
    }
}
