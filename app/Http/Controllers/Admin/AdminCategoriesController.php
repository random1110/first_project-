<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Countries\AddEditCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', compact(['categories']));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function add(AddEditCategoryRequest $request)
    {
        $validCategory = $request->validate();
        $category = new Category($validCategory);
        if($category->save()){
        return redirect()->route('admin.categories.index')->with(
            [
                'success' => true,
                'message' => 'The Category has been added Successfully '
            ]
            );
    }else{
        return redirect()->back()->with([
            'success' => false,
            'message' => 'There Is Something Wrong'
        ]);
    }
    }
    public function update(AddEditCategoryRequest $request, Category $category)
    {
        $validCategory = $request->validate();
        if($category->update($validCategory)) {
            return redirect()->route('admin.categories.index')->with([
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
    public function delete(Category $category)
    {
        if($category->delete()){
            return redirect()->route('admin.categories.index')->with([
                'success' => true,
                'message' => 'The Categories has been delet Successfully '
            ]);
        }else{
            return redirect()->back()->with([
                'success' => false,
                'message' => 'There Is Something Wrong'
            ]);
        }
    }
    }

