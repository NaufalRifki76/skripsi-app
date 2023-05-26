<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\RentHours;
use App\Models\RentOrder;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class VendorController extends Controller{
    public function index(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $user = Sentinel::getUser();
            $venue = Venue::where('user_id', $user->id)->first();
            $data = RentOrder::where('venue_id', $venue->id)->get();
            if($request->ajax()){
                return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('confirmation', function ($row){
                    if ($row->confirmation == 0) {
                        return 'Pending';
                    } elseif ($row->confirmation == 1) {
                        return 'Diterima';
                    } elseif ($row->confirmation == 2) {
                        return 'Ditolak';
                    }
                })
                ->addColumn('price_sum', function ($row){
                    return "Rp. $row->price_sum";
                })
                ->addColumn('action', function ($row){
                    $button = "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-danger text-white' data-id='".$row['id']."' id='accBtn' href=''>Tolak</a>";
                    $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-success text-white' data-id='".$row['id']."' id='denyBtn' href='".route('acc-order', [$row->id])."'>Terima</a>";
                    $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-order', [$row->id])."'>Detail Order</a>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);

                //penyedia-lapangan.index
            }
        }
    }

    public function accorder($id){
        $order = RentOrder::where('id', $id)->first();
        $order->confirmation = 1;
        $order->save();
        return redirect()->route('auth.dashboard')->with('success', 'Order telah dikonfirmasi! Silahkan persiapkan lapangan anda untuk pemesanan terebut.');
    }

    public function denyorder($id){

    }

    public function detailorder($id){
        $order = RentOrder::where('id', $id)->first();
        return view('layout.penyedia-lapangan.detail-pemesanan', compact('order'));
    }
}
