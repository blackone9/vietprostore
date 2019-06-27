<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = $this->getSubcategories(0);

        return view('admin.category.index', compact('categories'));
    }

    private function getSubcategories($parent_id, $process_id=null)
    {
        $categories = Category::where('parent_id',$parent_id)->where('id','<>',$process_id)->get();
        if($categories->count()){
            $categories = $categories->map(function($category) use($process_id){

                $category->sub = $this->getSubcategories($category->id,$process_id);
                return $category;
            });
        }
        return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->getSubcategories(0);
        return view('admin.category.create',compact('categories'));
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
            'name' => 'required',
            'parent_id' => 'required|numeric|min:0'
        ]);

        $attributes = $request->only([
            'name','parent_id'
        ]);

        $category = Category::create($attributes);
        return redirect()->route('admin.categories.edit',$category->id)->with('success','thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = $this->getSubcategories(0,$id);
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('categories','category'));
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
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required'
        ]);

        $category = Category::findOrFail($id);

        $credentials = $request->only([
            'name','parent_id'
        ]);

        $category->fill($credentials);

        $category->save();

        return redirect()->route('admin.categories.edit',$category->id)->with('success','Cập nhật thành công!');
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
