@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Xona Buyurtmalari Ro'yxati</h1>

    <!-- Yangi buyurtma yaratish tugmasi -->
    <a href="{{ route('booking.form') }}" class="btn btn-primary mb-4">Yangi Buyurtma</a>

    <div class="list-group">
        @foreach ($bookings as $booking)
            <div class="list-group-item">
                <h5>{{ $booking->customer_name }} - {{ $booking->room_type }}</h5>
                <p>Check-in: <strong>{{ $booking->check_in_date }}</strong> | Check-out: <strong>{{ $booking->check_out_date }}</strong></p>
                <p><strong>Telefon:</strong> {{ $booking->phone_number }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
