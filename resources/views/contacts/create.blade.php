@extends('layouts.app')

@section('content')
    <h2>Create Contact</h2>

        <form method="POST" action="{{ route('contacts.store') }}" class="auth-form">
            @csrf
            <div>
                <label for="name">Name</label><br>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required>
            </div>
            <br>
            <div>
                <label for="contact">Contact (9 digits)</label><br>
                <input id="contact" name="contact" type="text" value="{{ old('contact') }}" required>
            </div>
            <br>
            <div>
                <label for="email">Email</label><br>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
            </div>
            <br>
            <button type="submit">Save</button>
        </form>

@endsection