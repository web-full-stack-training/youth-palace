@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="mt-3 mb-3 bg-white">
    <h1 class="text-center mt-5">Media</h1>
    <div class="container-fluid">
        <div class="row">
            @foreach($media as $data)
                <div class="col-6">
                    <div class="card border-0 align-items-center">
                        <video width="500" height="420" controls>
                            <source src="{{ $data['video_path'] }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $data['title'] }}</h5>
                            <p class="card-text text-center">{{ $data['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
