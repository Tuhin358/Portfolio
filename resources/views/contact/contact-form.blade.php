@component('mail::message')

<h3>New Message From {{$contact_form_data['email']}}</h3>

<p>Name:{{$contact_form_data['name']}} </p>

<p>Phone:{{$contact_form_data['phone']}} </p>

<p>Message:{{$contact_form_data['message']}} </p>

@endcomponent










{{--  <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>  --}}
