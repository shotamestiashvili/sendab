@component('mail::message')
# Email Verification

Please verify email

@component('mail::button', ['url' => "http://sendapp/verify/{$email}/{$remember_token}"])
Click To Veirfy
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
