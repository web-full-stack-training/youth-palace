<link rel="stylesheet" href="{{ asset('css/admin/about.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/special-programs.css') }}">

<div class="about-info-form-card">

    <form action="{{ $action_url }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="specialPrograms-id" value="{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->id : '' }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->title : '' }}">
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="7" >{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->description : '' }}</textarea>
        </div>
{{--$action_url i dzevy poxel--}}
        @if($action_url === 'http://yp.loc/admin/special-programs/edit')
           <div class="data-photos d-flex w-25 mt-3">
                @if($specialProgramData['specialProgramImages'])
                    @foreach($specialProgramData['specialProgramImages'] as $dataImage)
                       <a href="#" class="rollover"><img
                            src="{{ $dataImage['image_path'] }}"
                            class=" shadow-1-strong rounded specialImages "
                            alt="Special Programs "
                        /></a>
                    @endforeach
                @endif
            </div>
        @endif
        <input type="file" class="form-control mt-3" name="images[]" multiple>
        <button type="submit" class="btn btn-primary rounded-3 mt-3">{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? 'edit' : 'creat' }}</button>
    </form>
</div>

