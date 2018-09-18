@component('mail::message')
    Dear Admin, <br />
    You have a new video call request! <br/>
        Name : {{ ucwords($videocall['name']) }} <br/>
        Email : {{ $videocall['email'] }} <br/>
@endcomponent