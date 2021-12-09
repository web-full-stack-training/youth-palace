@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => '999@gmail.com'])
Button Text
@endcomponent

<div>
    Name: {{ $name }}
</div>
@endcomponent
