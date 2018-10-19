{{-- @component('mail::message')
# From: {{ $request->email }}
# Name: {{ $request->name }}
# Phone: {{ $request->phone }}

# Message: {{ $request->message }}
@endcomponent --}}

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Inquiry About SK & P Cambodia Law Group
        @endcomponent
    @endslot
{{-- Body --}}
    # From: {{ $request->email }}
    # Name: {{ $request->name }}
    # Phone: {{ $request->phone }}
    # Message: {{ $request->message }}
{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} SK & P Cambodia Law Group Developer. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
