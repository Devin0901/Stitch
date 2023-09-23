<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function getaplicantdata(){
        $aplicant = User::where('isaplicant', true)->get();
        $data['title'] = 'see all tailor aplicant';
        return view('tailorrequest',compact('aplicant'),$data);
    }
    public function accepted_admin($id){

        // $userid = User::find('user_id', $id)->get();
        // return $userid;
        // $userid->isTailor = true;
        // $userid->save();
        // return view('home');
        User::findOrFail($id)->update([
            'isTailor'=>true,
            'isaplicant'
        ]);

        // $user_id = User::find(Auth::id());
        // if( $user_id->isTailor == true){
        //     return "you have become tailor";
        // }

    }
    public function addproduct(){
        $data['title'] = 'addproduct';
        return view('product\addproduct',$data);
    }
    public function getaddress(){
        $users = User::find(Auth::id());
        $userss = User::where('user_id',Auth::id())->first();
        // dd($userss->address->city);
        return view('user_profile',['user'=>$users]);
    }
    public function addproduct_action(Request $request){
        $user = User::find(Auth::id());
        $request->validate([
            'product_name' => 'required',

            'product_price' => 'required',
        ]);
        // dd($user->user_id);
        Product::insert([
            'user_id' => $user->user_id,
            // 'product_id' => 20,
            'product_name' => $request->product_name,
            'productprice'=>$request->product_price,
        ]);

        // $product = new product([
        // ]);
        // $product->save();

    }
    //
}
