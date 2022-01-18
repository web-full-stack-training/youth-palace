<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="volunteering-info-form-card">
    <form action="{{ $action_url }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="our-works-id" value="{{ (parse_url($action_url)['path'] === '/admin/our-works/edit') ? $our_works_data->id : '' }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ (parse_url($action_url)['path'] === '/admin/our-works/edit') ? $our_works_data->title : '' }}">
            <small class="text-danger">{{ $errors->first('title') }}</small>
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="7">{{ (parse_url($action_url)['path'] === '/admin/our-works/edit') ? $our_works_data->description : '' }}</textarea>
            <small class="text-danger">{{ $errors->first('description') }}</small>
        </div>
        <input type="file" class="form-control mt-3" name="image"  accept=".jpg, .jpeg, .png">
        <small class="text-danger">{{ $errors->first('images') }}</small>
        <button type="submit" class="btn btn-primary rounded-3 mt-3">{{ (parse_url($action_url)['path'] === '/admin/our-works/edit') ? 'Save' : 'Creat' }}</button>
    </form>
</div>
