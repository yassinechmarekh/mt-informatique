<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'review' => 'required|string',
        ]);

        $review = new Review();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $review->product_id = $_POST['idproduit'];
            $review->rating = $request->rating;
            $review->nom = $request->nom;
            $review->email = $request->email;
            $review->comment = $request->review;
        }

        $review->save();

        return redirect()->back()->with('success', 'Merci pour votre avis !');
    }
}
