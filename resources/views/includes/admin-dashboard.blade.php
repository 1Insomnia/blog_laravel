<div class="wrapper">
    <header>
        <div class="border-b border-accent-2 flex items-center">
            <button role="button" class="tab-button flex items-center py-4 px-6 bg-accent-2" data-tab-target="#posts">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <span class="ml-2">
                    Posts
                </span>
            </button>
            <button role="button" class="tab-button flex items-center py-4 px-6" data-tab-target="#categories">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <span class="block ml-2">
                    Categories
                </span>
            </button>
        </div>
    </header>
    <div>
        {{-- Posts Data Display --}}
        <article class="tab-content" id="posts">
            <div class="pt-12 mb-4">
                {{-- Create New Post Link --}}
                <a class="btn-success" href="{{ route('blog.create') }}">
                    Create Post
                </a>
            </div>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-md font-semibold tracking-wide text-left text-accent-8 bg-accent-2 uppercase border-b border-accent-6">
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Title</th>
                                <th class="px-4 py-3">Category</th>
                                <th class="px-4 py-3">Description</th>
                                <th class="px-4 py-3">Publish Date</th>
                                <th class="px-4 py-3">Edit</th>
                                <th class="px-4 py-3">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-sm">
                            @foreach ($posts as $post)
                                <tr class="text-accent-6">
                                    {{-- ID Data --}}
                                    <td class="px-3 py-2 border">
                                        {{ $post->id }}
                                    </td>
                                    {{-- Title Data --}}
                                    <td class="px-3 py-2 border">
                                        {{ $post->title }}
                                    </td>
                                    {{-- Category --}}
                                    <td class="px-3 py-2 border">
                                        {{ $post->category->name }}
                                    </td>
                                    <td class="px-3 py-2 border">
                                        {{ $post->description }}
                                    </td>
                                    <td class="px-3 py-2 border">
                                        {{ $post->publishedAt() }}
                                    </td>
                                    <td class="px-3 py-2 border">
                                        <a class="btn-warning" href="{{ route('blog.edit', $post->slug) }}">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="px-3 py-2 border">
                                        <form action="{{ route('blog.destroy', $post->slug) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-error" type="submit" role="button">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </article>
        {{-- Categories Data Display --}}
        <article class="tab-content hidden" id="categories">
            <div class="pt-12 mb-4">
                <a class="btn-success" href="{{ route('category.create') }}">
                    Create Category
                </a>
            </div>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-md font-semibold tracking-wide text-left text-accent-8 bg-accent-2 uppercase border-b border-accent-6">
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Number/Posts</th>
                                <th class="px-4 py-3">Edit</th>
                                <th class="px-4 py-3">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-sm">
                            @foreach ($categories as $category)
                                <tr class="text-accent-6">
                                    {{-- ID Data --}}
                                    <td class="px-3 py-2 border">
                                        {{ $category->id }}
                                    </td>
                                    <td class="px-3 py-2 border">
                                        {{ $category->name }}
                                    </td>
                                    <td class="px-3 py-2 border">
                                        {{ $category->post->count() }}
                                    </td>
                                    <td class="px-3 py-2 border">
                                        <a class="btn-warning" href="{{ route('category.edit', $category->id) }}">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="px-3 py-2 border">
                                        <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-error" type="submit" role="button">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </article>
    </div>
</div>
