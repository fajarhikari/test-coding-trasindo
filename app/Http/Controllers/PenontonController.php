<?php

namespace App\Http\Controllers;

use App\Models\Penonton;
use App\Http\Requests\StorePenontonRequest;
use App\Http\Requests\UpdatePenontonRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PenontonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        //

        $status = session()->get('status');
        if (!$status){
            return view('index');
        }
        $penonton = Penonton::all();

        return view('admin.daftar', compact('penonton'));
    }
    public function index2() : View
    {
        //
        $status = session()->get('status');
        if (!$status){
            return view('index');
        }

        $penonton = Penonton::all();
        $penonton2 = Penonton::where('status','Log In')->get();
        $penonton3 = Penonton::where('status','Wait')->get();

        return view('admin.laporan', compact('penonton','penonton3','penonton2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function tambahdata(Request $request) : RedirectResponse
    {
        //
        $status = session()->get('status');
        if (!$status){
            return redirect('coba');
        }


        Penonton::insert([
            'nomorid' => $request->nomor,
            'name' => $request->name,
            'gender' => $request->gender,
            'type_tiket' => $request->type,
            'konser' => $request->konser,
            'status' => 'Wait',
            'confirmed' => 'No',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $penonton = Penonton::all();

        return redirect('/daftar');
    }

    public function daftartamu(Request $request) : RedirectResponse
    {
        //
        Penonton::insert([
            'nomorid' => rand(2111,99999),
            'name' => $request->name,
            'gender' => $request->gender,
            'type_tiket' => $request->type,
            'konser' => $request->konser,
            'status' => 'Wait',
            'confirmed' => 'No',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $penonton = Penonton::all();

        return redirect('/daftarakun');
    }

    public function editdata(Request $request) : RedirectResponse
    {
        //
        $status = session()->get('status');
        if (!$status){
            return redirect('index');
        }

        DB::table('penontons')->where('id',$request->id)->update([
            'nomorid' => $request->nomor,
            'name' => $request->name,
            'gender' => $request->gender,
            'type_tiket' => $request->type,
            'konser' => $request->konser,
            'status' => 'Wait',
            'confirmed' => 'No',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // $penonton = Penonton::all();

        return redirect('/daftar');
    }

    public function deletedata($id) : RedirectResponse
    {
        $status = session()->get('status');
        if (!$status){
            return view('index');
        }
        DB::table('penontons')->where('id',$id)->delete();
        return redirect('/daftar');
    }

    public function detaildata(Request $request) : View
    {
        $status = session()->get('status');
        if (!$status){
            return view('index');
        }
        $penonton = Penonton::Where('nomorid',$request->nomor)->first();

        DB::table('penontons')->where('nomorid',$request->nomor)->update([
            'status' => 'Log In',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return view('admin.detail', compact('penonton'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenontonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Penonton $penonton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penonton $penonton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenontonRequest $request, Penonton $penonton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penonton $penonton)
    {
        //
    }
}
