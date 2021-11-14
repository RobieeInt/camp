@component('mail::message')
# Transaksi Kamu sudah Terkonfirmasi

Hi {{ $checkout->User->name }}
<br>
Pembayaran Kamu sudah Terkonfirmasi , Sekarang Kamu sudah bisa
menikmati Camp <b>{{ $checkout->Camp->title }}</b>.

@component('mail::button', ['url' => route('user.dashboard')])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
