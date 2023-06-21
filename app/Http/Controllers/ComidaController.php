<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

/**
 * Class ComidaController
 * @package App\Http\Controllers
 */
class ComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comidas = Comida::paginate();

        return view('comida.index', compact('comidas'))
            ->with('i', (request()->input('page', 1) - 1) * $comidas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comida = new Comida();
        return view('comida.create', compact('comida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comida::$rules);

        $comida = Comida::create($request->all());

        return redirect()->route('comidas.index')
            ->with('success', 'Comida created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comida = Comida::find($id);

        return view('comida.show', compact('comida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comida = Comida::find($id);

        return view('comida.edit', compact('comida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comida $comida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comida $comida)
    {
        request()->validate(Comida::$rules);

        $comida->update($request->all());

        return redirect()->route('comidas.index')
            ->with('success', 'Comida updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comida = Comida::find($id)->delete();

        return redirect()->route('comidas.index')
            ->with('success', 'Comida deleted successfully');
    }
}
