<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Auth;
use App\Category;

class PostController extends Controller
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
        $data=Post::all();
        return view('post.index')->with('data',$data);
        // return view('post.index',compact('data','data2','data3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat=Category::pluck('title','id')->toArray();
        //dd($cat);
        return view('post.create')->with('cats',$cat);
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
               $request->validate([
            'title'=>'required|max:225',
            'body'=>'required',
            'featured_img'=>'mimes:jpeg,bmp,png,jpg',
                    ]);
        $data=new Post();
        $data->title=$request->get('title');
        $data->body=$request->get('body');
        $data->cat_id=$request->get('category');
        $data->user_id=Auth::id();

        //image upload
        if($request->hasFile('featured_img')){
            $image=$request->file('featured_img');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('image/');
            $image->move($path,$filename);
            $data->featured_img=$filename;
        }
        $data->save();
        return redirect()->route('post.index')->with('status','Create Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data=Post::findorfail($id);
        return view('post.show')->with('data',$data);


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
        $data=Post::findorfail($id);

       $cats= Category::pluck('title','id')->toArray();
       $cat= key(Category::where('id',$data->cat_id)->pluck('title','id')->toArray());
              // $ct=key(\App\Category::where('id'))

        return view('post.edit',compact('data','cats','cat'));


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
               $request->validate([
            'title'=>'required|max:225',
            'body'=>'required',
            'featured_img'=>'mimes:jpeg,bmp,png,jpg',
        ]);
        $data=Post::findorfail($id);
        $data->title=$request->get('title');
        $data->body=$request->get('body');
        $data->cat_id=$request->get('category');
        $data->user_id=Auth::id();

        //image upload
        if($request->hasFile('featured_img')){
            $image=$request->file('featured_img');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('image/');
            $image->move($path,$filename);
            $data->featured_img=$filename;
        }
        $data->save();
        return redirect()->route('post.index')->with('status','Updated Successfully');


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
         $data=Post::findorfail($id);
         $data->delete();
        return redirect()->route('post.index')->with('status','Deleted Successfully');

    }
}
