<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(10);
        return view('admin.category.index', compact('category'));
    }

    public function index1() 
    {
        $category = Category::paginate(10);
        return view('admin.category.communaute', compact('category'));
    }
    
    public function index2() 
    {
        $category = Category::paginate(10);
        return view('admin.category.cours', compact('category'));
    }

    public function index3() 
    {
        $category = Category::paginate(10);
        return view('admin.category.achatvente', compact('category'));
    }

    public function index4() 
    {
        $category = Category::paginate(10);
        return view('admin.category.rencontre', compact('category'));
    }
    
    public function index5() 
    {
        $category = Category::paginate(10);
        return view('admin.category.services', compact('category'));
    }

    public function index6() 
    {
        $category = Category::paginate(10);
        return view('admin.category.immobilier', compact('category'));
    }

    public function index7() 
    {
        $category = Category::paginate(10);
        return view('admin.category.emploi', compact('category'));
    }

    public function index8() 
    {
        $category = Category::paginate(10);
        return view('admin.category.vehicules', compact('category'));
    }

    public function index9() 
    {
        $category = Category::paginate(10);
        return view('admin.category.evenement', compact('category'));
    }






    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required|min:3'
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back()->with('success','La catégorie a été bien ajouté. Merci');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $category = Category::findorfail($id);
        return view('admin.category.edit', compact('category'));
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
        $validate = $this->validate($request, [
            'name' => 'required'
        ]);

        $category_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Category::whereId($id)->update($category_data);
        return redirect()->route('category.index')->with('success', 'La modification a bien été enregistrée.Merci');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findorfail($id);
        $category->delete();
        return redirect()->back()->with('success', 'La suppression de la catégorie a été bien effectuée.Merci');
    }
}
