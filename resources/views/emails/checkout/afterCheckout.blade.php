@component('mail::message')
# Ikut Camp: {{ $checkout->Camp->title }}

Hi, {{ $checkout->User->name }}
<br>
Terima Kasih Sudah mau ikut Camp <b>{{ $checkout->Camp->title }}</b>, Hubungi Contact Support Cara pembayaran untuk
dapat mengikuti camp
tersebut.

@component('mail::button', ['url' => route('dashboard')])
Cek Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
