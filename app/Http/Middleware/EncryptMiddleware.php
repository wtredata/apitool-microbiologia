<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\Encryptor;
use Illuminate\Support\Str;

class EncryptMiddleware {

  public function handle($request, Closure $next){
   
      $array = [];
      foreach ($request->request as $key => $value) {
        if($key == 'id' || Str::startsWith($key, ['id_']) || Str::startsWith($key, ['id'])){
          // Si lo que recibe es un array, se desencripta cada valor del array, se guarda en un array temporal y se aplica sobre el array original de la request
          if (is_array($value)){
            foreach ($value as $key_array=>$array_item) {
              if($array_item != NULL){
                array_push($array, Encryptor::decrypt($array_item));
              }
            }
            $request->request->set($key, $array);
          } else {
            if($value != NULL){
              $request->request->set($key, Encryptor::decrypt($value));
            }
          }
  
        } else if($key == 'modificacion') {
          
          $new_obj = array();

          for($i=0; $i<sizeof($value); $i++){ // Por cada modificacion
            
            $elementArray = $value[$i];
            $elementArray["id"] = Encryptor::decrypt($value[$i]["id"]);
            array_push($new_obj, $elementArray);
          }



          $request->request->set($key, $new_obj);
        
        }
      }
 
    return $next($request);
  }
}