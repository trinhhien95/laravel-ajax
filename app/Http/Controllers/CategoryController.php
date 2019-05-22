<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listCategory = Category::paginate(5);
        return view('backend.category.index',['data' => $listCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return redirect()->route('category.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required|unique:category',
        'description' => 'required'
        ]);
        $cate = Category::create($request->all());
        return response()->json($cate);
        //return redirect()->route('category.index',['message' => 'Add category Successfuly.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('backend.editCategory',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'id' => 'required|unique:category|min:1',
        'name' => 'required|unique:category',
        'description' => 'required'
        ]);
        $editCategory = Category::findOrFail($request->id);
        $editCategory->name = $request->name;
        $editCategory->description = $request->description;
        $editCategory->save();
        return redirect()->route('category.index');
        // $listCategory = Category::all();
        // return view('backend.category',['data' => $listCategory,'message' => 'Update Category Successfuly.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCategory = Category::findOrFail($id);
        $deleteCategory->delete();
        return redirect()->route('category.index',['message' => 'Delete category Successfuly.']);
    }
}
