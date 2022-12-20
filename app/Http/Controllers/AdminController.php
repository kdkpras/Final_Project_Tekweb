<?php

namespace App\Http\Controllers;
use App\Models\Tiket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $tikets= Tiket::all();
        
        return view('admin',compact('tikets') , ['tittle' => 'admin']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tikets(Request $request) {   
        Tiket::create($request->except('_token'));
        return redirect('admin');
    }
    public function create()
    {
        //
        return  view('create');
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
        $packages=Tiket::find($id);
        return view('edit', compact('packages'));
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
        Tiket::where('id', $id)->update([
            'nama_tiket' => $request->nama_tiket,
            'stock' => $request->stock,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
            'image' => $request->image,
        ]);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Tiket::find($id);
        $product->delete();
        return redirect()->back();
    }
}
