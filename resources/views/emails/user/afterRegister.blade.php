@component('mail::message')
# Selamat Datang

Hallo {{ $user->name }}
<br>
Selamat Bergabung di Wecamp, Nikmati Berbagai Camp yang ada pada website kami!

@component('mail::button', ['url' => route('login')])
Login Disini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
