<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Chat;
use App\Models\History;
use App\Models\product;
use App\Models\Tailor;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {

        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);
        // console.log();
        if($request['radio']=='male'){
            $gender = 'male';
        }
        else{
            $gender = 'female';
        }

        $user = new User([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'gender'=>$gender,
            'firstname' => $request->first_name,
            'lastname' => $request->last_name,
            'phone_number' => $request->phone_number,

        ]);
        $user->save();
        return redirect()->route('address');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }
    public function address(){
        // $data['title'] = 'Title';
        // return view('user/login', $data);
        return view('user.addressreg');
    }
    public function address_action(Request $request){
        // dd($request->city);
        $user = User::all()->last()->user_id;
        // dd($user);
        $user_id = User::find($user);
        $address = new Address();
        $address->city = $request->city;
        $address->country = $request->country;
        $address->postal_Code = $request->postal_code;
        $address->home = $request->home;
        $user_id->address()->save($address);
        // dd($user_id->tailor->tailor_experience);

        $user_id->save();
        // dd($user_id->address->home);
        return redirect()->route('login');

//         $productId = User::getPdo()->lastInsertId();
// dd($productId->user_id);
        // return redirect()->route('login')->with('success', 'Registration success. Please login!');

    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
            // return redirect()->back();
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }
    public function update_profile(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        // return view('update_profile',"")
        return view('update_profile',compact('user'));//nanti ini di aktifin jadi abis dioper ke frontend
        //di print value=$user->address->city atau $user->username

        // return redirect()->back()->with('success', 'Profile updated successfully!');
    }
    public function update_profile_action(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->username=$request->username;
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->save();
        $address = $user->address;
        $address->city = $request->city;
        $address->country = $request->country;
        $address->postal_code = $request->postal_code;
        $address->home = $request->home;
        $user->address()->save($address);
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function getinput(Request $request){
        $iduser = Auth::id();

    }
    public function inbox(){
        // dd(Auth::id()->tailor->tailor_id);
        $user = User::find(Auth::id());
        // dd($user->tailor->tailor_id);
        $data = Chat::where('tailor_id', $user->tailor->tailor_id)
                ->groupBy('user_id')
                ->with('user')
                ->get();
        // dd($data->user_id);
        // dd($data->user->user_id);
        return view('inbox',['datas'=>$data]);
    }
    public function tailor()
    {
        // $user_id = User::find(Auth::id());
        // if( $user_id->isTailor == true){
        //     return "you have become tailor";
        // }
        $data['title'] = 'tailor confirmation';
        return view('user/tailorregis', $data);
    }
    public function tailor_action(Request $request){

        // dd($request->tailoring_experience);
        $user_id = User::find(Auth::id());
        // if( $user_id->isTailor == true){
        //     return "you have become tailor";
        // }
        // dd($user_id->user_id);
        // dd($request->tailor_experience1);
        $tailor = new Tailor();
        $req = $request->camera_video[0];
        if($req !=null){
            // return "teafasdas";
        if($request->camera_video[0] == 'fix cloth'){
            // return "success";
            $tailor->fix_cloth = true;
            // $user_id->postal_code='devvv';
        }
    }
        if($request->camera_video[1]!=null){

            if($request->camera_video[1]=='custom cloth'){
                $tailor->custom_cloth = true;
            }
        }
        $user_id->isaplicant = true;
        $tailor = new Tailor();
        $tailor->starting_price = $request->starting_price;
        $tailor->tailor_experience = $request->tailor_experience1;
        $user_id->tailor()->save($tailor);
        // dd($user_id->tailor->tailor_experience);

        $user_id->save();
        // fix cloth
        // return $req[1];
        $request->session()->regenerate();
        return back()->with('success', 'tailor_confirmation_success');
    }
    public function get_product(Request $request){

        $user_id = User::find(Auth::id());
        $productname = $request->address;
        $producttes = '10000';
        // dd($productname);
        $product = new product([
            'productprice'=>$producttes,
            'product_name' =>$productname,
            'user_id'=>$user_id->user_id
        ]);
        $product->save();
        // $product = Product::with('product.user')->whereRelation('category','user_id',2)->first();
        // return Auth::id();
        $products = product::where('user_id', Auth::id()) -> get();
        // return $product;
        $data['title'] = 'get_product';
        return view('home',compact('products'),$data);
    }

public function deal(){
    return view('tailorDeal');
}
public function deal_action(Request $req){
    // dd($req->items);
    $product = new product;
    $product->productprice=$req->price;
    $product->product_name =$req->items;
    $product->user_id=Auth::id();
    $product->tailor_id=3;
    $product->save();

    // return view('tailorDeal');
    return back();
}
public function deal2_action(Request $req){
    // dd($req->items);
    return view('deal');
}
public function dealuser(){
    $user = product::all()->last();
    return view('deal',['data'=>$user]);

    dd($user->productprice);
}
public function transaction(){

        $user = product::all()->last();
    return view('transaction',['data'=>$user]);

}
public function transaction_confirm(){
    $product = product::all()->last();
    $tr = new Transaction();
    $tr->user_id=Auth::id();
    $tr->tailor_id=$product->tailor_id;
$tr->payment_method_id=4;
$tr->product_id=$product->product_id;
$tr->save();
// dd($tr);
return view('payment');
}
public function history(){
    $data = Transaction::where('user_id', Auth::id())->get();
    // dd($data->tailors->user->username);
    return view('history',['data'=>$data]);
}
public function seetailor($id){
    $data = Tailor::find($id);
    return view('seeTailorProfile',['data'=>$data]);
}
}
