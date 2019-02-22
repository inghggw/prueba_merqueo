<?php
 
namespace App\Http\Controllers;
 
use App\Models\Producto;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImportarController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('importar.importar');
    }
 
    public function importarCSV(Request $request)
    {
        $request->validate([
            'importar_csv' => 'required'
        ]);
 
        $path = $request->file('importar_csv')->getRealPath();
        
        $data = fopen($path, "r");
        
            while (($value = fgetcsv($data,1000,',','"')) !== false) {
                switch($value[1]) {
                    case 'Agregar':
                            $this->agregar($value[0],$value[2]);
                        break;
                    case 'Restar':
                            $this->restar($value[0],$value[2]);
                        break;
                    case 'Activar':
                            $this->activar($value[0]);
                        break;
                    case 'Desactivar':
                            $this->desactivar($value[0]);
                        break;
                }
            }
 
        return back()->with('success', 'Archivo importado correctamente');
    }

    public function agregar($id,$cantidad){
        $p = Producto::find($id);
        $p->unidades_actuales = $p->unidades_actuales + $cantidad;
        $p->save();
    }

    public function restar($id,$cantidad){
        $p = Producto::find($id);
        $p->unidades_actuales = $p->unidades_actuales - $cantidad;
        $p->save();
    }

    public function activar($id){
        $p = Producto::find($id);
        $p->estado_id = 1;
        $p->save();
    }

    public function desactivar($id){
        $p = Producto::find($id);
        $p->estado_id = 2;
        $p->save();
    }
}