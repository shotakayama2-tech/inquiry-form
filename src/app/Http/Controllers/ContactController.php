<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $validated = $request->validate([
    'last_name' => 'required',
    'first_name' => 'required',
    'gender' => 'required',
    'email' => 'required|email',

    'tel1' => 'nullable',
    'tel2' => 'nullable',
    'tel3' => 'nullable',

    'address' => 'nullable',
    'building' => 'nullable',

    'kind' => 'required',     // ← ここ修正
    'content' => 'required',  // ← ここ修正
]);


        return view('contacts.confirm', ['inputs' => $validated]);
    }

    public function send(Request $request)
{
    $inputs = $request->all();

    Contact::create([
        'name' => ($inputs['last_name'] ?? '') . ' ' . ($inputs['first_name'] ?? ''),
        'gender' => $inputs['gender'] ?? null,
        'email' => $inputs['email'] ?? null,
        'tel' => ($inputs['tel1'] ?? '') . '-' . ($inputs['tel2'] ?? '') . '-' . ($inputs['tel3'] ?? ''),
        'address' => $inputs['address'] ?? null,
        'category' => $inputs['kind'] ?? null,
        'content' => $inputs['content'] ?? null,

    ]);

    return view('contacts.thanks', ['inputs' => $inputs]);
}

}
