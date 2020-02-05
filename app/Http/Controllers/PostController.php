<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\Category;
use App\Tags;
use Auth;
use App\Upload;

class PostController extends Controller
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

            $data = new Upload;
            $data->filename = $name;
            $data ->post_id = $pos->id;
            $data->save();


        } 

        
        $post = Post::create([
            'Titre' => $request->Titre,
            'category_id' => $request->category_id,
            'Price' => $request->Price,
            'Description' => $request->Description,
            'Etat' => $request->Etat,
            'Adresse' => $request->Adresse,
            'Phone' => $request->Phone,
            'Ville' => $request->Ville,
            'slug' => Str::slug($request->Titre),
            'users_id' => Auth::id(), 
        ]);

            $pos = Post::create($request->all());

            
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
        $category = Category::all();
        $tags = Tags::all();
        $post = Post::findorfail($id);
        return view('admin.post.edit', compact('post','tags','category'));
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
        $this->validate($request,[
            'Titre' => 'required',
            'category_id' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Etat' => 'required',
            'Photo' => 'required',
            'Adresse' => 'required',
            'Phone' => 'required',
            'Ville' => 'required',   
        ]);


        
        $post = Post::findorfail($id);

        if ($request->hasFile('file')) {
            $Photo = $request->file('file');;
            $new_Photo =time().$Photo->getClientOriginalName();   
            $Photo->move('public/uploads/post', $new_Photo); 
 
            $imageUpload = new Upload();
            $imageUpload->filename = $imageName;
            $imageUpload->save();
            return response()->json(['success'=>$imageName]);

        $post_data = [
            'Titre' => $request->Titre,
            'category_id' => $request->category_id,
            'Price' => $request->Price,
            'Description' => $request->Description,
            'Etat' => $request->Etat,
            'Photo' => 'public/uploads/post'.$new_Photo,
            'Adresse' => $request->Adresse,
            'Phone' => $request->Phone,
            'Ville' => $request->Ville,
            'slug' => Str::slug($request->Titre) 
            ];

        }
        else{

        $post_data = [
            'Titre' => $request->Titre,
            'category_id' => $request->category_id,
            'Price' => $request->Price,
            'Description' => $request->Description,
            'Etat' => $request->Etat,
            'Adresse' => $request->Adresse,
            'Phone' => $request->Phone,
            'Ville' => $request->Ville,
            'slug' => Str::slug($request->Titre) 
        ];
        }
        
        $post->tags()->sync($request->tags);
        $post->update($post_data);

        
        return redirect()->route('post.index')->with('success', 'Votre annonnce a été modifiée avec success.Merci');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = Post::findorfail($id);
       $post->delete();
       return redirect()->back()->with('success', 'Votre annonce a été supprimée avec success.Merci');
    }

    public function semble_supprime(){
        $post = Post::onlyTrashed()->paginate(10);
        return view('admin.post.supp', compact('post'));
    }

    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->back()->with('success', 'Votre annonce a été restaurée avec success.Merci');
    }

    public function kill($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();
        return redirect()->back()->with('success', 'Votre annonce a été supprimée definitivement avec success.Merci');
    }
}
