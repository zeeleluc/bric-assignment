<?php

namespace App\Http\Controllers;

use App\Dummy;
use App\Http\Requests\StoreDummy;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DummyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        return view('dummy.index', ['dummies' => Dummy::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        throw new \Exception('Not Used');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDummy $request) :View
    {
        Dummy::make($request->validated());

        return view('dummy.index', ['dummies' => Dummy::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dummy $dummy) :View
    {
        return view('dummy.show', ['dummy' => $dummy]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dummy $dummy) :View
    {
        return view('dummy.edit', ['dummy' => $dummy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDummy $request, Dummy $dummy) :RedirectResponse
    {
        $dummy->updateModel($request->validated());

        return redirect(route('dummy.show', ['dummy' => $dummy]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dummy $dummy) :RedirectResponse
    {
        $dummy->remove();

        return redirect(route('dummy.index'));
    }
}
