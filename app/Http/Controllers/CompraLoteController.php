<?php

namespace App\Http\Controllers;

use App\Resource\CompraLote\Manager;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompraLoteController extends Controller
{

    public $manager;

    public function __construct()
    {
        $this->manager = new Manager();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $itemId, $section)
    {
        $request->validate([
            'lote' => 'required|integer',
            'fecha_vencimiento' => 'required|date'
        ]);
        $result = $this->manager->crear($request, $itemId, $section);
        if ($result) {
            return redirect()->back()->with('success', 'Se ha registrado correctamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $section)
    {
        $request->validate([
            'lote' => 'nullable|integer',
            'fecha_vencimiento' => 'nullable|date'
        ]);

        try {
            $updated = $this->manager->actualizar($request, $id, $section);
            if ($updated) {
                return redirect()->back()->with('success', 'Se ha actualizado correctamente');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar el lote');
            throw new Exception('Error ocurrido al actualizar el lote');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $section)
    {
        try {
            $removed = $this->manager->eliminar($id, $section);
            if ($removed) {
                return redirect()->back()->with('success', 'Se ha eliminado correctamente');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al eliminar el registro del lote');
            throw new Exception('Error ocurrido al eliminar el registro del loter');
        }
    }
}
