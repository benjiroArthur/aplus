<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CompanyInfoController extends Controller
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
        $info = CompanyInfo::latest()->first();
        return response()->json($info);
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
        //store record
        //validation
        $this->validate($request, [
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        if($request->hasFile('logo_main')){
            //validate
            $this->validate($request, [
                'logo_main' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);

            $image_file = $request->file('logo_main');
            //Get just extension
            $extension = $image_file->getClientOriginalExtension();

            //Filename to store
            $logoMain = 'logo_main.'.$extension;

            //store file
            $image_path = public_path().'/assets/resourceImages/'.$logoMain;
            //resize image
            Image::make($image_file->getRealPath())->resize(122,40)->save($image_path);
        }

        if($request->hasFile('logo_mini')){
            //validate
            $this->validate($request, [
                'logo_mini' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            $image_file = $request->file('logo_mini');
            //Get just extension
            $extension = $image_file->getClientOriginalExtension();

            //Filename to store
            $logoMini = 'logo_mini.'.$extension;

            //store file
            $image_path = public_path().'/assets/resourceImages/'.$logoMini;
            //resize image
            Image::make($image_file->getRealPath())->resize(122,40)->save($image_path);
        }

        if($request->hasFile('logo_pg')){
            //validate
            $this->validate($request, [
                'logo_pg' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            $image_file = $request->file('logo_pg');
            //Get just extension
            $extension = $image_file->getClientOriginalExtension();

            //Filename to store
            $logoPg = 'logo_pg.'.$extension;

            //store file
            $image_path = public_path().'/assets/resourceImages/'.$logoPg;
            //resize image
            Image::make($image_file->getRealPath())->resize(122,40)->save($image_path);
        }

        $data = $request->except('logo_main', 'logo_mini', 'logo_pg');
        if($request->hasFile('logo_main')){
            $data['logo_main'] = $logoMain;
        }
        if($request->hasFile('logo_mini')){
            $data['logo_mini'] = $logoMini;
        }
        if($request->hasFile('logo_pg')){
            $data['logo_pg'] = $logoPg;
        }

        $info = new CompanyInfo();
        $info->create($data);
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
        //delete
        $info = CompanyInfo::findOrFail($id);
        $info->delete();
        return response('success');
    }
}
