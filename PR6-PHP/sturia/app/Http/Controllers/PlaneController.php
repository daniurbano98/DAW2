<?php

namespace App\Http\Controllers;

use App\Models\Plane;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class PlaneController extends Controller
{
    
    public function index()
    {
        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true);
        return view('main', compact('aviones'));
    }

    public function edit($id)
    {
        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true); 
        

        foreach($aviones as $avion){
            if($avion['id']==$id){
                $avion = collect($aviones)->firstWhere('id', $id);
                return view('editPlane', compact('avion'));
            }
        }

        $log = new Logger('PlaneController');
        $log->pushHandler(new StreamHandler(storage_path('/logs/laravel.log')));
        $log->info('El avión al que se ha intentado acceder para editar no existe');
        return view('errorView');  
        
    }

    public function update($id, Request $request)
    {
        $id = (int)($id);
        $path = storage_path('/json/planes.json'); //recogemos el json 
        $aviones = json_decode(file_get_contents($path), true); // lo convertimos en array


        foreach($aviones as $avion){
            if($avion['id']==$id){
                $index = collect($aviones)->search(function ($item) use ($id) { // busca en el array $aviones un elemento cuyo valor de la clave "id" sea igual a $idVuelo
                });
                $aviones[$index] = array_merge($aviones[$index], $request->all()); //realizamos el cambio en el array
                file_put_contents($path, json_encode($aviones)); //reescribimos el json
                $log = new Logger('PlaneController');
                $log->pushHandler(new StreamHandler(storage_path('/logs/laravel.log')));
                $log->info('Se ha editado el avión con número ' . $id. ' de id');
                return redirect('/sturia/planes');        
            }
        }

        $log = new Logger('PlaneController');
        $log->pushHandler(new StreamHandler(storage_path('/logs/laravel.log')));
        $log->info('El avión que se ha intentado editar no existe');
        return view('errorView'); 
        
    }


    public function delete($id)
    {

        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true);
       

        foreach($aviones as $avion){
            if($avion['id']==$id){
                $index = collect($aviones)->search(function ($item) use ($id) {
                    return $item['id'] == $id;
                }); 
                unset($aviones[$index]); //lo borramos del array
                $aviones = array_values($aviones);
                file_put_contents($path, json_encode($aviones)); //reescribimos el json
                $log = new Logger('PlaneController');
                $log->pushHandler(new StreamHandler(storage_path('/logs/laravel.log')));
                $log->info('Se ha borrado el avión con número ' . $id . ' de id');
        
                return redirect('/sturia/planes'); 
                
            }
        }

        
        $log = new Logger('PlaneController');
        $log->pushHandler(new StreamHandler(storage_path('/logs/laravel.log')));
        $log->info('El avion que se ha intentado eliminar no existe');
        return view('errorView'); 
        
        
    }
}
