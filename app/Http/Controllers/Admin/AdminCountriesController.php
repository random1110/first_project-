<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\AddEditCountryRequest as CategoriesAddEditCountryRequest;
use App\Http\Requests\Countries\AddEditCountryRequest;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class AdminCountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return view('dashboard.countries.index', compact(['countries']));
    }

    public function add(AddEditCountryRequest $request) {
        $validCountry = $request->validate();
        $country = new Country($validCountry);
        if($country->save()){
        return redirect()->route('admin.countries.index')->with(
            [
                'success' => true,
                'message' => 'The Country has been added Successfully '
            ]
            );
    }else{
        return redirect()->back()->with([
            'success' => false,
            'message' => 'There Is Something Wrong'
        ]);
    }
}

    /**
     * Update the specified resource in storage.
     */
    public function update(AddEditCountryRequest $request, Country $country)
    {
        $validCountry = $request->validate();
        if($country->update($validCountry)) {
            return redirect()->route('admin.countries.index')->with([
                'success' => true,
                'message' => 'The Country has been Update Successfully '
            ]);
        }else{
            return redirect()->back()->with([
                'success' => false,
                'message' => 'There Is Something Wrong'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Country $country)
    {
        if($country->delete()){
            return redirect()->route('admin.countries.index')->with([
                'success' => true,
                'message' => 'The Country has been delet Successfully '
            ]);
        }else{
            return redirect()->back()->with([
                'success' => false,
                'message' => 'There Is Something Wrong'
            ]);
        }
    }
}
