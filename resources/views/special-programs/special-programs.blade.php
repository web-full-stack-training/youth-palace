@extends('app')
@section('content')

    <div class="row  col-12 bg-white mt-3 mx-0 p-5 d-flex justify-content-center" >
        <h2 class="text-center ">Special Programs</h2>
        <div class="row col-6">
            <strong class="text-center mb-3">{{ $showSpecialProgram->title }}</strong>
            <span class="text-center px-5 ">{{ $showSpecialProgram->description }}</span>
            <div class=" col-12 p-0 d-flex justify-content-center mt-2 mb-5 ">

                <div class=" col-3 mx-1 ">

                    <img
                        src="{{ $showSpecialProgram->image_path }}"
                        class="w-100 shadow-1-strong rounded mb-1"
                        alt="Special Programs "
                    />

                    <img
                        src="{{ $showSpecialProgram->image_path }}"
                        class="w-100 shadow-1-strong rounded "
                        alt="Special Programs"
                    />
                </div>

                <div class="col-3 mx-1">
                    <img
                        src="{{ $showSpecialProgram->image_path }}"
                        class="w-100 shadow-1-strong rounded mb-1"
                        alt="Special Programs"
                    />

                    <img
                        src="{{ $showSpecialProgram->image_path }}"
                        class="w-100 shadow-1-strong rounded "
                        alt="Special Programs"
                    />
                </div>

                <div class="col-3 mx-1">
                    <img
                        src="{{ $showSpecialProgram->image_path }}"
                        class="w-100 shadow-1-strong rounded mb-1"
                        alt="Special Programs"
                    />

                    <img
                        src="{{ $showSpecialProgram->image_path }}"
                        class="w-100 shadow-1-strong rounded "
                        alt="Special Programs"
                    />
                </div>
            </div>
        </div>
        <div class="row col-6">
            <strong class="text-center mb-3">Special Programs</strong>
            <span class="text-center px-5 ">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in
                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </span>
            <div class=" col-12 p-0 d-flex justify-content-center mt-2 mb-5 ">

                <div class=" col-3 mx-1 ">

                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 shadow-1-strong rounded mb-1"
                        alt="Boat on Calm Water "
                    />

                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                        class="w-100 shadow-1-strong rounded "
                        alt="Wintry Mountain Landscape"
                    />
                </div>

                <div class="col-3 mx-1">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                        class="w-100 shadow-1-strong rounded mb-1"
                        alt="Mountains in the Clouds"
                    />

                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 shadow-1-strong rounded "
                        alt="Boat on Calm Water"
                    />
                </div>

                <div class="col-3 mx-1">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                        class="w-100 shadow-1-strong rounded mb-1"
                        alt="Waves at Sea"
                    />

                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                        class="w-100 shadow-1-strong rounded "
                        alt="Yosemite National Park"
                    />
                </div>
            </div>
        </div>



    </div>


@endsection
