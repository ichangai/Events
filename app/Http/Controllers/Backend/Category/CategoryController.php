<?php

namespace App\Http\Controllers\Backend\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function create()
    {
        return view('backend.admin.pages.category.create');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'title' => ['required', 'string'],
            // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'summary' => ['nullable', 'string', 'max:255'],
        ]);

        $data = $request->all();
        // return $data;
        $slug = Str::slug($request->input('title'));
        $slug_count = Category::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        
        $title = $request->input('title');
        $summary = $request->input('summary');

        
            // cloudinary
            if ($request->image == "") {
               return back()->with("error", "Please upload an image");
            } else {
                $imageUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                    'folder' => 'ForexArena Category'
                ])->getSecurePath();
            }

        
        // dd($uploadedFileUrl);

        $status = Category::create([
            "title" => $title,
            "image" => $imageUrl,
            "summary" => $summary,
            "slug" => $slug
         ]);
         
        if($status){
            return redirect()->route('admin.category.index')->with('success', 'Successfully updated the category');
        }else{
            return back()->withErrors("error", "Something went wrong");
        }
    }

    public function index()
    {
        $categories = Category::all();
        return view('backend.admin.pages.category.index', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::findorFail($id);
        return view('backend.admin.pages.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findorFail($id);
        if ($category) {
            // return $request->all();
            $this->validate($request, [
                'title' => ['nullable', 'string', 'max:255'],
                // 'image' => 'nullable, image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'summary' => ['nullable', 'string', 'max:255'],
            ]);

            $data = $request->all();
            $slug = Str::slug($request->input('title'));
            $slug_count = Category::where('slug', $slug)->count();
            if ($slug_count > 0) {
                $slug = time() . '-' . $slug;
            }
            $data['slug'] = $slug;

            $title = $request->input('title');
            $summary = $request->input('summary');
            //  return $request->file('image');

            
            // cloudinary
            if ($request->image == "") {
                $imageUrl = $category->image;
            } else {
                $imageUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                    'folder' => 'ForexArena Category'
                ])->getSecurePath();
            }

            $status = $category->fill([
                "title" => $title,
                "image" => $imageUrl,
                "summary" => $summary,
                "slug" => $slug
            ])->save();

            if ($status) {
                return redirect()->route('admin.category.index')->with('success', 'Successfully created category');
            } else {
                return redirect()->withErrors('error', 'Something went wrong');
            }
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $status = $category->delete();
            if ($status) {
                return redirect()->route('admin.category.index')->with('success', 'Successfully deleted category');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }

    public function singlecategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        // return $category->events;

        return view('frontend.components.events.eventList.index', compact('category'));

    }

    
}
