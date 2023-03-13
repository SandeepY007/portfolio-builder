<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.experience.index',[
            'experiences'=>Experience::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Experience $experience)
    {
        return view('portfolio.experience.create', compact('experience'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExperienceRequest $request, Experience $experience)   
    {
        
        $experience->create([
            'user_id'=>Auth::id(),
            'name'=>$request->name,
            'company_name'=>$request->company_name,
            'position'=>$request->position,
            'job_location'=>$request->job_location,
            'started_at'=>$request->started_at,
            'ends_at'=>$request->ends_at, 
            'pay'=>$request->pay
        ]);

        return to_route('experience.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('portfolio.experience.show', [
            'experience'=>Experience::findOrFail($id)
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
        return view('portfolio.experience.edit',[
            'experience'=>Experience::where('id', $id)->first()
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
        Experience::where('id', $id)->update(
            $request->except(['_token', '_method'])
        );

        return to_route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experience::destroy($id);
        return to_route('experience.index');
    }
}
