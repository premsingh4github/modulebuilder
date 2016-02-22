<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Industry;
use App\Http\Requests\Admin\Industries\CreateIndustryRequest;
use App\Http\Requests\Admin\Industries\UpdateIndustryRequest;

class IndustriesController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $industries = Industry::latest()->paginate(20);

        $no = $industries->firstItem();

        return view('admin.industries.index', compact('industries', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.industries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateIndustryRequest $request)
    {
        $industry = Industry::create($request->all());

        return redirect()->route('admin.industries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $industry = Industry::findOrFail($id);

        return view('admin.industries.show', compact('industry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $industry = Industry::findOrFail($id);
    
        return view('admin.industries.edit', compact('industry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateIndustryRequest $request, $id)
    {       
        $industry = Industry::findOrFail($id);

        $industry->update($request->all());

        return redirect()->route('admin.industries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        
        $industry->delete();
    
        return redirect()->route('admin.industries.index');
    }

}
