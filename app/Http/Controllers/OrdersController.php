<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $datas   = Order::orderBy('created_at', 'desc')->paginate($pagination);
    
        $datas = Order::all();
        return view('orders.index', compact(
            'datas'
        ))->with('i', ($request->input('page', 1) - 1) * $pagination);;
        $data['order'] = Order::paginate(10);
    }

    public function cetakorder(Request $request)
    {
        $pagination = 5;
        $datas   = Order::orderBy('created_at', 'desc')->paginate($pagination);
    
        $datas = Order::get();
        return view('orders.cetak',compact('datas'))->with('i', ($request->input('page', 1) - 1) * $pagination);
        $data['order'] = Order::paginate(10);
    }

    public function formcetakorder()
    {
      

        return view('orders.form-cetak');
    }

    public function cetakorderpertanggal($tglawal, $tglakhir)
    {
      
        // dd("tanggal awal :".$tglawal, "tanggal akhir :".$tglakhir);

        $cetakpertanggal = Order::wherebetween('deadline', [$tglawal, $tglakhir])->get();
        return view('orders.cetak-order-pertanggal', compact('cetakpertanggal'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['order'] = Order::find($id);

        return view('orders.show', $data);
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
        Order::find($id)->delete();

        return redirect('admin/orders');
    }
}
