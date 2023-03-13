<?php
 
namespace App\Http\Controllers;

use App\Http\Requests\AcademicRequest;
use App\Models\Academic;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.academic.index', [
            'academics'=>Academic::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Academic $academics)
    {
        return view('portfolio.academic.create', compact('academics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademicRequest $request, Academic $academic)
    {
        $academic->create([
            'user_id'=>Auth::id(),
            'course'=>$request->course,
            'started_at'=>$request->started_at,
            'ends_at'=>$request->ends_at,
            'institute_name'=>$request->institute_name,
            'percentage'=>$request->percentage,
        ]);

        return to_route('academic.index')->with('success', 'Record added successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('portfolio.academic.show', [
            'academics'=>Academic::findOrFail($id)
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
        return view('portfolio.academic.edit',[
           'academics'=> Academic::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcademicRequest $request, $id)
    {
        Academic::where('id', $id)->update(
            $request->except(['_token', '_method'])
        );

        return to_route('academic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Academic::destroy($id);
        return to_route('academic.index');  
    }
}
