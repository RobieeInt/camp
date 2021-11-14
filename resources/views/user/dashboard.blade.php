@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $checkout )
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{ $checkout->Camp->title }}</strong>
                            </p>
                            <p>
                                {{ $checkout->created_at->format('M d, y') }}
                            </p>
                        </td>
                        <td>
                            <strong>Rp. {{ number_format($checkout->Camp->price) }}</strong>
                        </td>
                        <td>
                            @if ($checkout->is_paid)
                            <strong class="text-success">Pembayaran Berhasil</strong>
                            @else
                            <strong>Waiting for Payment</strong>
                            @endif
                        </td>
                        <td>
                            <a href="https://api.whatsapp.com/send/?phone=%2B628568780192&text=Halo+saya+ingin+bertanya+tentang+Kelas+:+```{{ $checkout->camp->title }}```"
                                target="_blank" class="btn btn-primary">
                                Contact Support
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
                            <h3> Ga ada Data</h3>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
