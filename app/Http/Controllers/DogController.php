<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        $dogs = Dog::all();
        return view('dogs.index', compact('dogs'));
    }

    public function create()
    {
        return view('dogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'available_for_adoption' => 'required|boolean',
        ]);

        Dog::create($validated);

        return redirect()->route('dogs.index')->with('success', 'Dog added successfully.');
    }

    public function show(Dog $dog)
    {
        return view('dogs.show', compact('dog'));
    }

    public function edit(Dog $dog)
    {
        return view('dogs.edit', compact('dog'));
    }

    public function update(Request $request, Dog $dog)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'available_for_adoption' => 'required|boolean',
        ]);

        $dog->update($validated);

        return redirect()->route('dogs.index')->with('success', 'Dog updated successfully.');
    }

    public function destroy(Dog $dog)
    {
        $dog->delete();
        return redirect()->route('dogs.index')->with('success', 'Dog deleted successfully.');
    }

    public function showAdoptionPage()
    {
        $dogs = Dog::all(); // or paginate if you prefer
        return view('adoption', compact('dogs'));
    }
}
