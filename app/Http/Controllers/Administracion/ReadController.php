<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index(Request $request,$param){   

      /*   if($request->ajax()){
            dd($request);
        }
 */

        $clase = '\\App\\Modelos\\Administracion\\'.$param;
        $modelo = new $clase;
        $contenido = $modelo->Coleccionar();
        
        $Array = json_decode(json_encode($contenido), true);
        return response()->json($Array);
    
    } 

}
