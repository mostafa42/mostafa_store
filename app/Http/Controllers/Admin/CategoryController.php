<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\Create;
use App\Http\Requests\Admin\Category\Edit;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->get_all(Category::class);
        
        return view('admin.category.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Create $request)
    {
        $input["name"] = [
            "ar" => $request->name_ar ,
            "en" => $request->name_en
        ];

        $input["slug"] = [
            "ar" => $request->slug_ar ,
            "en" => $request->slug_en
        ];

        $input["description"] = [
            "ar" => $request->desc_ar ,
            "en" => $request->desc_en
        ];

        $input["image"] = $this->store_image($request , "image" , "admin/images/categories") ;

        $this->create_fun(Category::class , $input);

        \Alert::success('Created Successfully');

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.category.show' , compact('category')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Edit $request, Category $category)
    {
        $input["name"] = [
            "ar" => $request->name_ar ,
            "en" => $request->name_en
        ];

        $input["slug"] = [
            "ar" => $request->slug_ar ,
            "en" => $request->slug_en
        ];

        $input["description"] = [
            "ar" => $request->desc_ar ,
            "en" => $request->desc_en
        ];

        if( $request->image ){
            $input["image"] = $this->store_image($request , "image" , "admin/images/categories") ;
        }

        $this->update_fun(Category::class , $category->id , $input) ; 

        \Alert::success('Updated Successfully');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->delete_fun(Category::class , $category->id);
        \Alert::success('Deleted Successfully');

        return redirect()->route('category.index');
    }
}
