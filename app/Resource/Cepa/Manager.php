<?php
namespace App\Resource\Cepa;


use App\SeguimientoCepaPruebaSensibilidad;
use App\ControlCepaPruebaSensibilidad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Resource\Archivos\Subir;
use App\SeguimientoCepaTincion;
use App\ControlCepaTincion;
use App\ControlCepaMedio;
use App\PruebaLoteMedio;
use App\Cepa;
use App\SeguimientoCepaMedio;
use Exception;

class Manager
{

    const CARPETA = 'CONTROL_CEPA/FOTO';

    public function findRegistroControlCepaMedio($id)
    {
        return ControlCepaMedio::select('id', 'comentario', 'foto_url', 'medicion_id', 'id_usuario')->find($id);
    }

    public function findRegistroControlCepaTincion($id)
    {
        return ControlCepaTincion::select('id', 'comentario', 'foto_url', 'medicion_id', 'usuario_id')->find($id);
    }

    public function findRegistroControlCepaPrueba($id)
    {
        return ControlCepaPruebaSensibilidad::select('id', 'comentario', 'foto_url', 'medicion_id', 'usuario_id')->find($id);
    }

    public static function findCepaById($id)
    {
        return Cepa::select('id_cepa', 'nom_cepa', 'num_lote', 'fecha', 'cualitativo', 'estado')->find($id);
    }

    public static function listarControlesCepaByLote($loteLabId)
    {
        return ControlCepaMedio::where('lote_laboratorio_id', $loteLabId)->select('id', 'comentario', 'foto_url', 'medicion_id', 'id_usuario', 'prueba_lote_id', 'created_at')->with('pruebaLote.loteCepa.cepas')->get();
    }

