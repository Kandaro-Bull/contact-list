@extends('layouts.app')

@section('content')
    <h1>Contact Details</h1>
    <div class="auth-form">
         <p><strong>Id:</strong> {{ $contact->id }}</p>
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Contact:</strong>{{ $contact->contact }}</p>
        <p><strong>Email:</strong>{{ $contact->email }}</p>
    </div>
   
@endsection
