<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\CompanyInfo;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function getInfo(){
        $contact = CompanyInfo::latest()->first();
        $about = AboutUs::latest()->first();
        $slider = Slider::all();

        $data = [
            'contact' => $contact,
            'about' => $about,
            'slider' => $slider
        ];
        return response()->json($data);
    }
    public function setInfo(Request $request){
        $info = CompanyInfo::latest()->first();
        $info->update($request->all());
        return response('success');
    }

    public function setAbout(Request $request){
        $about = AboutUs::latest()->first();
        $about->update($request->all());
        return response('success');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws ValidationException
     */
    public function updateLogo(Request $request){
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
            $info = CompanyInfo::latest()->first();
            $info->logo_main = $logoMain;
            $info->save();
            return response('success');
        }

        else if($request->hasFile('logo_mini')){
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
            $info = CompanyInfo::latest()->first();
            $info->logo_mini = $logoMini;
            $info->save();
            return response('success');
        }

        else if($request->hasFile('logo_pg')){
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
            $info = CompanyInfo::latest()->first();
            $info->logo_pg = $logoPg;
            $info->save();
            return response('success');
        }
        else{
            return response('no file selected');
        }
    }


}
