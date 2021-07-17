@component('mail::message')
# New Subscribe

<h1>Email Address: {{$data['email']}}</h1>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks<br>
{{-- {{ config('app.name') }} --}}
@endcomponent
