<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservaRequest;
use App\Http\Requests\UpdateReservaRequest;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Livewire\Volt\Exceptions\ReturnNewClassExecutionEndingException;

use function Pest\Laravel\delete;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('reservas.index', ['reservas'=>Reserva::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'dia_hora' => 'required|string', 
            'pista_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        Reserva::create($validated);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservaRequest $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
         return redirect()->route('reservas.index');
    }
}
