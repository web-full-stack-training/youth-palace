@extends('admin.layout.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/special-programs.css') }}">

    <div class="about-content-in-admin">
        <h2>Special-Program Page</h2>

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
            @foreach($specialProgram as $data)
                <tr class="tr border">
                    <th scope="row">{{ $data['id'] }}</th>
                    <td>{{ $data['title'] }}</td>
                    <td>{{ $data['description'] }}</td>
                    <td class="edit"><a href="{{ 'special-programs/edit/' . $data['id'] }}"><button class="text-dark border-0"><i class="fal fa-edit"></i></button></a></td>
                    <td class="delete"><button class="border-0" ><i class="fas fa-trash"></i></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a class="btn btn-primary" href="special-programs/create" role="button">Create New</a>

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


        @if(!$specialProgram)
            <a href="{{ route('show.create.form') }}">
                <button class="btn btn-success rounded">Add Info</button>
            </a>
        @else
            <div class="about-info">

            </div>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/special-program.js') }}"></script>
@endsection
