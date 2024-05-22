<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function submitApplication(Request $request)
    {
        $request->validate([
            'name_client' => 'required|string',
            'phone_number_client' => 'required|string',
            'budget_client' => 'required|string',
            'purpose_client' => 'required|string',
            'wishes_client' => 'nullable|string'
        ]);

        $newRequest = new Application([
            'name_client' => $request->input('name_client'),
            'phone_number_client' => $request->input('phone_number_client'),
            'budget_client' => $request->input('budget_client'),
            'purpose_client' => $request->input('purpose_client'),
            'wishes_client' => $request->input('wishes_client'),
        ]);

        $newRequest->save();

        return redirect()->back()->with('success-application', 'Заявка успешно отправлена.');
    }
}
