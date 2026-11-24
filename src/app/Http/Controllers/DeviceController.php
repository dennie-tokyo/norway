<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeviceController extends Controller
{

    public function index(Request $request) {

        $httpUserAgent = $request->header('user_agent');
        if (preg_match('/(iPhone|Android.*Mobile|Windows.*Phone)/', $httpUserAgent)) {
            return view('smart.main');
	}
        return view('main');
    }
}
