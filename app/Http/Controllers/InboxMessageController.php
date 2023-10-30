<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Admin;
use App\Notifications\InboxMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InboxMessageController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function mail(ContactFormRequest $request, Admin $admin): RedirectResponse
    {
        $admin->notify(new InboxMessage($request));
        return redirect('/granit');
    }
}
