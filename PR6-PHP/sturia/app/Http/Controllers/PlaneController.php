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
        $avion = collect($aviones)->firstWhere('id', $id);
        return view('editPlane', compact('avion'));
        
    }

    public function update($idVuelo, Request $request)
    {
        $idVuelo = (int)($idVuelo);
        $path = storage_path('/json/planes.json'); //recogemos el json 
        $aviones = json_decode(file_get_contents($path), true); // lo convertimos en array
        $index = collect($aviones)->search(function ($item) use ($idVuelo) { // busca en el array $aviones un elemento cuyo valor de la clave "id" sea igual a $idVuelo
        });

        $aviones[$index] = array_merge($aviones[$index], $request->all()); //realizamos el cambio en el array
        file_put_contents($path, json_encode($aviones)); //reescribimos el json
        $log = new Logger('PlaneController');
        $log->pushHandler(new StreamHandler(storage_path('/logs/laravel.log')));
         $log->info('Se ha editado el avión con número ' . $idVuelo . ' de id');
        return redirect('/sturia/planes');
        
    }


    public function delete($id)
    {

        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true);
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
