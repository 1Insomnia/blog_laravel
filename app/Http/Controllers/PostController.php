<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.post.index')
            ->with([
                // 'posts' => Post::where('status', 1)->orderBy('published_at')->get(),
                'posts' => Post::orderBy('published_at', 'DESC')->get(),
                'categories' => Category::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.post.create')
            ->with([
                'categories' => Category::all()
            ]);
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
            'category_id' => 'required|integer'
        ];

        $request->validate($rules);
        $request->image ? $image_name = $request->image->store('posts') : $image_name = null;

        $post_create = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'body' => $request->body,
            'status' => $request->status,
            'image_path' => $image_name,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'published_at' => Carbon::now()->toDateTimeString()
        ]);

        if ($post_create) {
            return redirect()->route('blog.index')->with('message', "Post {$request->title} created");
        } else {
            return redirect()->route('blog.index')->with('message', "Error during creation of post {$request->title}");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        return view('pages.post.show')
            ->with([
                'post' => Post::where('slug', $slug)->first()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit(string $slug)
    {
        return view('pages.post.edit')
            ->with([
                'post' => Post::where('slug', $slug)->first(),
                'categories' => Category::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'body' => 'required|string',
            'status' => 'required|integer',
            'image' => 'nullable|image|max:4096',
            'category_id' => 'required|integer'
        ];

        $request->validate($rules);
        $request->image ? $image_name = $request->image->store('posts') : $image_name = null;

        $post_update = $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'body' => $request->body,
            'status' => $request->status,
            'image_path' => $image_name,
            'user_id' => $post->user->id,
            'category_id' => $request->category_id,
            'published_at' => $post->published_at,
        ]);

        if ($post_update) {
            return redirect()->route('blog.index')->with('message', "Post {$request->title} updated");
        } else {
            return redirect()->route('blog.index')->with('message', "Error during update of post {$request->title}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Post::where('slug', $slug)->first()->delete()){
            return redirect()->route('blog.index')->with('message', 'Blog post deleted');
        } else {
            return redirect()->route('blog.index')->with('message', 'An error has occured during deletion');
        }
    }
}
