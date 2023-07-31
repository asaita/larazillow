<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Listing/Index',//bu index.vue sayfası
            ['listings' => Listing::all()] //buradan vue sayfasına gidiyor
            
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Listing::create([
            ...$request->all(),
            ...$request->validate([
                'beds'=>'required|integer|min:0|max:10',
                'baths'=>'required|integer|min:0|max:10',
                'area'=>'required|integer|min:30|max:500',
                'city'=>'required',
                'code'=>'required',
                'street'=>'required',
                'street_nr'=>'required|integer|min:1|max:1000',
                'price'=>'required|integer|min:1|max:20000000',            ])
        ]);

        return redirect()->route('listing.index')->with('success','listing was created!');
       
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        
        return inertia(
            'Listing/Show',//bu index.vue sayfası
            ['listing' => $listing] //buda data
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
