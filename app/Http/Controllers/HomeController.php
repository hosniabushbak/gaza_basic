<?php

namespace App\Http\Controllers;

use App\Models\CrmCustomer;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        return view('home');
    }

    public function welcome () {
        return view('welcome');
    }

    public function form_post (Request $request) {
        $all = $request->all();
        CrmCustomer::create($all);
        return redirect()->back()->with('message', 'تم التسجيل بنجاح');

    }
}
