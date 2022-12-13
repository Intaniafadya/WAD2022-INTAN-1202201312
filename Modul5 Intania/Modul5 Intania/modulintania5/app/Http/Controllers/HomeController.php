<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
        ]);
    }

    public function profiles()
    {

        $user = User::where('email', Auth::user()->email)->get();
        // dd($user);
        return view('profile', [
            'title' => 'Profile',
            'active' => 'home',
            'user' => $user,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'nama' => 'required',
            'no' => 'required',
            'password' => 'required',
            'password2' => 'required|same:password',
        ]);
        $showroom = User::find($id);
        $showroom->name = $request->nama;
        $showroom->no_hp = $request->no;
        $showroom->password = $request->password;
        $showroom->save();
        return redirect()->route('home')->with('success', 'Registration success. Please login!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