    public function asignarLoteCepa($request)
    {

        DB::beginTransaction();
        SeguimientoCepaMedio::create([
            'lote_cepa_id' => $request->loteCepaId,
            'lote_medio_id' => $request->loteMedioId,
        ]);
        DB::commit();
    }
    public function asignarLoteCepaTincion($request)
    {
        try {
            DB::beginTransaction();
            SeguimientoCepaTincion::create([
                'lote_cepa_id' => $request->loteCepaId,
                'lote_tincion_id' => $request->loteTincionId
            ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error: no fue posible asignar el lote de cepa al lote de tincion.' . $e->getMessage());
            throw new Exception('Error: no fue posible asignar el lote de cepa al lote de tincion');
        }
    }
    public function asignarLoteCepaPrueba($request)
    {
        try {
            DB::beginTransaction();
            SeguimientoCepaPruebaSensibilidad::create([
                'lote_cepa_id' => $request->loteCepaId,
                'lote_prueba_id' => $request->lotePruebaId
            ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error: no fue posible asignar el lote de cepa al lote de Pruebas de sensibilidad.' . $e->getMessage());
            throw new Exception('Error: no fue posible asignar el lote de cepa al lote de Pruebas de sensibilidad');
        }
    }

    public function registrarControlCepaMedio($request)
    {
        DB::beginTransaction();
        $path = null;

        if (isset($request->foto_url) && !is_null($request->foto_url)) {
            $archivo = new Subir($request->foto_url, self::CARPETA);
            $archivo->guardar();
            $path = $archivo->getPath();
        }

        ControlCepaMedio::create([
            'comentario' => $request->comentario,
            'foto_url' => $path,
            'medicion_id' => $request->tipoMedicionId,
            'id_usuario' => Auth::user()->id_usuario,
            'seguimiento_cepa_id' => $request->seguimientoPrueba
        ]);

        DB::commit();
        return true;
    }

    public function registrarControlTincion($request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();

            $path = null;

            if (isset($request->foto_url) && !is_null($request->foto_url)) {
                $archivo = new Subir($request->foto_url, self::CARPETA);
                $archivo->guardar();
                $path = $archivo->getPath();
            }

            ControlCepaTincion::create([
                'comentario' => $request->comentario,
                'foto_url' => $path,
                'medicion_id' => $request->tipoMedicionId,
                'usuario_id' => Auth::user()->id_usuario,
                'seguimiento_cepa_id' => $request->seguimientoPrueba
            ]);
            DB::commit();
            return true;
        } catch (Exception $e) {
            Log::error('Error ocurrido al crear el registro de control de la cepa de la tincion: ' . $e->getMessage());
            throw new Exception('Error ocurrido al crear el registro de control de la cepa de la tincion');
        }

    }
    public function registrarControlPrueba($request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();

            $path = null;

            if (isset($request->foto_url) && !is_null($request->foto_url)) {
                $archivo = new Subir($request->foto_url, self::CARPETA);
                $archivo->guardar();
                $path = $archivo->getPath();
            }

            ControlCepaPruebaSensibilidad::create([
                'comentario' => $request->comentario,
                'foto_url' => $path,
                'medicion_id' => $request->tipoMedicionId,
                'usuario_id' => Auth::user()->id_usuario,
                'seguimiento_cepa_id' => $request->seguimientoPrueba
            ]);
            DB::commit();
            return true;
        } catch (Exception $e) {
            Log::error('Error ocurrido al crear el registro de control de la cepa a Prueba de sensibilidad: ' . $e->getMessage());
            throw new Exception('Error ocurrido al crear el registro de control de la cepa a Prueba de sensibilidad');
        }

    }
    public function updateControlMedio($request, $id)
    {
        try {
            DB::beginTransaction();
            $controlCepa = $this->findRegistroControlCepaMedio($id);
            $path = null;
            if (isset($request->foto_url) && !is_null($request->foto_url)) {
                Log::info('se sube una foto para guardar');
                $archivo = new Subir($request->foto_url, self::CARPETA);
                $archivo->guardar();
                $path = $archivo->getPath();
                if (isset($request->fotoOld) && !is_null($request->fotoOld)) {
                    Log::info('viene foto vieja para eliminar');
                    $archivo->eliminarArchivo($request->fotoOld);
                }
                $controlCepa->update(['foto_url' => $path]);
            }
            $controlCepa->update([
                'comentario' => $request->comentario,
                'medicion_id' => $request->tipoMedicionId,
                'id_usuario' => Auth::user()->id_usuario,
                'seguimiento_cepa_id' => $request->seguimientoPrueba
            ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error: no fue posible actualizar el control de la cepa.' . $e->getMessage());
            throw new Exception('Error: no fue posible actualizar el control de la cepa');
        }
    }

    public function updateControlTincion($request, $id)
    {
        try {
            DB::beginTransaction();
            $controlCepa = $this->findRegistroControlCepaTincion($id);
            $path = null;
            if (isset($request->foto_url) && !is_null($request->foto_url)) {
                Log::info('se sube una foto para guardar');
                $archivo = new Subir($request->foto_url, self::CARPETA);
                $archivo->guardar();
                $path = $archivo->getPath();
                if (isset($request->fotoOld) && !is_null($request->fotoOld)) {
                    Log::info('viene foto vieja para eliminar');
                    $archivo->eliminarArchivo($request->fotoOld);
                }
                $controlCepa->update(['foto_url' => $path]);
            }
            $controlCepa->update([
                'comentario' => $request->comentario,
                'medicion_id' => $request->tipoMedicionId,
                'usuario_id' => Auth::user()->id_usuario,
                'seguimiento_cepa_id' => $request->seguimientoPrueba
            ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error: no fue posible actualizar el control de la cepa.' . $e->getMessage());
            throw new Exception('Error: no fue posible actualizar el control de la cepa');
        }
    }

    public function updateControlPrueba($request, $id)
    {
        try {
            DB::beginTransaction();
            $controlCepa = $this->findRegistroControlCepaPrueba($id);
            $path = null;
            if (isset($request->foto_url) && !is_null($request->foto_url)) {
                Log::info('se sube una foto para guardar');
                $archivo = new Subir($request->foto_url, self::CARPETA);
                $archivo->guardar();
                $path = $archivo->getPath();
                if (isset($request->fotoOld) && !is_null($request->fotoOld)) {
                    Log::info('viene foto vieja para eliminar');
                    $archivo->eliminarArchivo($request->fotoOld);
                }
                $controlCepa->update(['foto_url' => $path]);
            }
            $controlCepa->update([
                'comentario' => $request->comentario,
                'medicion_id' => $request->tipoMedicionId,
                'usuario_id' => Auth::user()->id_usuario,
                'seguimiento_cepa_id' => $request->seguimientoPrueba
            ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error: no fue posible actualizar el control de la cepa.' . $e->getMessage());
            throw new Exception('Error: no fue posible actualizar el control de la cepa');
        }
    }

    public function destroyControlMedio($id)
    {
        try {
            Log::info('entra en el método destroyControl');
            DB::beginTransaction();
            $controlCepa = $this->findRegistroControlCepaMedio($id);
            $controlCepa->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error: no fue posible eliminar el control de la cepa.' . $e->getMessage());
            throw new Exception('Error: no fue posible eliminar el control de la cepa');
        }
    }
    public function destroyControlTincion($id)
    {
        try {
            Log::info('entra en el método destroyControl');
            DB::beginTransaction();
            $controlCepa = $this->findRegistroControlCepaTincion($id);
            $controlCepa->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error: no fue posible eliminar el control de la cepa.' . $e->getMessage());
            throw new Exception('Error: no fue posible eliminar el control de la cepa');
        }
    }
    public function destroyControlPrueba($id)
    {
        try {
            Log::info('entra en el método destroyControl');
            DB::beginTransaction();
            $controlCepa = $this->findRegistroControlCepaPrueba($id);
            $controlCepa->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error: no fue posible eliminar el control de la cepa.' . $e->getMessage());
            throw new Exception('Error: no fue posible eliminar el control de la cepa');
        }
    }
}