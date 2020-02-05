<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Villes;
use App\Region;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ville = Villes::paginate(10);
       return view('admin.ville.index', compact('ville'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region = Region::all();
        return view('admin.ville.create', compact('region'));
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
            'name' => 'required',
            'region_id' => 'required',
            
        ]);
        $ville = Villes::create([
            'name' => $request->name,
            'region_id' => $request->region_id,
            

        ]);
        return redirect()->back()->with('success','La ville a bien étéavec success.Merci');
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
        $region = Region::all();
        $ville = Villes::findorfail($id);
         return view('admin.ville.edit', compact('region','ville'));
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
        $this->validate($request, [
            'name' => 'required',
            'region_id' => 'required',
        ]);
        $ville = Villes::findorfail($id);

        $ville_data = [
            'name' => $request->name,
            'region_id' => $request->region_id,
        ];
         
        $ville->update($ville_data);
        return redirect()->back()->with('success','La ville a été modifiée avec success.Merci');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ville = Villes::findorfail($id);
        $ville->delete();
        return redirect()->back()->with('succes','La ville a été supprimée avec succes.Merci');
    }
}
    
