<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class CopmuterViewController extends Controller
{
    public function showGamerModels()
    {
        $category = "gamer";
        $gamerModelsView = Computer::where('category', $category)->get();
        return view('gamerModels', compact('gamerModelsView', 'category'));
    }

    public function showBudgetModels()
    {
        $category = "budget";
        $budgetModelsView = Computer::where('category', $category)->get();
        return view('budgetModels', compact('budgetModelsView', 'category'));
    }

    public function showWorkstationModels()
    {
        $category = "workstation";
        $workstationModelsView = Computer::where('category', $category)->get();
        return view('workstations', compact('workstationModelsView', 'category'));
    }

    public function show($category, $id)
    {
        $computer = Computer::where('category', $category)->findOrFail($id);
        return view('computerDetail', compact('computer', 'category'));

    }

    public function getRandomComputers()
    {
        $randomComputers = Computer::inRandomOrder()->take(6)->get();
        return $randomComputers;
    }
}
