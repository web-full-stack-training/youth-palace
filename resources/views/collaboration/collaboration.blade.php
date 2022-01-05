@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <h1 class="text-center">Collaboration</h1>
    <div class="row d-flex">
    @foreach($collaboration as $data)
        <div class="col-3 d-flex flex-column justify-content-center align-items-center p-5">
            <img src="{{ $data['img_path'] }}" alt="" width="140px" height="140px" class="rounded-circle">
            <h3>{{ $data['name'] }}</h3>
        </div>
    @endforeach
</div>
@endsection
