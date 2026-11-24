<?php
namespace App\Common;

interface NorwayInterface {

    public function getAllCategoryInfo();
    
    public function getSelectedCategoryInfo($key);
    
    public function getAllPhoto();
    
    public function getPhotos($key, $no);
    
    public function isDevice($key);
    
}
