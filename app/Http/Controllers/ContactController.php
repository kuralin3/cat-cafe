<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    function sendMail(ContactRequest $request)
    {
        $validated = $request->validated();

        \Log::debug($validated['name'] . 'さんよりお問い合わせがありました');
        return to_route('contact.complete');
    }

    public function complete()
    {
        return view('contact.complete');
    }
}
