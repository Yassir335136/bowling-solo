<?php

namespace App\Http\Controllers;

use App\Models\Row;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BowlingLane extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('rows.index', [
            'rows' => Row::with('user')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('rows.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'max:20', 'min:4', 'unique:rows,name', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'HasFences' => ['required', 'boolean'],
            'IsVip' => ['required', 'boolean'],
            'IsActive' => ['required', 'boolean'],
            'comment' => ['nullable', 'string', 'max:255', 'min:4'],
        ]);

        $row = new Row($validated);
        $row->user_id = auth()->id();
        $row->save();

        return redirect()->route('rows.index')->with('success', 'Bowling Baan aangemaakt');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        return view('rows.show', [
            'row' => Row::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        return view('rows.edit', [
            'row' => Row::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'max:20', 'min:4', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'HasFences' => ['required', 'boolean'],
            'IsVip' => ['required', 'boolean'],
            'IsActive' => ['required', 'boolean'],
            'comment' => ['nullable', 'string', 'max:255', 'min:4'],
        ]);

        $row = Row::findOrFail($id);
        $row->user_id = auth()->id();
        $row->update($validated);

        return redirect()->route('rows.index')->with('success', 'Bowling Baan aangepast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : string|RedirectResponse
    {
        try {
            Row::find($id)->delete($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('rows.index')->with('error', 'Bowling Baan verwijderd');
    }
}
