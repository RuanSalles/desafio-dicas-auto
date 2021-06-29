<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tip::where('user_id', '=', Auth::user()->id)->latest()->paginate(10);
        //Auth::user()->tips;
        return view('dicas.home', compact('tips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dicas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tipo'       => ['required', 'min:3', 'max:10'],
            'marca'      => ['required', 'min:3', 'max:10'],
            'modelo'     => ['required', 'min:3', 'max:20'],
            'versao'    => ['max:10'],
            'descricao'       => ['max:200'],

        ]);

        /**
         * @var User;
         */
        $user = Auth::user();
        $user->tips()->create($data);

        return redirect(route('tip.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function show(Tip $tip)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function edit(Tip $tip)
    {
        return view('dicas.edit', compact('tip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tip $tip)
    {
        $data = $request->validate([
            'tipo'       => ['required', 'min:3', 'max:10'],
            'marca'      => ['required', 'min:3', 'max:10'],
            'modelo'     => ['required', 'min:3', 'max:20'],
            'versao'    => ['max:10'],
            'descricao'       => ['max:200'],

        ]);
        $tip->update($request->$data);
        return redirect(route('tip.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tip $tip)
    {
        $tip->delete();

        return redirect(route('tip.index'));
    }
}
