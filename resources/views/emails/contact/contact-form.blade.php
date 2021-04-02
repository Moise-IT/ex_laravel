@component('mail::message')
Bonjour 

Vous avez recu un mail de la part de {{ $data['name'] }} ({{ $data['email'] }})

Message :
{{ $data['message'] }}

@endcomponent