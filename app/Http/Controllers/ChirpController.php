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
        return redirect()->route('chirps.index');

      }
    public function edit(string $id) {
        $chirp = Chirp::findOrFail($id);
        
        return view('chirps.edit', compact('chirp'));
    }
public function update(Request $request, string $id) {
        // validation
        $request->validate([
            'chirp' => 'required|string|max:255',
        ]);

        // update
        $chirp = Chirp::findOrFail($id);
        // $chirp->chirp = $request->chirp;
        // $chirp->save();

        $chirp->update([
            'chirp' => $request->chirp,
        ]);

        return redirect()->route('chirps.index');
    }
       public function destroy(string $id) {
        $chirp = Chirp::findOrFail($id);
        $chirp->delete();

        return redirect()->route('chirps.index');
    }
}
