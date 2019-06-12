<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
Use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $id = Auth::user()->id;
       //return $id;
      //$seller_id = $request->seller_id;
      //$post->seller_id = $request->seller_id;
      //$seller_id = $request->seller_id;
      //return $seller_id;
     $posts = post::where('seller_id','=',$id)->get();
      return view('user.post.posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.post.addPost');
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
          'name'=>'required',
          'company'=>'required',
          // 'location'=>'required',
          'type'=>'required',
          'flat'=>'required',
          'price'=>'required',
          'image'=>'image|nullable|max:1999',
          'bedroom'=>'required',
          'bathroom'=>'required',
          'balcony'=>'required',
          'parking'=>'required',
          'area'=>'required',
        ]);


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
                $post->seller_id = $request->seller_id;
                $post->who = $request->who;
                $post->category = $request->category;
                $post->type = $request->type;

                $post->name = $request->name;
                $post->company = $request->company;
                $post->location = $request->city;
                $post->flat = implode(",",$request->flat);
                // $post->date = $request->date;
                $post->price = $request->price;
                $post->img = $fileName;
                $post->size = $fileSize;
                $post->bedroom = $request->bedroom;
                $post->bathroom = $request->bathroom;
                $post->balcony = $request->balcony;
                $post->parking = $request->parking;
                $post->area = $request->area;
                $post->city = $request->city;
                $post->houseno = $request->houseno;
                $post->save();

              //  return $request->all();

                return redirect(route('seller_post.index'))->with('message','Post added successfully');

              //  dd($request->flat);

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
        return view('user.post.edit',compact('post'));

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
        'type'=>'required',
      ]);

      /* model */
      $post = post::find($id);
      $post->name = $request->name;
      $post->company = $request->company;
      $post->type = $request->type;
      $post->location = $request->city;
      $post->flat = implode(",",$request->flat);
      // $post->date = $request->date;
      $post->price = $request->price;
      $post->bedroom = $request->bedroom;
      $post->bathroom = $request->bathroom;
      $post->balcony = $request->balcony;
      $post->parking = $request->parking;
      $post->area = $request->area;
      $post->city = $request->city;
      $post->houseno = $request->houseno;
      $post->save();

      return redirect(route('seller_post.index'))->with('message','Post added successfully');

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
