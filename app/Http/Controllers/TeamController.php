<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

use Input;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function postEditPost(Request $request)
    {
        
        //$info = Team::all();
        $body = $request['body'];
        $info = Team::where('name', 'LIKE', '%'.$body.'%')->orWhere('position', 'LIKE', '%'.$body.'%')->orWhere('email', 'LIKE', '%'.$body.'%')->get();
        // if (Auth::user() != $post->user) {
        //     return redirect()->back();
        // }
        // $post->body = $request['body'];
        // $post->update();
        // return response()->json(['new_body' => $post->body], 200);
        // $info ="asdfasfd";
        return response()->json($info);


    }

     public function front_page_view()
 {
    $posts = $this->data('a');
       return view('pagination',compact('posts'))->render();
 }

    public function postAjax(Request $request)
    {
        
    //      $posts  = Team::paginate(6);

    //     if (Request::ajax()) {
    //    return view('pagination')->withPosts($posts);
    // }
    //      return view('pagination')->withPosts($posts);

        // $posts = Team::all();
        //  return view('pagination')->withPosts($posts);

//           $body = Input::get('body');
//          $posts = Team::where('name', 'LIKE', '%'.$body.'%')->orWhere('position', 'LIKE', '%'.$body.'%')->orWhere('email', 'LIKE', '%'.$body.'%')->paginate(6);

//     if (Request::ajax()) {
//         return response()->json($posts);
//     }else{
//     return View('pagination')->withPosts($posts);
// }

if ($request->ajax()) {

    $posts = $this->data($request['search']);
    if(!(empty($request['search'])))
    {
        $search = $request['search'];
        $view = view('getlist',compact('posts','search'))->render();
        return response($view);
    }

}

 }



 


    public function getteaminfo(Request $request)
    {
        if ($request->ajax()) {

    $posts = $this->data($request['search']);
       return view('getlist',compact('posts'))->render();
       

}
    }

    public function data($search)

 {
    return $posts = Team::where('name', 'LIKE', '%'.$search.'%')->orWhere('position', 'LIKE', '%'.$search.'%')->orWhere('email', 'LIKE', '%'.$search.'%')->paginate(6);
 }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
