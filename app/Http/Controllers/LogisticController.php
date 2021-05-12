<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Logistic;

class LogisticController extends Controller
{
    public function index()
    {
        return Logistic::all();
    }

    public function create(Request $request)
    {
        $logistik = new Logistic;
        $logistik->nama_barang = $request->nama_barang;
        $logistik->harga_barang = $request->harga_barang;
        $logistik->save();

        return "Logistic Data Has Been Created";
    }

    public function update(Request $request, $id)
    {
        $nama_barang = $request->nama_barang;
        $harga_barang = $request->harga_barang;

        $logistik = Logistic::find($id);

        $logistik->nama_barang = $request->nama_barang;
        $logistik->harga_barang = $request->harga_barang;
        $logistik->save();

        return "Logistic Data Has Been Updated";
    }

    public function delete($id)
    {
        $logistik = Logistic::find($id);
        $logistik->delete();

        return "Logistic Data Has Been Deleted";
    }
}
