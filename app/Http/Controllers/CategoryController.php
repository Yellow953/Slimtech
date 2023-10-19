<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Log;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function new()
    {
        return view('categories.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->except('allow_rent');
        $data['allow_rent'] = $request->boolean('allow_rent');

        Category::create($data);
        $text = "Category " . $request->name . " created, datetime: " . now();

        Log::create(['text' => $text]);
        return redirect('/categories')->with('success', 'Category was successfully created.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->except('allow_rent');
        $data['allow_rent'] = $request->boolean('allow_rent');

        $category->update($data);
        $text = "Category " . $category->name . " updated, datetime: " . now();

        Log::create(['text' => $text]);
        return redirect('/categories')->with('success', 'Category was successfully updated.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $text = "Category " . $category->name . " deleted, datetime: " . now();

        $category->delete();
        Log::create(['text' => $text]);
        return redirect('/categories')->with('danger', 'Category was successfully deleted');
    }

    public function switch($id)
    {
        $category = Category::findOrFail($id);

        if ($category->active) {
            $category->update(['active' => false]);
            return redirect()->back()->with('success', 'Category was successfully deactivated...');
        } else {
            $category->update(['active' => true]);
            return redirect()->back()->with('success', 'Category was successfully activated...');
        }
    }
}
