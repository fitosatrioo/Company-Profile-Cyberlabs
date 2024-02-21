<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;

use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $datas   = Home::orderBy('created_at', 'desc')->paginate($pagination);
    
        $datas = Home::all();
        return view('home.index', compact(
            'datas'
        ))->with('i', ($request->input('page', 1) - 1) * $pagination);;
        $data['Home'] = Home::paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeRequest $request)
    {
        $imageNameHash = null;

        if($request->hasFile('image')) {
            $image = $request->image;
            $imageNameHash = $image->hashName();
            $image->move(public_path('/uploads/home/'), $imageNameHash);
        }

        $Home = new Home();
        $Home->image = $imageNameHash;
        $Home->title = $request->title;
        $Home->content = $request->content;
        $Home->save();

        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['Home'] = Home::find($id);

        return view('home.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['Home'] = Home::find($id);

        return view('home.edit', $data);
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
            $image->move(public_path('/uploads/home/'), $imageNameHash);
        }

        $Home = Home::find($id);
        $Home->image = $imageNameHash ?? $Home->image;
        $Home->title = $request->title ?? $Home->title;
        $Home->content = $request->content ?? $Home->content;
        $Home->save();

        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Home::find($id)->delete();

        return redirect('admin/home');
    }
}
