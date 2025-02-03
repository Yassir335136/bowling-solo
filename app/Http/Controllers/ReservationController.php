<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Rows;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ReservationController extends Controller
{
    // custom private variable to remove repeated code and have validation at one place
    private array $validationForm = [
        'startDateTime' => 'required|date|after:today',
        'endDateTime'   => 'required|date|after:startDateTime',
        'adultCount' => 'required|integer|min:1',
        'childrenCount' => 'required|integer|min:0',
    ];


    // overview reservations

    public function index(): View
    {
        $reservation = Reservation::all();
        return view('reservation.index', ['tabledata' => $reservation]);
    }

    // create methods

    // create view
    public function create(): View
    {
        $rows = Rows::all();
        return view('reservation.create', ['rows' => $rows]);
    }

    // redirect code to validate and add data to database.
    public function store(): RedirectResponse
    {
        // data validation
        request()->validate($this->validationForm);
        // store function
        $data = request()->all();
        $data["userId"] = Auth::user()->id;

        // dd($data);
        Reservation::create($data);
        // Redirect
        return Redirect::route('reservations.index')->with('success', 'created successfully.');
    }
}
