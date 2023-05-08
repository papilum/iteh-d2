<?php

namespace App\Http\Controllers;

use App\Models\Takmicar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TakmicarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Takmicari:' => DB::table('takmicars')->get()
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
     * @param  \App\Models\Takmicar  $takmicar
     * @return \Illuminate\Http\Response
     */
    public function show($takmicar_id)
    {
        return response()->json([
            'Takmicar:' => DB::table('takmicars')->where('id', $takmicar_id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Takmicar  $takmicar
     * @return \Illuminate\Http\Response
     */
    public function edit(Takmicar $takmicar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Takmicar  $takmicar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Takmicar $takmicar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Takmicar  $takmicar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Takmicar $takmicar)
    {
        //
    }
}
