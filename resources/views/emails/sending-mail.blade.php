@component('emails::message')
# Introduction

The body of your message.

@component('emails::button', ['url' => '999@gmail.com'])
Button Text
@endcomponent

<div>
    Name: {{ $user }}
</div>
@endcomponent
