<?php

namespace App\Http\Controllers;
date_default_timezone_set("Europe/Warsaw");

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class FormController extends Controller
{
    public function sendForm(Request $request) {
        if($request->data !== null && !empty($request->data)) {
            $arr = explode("\n", $request->data);
            return $arr;
        }
    }
}
