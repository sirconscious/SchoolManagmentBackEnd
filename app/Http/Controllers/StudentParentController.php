<?php

namespace App\Http\Controllers;

use App\Models\Parente;
use App\Http\Requests\StoreParenteRequest;
use App\Http\Requests\UpdateParenteRequest;
use App\Http\Resources\ParenteResource;
use DateTime;

class StudentParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParenteRequest $request)
    {
        // dd($request) ;
        $formFileds = $request->validated() ; 
        // $formFileds["last_Login_date"] =( new DateTime())->format('Y-m-d') ;
        $parente= Parente::create($formFileds) ;
        // dd($formFileds) ;
        return new ParenteResource($parente) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Parente $parente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParenteRequest $request, Parente $parente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parente $parente)
    {
        //
    }
}
