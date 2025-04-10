@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Xona buyurtma qilish</h1>
 
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf <!-- CSRF token qo'shish kerak -->
        
        <div class="mb-3">
            <label for="customer_name" class="form-label">Mijoz ismi</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
        </div>

        <div class="mb-3">
            <label for="room_type" class="form-label">Xona turi</label>
            <select class="form-control" id="room_type" name="room_type" required>
                <option value="">Tanlang</option>
                <option value="single">Yagona xona</option>
                <option value="double">Ikki kishilik xona</option>
                <option value="suite">Suit</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="check_in_date" class="form-label">Kirish sanasi</label>
            <input type="date" class="form-control" id="check_in_date" name="check_in_date" required>
        </div>

        <div class="mb-3">
            <label for="check_out_date" class="form-label">Chiqish sanasi</label>
            <input type="date" class="form-control" id="check_out_date" name="check_out_date" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Telefon raqami</label>
            <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
        </div>

        <button type="submit" class="btn btn-primary">Buyurtma berish</button>
    </form>
</div>
@endsection
