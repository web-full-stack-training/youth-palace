@extends('app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/clubs.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class='row clubs-container'>

        <div class='title-clubs'>
            <h1 class='title-page text-center'>Clubs</h1>
        </div>
        <div class='row card-container mt-4 p-0'>
            @foreach($clubs as $data)
                <div class='mt-4 col-xl-4  col-lg-6 d-flex justify-content-center align-items-center flex-column'>
                    <img src='{{ $data['img_path'] }}' width='370px' height='250px' alt="No Picture">
                    <div class='cards-description-content mt-1'>
                        <h1 class='cards-title'>{{ $data['title'] }}</h1>
                        <p class='d-block'>
                            {{ $data['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
