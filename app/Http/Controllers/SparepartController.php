<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        $spareparts = Sparepart::all();
        return view('spareparts.index', compact('spareparts'));
    }

    public function create()
    {
        return view('spareparts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'reference' => 'required|unique:spareparts',
            'supplier' => 'required',
            'price' => 'required|numeric',
            'stock_level' => 'required|integer',
        ]);

        Sparepart::create($request->all());

        return redirect()->route('spareparts.index')
            ->with('success', 'Spare part created successfully.');
    }

    public function show(Sparepart $sparepart)
    {
        return view('spareparts.show', compact('sparepart'));
    }

    public function edit(Sparepart $sparepart)
    {
        return view('spareparts.edit', compact('sparepart'));
    }

    public function update(Request $request, Sparepart $sparepart)
    {
        $request->validate([
            'name' => 'required',
            'reference' => 'required|unique:spareparts,reference,' . $sparepart->id,
            'supplier' => 'required',
            'price' => 'required|numeric',
            'stock_level' => 'required|integer',
        ]);

        $sparepart->update($request->all());

        return redirect()->route('spareparts.index')
            ->with('success', 'Spare part updated successfully.');
    }

    public function destroy(Sparepart $sparepart)
    {
        $sparepart->delete();

        return redirect()->route('spareparts.index')
            ->with('success', 'Spare part deleted successfully.');
    }
}
