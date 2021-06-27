<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use App\Http\Controllers\TipController;
use App\Models\Tip;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        $tips = Tip::latest()->when($request->filtro, function ($query) use ($request) {
            $query->where($request->filtro, 'LIKE', '%'.$request->valor.'%');
        })->paginate(5);
        return view('home', ['tips' => $tips]);

     }

}
