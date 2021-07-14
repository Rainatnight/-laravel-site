<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        // $this->validate($req, [
       	// 	'message' => 'required',
        //   'name' =>'required',
        //
        // ]);

    }
}
