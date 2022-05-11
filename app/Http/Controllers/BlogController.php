<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use Carbon\Carbon;

class BlogController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-blog|crear-blog|editar-blog|borrar-blog')->only('index');
         $this->middleware('permission:crear-blog', ['only' => ['create','store']]);
         $this->middleware('permission:editar-blog', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-blog', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
         return view('blogs.index');
       
    }

    public function create()
    {
        //return view('blogs.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Blog::$rules);
    
        $event=Blog::create($request->all());
    
        //return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $event)
    {
        $event= Blog::all();
        return response()->json($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // return view('blogs.editar',compact('blog'));

       $event = Blog::find($id);
       $event->start=Carbon::createFromFormat('Y-m-d H:i:s', $event->start)->format('Y-m-d');
       $event->end=Carbon::createFromFormat('Y-m-d H:i:s', $event->end)->format('Y-m-d');
       return response()->json($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $event)
    {   request()->validate(Blog::$rules);
        $event->update($request->all());
        return response()->json($event);
         //request()->validate([
            //'titulo' => 'required',
            //'contenido' => 'required',
       //]);
    
        //$blog->update($request->all());
    
        //return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $event=Blog::find($id)->delete();

        return response()->json($event);
       // $blog->delete();
    
        //return redirect()->route('blogs.index');
    }
}
