@extends('admin.layout.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
    <div class="dashboard-body d-flex flex-column justify-content-center align-items-center">
        <div class="contact d-flex">
            <h2>{{ $contact->email }}</h2>
            <h2>{{ $contact->telephone }}</h2>
            <h2>{{ $contact->phone_number }}</h2>
            <h2>{{ $contact->address }}</h2>
            <a href="contact" class="btn btn-success"><h1>Edit Contacts</h1></a>
        </div>

        <hr>

        <div class="collaboration">
            <h4 class="mt-3"><strong>Collaboration</strong> <br> Active Now <strong>{{ $collCount }}</strong></h4>
            <div class="collaboration-body d-flex justify-content-center align-items-center mt-3">
                @foreach($collaboration as $data)
                    <div
                        class="collaboration-content d-flex flex-column justify-content-center align-items-center mx-4">
                        <img src="{{ asset($data['img_path']) }}" width="150px" height="150px" class="rounded-circle">
                        <h3 class="mt-2">{{ $data['name'] }}</h3>
                        <a href="collaboration/edit/{{ $data['id'] }}" class="btn mt-3 mx-0 px-2">Edit</a>
                    </div>
                @endforeach
            </div>

            <div class="collaboration-button flex-column justify-content-center align-items-center mt-3 mx-5">
                <a href="{{ route('collaboration.page') }}" class="btn px-2 border border-secondary">Collaboration
                    Page</a>
                <a href="collaboration" class="btn px-2 border border-secondary">Admin Collaboration Page</a>
            </div>
        </div>

        <hr>

        <div class="collaboration">
            <h4 class="mt-3"><strong>Volunteering</strong> <br> Active Now <strong>{{ $volCount }}</strong></h4>
            <div class="collaboration-body d-flex justify-content-center align-items-center mt-3">
                @foreach($volunteering as $data)
                    <div class="collaboration-content d-flex flex-column justify-content-center align-items-center mx-4">
                        <img src="{{ asset($data['image_path']) }}" width="150px" height="150px" class="rounded-circle">
                        <h3 class="mt-2">{{ $data['full_name'] }}</h3>
                        <a href="volunteering/edit/{{ $data['id'] }}" class="btn mt-3 mx-0 px-2">Edit</a>
                    </div>
                @endforeach
            </div>

            <div class="collaboration-button flex-column justify-content-center align-items-center mt-3 mx-5">
                <a href="{{ route('volunteering.page') }}" class="btn px-2 border border-secondary">Volunteering Page</a>
                <a href="volunteering" class="btn px-2 border border-secondary">Admin Volunteering Page</a>
            </div>
        </div>

        <hr>

        <div class="club">
            <h4 class="mt-3"><strong>Club</strong> <br> Active Now <strong>{{ $clubCount }}</strong></h4>
            <div class="club-body d-flex justify-content-center align-items-center mt-3">
                @foreach($club as $data)
                    <div class="collaboration-content d-flex flex-column justify-content-center align-items-center mx-4">
                        <img src="{{ asset($data['img_path']) }}" width="150px" height="150px" class="rounded-circle">
                        <h3 class="mt-2">{{ $data['title'] }}</h3>
                        <div class="description-club">
                            @foreach($arr as $test)
                                <p>{{ $test }}</p>
                            @endforeach
                        </div>
                        <a href="clubs/edit/{{ $data['id'] }}" class="btn mt-3 mx-0 px-2">Edit</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
