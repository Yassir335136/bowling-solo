<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Row;
use Carbon\Carbon;
use DateTime;
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
        'endDateTime'   => 'required|date|after:startdate',
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
        $rows = Row::all();
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

        $dateTime = is_string($data['startDateTime']) ? new DateTime($data['startDateTime']) : $data['startDateTime'];

        $dayOfWeek = $dateTime->format('N'); // 1 (Monday) to 7 (Sunday)
        $hour = (int) $dateTime->format('H'); // 0 - 23

        if ($dayOfWeek >= 1 && $dayOfWeek <= 4) {
            // Monday - Thursday (all day)
            $cost = 24.00;
        } elseif ($dayOfWeek >= 5 && $dayOfWeek <= 7) {
            // Friday - Sunday
            if ($hour < 14 || $hour >= 22) {
                $cost = 28.00; // Before 14:00 and after 22:00
            } else {
                $cost = 33.50; // Between 14:00 - 21:59
            }
        }

        return Redirect::route('reservations.index')->with('success', 'created successfully. costs are: ' . $cost . " euro");
    }

    // update methods

    public function edit(Reservation $reservation): View
    {
        // dd($reservation->startDateTime);
        $startdate = Carbon::createFromFormat('d-m-Y H:i', $reservation->startDateTime)->format('Y-m-d\TH:i');
        $enddate = Carbon::createFromFormat('d-m-Y H:i', $reservation->endDateTime)->format('Y-m-d\TH:i');

        return view('reservation.edit', ['reservation' => $reservation, 'startdate' => $startdate, 'enddate' => $enddate]);
    }

    public function update(Reservation $reservation): RedirectResponse
    {
        // data validation
        $validated = request()->validate($this->validationForm);
        // update functionality
        $reservation->update($validated);

        // redirect
        return Redirect::route('reservations.index', $reservation)->with('success', 'updated successfully.');
    }

    // delete methods

    public function destroy(Reservation $reservation): RedirectResponse
    {
        $reservation->delete();

        return Redirect::route('reservations.index')->with('success', 'deleted successfully.');
    }
}
