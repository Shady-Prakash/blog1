<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use Auth;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $data=Category::all();
        return view('category.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
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
        $data=new Category();
        $data->title=$request->get('title');

        $data->save();
        return redirect()->route('category.index')->with('status','Create Successfully');
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
         $data=Category::findorfail($id);
        return view('category.show')->with('data',$data);

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
         $data=Category::findorfail($id);
        return view('category.edit')->with('data',$data);

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
        $data=Category::findorfail($id);
        $data->title=$request->get('title');


        $data->save();
        return redirect()->route('category.index')->with('status','Updated Successfully');


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
        $data=Category::findorfail($id);
        $data->delete();
         return redirect()->route('category.index')->with('status','Deleted Successfully');

    }

}
