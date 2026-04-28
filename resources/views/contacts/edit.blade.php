@extends('layouts.app')

@section('content')
    <h2>Edit Contact</h2>

    <form method="POST" action="{{ route('contacts.update', $contact) }}" class="auth-form">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label><br>
            <input id="name" name="name" type="text" value="{{ old('name', $contact->name) }}" required>
        </div>
        <br>
        <div>
            <label for="contact">Contact (9 digits)</label><br>
            <input id="contact" name="contact" type="text" value="{{ old('contact', $contact->contact) }}" required>
        </div>
        <br>
        <div>
            <label for="email">Email</label><br>
            <input id="email" name="email" type="email" value="{{ old('email', $contact->email) }}" required>
        </div>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
