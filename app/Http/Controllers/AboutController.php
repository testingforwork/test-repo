<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;

class AboutController extends Controller
{
    public function create() {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request) {
        return Redirect::route('contact_create')->with([
            'successMsg' => 'Thanks for contacting us! ' . $request->get('name')
        ]);
    }

}
