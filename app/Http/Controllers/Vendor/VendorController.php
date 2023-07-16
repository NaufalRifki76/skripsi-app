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

class VendorController extends Controller
{
    public function index(Request $request)
    {
        if (!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else {
            $user = Sentinel::getUser();
            $venue = Venue::where('user_id', $user->id)->first();
            $data = RentOrder::where('venue_id', $venue->id)->get();
            if ($request->ajax()) {
                return datatables()->of($data)
                    ->addIndexColumn()
                    ->addColumn('confirmation', function ($row) {
                        if ($row->confirmation == 0) {
                            return 'Pending';
                        } elseif ($row->confirmation == 1) {
                            return 'Diterima';
                        } elseif ($row->confirmation == 2) {
                            return 'Ditolak';
                        }
                    })
                    ->addColumn('start_hour', function ($row) {
                        $hour = RentHours::where('order_id', $row->id)->first();
                        if ($hour->up00 == 1) {
                            return "00.00";
                        } elseif ($hour->up01 == 1) {
                            return "01.00";
                        } elseif ($hour->up02 == 1) {
                            return "02.00";
                        } elseif ($hour->up03 == 1) {
                            return "03.00";
                        } elseif ($hour->up04 == 1) {
                            return "04.00";
                        } elseif ($hour->up05 == 1) {
                            return "05.00";
                        } elseif ($hour->up06 == 1) {
                            return "06.00";
                        } elseif ($hour->up07 == 1) {
                            return "07.00";
                        } elseif ($hour->up08 == 1) {
                            return "08.00";
                        } elseif ($hour->up09 == 1) {
                            return "09.00";
                        } elseif ($hour->up10 == 1) {
                            return "10.00";
                        } elseif ($hour->up11 == 1) {
                            return "11.00";
                        } elseif ($hour->up12 == 1) {
                            return "12.00";
                        } elseif ($hour->up13 == 1) {
                            return "13.00";
                        } elseif ($hour->up14 == 1) {
                            return "14.00";
                        } elseif ($hour->up15 == 1) {
                            return "15.00";
                        } elseif ($hour->up16 == 1) {
                            return "16.00";
                        } elseif ($hour->up17 == 1) {
                            return "17.00";
                        } elseif ($hour->up18 == 1) {
                            return "18.00";
                        } elseif ($hour->up19 == 1) {
                            return "19.00";
                        } elseif ($hour->up20 == 1) {
                            return "20.00";
                        } elseif ($hour->up21 == 1) {
                            return "21.00";
                        } elseif ($hour->up22 == 1) {
                            return "22.00";
                        } elseif ($hour->up23 == 1) {
                            return "23.00";
                        }
                    })
                    ->addColumn('end_hour', function ($row) {
                        $hour = RentHours::where('order_id', $row->id)->first();
                        if ($hour->up23 == 1) {
                            return "00.00";
                        } elseif ($hour->up22 == 1) {
                            return "23.00";
                        } elseif ($hour->up21 == 1) {
                            return "22.00";
                        } elseif ($hour->up20 == 1) {
                            return "21.00";
                        } elseif ($hour->up19 == 1) {
                            return "20.00";
                        } elseif ($hour->up18 == 1) {
                            return "19.00";
                        } elseif ($hour->up17 == 1) {
                            return "18.00";
                        } elseif ($hour->up16 == 1) {
                            return "17.00";
                        } elseif ($hour->up15 == 1) {
                            return "16.00";
                        } elseif ($hour->up14 == 1) {
                            return "15.00";
                        } elseif ($hour->up13 == 1) {
                            return "14.00";
                        } elseif ($hour->up12 == 1) {
                            return "13.00";
                        } elseif ($hour->up11 == 1) {
                            return "12.00";
                        } elseif ($hour->up10 == 1) {
                            return "11.00";
                        } elseif ($hour->up09 == 1) {
                            return "10.00";
                        } elseif ($hour->up08 == 1) {
                            return "09.00";
                        } elseif ($hour->up07 == 1) {
                            return "08.00";
                        } elseif ($hour->up06 == 1) {
                            return "07.00";
                        } elseif ($hour->up05 == 1) {
                            return "06.00";
                        } elseif ($hour->up04 == 1) {
                            return "05.00";
                        } elseif ($hour->up03 == 1) {
                            return "04.00";
                        } elseif ($hour->up02 == 1) {
                            return "03.00";
                        } elseif ($hour->up01 == 1) {
                            return "02.00";
                        } elseif ($hour->up00 == 1) {
                            return "01.00";
                        }
                    })
                    ->addColumn('price_sum', function ($row) {
                        return "Rp. $row->price_sum";
                    })
                    ->addColumn('action', function ($row) {
                        if ($row->confirmation == 0) {
                            $button = "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-danger text-white' data-id='" . $row['id'] . "' id='rejectBtn' href='".route('deny-order', [$row->id])."'>Tolak</a>";
                            $button .= "<button style='margin-right: 5px;' class='setuju btn btn-sm  btn-success text-white' data-id='" . $row['id'] . "' id='accBtn' href=''>Terima</button>";
                            $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-info text-white' data-id='" . $row['id'] . "' id='detailBtn' href='".route('detail-order', [$row->id])."'>Detail Order</a>";
                        } elseif ($row->confirmation == 1 || $row->confirmation == 2) {
                            $button = '';
                            $button .= "<a style='margin-right: 5px;' class='setuju btn btn-sm  btn-info text-white' data-id='" . $row['id'] . "' id='detailBtn' href='" . route('detail-order', [$row->id]) . "'>Detail Order</a>";
                        }
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

                //penyedia-lapangan.index
            }
        }
    }

    public function accorder(Request $request)
    {
        if (!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else {
            $order = RentOrder::where('id', $request->id)->first();
            $user = User::where('id', $order->user_id)->first();
            $order->confirmation = 1;
            $order->save();
            $user->successful_transaction = $user->successful_transaction + 1;
            if ($user->successful_transaction == 8) {
                $user->vip_status = 1;
                $user->save();
            }
            $user->save();
            return redirect()->route('auth.dashboard')->with('success', 'Order telah dikonfirmasi! Silahkan persiapkan lapangan anda untuk pemesanan tersebut.');
        }
    }

    public function denyorder($id){
        if (!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else {
            $order = RentOrder::where('id', $id)->first();
            return view('layout.penyedia-lapangan.tolak', compact('order', 'id'));
        }
    }

    public function storecancelorder(Request $request, $id)
    {
        if (!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else {
            try {
                $request->validate([
                    'cancel_reason' => 'required',
                ]);

                $order = RentOrder::where('id', $id)->first();
                $order->cancel_reason = $request->cancel_reason;
                $order->confirmation = 2;
                $order->save();

                $hours = RentHours::where('order_id', $order->id)->first();
                for ($i = 0; $i <= 23; $i++) {
                    // 00 , 01 , 02, ... , 09
                    if ($i < 10) {
                        $temp = 'up0' . $i;
                    } else {
                        $temp = 'up' . $i;
                    }
                    $hours->$temp = null;
                }
                $hours->updated_at = Carbon::now();
                $hours->save();

                // dd($hours->$temp, $cek);
                return redirect()->route('auth.dashboard')->with('success', 'Order berhasil ditolak!');
            } catch (\Throwable $th) {
                // dd($th);
                DB::rollBack();
                return back()->with('failed', 'Cek kelengkapan dari form anda!');
            }
        }
    }

    public function detailorder($id)
    {
        if (!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else {
            $order = RentOrder::where('id', $id)->first();
            return view('layout.penyedia-lapangan.detail-pemesanan', compact('order'));
        }
    }
}
