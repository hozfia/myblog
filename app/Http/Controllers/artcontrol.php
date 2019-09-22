<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\arttow ; 
use App\image ; 
use Illuminate\Support\Facades\DB;

class artcontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $users = arttow::paginate(2);
        // $artecls = DB::table('arts')->Paginate(2); 
        $artecls = arttow::paginate(2) ; 
        return view('index' , compact('artecls')) ; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_post') ; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $img = new image() ; 
        $img->imagename = $imageName ; 
        $art = new arttow() ;
        $art->title = $request->get('title') ; 
        $art->body = $request->get('body') ; 
        $art->user = 'admin' ;  
        $art->save() ; 
        $img = new image() ; 
        $img->imagename = $imageName ; 
        $img->post_id   = $art->id ; 
        $img->save() ; 
        return redirect('home') ; 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $art = DB::table('arts')->where('id',$id)->first();
        $art = arttow::find($id) ;
        return view('show_art' , compact('art')) ; 
    }

    public function showw()
    {
        //
        $art = DB::table('arts')->where('id',3)->first();
        return view('show_art' , compact('art')) ; 
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
    public function destroy($id)
    {
        //
    }
}
