<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\AboutRequest;
use App\Models\Internship;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $datas   = Internship::orderBy('created_at', 'desc')->paginate($pagination);
    
        $datas = Internship::all();
        return view('internship.index', compact(
            'datas'
        ))->with('i', ($request->input('page', 1) - 1) * $pagination);;
        $data['internship'] = Internship::paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('internship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageNameHash = null;

        if($request->hasFile('image')) {
            $image = $request->image;
            $imageNameHash = $image->hashName();
            $image->move(public_path('/uploads/internship/'), $imageNameHash);
        }

        $internship = new Internship();
        $internship->image = $imageNameHash;
        $internship->title = $request->title;
        $internship->content = $request->content;
        $internship->save();

        return redirect('admin/internship');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['internship'] = Internship::find($id);

        return view('internship.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['internship'] = Internship::find($id);

        return view('internship.edit', $data);
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
        $imageNameHash = null;

        if($request->hasFile('image')) {
            $image = $request->image;
            $imageNameHash = $image->hashName();
            $image->move(public_path('/uploads/internship/'), $imageNameHash);
        }

        $internship = Internship::find($id);
        $internship->image = $imageNameHash ?? $internship->image;
        $internship->title = $request->title ?? $internship->title;
        $internship->content = $request->content ?? $internship->content;
        $internship->save();

        return redirect('admin/internship');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Internship::find($id)->delete();

        return redirect('admin/internship');
    }
}

