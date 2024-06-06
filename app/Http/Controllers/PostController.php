<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(Request $request): View
   {
      $search = $request->input('search');

      $posts = Post::query();

      if ($search) {
         $posts->where(function ($query) use ($search) {
            $query->where('judul', 'LIKE', '%' . $search . '%')
               ->orWhere('deskripsi', 'LIKE', '%' . $search . '%');
         })->orWhereHas('categories', function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
         });
      }

      $posts = $posts->inRandomOrder()->paginate(1000);

      return view('posts.index', compact('posts', 'search'));
   }


   public function postsByCategory(Category $category, Request $request)
   {
      $search = $request->input('search');
      $posts = $category->posts()->paginate(100);

      return view('posts.index', compact('posts', 'search'));
   }


   public function admin(Request $request)
   {
      $search = $request->input('search');
      $query = Post::query();

      if ($search) {
         $query->where(function ($query) use ($search) {
            $query->where('judul', 'LIKE', '%' . $search . '%')
               ->orWhere('deskripsi', 'LIKE', '%' . $search . '%');
         })->orWhereHas('categories', function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
         });
      }

      $posts = $query->latest()->paginate(10);
      return view('posts.admin', compact('posts', 'search'));
   }

   public function create(): View
   {
      $categories = Category::all();
      return view('posts.create', compact('categories'));
   }

   public function store(Request $request): RedirectResponse
   {
      //validate form
      $this->validate($request, [
         'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:10048',
         'judul' => 'required|max:32',
         'deskripsi' => 'required|min:1',
         'di_upload_oleh' => 'required|min:1',
         'categories' => 'required|array'
      ]);

      //upload image
      $image = $request->file('image');
      $image->storeAs('public/posts', $image->hashName());

      //create post
      $post = Post::create([
         'image' => $image->hashName(),
         'judul' => $request->judul,
         'deskripsi' => $request->deskripsi,
         'di_upload_oleh' => $request->di_upload_oleh
      ]);

      //attach categories
      $post->categories()->attach($request->categories);

      //redirect to index
      return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
   }

   public function show(string $id): View
   {
      $post = Post::findOrFail($id);
      $posts = Post::inRandomOrder()->get();

      return view('posts.show', compact('post', 'posts'));
   }

   public function destroy($id): RedirectResponse
   {
      // Get post by id 
      $post = Post::findOrFail($id);

      // Delete image
      Storage::delete('public/posts/' . $post->image);

      // Delete post
      $post->delete();

      // Redirect to admin page
      return redirect()->route('admin')->with(['success' => 'Data Berhasil Dihapus!']);
   }

   public function edit(string $id): View
   {
      //get post by Id
      $post = Post::findOrFail($id);
      $categories = Category::all();
      $selectedCategories = $post->categories->pluck('id')->toArray();

      //render view with post
      return view('posts.edit', compact('post', 'categories', 'selectedCategories'));
   }

   public function update(Request $request, $id): RedirectResponse
   {
      //validate form
      $this->validate($request, [
         'image' => 'image|mimes:jpeg,jpg,png,gif|max:10048',
         'judul' => 'required|max:32',
         'deskripsi' => 'required|min:1',
         'di_upload_oleh' => 'required|min:1',
         'categories' => 'required|array'
      ]);

      //get post by ID
      $post = Post::findOrFail($id);

      //check if image is uploaded
      if ($request->hasFile('image')) {
         //upload new image
         $image = $request->file('image');
         $image->storeAs('public/posts', $image->hashName());

         //delete old image 
         Storage::delete('public/posts/' . $post->image);

         //update post with new image
         $post->update([
            'image' => $image->hashName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'di_upload_oleh' => $request->di_upload_oleh
         ]);
      } else {
         //update post without image
         $post->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'di_upload_oleh' => $request->di_upload_oleh
         ]);
      }

      //sync categories
      $post->categories()->sync($request->categories);

      //redirect to admin
      return redirect()->route('admin')->with(['success' => 'Data Berhasil Diubah!']);
   }
}
