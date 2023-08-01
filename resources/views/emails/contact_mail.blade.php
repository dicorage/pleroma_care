@component('mail::message')
{{-- Greeting --}}

# Hello Admin

New Message from User on {{config('app.name')}} Site

{{-- Intro Lines --}}
Name: {{$fname}} {{$lname}}<br>
Message: {{$message}}<br>
{{(!empty($phone)) ? 'Phone : '.$phone : ''}}

{{-- Salutation --}}
@lang('Regards'),<br>{{config('app.name')}} Team
@endcomponent
