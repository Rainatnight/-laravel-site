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
      return view('messages', ['data' => $contact->orderBy('id', 'asc')->get()] );
    }

    public function showOneMessage($id)
    {
      $contact = new Contact;
      return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id)
    {
      $contact = new Contact;
      return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req)
    {
        // $this->validate($req, [
       	// 	'message' => 'required',
        //   'name' =>'required',
        //
        // ]);
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('name');
        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было  обновлено');

    }
    public function deleteMessage($id)
    {
      Contact::find($id)->delete();
      return redirect()->route('contact-data')->with('success', 'Сообщение было  удалено');
    }
}
