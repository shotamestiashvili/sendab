@component('mail::message')
# Support Email


Subject: {{$subject}}
<br>

Name: {{$name}}
<br>

Email: {{$email}}
<br>

Parcel Code: {{$parcel_code}}
<br>

Message: {{$comment}}
<br>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
