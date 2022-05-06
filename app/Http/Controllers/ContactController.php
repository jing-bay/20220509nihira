<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function confirm(ContactRequest $request)
    {   
        $inputs = $request->all();
        return view('confirm',['inputs'=>$inputs]);
    }
    

    public function thanks(Request $request)
    {
        if($request->input('back') == 'back'){
        return redirect('/')
                ->withInput();
        }

        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }
}


