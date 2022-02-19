<?php

namespace App\Http\Controllers;

use DB;
use App\Exports\LicenseExport;
use EloquentBuilder;
use App\Models\Productkey;
use App\Models\Customer;
use App\Models\Status;
use App\Models\Manufacturer;
use Carbon\Carbon;
use App\Models\License;
use Illuminate\Http\Request;


class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenses = License::all();

        return view('welcome')
            ->with('licenses', $licenses)
            ->with('productkeys', Productkey::find('id'))
            ->with('customers', Customer::find('id'))
            ->with('statuces', Status::find('id'))
            ->with('manufacturers', Manufacturer::find('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('licenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name',
            'version',
            'product_key_id',
            'customer_id',
            'manufacturer_id',
            'start_date',
            'end_date',
            'status_id',
        ]);

        License::create($request->all());

        return redirect()->route('licenses.index')
            ->with('success', 'License created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\License  $license
     * @return \Illuminate\Http\Response
     */
    public function show(License $license)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\License  $license
     * @return \Illuminate\Http\Response
     */
    public function edit(License $license)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\License  $license
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, License $license)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\License  $license
     * @return \Illuminate\Http\Response
     */
    public function destroy(License $license)
    {
        //
    }
}
