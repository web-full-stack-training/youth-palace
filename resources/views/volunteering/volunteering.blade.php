@extends('app')
@section('content')
<link rel = "stylesheet" href = "{{asset('css/volunteering.css')}}">
<div class = "volunteer-body">
    <h1 class = "volunteer-header text-center">Volunteering</h1>
<div class="row d-flex">
    @foreach($volunteering as $vol)
        <div class="col-lg-3 col col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center">
          {{--  <img src="{{ $vol->$imagePath}}" alt="volunteer" class="image--cover">
            <img src="{{ $vol['image_path'] }}" alt="">
            <img src="{{ url('storage/volunteering/'.$article->volunteering) }}" alt="" title="" />--}}
            <img src="{{(asset('images/volunteering/img.png'))}}"
                 alt = "volunteer" class="image--cover">
            <h5 class = " caption  text-center ">{{ $vol['full_name'] }}</h5>
        </div>
@endforeach
</div>

</div>
@endsection
