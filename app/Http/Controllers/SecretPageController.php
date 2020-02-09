<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecretPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function secret()
    {
      if (Auth::check()) {
        return view('secret-page');
      }
    }

    public function download(Request $request)
    {
      $id = $request->get('id');
      if ($id == "hh235234kkk25929@@#as"){
        return redirect()->to('/download.php');
      } else {
      return view('secret-page');
    }
    }
}
