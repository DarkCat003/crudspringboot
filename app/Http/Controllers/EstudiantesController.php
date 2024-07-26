<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
//Agregadas por plantilla
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EstudiantesController extends Controller
{
    public function index(Request $request){
        $url = env('URL_SERVER_API', 'http:://localhost');
        $response = Http::get($url.'/alumnos');
        $estudiantes = $response->json();
        //return view('estudiante.index', compact('estudiantes'));
        return view('estudiante.index', compact('estudiantes'))
            ->with('i', ($request->input('page', 1) - 1) * 20);
    }

    public function create(){
        return view('estudiante.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $url = env('URL_SERVER_API', 'http:://localhost');
        $response = Http::post($url.'/alumnos',[
                'name' => $request->name,
                'apellido' => $request->apellido,
                'email' => $request->email,
                'createAt' => $request->createAt
                ]);

        return Redirect::route('estudiantes.index')
            ->with('success', 'Estudiante created successfully.');
    }

    public function show($id): View
    {
        $url = env('URL_SERVER_API', 'http:://localhost');
        $response = Http::get($url.'/alumnos/'.$id);
        $estudiante = $response->json();

        return view('estudiante.show', compact('estudiante'));
    }

    public function edit($id): View
    {
        $url = env('URL_SERVER_API', 'http:://localhost');
        $response = Http::get($url.'/alumnos/'.$id);
        $estudiante = $response->json();

        return view('estudiante.edit', compact('estudiante'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $url = env('URL_SERVER_API', 'http:://localhost');
        $response = Http::put($url.'/alumnos/'.$id,[
                'name' => $request->name,
                'apellido' => $request->apellido,
                'email' => $request->email,
                'createAt' => $request->createAt
        ]);

        return Redirect::route('estudiantes.index')
            ->with('success', 'Estudiante updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        $url = env('URL_SERVER_API', 'http:://localhost');
        $response = Http::delete($url.'/alumnos/'.$id);

        return Redirect::route('estudiantes.index')
            ->with('success', 'Estudiante deleted successfully');
    }
}
