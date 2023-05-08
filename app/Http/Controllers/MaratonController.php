<?php

namespace App\Http\Controllers;

use App\Models\Maraton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MaratonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Maratoni:' => DB::table('maratons')->get()
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
        $validator = Validator::make($request->all(), [
            'slogan' => 'required',
            'datum' => 'required',
            'broj_takmicara' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Poruka:' => $validator->errors()
            ]);
        }

        DB::table('maratons')->insert([
            'slogan' => $request->slogan,
            'datum' => date('Y-m-d', strtotime($request->datum)),
            'broj_takmicara' => $request->broj_takmicara,
        ]);

        return response()->json([
            'Poruka:' => 'Maraton je sacuvan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maraton  $maraton
     * @return \Illuminate\Http\Response
     */
    public function show($maraton_id)
    {
        return response()->json([
            'Maraton:' => DB::table('maratons')->where('id', $maraton_id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maraton  $maraton
     * @return \Illuminate\Http\Response
     */
    public function edit(Maraton $maraton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maraton  $maraton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maraton $maraton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maraton  $maraton
     * @return \Illuminate\Http\Response
     */
    public function destroy($maraton_id)
    {
        return response()->json([
            'Poruka' => 'Maraton je obrisan',
            'Delete:' => DB::table('maratons')->where('id', $maraton_id)->delete()
        ]);
    }
}
