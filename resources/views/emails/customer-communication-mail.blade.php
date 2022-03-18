@component('mail::message')

{{$text}}
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
