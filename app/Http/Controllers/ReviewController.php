<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function submitReview(Request $request)
    {
        $request->validate([
            'name_client_review' => 'required|string',
            'grade_client_review' => 'required|numeric|min:1|max:10',
            'comment_client_review' => 'required|string',
        ]);

        $newRequest = new Review([
            'name_client_review' => $request->input('name_client_review'),
            'grade_client_review' => $request->input('grade_client_review'),
            'comment_client_review' => $request->input('comment_client_review'),
        ]);

        $newRequest->save();

        return redirect()->back()->with('success-review', 'Данные успешно отправлены в базу данных.');
    }

    public function showReview()
    {
        $showReview = Review::where('status_review', '1')->get();
        return view('reviews', compact('showReview'));
    }
}
