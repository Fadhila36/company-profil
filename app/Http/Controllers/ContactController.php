<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('time','DESC')->get();
        return view('menu.kontak.index',['contact' => $contact]);
    }
}
