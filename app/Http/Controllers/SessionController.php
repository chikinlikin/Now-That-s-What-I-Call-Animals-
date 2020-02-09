<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller {
   public function accessSessionData(Request $request) {
      return $request->session()->get('name');
   }
   public function storeSessionData(Request $request) {
     $name = accessSessionData($request);
      $request->session()->put('name', $name);
   }
   public function deleteSessionData(Request $request) {
      $request->session()->forget('name');
   }
 }
