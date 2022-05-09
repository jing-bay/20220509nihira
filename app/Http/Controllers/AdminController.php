<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(Request $request){
        //検索フォームに入力された値を取得
        $fullname = $request->input('fullname');
        $gender= $request->input('gender');
        $create_at = $request->input('created_at');
        $email = $request->input('email');

        $query = Contact::query();
        
        if(!empty($fullname)) {
            $query->where('fullname', 'LIKE', "%{$fullname}%");
        }

        if(!empty($gender)) {
            $query->where('gender', 'LIKE', $gender);
        }

        $from = $request['from'];
        $until = $request['until'];

        if (!empty($from) && !empty($until)) {
            //ハッシュタグの選択された20xx/xx/xx ~ 20xx/xx/xxのレポート情報を取得
            $date = Contact::getDate($from, $until);
        } else {
            //リクエストデータがなければそのままで表示
            $date = Contact::get();
        }

        if(!empty($email)) {
            $query->where('email', 'LIKE', "%{$email}%");
        }

        $items = $query->paginate(10);

        $contact_list = Contact::all();

        return view('admin', compact('fullname', 'gender', 'date','from','until','email', 'items','contact_list'));
        }

    public function reset(Request $request){
        return redirect('/admin');
    }

    public function delete(Request $request){
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}