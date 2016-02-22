<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobcategory;
use App\Http\Requests\Admin\Jobcategories\CreateJobcategoryRequest;
use App\Http\Requests\Admin\Jobcategories\UpdateJobcategoryRequest;

class JobcategoriesController extends Controller
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
        $jobcategories = Jobcategory::latest()->paginate(20);

        $no = $jobcategories->firstItem();

        return view('admin.jobcategories.index', compact('jobcategories', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.jobcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateJobcategoryRequest $request)
    {
        $jobcategory = Jobcategory::create($request->all());

        return redirect()->route('admin.jobcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $jobcategory = Jobcategory::findOrFail($id);

        return view('admin.jobcategories.show', compact('jobcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $jobcategory = Jobcategory::findOrFail($id);
    
        return view('admin.jobcategories.edit', compact('jobcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateJobcategoryRequest $request, $id)
    {       
        $jobcategory = Jobcategory::findOrFail($id);

        $jobcategory->update($request->all());

        return redirect()->route('admin.jobcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $jobcategory = Jobcategory::findOrFail($id);
        
        $jobcategory->delete();
    
        return redirect()->route('admin.jobcategories.index');
    }

}
