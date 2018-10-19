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
            Header Title
        @endcomponent
    @endslot
{{-- Body --}}
    This is our main message
    @component('mail::message')
    # From: {{ $request->email }}
    # Name: {{ $request->name }}
    # Phone: {{ $request->phone }}

    # Message: {{ $request->message }}
    @endcomponent
{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent
