<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{
    public function index()
    {
        return view('scores.index', ['scores' => Score::all()]);
    }

    public function destroy($id)
    {
        try {
            $score = Score::findOrFail($id);
            $score->delete();
            return response()->json(['message' => 'Score deleted']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete score'], 500);
        }
    }
}