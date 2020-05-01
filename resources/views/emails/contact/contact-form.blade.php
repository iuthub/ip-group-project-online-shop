@component('mail::message')
# Thank you for your message

<strong>Username</strong> {{ $data['username']}}
<strong>Email</strong> {{ $data['email']}}

<strong>Message</strong> 

{{ $data['message']}}

@endcomponent
