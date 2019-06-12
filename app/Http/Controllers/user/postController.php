<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;

class postController extends Controller
{
    // public function index()
    // {
    //   $products = post::orderBy('created_at', 'desc')->paginate(10);
    //   return view('search.search',compact('products'));
    // }

    public function search(Request $request)
    {
      if (isset($request->flat)) {
        //echo  $flat = $request->flat;

          $flat = $request->flat;
          $query = $request->input('query');

          $products = post::whereIn('flat',explode(',',$flat)) //here 'like' is an operator for searching data
                                ->where('location','LIKE',"%$query%")
                                ->paginate(10);
          //dd($products);

        //  return $products;
         response()->json($products); //return to ajax

         return view('search.ajax-post',compact('products'));

        }




     else {
       $this->validate($request,[
         'query'=>'required|min:3',
       ]);
       $query = $request->input('query');
       $products = post::where('location','LIKE',"%$query%") //here 'like' is an operator for searching data
                             ->paginate(10);
                             //->setpath('');
       // $products->appends([
       //   'search/buy'=>$query
       // ]);
  //return $products;
     return view('search.buy',compact('products'));
     // code...
   }


 }


    //   if ($request->sort == 3) {
    //    $products = Post::where('location','LIKE',"%$query%") ->orderby('price', 'asc')->paginate(3);
    //    dd($products);
    //    // response()->json($products); //return to ajax
    //    //
    //    // return view('search.ajax-post',compact('products'));
    //
    //  }elseif ($request->sort==4) {
    //    $products = Post::where('location','LIKE',"%$query%") ->orderby('price', 'desc')->paginate(3);
    //    dd($products);
    //  }



 //    public function buysearch(Request $request)
 //    {
 //      $this->validate($request,[
 //        'query'=>'required|min:3',
 //      ]);
 //      $query = $request->input('query');
 //      $products = post::where('location','LIKE',"%$query%") //here 'like' is an operator for searching data
 //                            ->paginate(2);
 //                            //->setpath('');
 //      // $products->appends([
 //      //   'search/buy'=>$query
 //      // ]);
 // //return $products;
 //    return view('search.buy',compact('products'));
  //  }



    public function rent(Request $request)
    {
      // $this->validate($request,[
      //   'query'=>'required|min:3',
      // ]);
      if (isset($request->flat)) {
        //echo  $flat = $request->flat;

          $flat = $request->flat;
      $query = $request->input('query');
      $products = post::whereIn('flat',explode(',',$flat))
                            ->where('category','LIKE',"rent") //here 'like' is an operator for searching data
                            ->where('location','LIKE',"%$query%")
                            ->orderby('price', 'desc')
                            ->paginate(10);
      response()->json($products); //return to ajax
    return view('search.ajax-post',compact('products'));
      }
      else {
        $query = $request->input('query');
        $products = post::where('category','LIKE',"rent")
                               //here 'like' is an operator for searching data
                              ->where('location','LIKE',"%$query%")
                              ->orderby('price', 'desc')
                              ->paginate(10);
        //response()->json($products); //return to ajax
      return view('search.rent',compact('products'));
      }
    }

    public function buy()
    {
      $products = post::where('category','LIKE',"sale") //here 'like' is an operator for searching data
                            ->paginate(10);

    return view('search.buy',compact('products'));
    }

    //Buy Apartment
    public function buyApartment(Request $request)
    {

      if (isset($request->flat)) {

          $flat = $request->flat;
      $query = $request->input('query');
      $products = post::whereIn('flat',explode(',',$flat))
                            ->where('category','LIKE',"rent")
                            ->where('type','LIKE',"apartment") //here 'like' is an operator for searching data

                            ->where('location','LIKE',"%$query%")
                            ->orderby('price', 'desc')
                            ->paginate(10);
      response()->json($products); //return to ajax
    return view('search.ajax-post',compact('products'));
      }
      else {
        $query = $request->input('query');
        $products = post::where('category','LIKE',"sale")
                              ->where('type','LIKE',"apartment")
                               //here 'like' is an operator for searching data
                              ->where('location','LIKE',"%$query%")
                              ->orderby('price', 'desc')
                              ->paginate(10);
        //response()->json($products); //return to ajax
      return view('search.buyApartment',compact('products'));
      }
    }

