<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller {

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function demo() {
        return view('admin.demo.index');
    }
    public function demo_add() {
        return view('admin.demo.add');
    }
}
