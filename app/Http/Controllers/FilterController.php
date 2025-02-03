<?php

namespace App\Http\Controllers;

use App\Models\Reserving;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FilterController extends Controller
{
    public function filterDate(Request $request): RedirectResponse
    {

        // $filtered = Reserving::all()->where("date", ">", $request->date)->;
        $filtered = Reserving::orderBy('date', 'asc')->get()->where("date", ">", $request->date);
        // dd($filtered);
        if (sizeof($filtered) == 0) {
            return back()->with('fail', "No information after " . $request->date);
        }
        return back()->with('filtered', $filtered);
    }
}