    //Buy house
    public function buyHouse(Request $request)
    {

      if (isset($request->flat)) {

          $flat = $request->flat;
      $query = $request->input('query');
      $products = post::whereIn('flat',explode(',',$flat))
                            ->where('category','LIKE',"sale")
                            ->where('type','LIKE',"apartment") //here 'like' is an operator for searching data

                            ->where('location','LIKE',"%$query%")
                            ->orderby('price', 'desc')
                            ->paginate(10);
      response()->json($products); //return to ajax
    return view('search.ajax-post',compact('products'));
      }
      else {
        $query = $request->input('query');
        $products = post::where('category','LIKE',"rent")
                              ->where('type','LIKE',"house")
                               //here 'like' is an operator for searching data
                              ->where('location','LIKE',"%$query%")
                              ->orderby('price', 'desc')
                              ->paginate(10);
        //response()->json($products); //return to ajax
      return view('search.buyHouse',compact('products'));
      }
    }

    // public function buy()
    // {
    //   $products = post::where('category','LIKE',"sale") //here 'like' is an operator for searching data
    //                         ->paginate(10);
    //
    // return view('search.buy',compact('products'));
    // }

    // public function filter()
    // {
    //
    //   $lofilter = implode(", ", $request->get('bedroom'));
    //   $products = post::where('flat', 'LIKE', '%'. $lofilter .'%')->get();
    //   return $products;
    //
    //   // $checkbox = []; //assume this array as selected checkboxes
    //   // $result =  post::query()
    //   //   ->Where(function ($query) use($checkbox) {
    //   //       for ($i = 0; $i < count($checkbox ); $i++){
    //   //             $query->orwhere('flate', 'like',  '%' . $checkbox [$i] .'%');
    //   //       }
    //   //   })->get();
    //   //   return $result;
    // //   $products = post::where('category','LIKE',"sale") //here 'like' is an operator for searching data
    // //                         ->paginate(10);
    // //
    // // return view('search.buy',compact('products'));
    // }

    // show post information

  // public function showinfo(post $post,$id)
  // {
  //   //return $id;
  //   //$shows = post::find($id);
  //   //$shows = post::where('$id','LIKE',"$id");
  //
  //   return $shows = post::find($id);
  //   //return view('search.showinfo',compact('shows'));
  //   return view('search.showinfo',compact('shows'));
  //
  // }

  public function showinfo( $id)
  {

     $shows = post::where('id',$id)->get();
    return view('search.showinfo',compact('shows'));

    // $shows = post::find($id);
    // //return $shows = post::where('id','LIKE',"{$post->id}");
    // return view('search.showinfo',compact('shows'));

  }

  // public function flat(Request $request)
  // {
  //   if (isset($request->flat)) {
  //     $flat = $request->flat;
  //     $products = post::whereIn('flat','LIKE',$flat) //here 'like' is an operator for searching data
  //                           ->paginate(10);
  //
  //     response()->json($products); //return to ajax
  //     return view('search.buy',compact('products'));
  //
  //   }
  // }

    // public function rent(Request $request)
    // {
    //   $this->validate($request,[
    //     'query'=>'required|min:3',
    //   ]);
    //   $query = $request->input('query');
    //   $products = post::where('location','LIKE',"%$query%") //here 'like' is an operator for searching data
    //                         ->paginate(2);
    //
    // return view('search.buy',compact('products'));
    // }

    // public function buysearch(Request $request)
    // {
    //   $this->validate($request,[
    //     'query'=>'required|min:3',
    //   ]);
    //   $query = $request->input('query');
    //   $products = post::where('location','LIKE',"%$query%") //here 'like' is an operator for searching data
    //                         ->paginate(2);
    //
    // return view('search.search',compact('products'));
    // }


////////////////////////////////////////////
    // public function searchcat()
    // {
    //     $categories = \Input::get('categories');
    //
    //     $vacancies = \Vacancy::whereIn('category_id', $categories)->get();
    //
    // return \View::make('vacancies.empty')->with('vacancies', $vacancies);
    // }
}
