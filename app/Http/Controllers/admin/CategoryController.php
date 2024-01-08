<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin-panel.categories.categories',
            ['categories' => category::orderBy('id', 'desc')->get()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate form 
        $request->validate(
            [
                'name' => 'required|max:255',
                'image' => 'nullable|image|max:5048'
            ]
        );
        // store the data 
        $image_path = 'uploads/' . $this->store_image($request);
        if ($image_path) {
            Category::create([
                'name' => $request->name,
                'description' => $request->description ? $request->description : '',
                'image_path' => $image_path
            ]);
        } else {
            Category::create([
                'name' => $request->name,
                'description' => $request->description ? $request->description : '',
            ]);
        }

        return redirect(route('admin.categories.index'))->with('message', 'catogory created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view(
            'admin-panel.categories.edit',
            [
                'category' => Category::findOrFail($id)
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate form 
        $request->validate(
            [
                'name' => 'required|max:255',
                'image' => 'nullable|image|max:5048'
            ]
        );
        // *************
        if ($request->hasFile('image')) :
            // delete old image if existe
            $pre_image_path =  Category::findOrFail($id)->image_path;
            if ($pre_image_path) {
                File::delete($pre_image_path);
            }

            // update row
            Category::findOrFail($id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image_path' => 'uploads/' . $this->store_image($request)
            ]);
        else :
            Category::findOrFail($id)->update($request->except(['_token', '_method']));
        endif;
        return redirect(route('admin.categories.index'))->with('message', "catogory '" . $request->name . "' updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        // delete category pic 
        if ($category->image_path && !File::delete($category->image_path)) {
            return redirect(route('admin.categories.index'))->with('error', "we couldn't delete this category ! please try again.");
        }
        $category->delete();

        return redirect(route('admin.categories.index'))->with('message', 'categoriy deleted successfully');
    }

    private function store_image(Request $request)
    {
        if ($request->hasFile('image')) {
            $image_name = uniqid() . '.' . $request->name . '.' . $request->image->extension();

            try {
                $path = $request->file('image')->storeAs(
                    'categories_imgs',
                    $image_name,
                    ['disk' => 'public_uploads']
                );
            } catch (\Throwable $e) {
                redirect(route('admin.categories.index'))->with('error', 'error during save the image ! please try again .');
            }


            return $path;
        } else
            return null;
    }
}