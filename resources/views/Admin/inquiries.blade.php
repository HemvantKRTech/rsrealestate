@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">
    <h1 class="mb-4">Inquiries</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
               
                
                
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Inquiry as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->mobile }}</td>
                    <td>{{ $contact->description }}</td>
                  
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No inquiries found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $Inquiry->links() }}
</div>

@endsection
