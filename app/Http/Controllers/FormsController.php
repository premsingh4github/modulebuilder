<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form;
use App\Http\Requests\Forms\CreateFormRequest;
use App\Http\Requests\Forms\UpdateFormRequest;

class FormsController extends Controller
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
        $forms = Form::latest()->paginate(20);

        $no = $forms->firstItem();

        return view('forms.index', compact('forms', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateFormRequest $request)
    {
        $form = Form::create($request->all());

        return redirect()->route('forms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $form = Form::findOrFail($id);

        return view('forms.show', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $form = Form::findOrFail($id);
    
        return view('forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateFormRequest $request, $id)
    {       
        $form = Form::findOrFail($id);

        $form->update($request->all());

        return redirect()->route('forms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        
        $form->delete();
    
        return redirect()->route('forms.index');
    }

}
