<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class Categories extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.inventory.categories.index')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        //Validation
        $this->validate($request, [
            'name' => 'required|unique:categories|max:160',
        ]);

        //Create Category
        $category = new Category;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        //$post->user_id = auth()->user()->id; //This Gets the Currently User Logged in
        $category->save();

        return back()->with('success', 'Category Added');

    }


    public function update(Request $request, $id)
    {
        //Validation
        $this->validate($request, [
            'name' => 'required|max:160',
        ]);

        //Update Category
        $category = Category::find($id);
        $category->name = $request->input('name');
        //$post->user_id = auth()->user()->id; //This Gets the Currently User Logged in
        $category->save();

        return back()->with('success', 'Category Updated');
    }

}
