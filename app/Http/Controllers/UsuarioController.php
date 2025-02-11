<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\LaboratorioController;
    
// Modelos
use Illuminate\Support\Facades\DB;
use App\Usuario;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use App\Http\Requests\UsuarioPassRequest;


// Encriptacion
// use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller{   
    protected $tableUsua;
    
    public function __construct(){
        $this->tableUsua = new Usuario();
    }


    public function index(){
        $usuarios = $this->tableUsua
            ->select(
                "*",
                "usuario.estado as usuario_estado"
            )
            ->join('rol', 'usuario.rol_id_rol', '=', 'rol.id_rol')
            ->orderBy("usuario.estado","desc")
            ->orderBy("usuario.nombres","asc")
            ->orderBy("usuario.apellidos","asc")
            ->get();

       return view("usuario.usuarioIndex")
            ->with("usuarios",$usuarios);
    }

    
    public function store(UsuarioRequest $req){

        $iniciales = $this->getIniciales($req->nombres, $req->apellidos);
        $color_hexadecimal = $this->getColorHexadecimal($iniciales);

        DB::table("usuario")->insert(
            array(
                "rol_id_rol" => $req->rol,
                "nom_usuario" => $req->nom_usuario,
                "password" => Hash::make($req->password),
                "nombres" => $req->nombres,
                "apellidos" => $req->apellidos,
                "correo" => $req->correo,
                "iniciales" => $iniciales,
                "color_hexadecimal" => $color_hexadecimal 
            )
        );
    }


    public function storePass(UsuarioPassRequest $req){
        echo '<script>alert("hola");</script>';
        $usuario = self::listItem($req->id_usuario);
        echo $usuario;
        $usuario->update(["password" => Hash::make($req->password)]);
    }


    public function getIniciales($nombres, $apellidos){
        $letra1 = substr($nombres, 0, 1);
        $letra2 = substr($apellidos, 0, 1);
        return strtoupper($letra1).strtoupper($letra2); 
    }

    public function getColorHexadecimal($iniciales){
        $colores_hexadecimales = [
            "E74C3C",
            "2980B9",
            "40A2E4",
            "17A589",
            "2376AD",
            "16A085",
            "27AE60",
            "E9BB00",
            "F39C12",
            "979A9A",
            "2E4053"
        ];

        // Buscar en la base de datos los usuario con las mismas iniciales
        $usuarios_similares = $this->tableUsua->where("iniciales",$iniciales)->get();
        
        // Recorrer a los usuarios con las mismas iniciales 
        // Y Eliminar de $colores_hexadecimales los colores de dichos usuarios
        foreach($usuarios_similares as $usuario_similar){
            $new_colores_heradecimales = [];
            foreach($colores_hexadecimales as $color_hexadecimal){
                if($color_hexadecimal != $usuario_similar->color_hexadecimal){
                    array_push($new_colores_heradecimales, $color_hexadecimal);
                }
            }
            $colores_hexadecimales = $new_colores_heradecimales;
        }


        if(sizeof($colores_hexadecimales) == 0){
            return $this->color_rand();
        } else {
            // Retornar de manera aleatoria un color del array final
            $min = 0;
            $max = sizeof($colores_hexadecimales)-1;
            $aleatorio = rand($min,$max);
            return $colores_hexadecimales[$aleatorio];
        }

    }

    public function color_rand() {
        return sprintf('%06X', mt_rand(0, 0xFFFFFF));
    }

    public static function list(){
        $tableUsua = new Usuario();    
        return $tableUsua
            ->where("estado",1)
            ->orderBy("nom_usuario","asc")
            ->get();
    }

    public static function listAll(){
        $tableUsua = new Usuario();    
        return $tableUsua
            ->select(
                "*",
                "usuario.estado as usuario_estado"
            )
            ->join("rol", "rol.id_rol", "=", "usuario.rol_id_rol")
            ->orderBy("estado","desc")
            ->orderBy("nom_usuario","asc")
            ->get();
    }


    public static function listItem($id){
        $tableUsuario = new Usuario();    
        return $tableUsuario
            ->select(
                "*",
            )
            ->where([
                ["usuario.id_usuario", $id]
            ])
            ->first();
    }
    
    public function listHTML(){
        
        $usuarios = $this->tableUsua
            ->where("estado",1)
            ->orderBy("nom_usuario","asc")
            ->get();
        
        return view("usuario.usuarioList")
            ->with("usuarios",$usuarios);
    }

    
    public function destroy(Request $req){
        $this->tableUsua
            ->where("id_usuario",$req->id)
            ->delete();
    }

    
    public function status(Request $req){
        $statusNow = $this->tableUsua
            ->where("id_usuario",$req->id)
            ->first()
            ->estado; // Seleccionar el estado de la institucion que sea igual a la indicada 
        
        $registroUpdate = $this->tableUsua
            ->where("id_usuario",$req->id);
        
        if($statusNow == 1){
            $registroUpdate->update(["estado" => 0]);
        } else {
            $registroUpdate->update(["estado" => 1]);
        }
    }
    
    
    public function edit(Request $req){
        
        $usuario = $this->tableUsua
            ->where("id_usuario",$req->id)
            ->first();
        
        switch($req->campo){
            case "nom_usuario":
                return view("usuario.usuarioEdit")
                ->with("campo",$req->campo)
                ->with("usuario",$usuario);
                break;

            case "rol":
                $roles = RolController::list();
                return view("usuario.usuarioEdit")
                ->with("roles",$roles)
                ->with("campo",$req->campo)
                ->with("usuario",$usuario);
                break;
                
            case "nombres":
                return view("usuario.usuarioEdit")
                ->with("campo",$req->campo)
                ->with("usuario",$usuario);
                break;

            case "apellidos":
                return view("usuario.usuarioEdit")
                ->with("campo",$req->campo)
                ->with("usuario",$usuario);
                break;

            case "correo":
                return view("usuario.usuarioEdit")
                ->with("campo",$req->campo)
                ->with("usuario",$usuario);
                break;

            default:
                abort(500,"Opción de modificación no encontrada");
                break;
        }
    }
    
    
    public function show(Request $req){
        $usuario = $this->tableUsua
            ->select(
                "*",
                "usuario.estado as usuario_estado"
            )
            ->join('rol', 'usuario.rol_id_rol', '=', 'rol.id_rol')
            ->where("id_usuario",$req->id)
            ->first();
        
        return view("usuario.usuarioShow")
            ->with("usuario",$usuario)
            ->with("campo",$req->campo);
    }

    
    public function update(UsuarioRequest $req){
        $usuario = $this->tableUsua
            ->where("id_usuario",$req->id)
            ->first(); // Se selecciona la institucion a la cual se desea realizar la actualización

        switch($req->campo){    
            case "nom_usuario":
                $usuario->update(["nom_usuario" => $req->nom_usuario]);
                break;
                
            case "rol":
                $usuario->update(["rol_id_rol" => $req->rol]);
                break;

            case "nombres":
                $usuario->update(["nombres" => $req->nombres]);
                break;
                
            case "apellidos":
                $usuario->update(["apellidos" => $req->apellidos]);
                break;
                
            case "correo":
                $usuario->update(["correo" => $req->correo]);
                break;
                
            default:
                abort(500,"Opción de modificación no encontrada");
                break;
        }
    }


    public function sectionAsignacion(Request $req){
        
        $laboratorios = LaboratorioController::listByAsignacionUsuario($req->id_reference);
        $usuario = self::listItem($req->id_reference);

        return view("usuario.usuarioAsignacion")
            ->with("laboratorios", $laboratorios)
            ->with("usuario", $usuario);
    }


    public function modalPass(Request $req){
        $usuario = self::listItem($req->id_reference);
        return view("usuario.usuarioPass")
            ->with("usuario", $usuario);
    }
    


    public function asignacion(Request $req){
        $this->eliminarAsignacionesLaboratorios($req->obj_json["id_usuario"]);
        
        if(isset($req->obj_json["laboratorios"])){
            $this->storeAsignacionesLaboratorios($req->obj_json["id_usuario"], $req->obj_json["laboratorios"]);
        }
    }


    public function eliminarAsignacionesLaboratorios($id_usuario){
        DB::table('laboratorio_usuario')->where('usuario_id_usuario', '=', $id_usuario)->delete();
    }


    public function storeAsignacionesLaboratorios($id_usuario, $laboratorios){
        foreach($laboratorios as $laboratorio){
            DB::table('laboratorio_usuario')->insert(
                [
                    'usuario_id_usuario' => $id_usuario, 
                    'laboratorio_id_laboratorio' => $laboratorio 
                ]
            );
        }
    }
}