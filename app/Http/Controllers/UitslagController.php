<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UitslagController extends Controller
{
    public function showAll() : View
    {
        $uitslagen = \App\Models\Uitslag::with(['spel.persoon'])
                ->get();

        return view('uitslag.showall', ['uitslagen' => $uitslagen]);
    }

    public function edit(string $id) : View
    {
        $uitslag = \App\Models\Uitslag::with(['spel.persoon'])->findOrFail($id);

        return view('uitslag.edit', ['uitslag' => $uitslag]);
    }

    public function update(Request $request, $id) : RedirectResponse
    {
        // Validate the points input
        $request->validate([
            'AantalPunten' => 'required|integer|min:0|max:300',
        ], [
            'AantalPunten.required' => 'Het aantal punten is verplicht.',
            'AantalPunten.integer' => 'Het aantal punten moet een geheel getal zijn.',
            'AantalPunten.min' => 'Het aantal punten moet groter dan of gelijk aan 0 zijn.',
            'AantalPunten.max' => 'Het aantal punten is niet geldig, voer een waarde in kleiner of gelijk aan 300',
        ]);

        // Find the Uitslag record
        $uitslag = \App\Models\Uitslag::findOrFail($id);

        // Update the points (AantalPunten)
        $uitslag->AantalPunten = $request->input('AantalPunten');
        $uitslag->save();

        // Redirect back with success message
        return redirect()->route('uitslag.showall')->with('success', 'Aantal Punten is gewijzigd');
    }
}
