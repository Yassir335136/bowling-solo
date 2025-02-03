<?php

namespace App\Http\Controllers;

use App\Models\Uitslag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReserveringController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        // Get the currently logged-in user
        $user = auth()->user();

        // Retrieve the date input from the form (default to today if not provided)
        $date = $request->input('date', Carbon::today()->format('Y-m-d'));

        try {
            // Validate and format the date
            $formattedDate = Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');

        } catch (\Exception $e) {
            return back()->with('error', 'Ongeldige datum.');
        }

        // Get all reservations for the logged-in user
        $reservations = \App\Models\Reservering::where('PersoonId', $user->id)
            ->whereDate('Datum', $formattedDate)
            ->pluck('id'); // Get only the reservation IDs

        // Get all results (Uitslagen) linked to those reservations
        $uitslagen = Uitslag::with(['spel.reservering', 'spel.persoon'])
            ->whereHas('spel.reservering', function ($query) use ($reservations) {
                $query->whereIn('id', $reservations);
            })
            ->orderBy('AantalPunten', 'desc')
            ->get();

        return view('reservering.index', [
            'uitslagen' => $uitslagen,
        ]);
    }

    /**
     * Show all resources
     */
    public function showAll() : View
    {
        $uitslagen = [];
        return view('reservering.showAll', ['uitslagen' => $uitslagen]);
    }
}
