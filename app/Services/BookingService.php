<?php

namespace App\Services;

use App\Models\Booking;

class BookingService
{
    // Yangi buyurtma yaratish
    public function createBooking(array $data)
    {
        // Buyurtma yaratish va saqlash
        // dd($data);
        return Booking::create([
            'customer_name' => $data['customer_name'],
            'room_type' => $data['room_type'],
            'check_in_date' => $data['check_in_date'],
            'check_out_date' => $data['check_out_date'],
            'phone_number' => $data['phone_number'],
        ]);
    }
}
