<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::query()->latest('id')->paginate(10);

        return view('index', compact('contacts'));
    }

}
