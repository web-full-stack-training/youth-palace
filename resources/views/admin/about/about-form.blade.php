<link rel="stylesheet" href="{{ asset('css/admin/about.css') }}">
<div class="about-info-form-card">
    <form action="{{ $action_url }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control"  value="{{ (parse_url($action_url)['path'] === '/admin/about-us/edit') ? $about_data->title : '' }}">
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="7">{{ (parse_url($action_url)['path'] === '/admin/about-us/edit') ? $about_data->description : '' }}</textarea>
        </div>
        <input type="file" class="form-control mt-3" name="image" accept=".jpg, .jpeg, .png">
        <button type="submit" class="btn btn-primary rounded-3 mt-3">{{ (parse_url($action_url)['path'] === '/admin/about-us/edit') ? 'Save' : 'creat' }}</button>
    </form>
</div>
