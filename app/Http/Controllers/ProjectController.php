<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest();
        return response()->json($projects);
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
        //validate
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'start_date' => 'required'
        ]);
        if($request->hasFile('cover_image')){
            //validate
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            $image_file = $request->file('cover_image');
            //Get just extension
            $extension = $image_file->getClientOriginalExtension();

            //Filename to store
            $image_name = time().'.'.$extension;

            //store file
            $image_path = public_path().'/assets/img/project/'.$image_name;
            //resize image
            Image::make($image_file->getRealPath())->resize(640,480)->save($image_path);
        }

        $data = $request->except('cover_image');
        if($request->hasFile('cover_image')){
            $data['cover_image'] = $image_name;
        }

        $project = new Project();
        $project->create($data);
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
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        //validate
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'start_date' => 'required'
        ]);
        $project = Project::find($id);
        $project->update($request->all());
        return response('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $project = Project::find($id);
       $project->delete();
        return response('success');
    }
}
