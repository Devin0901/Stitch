<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Tailor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class chatController extends Controller
{
    public function chat($id)
    {
        // dd($id);
        // if
        if(Auth::user()->isTailor==false){
            $data = Chat::where('user_id', Auth::id())
            ->where('tailor_id', $id)->get();
        }
        else{
            // $user->tailor->tailor_id
            $user = User::find(Auth::id());
            // dd($user->tailor->tailor_id);
            $data = Chat::where('user_id', 7)
            ->where('tailor_id', $id)->get();
        }

        // dd($data->detail);
        $data2 = Chat::where('user_id', Auth::id())
        ->where('tailor_id', $id)->first();
        // dd($data2->tailor_id);
        $data_user=null;
        if(Auth::user()->isTailor==false){
            $data_user=Tailor::find($id);
            // dd($data_user);
        }
        if(Auth::user()->isTailor==true){
            $data_user=User::find(7);
            // dd($data_user);
        }
        return view('chat',['chats'=>$data,'tailor_id'=>$id,'data_user'=>$data_user]);
    }
    public function chat_action(Request $request)
    {
        // dd($request->id_tailor);
        $chat = new Chat();
        $chat->detail=$request->message;
        $chat->tailor_id = $request->id_tailor;
        if(Auth::user()->isTailor==true){
            $chat->user_id=7;
            $chat->role='tailor';
        }
        else{
        $chat->user_id=Auth::id();
        $chat->role='user';
        }

        $chat->created_at=Carbon::now();
        $chat->save();
        return redirect()->route('chat',['id'=>$request->id_tailor]);
    }
}
