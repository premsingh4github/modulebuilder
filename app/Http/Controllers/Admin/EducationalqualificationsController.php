<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Educationalqualification;
use App\Http\Requests\Admin\Educationalqualifications\CreateEducationalqualificationRequest;
use App\Http\Requests\Admin\Educationalqualifications\UpdateEducationalqualificationRequest;

class EducationalqualificationsController extends Controller
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
        $educationalqualifications = Educationalqualification::latest()->paginate(20);

        $no = $educationalqualifications->firstItem();

        return view('admin.educationalqualifications.index', compact('educationalqualifications', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.educationalqualifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateEducationalqualificationRequest $request)
    {
        $educationalqualification = Educationalqualification::create($request->all());

        return redirect()->route('admin.educationalqualifications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $educationalqualification = Educationalqualification::findOrFail($id);

        return view('admin.educationalqualifications.show', compact('educationalqualification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $educationalqualification = Educationalqualification::findOrFail($id);
    
        return view('admin.educationalqualifications.edit', compact('educationalqualification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateEducationalqualificationRequest $request, $id)
    {       
        $educationalqualification = Educationalqualification::findOrFail($id);

        $educationalqualification->update($request->all());

        return redirect()->route('admin.educationalqualifications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $educationalqualification = Educationalqualification::findOrFail($id);
        
        $educationalqualification->delete();
    
        return redirect()->route('admin.educationalqualifications.index');
    }

}
