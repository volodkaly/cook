<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reciepts;
use App\Models\User;

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
        return view(
            'home',
            ['bbs' => Auth::user()->reciepts()->latest()->get()]
        );
    }

    public function showAddRecForm()
    {
        return view('rec_add');
    }

    public function storeRec(Request $request)
    {
        Auth::user()->reciepts()->create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return to_route('home');
    }
}
