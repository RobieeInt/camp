@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">
                    My Camps
                </div>
                <div class="card-body">
                    @include('components.alert')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Camp</th>
                                <th>Harga</th>
                                <th>Tanggal</th>
                                <th>Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($checkouts as $checkout)
                            <tr>
                                <td>{{ $checkout->User->email }}</td>
                                <td>{{ $checkout->Camp->title }}</td>
                                <td>Rp.{{ number_format($checkout->Camp->price) }}</td>
                                <td>{{ $checkout->created_at}}</td>
                                <td>
                                    @if ($checkout->is_paid)
                                    <span class="badge bg-success">Lunas</span>
                                    @else
                                    <span class="badge bg-warning">Menunggu Pembayaran</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!$checkout->is_paid)
                                    <form action="{{ route('admin.checkout.update', $checkout->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-success btn-sm">Paid</button>
                                    </form>

                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Gada Camp Terdaftar</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
