<?php

namespace App\Http\Controllers;
use App\Models\Plane;

use Illuminate\Http\Request;

class PlaneController extends Controller
{
    public function index()
    {
        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true);
        return view('index', compact('aviones'));
    }

    public function edit($id)
    {
        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true);
        $avion = collect($aviones)->firstWhere('id', $id);
        return view('editPlane', compact('avion'));
    }

    public function store(Request $request)
    {
        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true);
        $data = $request->all();
        $data['id'] = (count($aviones) > 0) ? $aviones[count($aviones) - 1]['id'] + 1 : 1;
        $aviones[] = $data;
        file_put_contents($path, json_encode($aviones));
        return redirect('/sturia/planes');
    }

    public function update(Request $request, $id)
    {
        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true);
        $index = collect($aviones)->search(function ($item) use ($id) {
            return $item['id'] == $id;
        });
        $aviones[$index] = array_merge($aviones[$index], $request->all());
        file_put_contents($path, json_encode($aviones));
        return redirect('/sturia/planes');
    }

    public function delete($id)
    {
        $path = storage_path('/json/planes.json');
        $aviones = json_decode(file_get_contents($path), true);
        $index = collect($aviones)->search(function ($item) use ($id) {
            return $item['id'] == $id;
        });
        unset($aviones[$index]);
        $aviones = array_values($aviones);
        file_put_contents($path, json_encode($aviones));
        return redirect('/sturia/planes');
    }
}

