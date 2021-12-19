<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select class="form-control Langchange" style="width: 150px; height: 30px ">
    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }} selected>English</option>
    <option value="am" {{ session()->get('locale') == 'am' ? 'selected' : '' }}>Armenian</option>
    <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russian</option>
</select>
</body>
</html>
