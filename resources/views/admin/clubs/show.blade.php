@extends('admin.layout.admin')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/admin/media.css') }}">
    <h2>Clubs Page</h2>
    <table class="table table-bordered border border-dark">
        <thead>
        <tr class="border">
            <th scope="col">ID</th>
            <th scope="col">TITLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col" width="140px">EDIT</th>
            <th scope="col" width="140px">DELETE</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clubs as $data)
            <tr class="tr border">
                <th scope="row">{{ $data['id'] }}</th>
                <td>{{ $data['title'] }}</td>
                <td>{{ $data['description'] }}</td>
                <td class="edit"><a href="{{ 'clubs/edit/' . $data['id'] }}"><button class="text-dark border-0"><i class="fal fa-edit"></i></button></a></td>
                <td class="delete"><button class="border-0" ><i class="fas fa-trash"></i></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="clubs/create" role="button">Create New</a>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/admin/clubs.js') }}"></script>
@endsection
