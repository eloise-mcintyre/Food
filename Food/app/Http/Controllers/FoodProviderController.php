<?php

namespace App\Http\Controllers;

use App\FoodProvider;
use App\Http\Requests\StoreFoodProvider;
use Illuminate\Http\Request;
// use Validator;

class FoodProviderController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProviders = FoodProvider::all();
        return view('foodList', ['allProviders' => $allProviders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addProvider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(StoreFoodProvider $request)
    {
        FoodProvider::create($request->validated());

        $request->session()->flash('status', 'New food provider saved!');

        return redirect()->route('foodProviders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FoodProvider  $foodProvider
     * @return \Illuminate\Http\Response
     */
    public function show(FoodProvider $foodProvider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FoodProvider  $foodProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodProvider $foodProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FoodProvider  $foodProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodProvider $foodProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FoodProvider  $foodProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodProvider $foodProvider)
    {
        //
    }
}
