@component('mail::message')
# You have successfully reseted password!

your password is: {{$password}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent

