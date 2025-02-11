<?php
namespace App\Resource\Archivos;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Subir{

    protected $fileUpload;
    protected $nameFile;
    protected $ubicacion;

    public function __construct(UploadedFile|null $file = null, $carpeta = null){
        if(!Storage::exists("public/" . $carpeta)){
            Storage::makeDirectory("public/" .$carpeta);
        }
        if($file != null){
            $this->setUploadFile($file);
        }
        $this->ubicacion = $carpeta;
    }

    public function setUploadFile(UploadedFile $file)
    {
        $this->fileUpload = $file;
        $this->constuirNombre();
    }
    public function constuirNombre()
    {
        $this->nameFile = Str::uuid() . "." . $this->getExtension();
    }
    public function getExtension()
    {
        try {
            return $this->fileUpload->extension();
        } catch (\Exception $e) {
            return "png";
        }
    }
    public function guardar()
    {
        $result = $this->fileUpload->storeAs("public/" . $this->ubicacion, $this->nameFile);
        shell_exec("chmod 0777 -R ".public_path("storage/"));
        return $result !== FALSE;
    }
    public function getPath(): string
    {
        return $this->ubicacion . "/" . $this->nameFile;
    }

    public function getMimeType()
    {
        return $this->fileUpload->getClientMimeType();
    }

    public function eliminarArchivo($ruta)
    {
        if (!is_null($ruta) && Storage::exists("public/" . $ruta)) {
           return Storage::delete("public/" . $ruta);
        }

        return false;
    }
}