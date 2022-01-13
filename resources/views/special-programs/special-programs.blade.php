@extends('app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/special-programs.css') }}">
    <div class=" bg-white mt-3 ">
        <h2 class="text-center">Special Programs</h2>
        <div class="text-center align-items-center ">
            @foreach($showSpecialProgram as $data)

                <div class="container col-10 text-center align-items-center">
                    <strong class="text-center mt-3">{{ $data['title'] }}</strong>
                    <br>
                    <p class="text-center mt-3 mx-5">{{ $data['description'] }}</p>
                    <br>
                </div>
            @if($data['specialProgramImages'])
                    @foreach($data['specialProgramImages'] as $dataImage)
                        <img
                            src="{{ $dataImage['image_path'] }}"
                            class=" shadow-1-strong rounded mb-1 photos"
                            alt="Special Programs "
                            data-image-id = {{ $dataImage['id'] }}
                        />
                    @endforeach
                    <hr>
                @endif
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/special-program.js') }}"></script>
@endsection
