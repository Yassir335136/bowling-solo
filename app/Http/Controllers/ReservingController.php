<?php

namespace App\Http\Controllers;

use App\Models\Alley;
use Illuminate\Http\Request;
use App\Models\Reserving;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReservingController extends Controller
{

    // read methods
    public function index(Request $request): View
    {

        $filtered = session('filtered');
        $fail     = session('fail');
        // dd($filtered);
        // recieves the tabel that's filtered and a failmessage if it failed.
        if ($filtered && !$fail) {
            return view('reserving.index', ['tabledata' => $filtered->where('personId', '=', Auth::user()->id)])->with('success', 'table has been filtered');
        } else if ($fail) {
            return view('reserving.index', ['tabledata' => Reserving::orderBy('date', 'asc')->get()->where('personId', '=', Auth::user()->id)])->with('fail', $fail);
        } else {
            return view('reserving.index', ['tabledata' => Reserving::orderBy('date', 'asc')->get()->where('personId', '=', Auth::user()->id)]);
        }
    }

    // custom private variable to remove repeated code and have validation at one place

    // update methods

    public function edit(Reserving $Reserving): View
    {
        $alleys = Alley::all();
        return view('reserving.edit', ['reserving' => $Reserving, 'alleys' => $alleys]);
    }

    public function update(Reserving $reserving): RedirectResponse
    {
        // data validation
        $alley = Alley::Find(request()->alleyId);

        $validated = request()->validate([
            'alleyId' => [
                'required',
                // custom rule that checks to see if the reservation has kids and the alley have fences for them
                // otherwise returns a fail message back
                function ($attribute, $value, $fail) use ($alley, $reserving) {
                    if ($alley && $alley->HasFences == 0 && $reserving->totalChildren > 0) {
                        $fail('this lane is not acceptable for children');
                    }
                },
            ]
        ]);
        // update functionality
        $reserving->update($validated);

        // redirect
        return Redirect::route('reservings.index')->with('success', 'updated successfully.');
    }

    public function admin()
    {
        $filtered = session('filtered');
        $fail     = session('fail');
        // dd($filtered);
        // recieves the tabel that's filtered and a failmessage if it failed.
        if ($filtered && !$fail) {
            return view('reserving.index', ['tabledata' => $filtered])->with('success', 'table has been filtered');
        } else if ($fail) {
            return view('reserving.index', ['tabledata' => Reserving::orderBy('date', 'asc')->get()])->with('fail', $fail);
        } else {
            return view('reserving.index', ['tabledata' => Reserving::orderBy('date', 'asc')->get()]);
        }
    }
}
