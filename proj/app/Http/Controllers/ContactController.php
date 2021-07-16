<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        // $this->validate($req, [
       	// 	'message' => 'required',
        //   'name' =>'required',
        //
        // ]);
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('name');
        $contact->save();
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');

    }
    public function allData()
    {
      #$contact = new Contact();
      #dd($contact->all());
      $contact = new Contact();

      #return view('messages', ['data' => $contact->all()] );
      return view('messages', ['data' => $contact->orderBy('id', 'asc')->take(1)->get()] );
    }
}
