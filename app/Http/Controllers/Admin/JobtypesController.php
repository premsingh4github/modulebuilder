<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobtype;
use App\Http\Requests\Admin\Jobtypes\CreateJobtypeRequest;
use App\Http\Requests\Admin\Jobtypes\UpdateJobtypeRequest;

class JobtypesController extends Controller
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
        $jobtypes = Jobtype::latest()->paginate(20);

        $no = $jobtypes->firstItem();

        return view('admin.jobtypes.index', compact('jobtypes', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.jobtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateJobtypeRequest $request)
    {
        $jobtype = Jobtype::create($request->all());

        return redirect()->route('admin.jobtypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $jobtype = Jobtype::findOrFail($id);

        return view('admin.jobtypes.show', compact('jobtype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $jobtype = Jobtype::findOrFail($id);
    
        return view('admin.jobtypes.edit', compact('jobtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateJobtypeRequest $request, $id)
    {       
        $jobtype = Jobtype::findOrFail($id);

        $jobtype->update($request->all());

        return redirect()->route('admin.jobtypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $jobtype = Jobtype::findOrFail($id);
        
        $jobtype->delete();
    
        return redirect()->route('admin.jobtypes.index');
    }

}
