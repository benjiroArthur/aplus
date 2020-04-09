<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //all posts
        $post = Post::all();
        return response()->json($post);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'title' => 'Required',
            'description' => 'required'
        ]);

        if($request->hasFile('image')){
            //validate
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);

            $image_file = $request->file('image');
            //Get just extension
            $extension = $image_file->getClientOriginalExtension();

            //Filename to store
            $image_name = time().'.'.$extension;

            //store file
            $image_path = public_path().'/assets/img/post/'.$image_name;
            //resize image
            Image::make($image_file->getRealPath())->resize(122,40)->save($image_path);
        }

        $data = $request->except('image');
        if($request->hasFile('image')){
            $data['image'] = $image_name;
        }
        $post = new Post();
        $post->create($data);
        return response('success');
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
