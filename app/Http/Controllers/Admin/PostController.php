<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;

class PostController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:admin');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = post::all();
      return view('AdminPanel.post.posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.post.addPost');
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
          'category'=>'required',
          'type'=>'required',
          'name'=>'required',
          'company'=>'required',
          // 'location'=>'required',
          'flat'=>'required',
          'price'=>'required',
          'image'=>'image|nullable|max:1999',
          'bedroom'=>'required',
          'bathroom'=>'required',
          'balcony'=>'required',
          'parking'=>'required',
          'area'=>'required',
          'who'=>'required',
          'city'=>'required',
          'locality'=>'required',





        ]);

      //  if ($request->hasFile('image')) {
          // $imageName = $request->image->getClientOriginalName();
          // $img = $request->image->storeAs('public/upload',$imageName);
      //    $imageName = $request->image->store('public');
          //return 'yes';

          //$request->image->store('public');
    //    }

        if ($request->hasFile('image')) {

        $fileSize = $request->image->getClientSize();
        $fileName = $request->image->getClientOriginalName();
        //return $fileName;
        //$request->image->storeAs('public/postImage','$fileName');
        $request->image->storeAs('public/postImage',$fileName);


        // $file = new File;
        // $file->name = $fileName;
        // $file->size = $fileSize;
        // $file->save();
        //return 'yes';
      }
      else {
        $fileName = 'noimage';
        $fileSize = '0';
      }

        /* model */
        $post = new post;
        $post->category = $request->category;
        $post->type = $request->type;

        $post->name = $request->name;
        $post->company = $request->company;
        $post->location = $request->location;
        $post->flat = implode(",",$request->flat);

        $post->price = $request->price;
        $post->img = $fileName;
        $post->size = $fileSize;
        $post->bedroom = $request->bedroom;
        $post->bathroom = $request->bathroom;
        $post->balcony = $request->balcony;
        $post->parking = $request->parking;
        $post->area = $request->area;
        $post->who = $request->who;
        $post->city = $request->city;
        $post->locality = $request->locality;
        $post->houseno = $request->houseno;




        $post->save();

      //  return $request->all();

        return redirect(route('post.index'))->with('message','Post added successfully');

      //  dd($request->flat);

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
        $post = post::where('id',$id)->first();
        return view('AdminPanel.post.edit',compact('post'));

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
        'category'=>'required',
        'type'=>'required',
        'name'=>'required',
        'company'=>'required',
        // 'location'=>'required',
        'flat'=>'required',
        'price'=>'required',
        'image'=>'image|nullable|max:1999',
        'bedroom'=>'required',
        'bathroom'=>'required',
        'balcony'=>'required',
        'parking'=>'required',
        'area'=>'required',
        'who'=>'required',
        'city'=>'required',
        'locality'=>'required',
      ]);

      if ($request->hasFile('image')) {

      $fileSize = $request->image->getClientSize();
      $fileName = $request->image->getClientOriginalName();
      $request->image->storeAs('public/postImage',$fileName);

    }
    else {
      $fileName = 'noimage';
      $fileSize = '0';
    }

      /* model */
      $post = post::find($id);
      $post->category = $request->category;
      $post->type = $request->type;
      $post->name = $request->name;
      $post->company = $request->company;

      $post->flat = implode(",",$request->flat);

      $post->price = $request->price;
      $post->img = $fileName;
      $post->bedroom = $request->bedroom;
      $post->bathroom = $request->bathroom;
      $post->balcony = $request->balcony;
      $post->parking = $request->parking;
      $post->area = $request->area;
      $post->area = $request->area;
      $post->who = $request->who;
      $post->city = $request->city;
      $post->locality = $request->locality;
      $post->houseno = $request->houseno;

      $post->save();

      return redirect(route('post.index'))->with('message','Post updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back()->with('message','Post deleted successfully');
    }
}
