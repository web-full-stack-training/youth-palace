@extends('admin.layout.admin')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/admin/contact.css') }}">
    <h2>Contact Page</h2>
    <table class="table table-bordered border border-dark">
        <thead>
        <tr class="border">
            <th scope="col">ID</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELEPHONE</th>
            <th scope="col">PHONE_NUMBER</th>
            <th scope="col">ADDRESS</th>
            <th scope="col" width="140px">EDIT</th>
            <th scope="col" width="140px">DELETE</th>
        </tr>
        </thead>
        <tbody>
        @if($contact)
            <tr class="tr border">
                <th scope="row">{{ $contact->id }}</th>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->telephone }}</td>
                <td>{{ $contact->phone_number }}</td>
                <td>{{ $contact->address }}</td>
                <td class="edit"><a href="{{ 'contact/edit/' . $contact->id }}"><button class="text-dark border-0"><i class="fal fa-edit"></i></button></a></td>
                <td class="delete"><button class="border-0" ><i class="fas fa-trash"></i></button></td>
            </tr>
        @endif

        </tbody>
    </table>
    <a class="btn btn-primary create-button" href="contact/create" role="button">Create New</a>

    <div class="modal modal-windows" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="modal-p">Are you sure you want to delete this.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary delete-button">Delete</button>
                    <button type="button" class="btn btn-secondary close-button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/admin/contacts.js') }}"></script>
@endsection
