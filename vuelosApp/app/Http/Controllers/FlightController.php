<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $flights = Flight::all();
        return view('flight.index',['flights' => $flights]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('flight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
         // 1º Generar objeto para guardar
        $object = new Flight($request->all()); 
        // 2º Intentar guardar
        try {
            $result = $object->save();
            // 3º Si lo he guardado, volver a 'algún sitio: index, create'
            $afterInsert = session('afterInsert', 'show flight');
            $target = 'flight';
            if($afterInsert != 'show flight') {
                $target = 'flight/create';
            }
            return redirect($target)->with(['message' => 'The flight has been saved.']);
        } catch(\Exception $e) {
            // 4º Si no lo he guardado, volver a la página anterior con sus datos para volver a rellenar el formulario
            //dd($e->getMessage());
            return back()->withInput()->withErrors(['message' => 'The flight has not been saved.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight) {
        return view('flight.show', ['flight' => $flight]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight) {
        return view('flight.edit', ['flight' => $flight]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight) {
        try {
            $result = $flight->update($request->all());
            
            $afterEdit = session('afterEdit', 'flight');
            if($afterEdit == 'flight') {
                $target = 'flight';
            } else if($afterEdit == 'edit') {
                $target = 'flight/' . $flight->id . '/edit';
            } else {
                $target = 'flight/' . $flight->id;
            }
            
            return redirect($target)->with(['message' => 'The flight has been updated.']);
        } catch(\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The flight has not been updated.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight) {
        try {
            $flight->delete();
            return redirect('flight')->with(['message' => 'The flight has been deleted.']);
        } catch(\Exception $e) {
             return back()->withErrors(['message' => 'The flight has not been deleted.']);
        }
    }
}
