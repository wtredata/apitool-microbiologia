<?php

namespace App\Resource\CompraLote;

use App\CompraLote;
use App\Resource\Cepa\Manager as CepaManager;
use App\Resource\Medio\Manager as MedioManager;
use App\Resource\PruebaSensibilidad\Manager as PruebaSensibilidadManager;
use App\Resource\Tincion\Manager as TincionManager;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Manager
{

    public static function listarComprasLoteMedio()
    {
        return CompraLote::select('id', 'lote', 'fecha_vencimiento')->with('medios')->get();
    }
    public static function listarComprasLoteCepa()
    {
        return CompraLote::select('id', 'lote', 'fecha_vencimiento')->with('cepas')->get();
    }
    public static function listarComprasLoteTincion()
    {
        return CompraLote::select('id', 'lote', 'fecha_vencimiento')->with('tinciones')->get();
    }

    public static function listarComprasLotePruebaSensibilidad()
    {
        return CompraLote::select('id', 'lote', 'fecha_vencimiento')->with('pruebasSensibilidad')->get();
    }

    public static function findLoteCompradoWithCepas($id)
    {
        return CompraLote::select('id', 'lote', 'fecha_vencimiento')->with('cepas')->find($id);
    }
    public static function findLoteComprado($id)
    {
        return CompraLote::select('id', 'lote', 'fecha_vencimiento')->find($id);
    }

    public function crear($request, $itemId, $section)
    {
        $result = false;
        switch ($section) {
            case "Medio":
                $result = self::crearlotesMedio($request, $itemId);
                break;
            case "Cepa":
                $result = self::crearLoteCepa($request, $itemId);
                break;
            case "Tincion":
                $result = self::crearLotesTincion($request, $itemId);
                break;
            case "Prueba":
                $result = self::crearLotesPrueba($request, $itemId);
                break;
        }

        return $result;
    }

    public function actualizar($request, $compraId, $section)
    {
        Log::info('entra en el método actualizar de comprar lote');
        try {
            $result = false;
            switch ($section) {
                case "Medio":
                    $result = self::actualizarLotesMedio($request, $compraId);
                    break;
                case "Cepa":
                    $result = self::actualizarLotesCepa($request, $compraId);
                    break;
                case "Tincion":
                    $result = self::actualizarLotesTincion($request, $compraId);
                    break;
                case "Prueba":
                    $result = self::actualizarLotesPrueba($request, $compraId);
                    break;
            }
            return $result;
        } catch (Exception $e) {
            Log::error('Error ocurrido al actualizar el registro del lote. ' . $e->getMessage());
            throw new Exception('Error ocurrido al actualizar el registro del lote');
        }
    }

    public function eliminar($id, $section)
    {
        Log::info('entra en el método eliminar de comprar lote');
        try {
            $maps = [
                'Medio' => ['method' => 'eliminarLoteMedio'],
                'Cepa' => ['method' => 'eliminarLoteCepa'],
                'Tincion' => ['method' => 'eliminarLoteTincion']
            ];
            $result = false;
            switch ($section) {
                case "Medio":
                    $result = self::eliminarLoteMedio($id);
                    break;
                case "Cepa":
                    $result = self::eliminarLoteCepa($id);
                    break;
                case "Tincion":
                    $result = self::eliminarLoteTincion($id);
                    break;
                case "Prueba":
                    $result = self::eliminarLotePrueba($id);
                    break;
            }
            return $result;
        } catch (Exception $e) {
            Log::error('Error ocurrido al actualizar el registro. ' . $e->getMessage());
            throw new Exception('Error ocurrido al actualizar el registro');
        }
    }


    public function crearlotesMedio($request, $MedioId)
    {
        DB::beginTransaction();
        $compra = CompraLote::create([
            'lote' => $request->lote,
            'fecha_vencimiento' => $request->fecha_vencimiento
        ]);
        $medio = MedioManager::findMedioById($MedioId);
        $medio->comprasLote()->save($compra);
        DB::commit();

        return $compra;
    }
    public function crearLoteCepa($request,  $CepaId)
    {
        try {
            DB::beginTransaction();
            $compra = CompraLote::create(
                [
                    'lote' => $request->lote,
                    'fecha_vencimiento' => $request->fecha_vencimiento
                ]
            );
            $cepa = CepaManager::findCepaById($CepaId);
            $cepa->comprasLote()->save($compra);
            DB::commit();
            return $compra;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error ocurrido al crear el registro de compra de lote a Cepa. ' . $e->getMessage());
            throw new Exception('Error ocurrido al crear el registro de compra de lote a Cepa');
        }
    }
    public function crearLotesTincion($request, $tincionId)
    {
        try {
            DB::beginTransaction();
            $compra = CompraLote::create([
                'lote' => $request->lote,
                'fecha_vencimiento' => $request->fecha_vencimiento
            ]);
            $tincion = TincionManager::findTincionById($tincionId);
            $tincion->comprasLote()->save($compra);
            DB::commit();

            return $compra;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error ocurrido al crear el registro de compra de lote a Tincion. ' . $e->getMessage());
            throw new Exception('Error ocurrido al crear el registro de compra de lote a Tincion');
        }
    }

    public function crearLotesPrueba($request, $pruebaId)
    {
        try {
            DB::beginTransaction();
            $compra = CompraLote::create([
                'lote' => $request->lote,
                'fecha_vencimiento' => $request->fecha_vencimiento
            ]);
            $prueba = PruebaSensibilidadManager::findPruebaById($pruebaId);
            $prueba->comprasLote()->save($compra);
            DB::commit();
            return $compra;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error ocurrido al crear el registro de compra de lote a pruebas. ' . $e->getMessage());
            throw new Exception('Error ocurrido al crear el registro de compra de lote a pruebas');
        }
    }

    public function actualizarLotesMedio($request, $compraLoteId)
    {
        try {
            DB::beginTransaction();
            $compraLote = $this->findLoteComprado($compraLoteId);
            $compraLote->update(['lote' => $request->lote, 'fecha_vencimiento' => $request->fecha_vencimiento]);
            // dd($compraLote);
            DB::commit();
            return $compraLote;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error ocurrido al intentar actualizar el lote de medio. ' . $e->getMessage());
            throw new Exception('Error ocurrido al intentar actualizar el lote de medio');
        }
    }

    public function actualizarLotesCepa($request, $compraLoteId)
    {
        try {
            DB::beginTransaction();
            $compraLote = $this->findLoteComprado($compraLoteId);
            $compraLote->update(['lote' => $request->lote, 'fecha_vencimiento' => $request->fecha_vencimiento]);
            DB::commit();
            return $compraLote;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error ocurrido al intentar actualizar el lote de cepa. ' . $e->getMessage());
            throw new Exception('Error ocurrido al intentar actualizar el lote de cepa');
        }
    }

    public function actualizarLotesTincion($request, $compraLoteId)
    {
        try {
            DB::beginTransaction();
            $compraLote = $this->findLoteComprado($compraLoteId);
            $compraLote->update(['lote' => $request->lote, 'fecha_vencimiento' => $request->fecha_vencimiento]);
            // dd($compraLote);
            DB::commit();
            return $compraLote;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error ocurrido al intentar actualizar el lote de tincion. ' . $e->getMessage());
            throw new Exception('Error ocurrido al intentar actualizar el lote de tincion');
        }
    }

    public function actualizarLotesPrueba($request, $compraLoteId)
    {
        try {
            DB::beginTransaction();
            $compraLote = $this->findLoteComprado($compraLoteId);
            $compraLote->update(['lote' => $request->lote, 'fecha_vencimiento' => $request->fecha_vencimiento]);
            // dd($compraLote);
            DB::commit();
            return $compraLote;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error ocurrido al intentar actualizar el lote de prueba de sensibilidad. ' . $e->getMessage());
            throw new Exception('Error ocurrido al intentar actualizar el lote de prueba de sensibilidad');
        }
    }

    public function eliminarLoteMedio($id)
    {
        try {
            $compraLote = CompraLote::find($id);
            if (!$compraLote) {
                return false;
            }
            $compraLote->medios()->detach();
            $compraLote->delete();
            return true;
        } catch (Exception $e) {
            Log::error('Error ocurrido al eliminar el lote de medios. ' . $e->getMessage());
            throw new Exception('Error ocurrido al eliminar el lote de medios');
        }
    }
    public function eliminarLoteCepa($id)
    {
        try {
            $compraLote = CompraLote::find($id);
            if (!$compraLote) {
                return false;
            }
            $compraLote->cepas()->detach();
            $compraLote->delete();
            return true;
        } catch (Exception $e) {
            Log::error('Error ocurrido al eliminar el lote de cepas. ' . $e->getMessage());
            throw new Exception('Error ocurrido al eliminar el lote de cepas');
        }
    }
    public function eliminarLoteTincion($id)
    {
        try {
            $compraLote = CompraLote::find($id);
            if (!$compraLote) {
                return false;
            }
            $compraLote->tinciones()->detach();
            $compraLote->delete();
            return true;
        } catch (Exception $e) {
            Log::error('Error ocurrido al eliminar el lote de tinciones. ' . $e->getMessage());
            throw new Exception('Error ocurrido al eliminar el lote de tinciones');
        }
    }

    public function eliminarLotePrueba($id)
    {
        try {
            $compraLote = CompraLote::find($id);
            if (!$compraLote) {
                return false;
            }
            $compraLote->pruebasSensibilidad()->detach();
            $compraLote->delete();
            return true;
        } catch (Exception $e) {
            Log::error('Error ocurrido al eliminar el lote de pruebas de sensibilidad. ' . $e->getMessage());
            throw new Exception('Error ocurrido al eliminar el lote de pruebas de sensibilidad');
        }
    }
}
