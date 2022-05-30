<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use App\Models\profile;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = order::where('user_id', auth()->user()->id )->first();
        $nama = profile::where('user_id', auth()->user()->id)->first();
        $detail = order::first();
        return view('pengasuh.pesanan', compact('nama', 'detail'), [
            "head" => "Profile | Elderly Caregiver",
            "user" => User::where('id', auth()->user()->id)->first(),
            "pesanan_user" => User::where('id', $user->pengasuh_id)->get(),
            "pesanan_pengasuh" => order::where('pengasuh_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderRequest $request)
    {
        $request['jenis'] = 'test';
        
        $validateorder = $request->validate([
            'user_id' => '',
            'pengasuh_id' => '',
            'tanggal' => '',
            'jenis'=> '',
            'no_telp' => '',
            'no_telp_kerabat' => '',
            'penyakit' => '',
            'catatan' => '',
        ]);
     
        if ($request->jasa == "harian" ){
            $validateorder['harga'] = $request->harga * 1;
            $validateorder['jenis'] = 'harian';
        }elseif ($request->jasa == "bulanan"){
            $validateorder['harga'] = $request->harga * 7;
            $validateorder['jenis'] = 'mingguan';
        }elseif ($request->jasa == "bulanan"){
            $validateorder['harga'] = $request->harga * 30;
            $validateorder['jenis'] = 'bulanan';
        }
        
        $validateorder['status'] = 'request';
// @dd($validateorder);
        
        order::create($validateorder);

        return redirect('/')->with('status', 'orderan berhasil dibuat');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderRequest  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
