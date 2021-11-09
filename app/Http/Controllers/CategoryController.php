<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.category.index')
            ->with([
                'categories' => Category::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category_create = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        if ($category_create) {
            return redirect()->route('category.index')->with('message', "Category {$request->title} deleted");
        } else {
            return redirect()->route('category.index')->with('message', "Error category {$request->name} not deleted");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $category = Category::where('name', $slug)->first();

        return view('pages.category.show')
            ->with([
                'category' => $category
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return view('pages.category.edit')
            ->width([
                'category' => Category::findOrFail($id)
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $slug)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Category::where('slug', $slug)->get();

        $category_update = $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        if ($category_update) {
            return redirect()->route('category.index')->with('message', "Category {$request->title} updated");
        } else {
            return redirect()->route('category.index')->with('message', "Error category {$request->name} not updated");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
