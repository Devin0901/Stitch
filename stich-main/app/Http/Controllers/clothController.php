<?php

namespace App\Http\Controllers;

use App\Models\Tailor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clothController extends Controller
{
    //
    public function get_fix_cloth(){
        // $tailor = Tailor::all()
        // Tailor::where('fix_cloth','like') -> first();
        // $tailors = DB::table('tailors')->where('fix_cloth', true)->first();
        $tailor = Tailor::where('fix_cloth', true)->with('user')->get();
        // dd($tailors->user->username);

        return view('fixCloth',['tailors'=>$tailor]);

// return $user->email;
    }
    public function custom_fix_cloth(){
        // $tailor = Tailor::all()
        // Tailor::where('fix_cloth','like') -> first();
        // $tailors = DB::table('tailors')->where('fix_cloth', true)->first();
        $tailor = Tailor::where('custom_cloth', true)->with('user')->get();
        // dd($tailors->user->username);

        return view('customCloth',['tailors'=>$tailor]);

// return $user->email;
    }
    public function view_tailor($id){
        // $user = Tailor::find($id);
        $tailor = User::where('user_id', $id)->with('tailor')->first();

        // dd($tailor->tailor->tailor_id);
        return redirect()->route('chat', ['id'=>$tailor->tailor->tailor_id]);
    }

}
