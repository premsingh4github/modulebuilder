<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questioncategory;
use App\Http\Requests\Admin\Questioncategories\CreateQuestioncategoryRequest;
use App\Http\Requests\Admin\Questioncategories\UpdateQuestioncategoryRequest;

class QuestioncategoriesController extends Controller
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
        $questioncategories = Questioncategory::latest()->paginate(20);

        $no = $questioncategories->firstItem();

        return view('admin.questioncategories.index', compact('questioncategories', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.questioncategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateQuestioncategoryRequest $request)
    {
        $questioncategory = Questioncategory::create($request->all());

        return redirect()->route('admin.questioncategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $questioncategory = Questioncategory::findOrFail($id);

        return view('admin.questioncategories.show', compact('questioncategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $questioncategory = Questioncategory::findOrFail($id);
    
        return view('admin.questioncategories.edit', compact('questioncategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateQuestioncategoryRequest $request, $id)
    {       
        $questioncategory = Questioncategory::findOrFail($id);

        $questioncategory->update($request->all());

        return redirect()->route('admin.questioncategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $questioncategory = Questioncategory::findOrFail($id);
        
        $questioncategory->delete();
    
        return redirect()->route('admin.questioncategories.index');
    }

}
