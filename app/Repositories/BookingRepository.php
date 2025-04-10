<?php
namespace App\Repositories;

use App\Models\Booking;

class BookingRepository
{
    public function create(array $data): Booking
    {
        return Booking::create($data);
    }

    public function isAvailable($roomId, $checkIn, $checkOut): bool
    {
        return !Booking::where('room_id', $roomId)
            ->where(function ($q) use ($checkIn, $checkOut) {
                $q->whereBetween('check_in', [$checkIn, $checkOut])
                  ->orWhereBetween('check_out', [$checkIn, $checkOut]);
            })->exists();
    }
}
