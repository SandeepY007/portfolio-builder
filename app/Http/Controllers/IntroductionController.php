<?php

namespace App\Http\Controllers;

use App\Http\Requests\IntroductionRequest;
use App\Models\Introduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.introduction.index', [
            'intros' => Introduction::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Introduction $intros)
    {
        return view('portfolio.introduction.create', compact('intros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntroductionRequest $request, Introduction $intro)
    {
        $fileName='';

        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=time().rand().'.'.$file->getClientOriginalExtension();
            $path=$file->storeAs('public/images',$filename);

            $fileName=$filename;
        }


        $intro->create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'image' => $fileName,
            'links' => $request->links
        ]);


        return to_route('introduction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('portfolio.introduction.show', [
            'intros' => Introduction::findOrFail($id)
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
        return view('portfolio.introduction.edit',[
            'intros'=>Introduction::where('id', $id)->first()
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
        
        Introduction::where('id', $id)->update(
            $request->except(['_token', '_method'])
        );

        return to_route('introduction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Introduction::destroy($id);

        return to_route('introduction.index')->with('success', 'Records deleted successfully');
    }

    // public function storeImage($request)
    // {
    //     if($request->hasFile('image')){
    //         $file=$request->file('image');
    //         $filename=time().rand().'.'.$file->getClientOriginalExtension();
    //         $path=$file->storeAs('public/images',$filename);

    //         $fileName=$filename;
    //     }


    // }
}
