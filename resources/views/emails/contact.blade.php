@component('mail::message')
# From: {{ $request->email }}
# Name: {{ $request->name }}
# Phone: {{ $request->phone }}

{{ $request->message }}
@endcomponent
