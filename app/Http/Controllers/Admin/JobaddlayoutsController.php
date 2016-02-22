<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobaddlayout;
use App\Http\Requests\Admin\Jobaddlayouts\CreateJobaddlayoutRequest;
use App\Http\Requests\Admin\Jobaddlayouts\UpdateJobaddlayoutRequest;

class JobaddlayoutsController extends Controller
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
        $jobaddlayouts = Jobaddlayout::latest()->paginate(20);

        $no = $jobaddlayouts->firstItem();

        return view('admin.jobaddlayouts.index', compact('jobaddlayouts', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.jobaddlayouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateJobaddlayoutRequest $request)
    {
        $jobaddlayout = Jobaddlayout::create($request->all());

        return redirect()->route('admin.jobaddlayouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $jobaddlayout = Jobaddlayout::findOrFail($id);

        return view('admin.jobaddlayouts.show', compact('jobaddlayout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $jobaddlayout = Jobaddlayout::findOrFail($id);
    
        return view('admin.jobaddlayouts.edit', compact('jobaddlayout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateJobaddlayoutRequest $request, $id)
    {       
        $jobaddlayout = Jobaddlayout::findOrFail($id);

        $jobaddlayout->update($request->all());

        return redirect()->route('admin.jobaddlayouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $jobaddlayout = Jobaddlayout::findOrFail($id);
        
        $jobaddlayout->delete();
    
        return redirect()->route('admin.jobaddlayouts.index');
    }

}
