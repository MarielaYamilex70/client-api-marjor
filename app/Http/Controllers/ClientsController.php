<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/clients');
        $data = $response->json();
        //dd($data);
        /* foreach( $data as $client){
            echo  $client['name'].'-'.$client['email'];
            echo '<br>';
    
        }  */
        return view('clients', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
     {
         return view('client');
     }


     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url.'/clients', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

        ]);
        return redirect()->route('client.index');
        /* $datos = request()->except('_token');
        return response()-> json($datos); */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/clients/'. $id);
        $data = $response->json();
        //return response()-> json($client);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url.'/clients/'. $request->id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

        ]);
        return redirect()->route('client.index');
         /* $datos = request()->except('_token');
        return response()-> json($datos); */

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //dd($id);

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url.'/clients/'. $id);
        return redirect()->route('client.index');

    }
}
