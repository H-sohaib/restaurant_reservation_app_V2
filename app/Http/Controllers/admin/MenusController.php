<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

// * name 
// * description
// * image
// * price
// * category_id
class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin-panel.menus.menus',
            [
                'menus' => Menu::orderBy('id', 'desc')->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.menus.create', ['categories' => Category::get()]);
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
                'price' => 'required|numeric',
                'image' => 'nullable|image|max:5048'
            ]
        );

        // store the data 
        $image_path = 'uploads/' . $this->store_image($request);
        Menu::create([
            'name' => $request->name,
            'description' => $request->description ? $request->description : '',
            'price' => $request->price,
            'special' => (bool) $request->special,
            'category_id' => $request->category_id,
            'image_path' => $image_path ? $image_path :  ''
        ]);


        return redirect(route('admin.menus.index'))->with('message', 'Catogory created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin-panel.menus.edit', [
            'menu' => Menu::findOrFail($id),
            'categories' => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd((bool) $request->special);
        // validate form 
        $request->validate(
            [
                'name' => 'required|max:255',
                'price' => 'required|numeric',
                'image' => 'nullable|image|max:5048'
            ]
        );
        // ***************************************
        if ($request->hasFile('image')) :
            // delete old image if existe
            $pre_image_path =  Menu::findOrFail($id)->image_path;
            if ($pre_image_path) {
                File::delete($pre_image_path);
            }

            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'image_path' => 'uploads/' . $this->store_image($request),
                'price' => $request->price,
                'special' => (bool) $request->special,
                'category_id' => $request->category_id,
            ];
        else :

            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'special' => (bool) $request->special,
                'category_id' => $request->category_id,
            ];
        endif;

        Menu::findOrFail($id)->update($data);

        return redirect(route('admin.menus.index'))->with('message', "Plate'" . $request->name . "' updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $menu = Menu::findOrFail($id);
        // delete category pic 
        if ($menu->image_path && !File::delete($menu->image_path)) {
            return redirect(route('admin.menus.index'))->with('error', "We couldn't delete this menu ! please try again.");
        };
        $menu->delete();

        return redirect(route('admin.menus.index'))->with('message', 'Menu deleted successfully');
    }


    private function store_image(Request $request)
    {
        if ($request->hasFile('image')) {
            $image_name = uniqid() . '.' . $request->name . '.' . $request->image->extension();

            // catch any error during image save to redirect the index with a error msg
            try {
                $path = $request->file('image')->storeAs(
                    'menus_imgs',
                    $image_name,
                    ['disk' => 'public_uploads']
                );
            } catch (\Throwable $e) {
                redirect(route('admin.menus.index'))->with('error', 'error during save the image ! please try again .');
            }


            return $path;
        } else
            return null;
    }
}