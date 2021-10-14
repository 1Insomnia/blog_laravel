 <div
     class="block border border-lighter w-full mb-10 p-5 rounded shadow-lg transition ease-out duration-300 transform hover:-translate-y-4 hover:shadow-xl">
     <div>
         <img class="block object-cover w-full h-52 mb-5" src="https://source.unsplash.com/random" alt="">
     </div>
     <article class="flex flex-col justify-between flex-1">
         <div>
             {{-- Post Title --}}
             <div class="">
                 <h2 class="heading-2 mb-6">
                     {{ $post->title }}
                 </h2>
                 <a href=""
                     class="block mb-2 underline text-success transition duration-200 ease-linear hover:text-success-light">
                     <a href="{{ route('category.show', $post->category->name) }}">
                         # {{ $post->category->name }}
                     </a>
                 </a>
             </div>
             {{-- Post Description --}}
             <p class="mb-6 paragrah-base font-serif">
                 {{ $post->description }}
             </p>
         </div>

         <div class="flex items-center justify-between text-sm text-light">
             <a class="flex items-center text-success transition duration-200 ease-linear hover:text-success-light"
                 href="{{ route('post.show', $post->slug) }}">
                 <span class="block">Read More</span>
                 <span class="ml-2 block">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M17 8l4 4m0 0l-4 4m4-4H3" />
                     </svg>
                 </span>
             </a>
             <span class="">{{ $post->publishedAt() }}</span>
         </div>
         @can('admin')
             <div class="mt-8 ml-auto">
                 <button class="btn-warning">
                     <a href="{{ route('post.edit', $post->slug) }}">
                         Update Post
                     </a>
                 </button>
                 <button class="btn-error" id="deletePostBtn" type="submit" data-slug="{{ $post->slug }}">
                     Delete Post
                 </button>
             </div>
         @endcan
     </article>
 </div>
