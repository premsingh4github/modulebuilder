<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Joblevel;
use App\Http\Requests\Admin\Joblevels\CreateJoblevelRequest;
use App\Http\Requests\Admin\Joblevels\UpdateJoblevelRequest;

class JoblevelsController extends Controller
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
        $joblevels = Joblevel::latest()->paginate(20);

        $no = $joblevels->firstItem();

        return view('admin.joblevels.index', compact('joblevels', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.joblevels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateJoblevelRequest $request)
    {
        $joblevel = Joblevel::create($request->all());

        return redirect()->route('admin.joblevels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $joblevel = Joblevel::findOrFail($id);

        return view('admin.joblevels.show', compact('joblevel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $joblevel = Joblevel::findOrFail($id);
    
        return view('admin.joblevels.edit', compact('joblevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateJoblevelRequest $request, $id)
    {       
        $joblevel = Joblevel::findOrFail($id);

        $joblevel->update($request->all());

        return redirect()->route('admin.joblevels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $joblevel = Joblevel::findOrFail($id);
        
        $joblevel->delete();
    
        return redirect()->route('admin.joblevels.index');
    }

}
