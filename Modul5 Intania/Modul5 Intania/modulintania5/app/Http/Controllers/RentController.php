<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Showroom::where('user_id', Auth::user()->id)->get();
        // dd($user);
        return view('rent', [
            'title' => 'Rent',
            'active' => 'rent',
            'user' => $user,
        ]);
    }

    public function add()
    {
        return view('car-add', [
            'title' => 'add-rent',
            'active' => 'rent',
        ]);
    }

    public function detail($id)
    {
        $mobil =  Showroom::where('id', $id)->get();
        // dd($mobil);
        return view('detail-rent', [
            'title' => 'detail-rent',
            'active' => 'rent',
            'mobil' => $mobil,

        ]);
    }

    public function hapus($id)
    {
        $user = Showroom::find($id);
        $user->delete();
        return redirect()->route('rent')->with('success', 'Data berhasil dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'car' => 'required',
            'owner' => 'required',
            'brand' => 'required',
            'date' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
            'status' => 'required',
        ]);
        $file = $request->file('foto');
        $file_name = rand(10, 100) . '-' . $file->getClientOriginalName();
        // $file_path = 'assets/img/rent/' . $file_name;
        $file->move(public_path() . '/assets/img/rent',  $file_name);
        $status = $request->status;
        $showroom = new Showroom([
            'user_id' => Auth::user()->id,
            'name' => $request->car,
            'owner' => $request->owner,
            'brand' => $request->brand,
            'purchase_date' => $request->date,
            'description' => $request->deskripsi,
            'image' => $file_name,
            'status' => $status[0],
        ]);
        $showroom->save();

        return redirect()->route('rent')->with('success', 'Registration success. Please login!');
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
        $mobil =  Showroom::where('id', $id)->get();
        // dd($mobil);
        return view('edit-rent', [
            'title' => 'edit-rent',
            'active' => 'rent',
            'mobil' => $mobil,

        ]);
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
        $id = $request->id;

        $request->validate([
            'car' => 'required',
            'owner' => 'required',
            'brand' => 'required',
            'date' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
            'status' => 'required',
        ]);
        $file = $request->file('foto');
        $file_name = rand(10, 100) . '-' . $file->getClientOriginalName();
        // $file_path = 'assets/img/rent/' . $file_name;
        $file->move(public_path() . '/assets/img/rent',  $file_name);
        $status = $request->status;
        $showroom = Showroom::find($id);
        $showroom->name = $request->car;
        $showroom->owner = $request->owner;
        $showroom->brand = $request->brand;
        $showroom->purchase_date = $request->date;
        $showroom->description = $request->deskripsi;
        $showroom->image = $file_name;
        $showroom->status = $status[0];
        $showroom->save();
        return redirect()->route('rent')->with('success', 'Registration success. Please login!');
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
