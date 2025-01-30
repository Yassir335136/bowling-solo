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
        // Retrieve the date input from the form
        $date = $request->input('date');
        $uitslagen = [];  // Default to an empty array

        if ($date) {
            try {
                // Confirm the date format
                $formattedDate = Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');

                // Output the formatted date for debugging
                \Log::info("Formatted date: " . $formattedDate);

            } catch (\Exception $e) {
                // If the date format is invalid, log the error
                \Log::error("Invalid date format: " . $date);
                return back()->with('error', 'Ongeldige Datum.');
            }

            // Query the database using the correctly formatted date
            $uitslagen = Uitslag::with(['spel.reservering', 'spel.persoon'])
                ->whereHas('spel.reservering', function ($query) use ($formattedDate) {
                    \Log::info("Query Date: " . $formattedDate);  // Log the query date for debugging
                    $query->whereDate('reservering.Datum', $formattedDate)
                        ->where('reservering.PersoonId', auth()->user()->id);  // Ensure results are for the logged-in user
                })
                ->orderBy('AantalPunten', 'desc')
                ->get();

        }

        return view('reservering.index', ['uitslagen' => $uitslagen]);
    }


    /**
     * Show all resources
     */
    public function showAll() : View
    {
        return view('reservering.showAll', ['uitslagen' => $uitslagen]);
    }
}
