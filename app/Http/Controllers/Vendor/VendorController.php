<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\RentHours;
use App\Models\RentOrder;
use App\Models\User;
use App\Models\Venue;
use Carbon\Carbon;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                    if ($row->confirmation == 0) {
                        $button = "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-danger text-white' data-id='".$row['id']."' id='accBtn' href='".route('deny-order', [$row->id])."'>Tolak</a>";
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-success text-white' data-id='".$row['id']."' id='denyBtn' href='".route('acc-order', [$row->id])."'>Terima</a>";
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-order', [$row->id])."'>Detail Order</a>";
                    } elseif ($row->confirmation == 1 || $row->confirmation == 2) {
                        $button = '';
                        $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-info text-white' data-id='".$row['id']."' id='detailBtn' href='".route('detail-order', [$row->id])."'>Detail Order</a>";
                    }
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
                
                //penyedia-lapangan.index
            }
        }
    }

    public function accorder($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $order = RentOrder::where('id', $id)->first();
            $user = User::where('id', $order->user_id)->first();
            $order->confirmation = 1;
            $order->save();
            $user->successful_transaction = $user->successful_transaction + 1;
            if ($user->successful_transaction == 8) {
                $user->vip_status = 1;
            }
            $user->save();
            return redirect()->route('auth.dashboard')->with('success', 'Order telah dikonfirmasi! Silahkan persiapkan lapangan anda untuk pemesanan terebut.');
        }
    }

    public function denyorder($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $order = RentOrder::where('id', $id)->first();
            return view('layout.penyedia-lapangan.tolak', compact('order', 'id'));
        }
    }

    public function storecancelorder(Request $request, $id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            try {
                $request->validate([
                    'cancel_reason' => 'required',
                ]);

                $order = RentOrder::where('id', $id)->first();
                $order->cancel_reason = $request->cancel_reason;
                $order->confirmation = 2;
                $order->save();

                $hours = RentHours::where('order_id', $order->id)->first();
                for ($i=0; $i <= 23; $i++) { 
                    // 00 , 01 , 02, ... , 09
                    if($i < 10){
                        $temp = 'up0'.$i;
                    }
                    else{
                        $temp = 'up'.$i;
                    }

                    // $cek = $hours->$temp;
                    // if($cek != null){
                    //     dd($cek, 'cek');
                    // }
                    $hours->$temp = null;
                }
                $hours->updated_at = Carbon::now();
                $hours->save();

                // dd($hours->$temp, $cek);
                return redirect()->route('auth.dashboard')->with('success', 'Order berhasil ditolak!');
            } catch (\Throwable $th) {
                dd($th);
                DB::rollBack();
                return back()->with('failed', 'Cek kelengkapan dari form anda!');
            }
        }
    }

    public function detailorder($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $order = RentOrder::where('id', $id)->first();
            return view('layout.penyedia-lapangan.detail-pemesanan', compact('order'));
        }
    }
}
