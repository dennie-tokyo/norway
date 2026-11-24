<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Common\Norway;

class PhotosController extends Controller
{

    public function index(Norway $norway, Request $request, $category, $ajax) {

        $no = $request->get("no");
        $photos = $norway->getPhotos($category, $no);
        
        $categoryInfos = $norway->getAllCategoryInfo();
        $selectCategoryInfo = $norway->getSelectedCategoryInfo($category);
        
        $result = $norway->isDevice($request);
        
        $dev = true;
        if($result){
            $dev = false;
        }

        if($ajax === "add"){
            return view('photos_main')
                    ->with("photos", $photos)
                    ->with("category", $selectCategoryInfo)
                    ->with("infos", $categoryInfos)
                    ->with("device", $dev);
        }
        
        return view('photos')
                    ->with("photos", $photos)
                    ->with("category", $selectCategoryInfo)
                    ->with("infos", $categoryInfos)
                    ->with("device", $dev);
    }
    
}
