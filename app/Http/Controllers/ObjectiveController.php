<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObjectiveRequest;
use App\Models\Objective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj = new Objective();
        return view('portfolio.objective.index', [
            'objs' => Objective::where('user_id', '=', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Objective $objs)
    {
        return view('portfolio.objective.create', compact('objs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObjectiveRequest $request, Objective $obj)
    {
        $obj->create([
            'user_id'=>Auth::id(),
            'objective'=>$request->objective
        ]);

        return to_route('objective.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('portfolio.objective.show', [
            'objs' => Objective::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('portfolio.objective.edit',[
            'objs'=>Objective::where('id', $id)->first()
        ]);
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
        Objective::where('id', $id)->update(
            $request->except(['_token', '_method'])
        );

        return to_route('objective.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Objective::destroy($id);

        return to_route('objective.index')->with('success', 'Records deleted successfully');
    }
}
