<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prog;
use App\Category;
// use App\Category;

class ProgsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $progs = Prog::all();

        return view('admin.progs.index' , compact('progs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $categories = Category::all();
        return view('admin.progs.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
    	
        $prog = new Prog;
        $prog->name = $request->name;
        $prog->company = $request->company;
        $prog->version = $request->version;
        $prog->description = $request->description;
        $prog->URL = $request->URL;
        $prog->size = $request->size;
        //Process image : 
        if(isset($request->image)){
            $image_name = rand() . "." . $request->image->getClientOriginalExtension();
                $prog->image = $image_name;
                $request->image->move('upload/progs',$image_name);
            }
        $prog->category_id = $request->category_id;

        $prog->operting_system = $request->operting_system;
        $prog->type = $request->type;
        $prog->coretype = $request->coretype;
        $prog->lisence = $request->lisence;

        $prog->save();
        return redirect()->route('index-progs');
        // return $request;
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
        $prog = Prog::find($id);

        return view('admin.progs.edit' , compact('prog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update($id , Request $request){
        $prog = Prog::find($id);
        if(isset($request->name)){
            $prog->name = $request->name;            
        }
        $prog->save();
        return redirect()->route('index-progs');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $prog = Prog::find($id);
        $prog->delete();
        return redirect()->route('index-progs');
    }
}



