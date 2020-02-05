<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Str;
use App\Category;
use App\Upload;
use App\Post;
use Auth;



class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::paginate(10);
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
          $tags = Tags::all();
          $category = Category::all();
         return view('admin.post.create', compact('category', 'tags'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         $this->validate($request,[
           'Titre' => 'required',
           'category_id' => 'required',
           'Price' => 'required',
           'Description' => 'required',
           'Etat' => 'required',
           'filename' => 'required',
           'Adresse' => 'required',
           'Phone' => 'required',
           'Ville' => 'required',   
         ]);

        
        
        
        
        foreach ($request->file('filename') as $filename){


           $name=$filename->getClientOriginalName();
        
           $filename->move(public_path().'/images/', $name);

           
            
            $post = Post::create([
        
                'Titre' => $request->Titre,
                'category_id' => $request->category_id,
                'Price' => $request->Price,
                'Description' => $request->Description,
                'Etat' => $request->Etat,
                'filename' => 'public/uploads/post'.$name,
                'Adresse' => $request->Adresse,
                'Phone' => $request->Phone,
                'Ville' => $request->Ville,
                'slug' => Str::slug($request->Titre), 
                'users_id'=> Auth::id(),
                
            ]);

            $pos = Post::create($request->all());

            
            $filename->move(public_path().'/images/', $name);
    
            $data = new Upload;
            $data->filename = $name;
            $data ->post_id = $pos->id;
            $data->save();
         }  
         
         

        
        
        $post->tags()->attach($request->tags);

        
        return redirect()->back()->with('success', 'Votre annonnce a été ajoutée avec success.Merci');
       
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       //
    }
}
