<?php

namespace App\Http\Controllers;

use App\Models\Concurso;
use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Concurso::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Concurso::create($request->all()))
        {
            return response()->json([
                'Concurso criado com sucesso.',
                201
            ]);
        }
        return response()->json([
            'Erro ao cadastrar o concurso.',
            404
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $concurso
     * @return \Illuminate\Http\Response
     */
    public function show(string $concurso)
    {
        $livro = Concurso::find($concurso);
        if($livro)
        {
            return $livro;
        }
        return response()->json([
            'Concurso não encontrado.',
            404
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $concurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $concurso)
    {
        $institute = Concurso::find($concurso);
        if(!$institute)
        {
            return response()->json([
                'Concurso não encontrado.',
                404
            ]);
        }
        return $institute->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $concurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $concurso)
    {
        if( Concurso::destroy($concurso) == 0)
        {
            return response()->json([
                'Concurso não encontrado.',
                404
            ]);
        }
        return response()->json([
            'Concurso deletado com sucesso.',
            201
        ]);

    }
}
