<?php
 
namespace App\Http\Controllers;
 
use App\Producto;
use DB;
use Excel;
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
        $data = Excel::import($path);
 
        if($data->count()){
            foreach ($data as $key => $value) {

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

                //$arr[] = ['title' => $value->title, 'description' => $value->description];
            
            }
 
            /*if(!empty($arr)){
                Item::insert($arr);
            }*/
        }
 
        return back()->with('success', 'Archivo importado correctamente');
    }

    public function agregar($id,$cantidad){
        Log::debug($id.$cantidad);
    }

    public function restar($id,$cantidad){
        Log::debug($id.$cantidad);
    }

    public function activar($id){
        Log::debug($id);
    }

    public function desactivar($id){
        Log::debug($id);
    }
}