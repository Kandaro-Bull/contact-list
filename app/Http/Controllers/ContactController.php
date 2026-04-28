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

    public function store(StoreContactRequest $request): RedirectResponse
    {
        Contact::create($request->validated());

        return redirect()
            ->route('index')
            ->with('status', 'Contact created successfully.');
    }

    public function detail(Contact $contact): View
    {
        return view('contacts.detail', compact('contact'));
    }
    
     public function edit(Contact $contact): View
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact): RedirectResponse
    {
        $contact->update($request->validated());

        return redirect()
            ->route('index', $contact)
            ->with('status', 'Contact updated successfully.');
    }

    public function delete(Contact $contact): RedirectResponse
    {
        $contact->delete();

        return redirect()
            ->route('index')
            ->with('status', 'Contact deleted successfully.');
    }
}
