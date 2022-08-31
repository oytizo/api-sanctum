<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\testModel;
use Illuminate\Http\Request;
use Image;
use File;

class testController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alll=testModel::all();
        return view('backend.index',compact('alll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new testModel();
        $data->name=$request->name;
        if($request->image){
            $image = $request->file('image');
            $customname = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $location = public_path('image/' . $customname);
            $imgFile=Image::make($image)->resize(20, 20, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);
            // $imgFile->resize(20, 20, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($location);
            $data->image = $customname;

            
            // $image = $request->file('file');
            // $input['file'] = time().'.'.$image->getClientOriginalExtension();
            
            // $destinationPath = public_path('image/');
            // $imgFile = Image::make($image->getRealPath());

            // $imgFile->resize(150, 150, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($destinationPath.'/'.$input['file']);
            // $destinationPath = public_path('/uploads');
            // $image->move($destinationPath, $input['file']);
            // return back()
            //     ->with('success','Image has successfully uploaded.')
            //     ->with('fileName',$input['file']);
        }
        $data->save();
        // dd($request);
        $alll=testModel::all();
        return view('backend.index',compact('alll'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
