<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Services\BookingService;  // Service qo'llanilmoqda

class BookingController extends Controller
{
    protected $bookingService;

    // Konstruktor orqali serviceni inject qilish
    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    // Xona buyurtmalarining ro'yxatini ko'rsatish
    public function index()
    {
        $bookings = Booking::all(); 
        // dd($bookings);
        // Hamma buyurtmalarni olish
        return view('booking.index', compact('bookings'));  // Index sahifasini ko'rsatish
    }

    // Yangi buyurtma yaratish (formani ko'rsatish)
    public function create()
    {
        return view('booking.form');  // Form sahifasini ko'rsatish
    }

    // Yangi buyurtma saqlash
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'room_type' => 'required|string|max:50',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date',
            'phone_number' => 'required|string',
        ]);
// dd($this->bookingService);
        // Service orqali buyurtmani saqlash
        $this->bookingService->createBooking($validated);

        return redirect()->route('bookings.index')->with('success', 'Buyurtma muvaffaqiyatli qabul qilindi!');
    }
}
