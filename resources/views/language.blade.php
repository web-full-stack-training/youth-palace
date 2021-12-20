<!DOCTYPE html>
<html>
<head>
    <title>How to Create Multi Language Website in Laravel - Online Web Tutor Blog</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
            <select class="form-control Langchange">
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option value="am" {{ session()->get('locale') == 'am' ? 'selected' : '' }}>Armenian</option>
                <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russian</option>
            </select>
        <h1 style="margin-top: 80px;">{{ __('message.Special Programs') }}</h1>
        <h2 style="margin-top: 80px;">{{ __('message.Clubs') }}</h2>
        <h3 style="margin-top: 80px;">{{ __('message.Collaboration') }}</h3>
</div>
</body>

<script type="text/javascript">
    const url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
</html>
