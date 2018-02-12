@component('mail::message')
    # New Message !

    **Name:** {{ $name }}
    <br>
    **Email:** {{ $email }}
    <br>
    **Phone:** {{ $phone }}
    <br>
    **Address:** {{ $address }}
    <br>
    **Date:** {{ $date }}
    <br>
    **Message:**
    <br>
    {{ $message }}
@endcomponent
