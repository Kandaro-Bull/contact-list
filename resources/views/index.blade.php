@extends('layouts.app')

@section('content')
        <h1>Contacts</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name}}</td>
                        <td>{{ $contact->contact}}</td>
                        <td>{{ $contact->email}}</td>
                        <td>
                            <a href="{{ route('contacts.detail', $contact) }}" class="btn btn-detail">Detail</a>
                            <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-edit">Edit</a>
                            <form method="POST"  action="{{ route('contacts.delete', $contact) }}"  class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this contact?')" class="btn btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No contacts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top: 15px;">
            {{ $contacts->links() }}
        </div>
@endsection
