<?php

namespace App\Http\Controllers;

use App\Models\TouristsDestination;
use Illuminate\Http\Request;

/**
 * Class TouristsDestinationController
 * @package App\Http\Controllers
 */
class TouristsDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $touristsDestinations = TouristsDestination::paginate();

        return view('tourists-destination.index', compact('touristsDestinations'))
            ->with('i', (request()->input('page', 1) - 1) * $touristsDestinations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $touristsDestination = new TouristsDestination();
        return view('tourists-destination.create', compact('touristsDestination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TouristsDestination::$rules);

        $touristsDestination = TouristsDestination::create($request->all());

        return redirect()->route('tourists-destinations.index')
            ->with('success', 'TouristsDestination created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $touristsDestination = TouristsDestination::find($id);

        return view('tourists-destination.show', compact('touristsDestination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $touristsDestination = TouristsDestination::find($id);

        return view('tourists-destination.edit', compact('touristsDestination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TouristsDestination $touristsDestination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TouristsDestination $touristsDestination)
    {
        request()->validate(TouristsDestination::$rules);

        $touristsDestination->update($request->all());

        return redirect()->route('tourists-destinations.index')
            ->with('success', 'TouristsDestination updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $touristsDestination = TouristsDestination::find($id)->delete();

        return redirect()->route('tourists-destinations.index')
            ->with('success', 'TouristsDestination deleted successfully');
    }
}
