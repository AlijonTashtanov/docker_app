<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

// Xona buyurtmalarining ro'yxatini ko'rsatish (index)
Route::get('/', [BookingController::class, 'index'])->name('bookings.index');

// Yangi buyurtma yaratish (store)
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// Buyurtma qilish formasi
Route::get('/booking/form', [BookingController::class, 'create'])->name('booking.form');

// Buyurtma saqlash (store) yangi buyurtma qilish
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
