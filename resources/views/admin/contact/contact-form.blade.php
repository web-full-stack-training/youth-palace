<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="media-info-form-card">
    <form action="{{ $action_url }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="contact-id" value="{{ (parse_url($action_url)['path'] === '/admin/contact/edit') ? $contact_data->id : '' }}">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" value="{{ (parse_url($action_url)['path'] === '/admin/contact/edit') ? $contact_data->email : '' }}">
        </div>
        <div class="form-group mt-3">
            <label for="telephone">telephone</label>
            <input type="text" id="telephone" name="telephone" class="form-control" value="{{ (parse_url($action_url)['path'] === '/admin/contact/edit') ? $contact_data->telephone : '' }}">
        </div>
        <div class="form-group">
            <label for="phone_number">phone_number</label>
            <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ (parse_url($action_url)['path'] === '/admin/contact/edit') ? $contact_data->phone_number : '' }}">
        </div>
        <div class="form-group mt-3">
            <label for="address">address</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ (parse_url($action_url)['path'] === '/admin/contact/edit') ? $contact_data->address : '' }}">
        </div>

        <button type="submit" class="btn btn-primary rounded-3 mt-3">{{ (parse_url($action_url)['path'] === '/admin/contact/edit') ? 'edit' : 'creat' }}</button>
    </form>
</div>
