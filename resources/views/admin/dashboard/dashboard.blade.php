@extends('admin.layout.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
    <div class="dashboard-body d-flex flex-column justify-content-center align-items-center">
        <div class="contact d-flex">
            <h2>{{ $contact->email }}</h2>
            <h2>{{ $contact->telephone }}</h2>
            <h2>{{ $contact->phone_number }}</h2>
            <h2>{{ $contact->address }}</h2>
            <a href="contact" class="edit-button btn btn-success"><h1>Edit Contacts</h1></a>
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
                        <a href="collaboration/edit/{{ $data['id'] }}" class="edit-button btn mt-3 mx-0 px-2">Edit</a>
                    </div>
                @endforeach
            </div>

            <div class="collaboration-button flex-column justify-content-center align-items-center mt-3">
                <a href="{{ route('collaboration.page') }}" class="edit-button btn px-2 border border-secondary">Collaboration
                    Page</a>
                <a href="collaboration" class="edit-button btn px-2 border border-secondary">Admin Collaboration Page</a>
            </div>
        </div>

        <hr>

        <div class="volunteering">
            <h4 class="mt-3"><strong>Volunteering</strong> <br> Active Now <strong>{{ $volCount }}</strong></h4>
            <div class="volunteering-body d-flex justify-content-center align-items-center mt-3">
                @foreach($volunteering as $data)
                    <div class="volunteering-content d-flex flex-column justify-content-center align-items-center mx-4">
                        <img src="{{ asset($data['image_path']) }}" width="150px" height="150px" class="rounded-circle">
                        <h3 class="mt-2">{{ $data['full_name'] }}</h3>
                        <a href="volunteering/edit/{{ $data['id'] }}" class="edit-button btn mt-3 mx-0 px-2">Edit</a>
                    </div>
                @endforeach
            </div>

            <div class="collaboration-button flex-column justify-content-center align-items-center mt-3">
                <a href="{{ route('volunteering.page') }}" class="edit-button btn px-2 border border-secondary">Volunteering Page</a>
                <a href="volunteering" class="edit-button btn px-2 border border-secondary">Admin Volunteering Page</a>
            </div>
        </div>

        <hr>

        <div class="body-card position-relative">
            <h4 class="club-subsection֊title mt-3"><strong>Club</strong> <br> Active Now <strong>{{ $clubCount }}</strong></h4>
            <div class="collaboration-body d-flex justify-content-center align-items-center mt-3">

                @foreach($club as $data)
                    <div class="club-content d-flex flex-column justify-content-center align-items-center mx-4">
                        <img src="{{ asset($data['img_path']) }}" width="130px" height="130px" class="rounded-circle">
                        <h3 class="mt-2">{{ mb_strimwidth($data['title'], 0, 15) }}</h3>
                        <div class="description-club">
                            <p> {{ mb_strimwidth($data['description'], 0, 100) . '...' }}</p>
                        </div>
                        <a href="clubs/edit/{{ $data['id'] }}" class="edit-button btn mt-3 mx-0 px-2">Edit</a>
                    </div>
                @endforeach

            </div>

            <div class="collaboration-button flex-column justify-content-center align-items-center mt-3">
                <a href="{{ route('club.page') }}" class="edit-button btn px-2 border border-secondary">Club Page</a>
                <a href="clubs" class="edit-button btn px-2 border border-secondary">Admin Club Page</a>
            </div>
        </div>

        <hr>

        <div class="body-card position-relative">
            <h4 class="club-subsection֊title mt-3"><strong>Media</strong> <br> Active Now <strong>{{ $mediaCount }}</strong></h4>
            <div class="collaboration-body d-flex justify-content-center align-items-center mt-3">

                @foreach($media as $data)
                    <div class="media-content d-flex flex-column justify-content-center align-items-center mx-4">
                        <video width="270" height="200" controls>
                            <source src="{{ asset($data['video_path']) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h3 class="mt-2">{{ mb_strimwidth($data['title'], 0, 17) }}</h3>
                        <div class="description-club">
                            <p> {{ mb_strimwidth($data['description'], 0, 100) . '...' }}</p>
                        </div>
                        <a href="media/edit/{{ $data['id'] }}" class="edit-button btn mt-3 mx-0 px-2">Edit</a>
                    </div>
                @endforeach

            </div>

            <div class="collaboration-button flex-column justify-content-center align-items-center mt-3">
                <a href="{{ route('media.page') }}" class="edit-button btn px-2 border border-secondary">Media Page</a>
                <a href="media" class="edit-button btn px-2 border border-secondary">Admin Media Page</a>
            </div>

        </div>

        <hr>

    </div>





@endsection
