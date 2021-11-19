<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        try
        {
            $clientes = Cliente::find($id);

            if (is_object($clientes)):
                return Response::json($clientes, 200);
            else:
                return Response::json(['error' => 'Cliente não encontrado'], 404);
            endif;

        }
        catch (\Throwable $th)
        {
            return Response::json(['error' => 'Ocorreu um erro na solicitação'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $input = $request->all();
            Cliente::create($input);

            return Response::json(['success' => 'Cliente inserido com successo'], 201);
        }
        catch (\Throwable $th)
        {
            return Response::json(['error' => 'Ocorreu um erro na solicitação'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numero)
    {
        try
        {
            $clientes = Cliente::where('placa_carro',$numero)->get();

            if (count($clientes)>0):
                return Response::json(['clientes' => $clientes], 200);
            else:
                return Response::json(['error' => 'Nenhum cliente encontrado com a placa informada'], 404);
            endif;

        }
        catch (\Throwable $th)
        {
            return Response::json(['error' => 'Ocorreu um erro na solicitação'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try
        {
            $input = $request->all();

            $cliente = Cliente::find($id);

            if(is_object($cliente)):
                $cliente->update($input);
                return Response::json(['success' => 'Cliente atualizado com successo'], 200);
            else:
                return Response::json(['error' => 'Cliente não encontrado'], 404);
            endif;
        }
        catch (\Throwable $th)
        {
            return Response::json(['error' => 'Ocorreu um erro na solicitação'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $cliente = Cliente::find($id);

            if(is_object($cliente)):
                $cliente->delete();
                return Response::json(['success' => 'Cliente deletado com successo'], 200);
            else:
                return Response::json(['error' => 'Cliente não encontrado'], 404);
            endif;
        }
        catch (\Throwable $th)
        {

            return Response::json(['error' => 'Ocorreu um erro na solicitação'], 500);
        }
    }
}
