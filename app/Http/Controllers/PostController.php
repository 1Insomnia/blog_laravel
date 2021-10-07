<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('published_at', 'DESC')->get();

        return view('pages.blog.index')->with([
            'posts' => $posts,
            'categories' => $categories
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.blog.create')
            ->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'body' => 'required|string',
            'status' => 'required|integer',
            'image' => 'nullable|image|max:4096',
            'category_id' => 'required|integer',
        ];

        $request->validate($rules);

        // Post::create([
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title , '-'),
        //     'description' => $request->description,
        //     'body' => $request->body,
        //     'status' => $request->status,
        //     'image_path' => $request->image_path,
        //     'user_id' => auth()->user()->id,
        //     'category_id' => $request->category_id,
        //     'published_at' => Carbon::now()->toDateTimeString(),
        // ]);

        // return redirect()->route('post.index')->with('message', "Post {$request->title} created");
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
