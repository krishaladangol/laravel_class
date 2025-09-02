<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps=Chirp::latest()->get();
        $user=User::first();
        return view('chirps.index',compact('chirps','user'));
    }
      public function store(Request $request){
        //validation
        $request->validate([
            'chirp'=>'required|string|max:255',
        ]);

        //save
        Chirp::create([
            'chirp'=>$request->chirp,
        ]);
        return redirect()->route('chirp.index');

      }
   
}
