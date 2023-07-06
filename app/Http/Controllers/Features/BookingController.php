<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
use App\Models\RentHours;
use App\Models\RentHoursAvailable;
use App\Models\RentOrder;
use App\Models\User;
use App\Models\Venue;
use Carbon\Carbon;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller{
    public function index(Request $request){
        if(request()->isMethod('get')){
            if(!Sentinel::getUser()) {
                return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
            }
            // get all data
            $venue = Venue::where('isdeleted', 0)->get();
    
            return view('lapangan.index', compact('venue'));
        }
        // get data by search
        $venue = Venue::when(isset($request->search), function($q) use($request){
            $q->where('venue_name', 'LIKE', '%'.$request->search.'%');
        })
        ->when(isset($request->cost), function($q) use($request){
            $q->whereHas('field_detail', function($qu) use($request){
                $qu->where('field_cost_hour', '<=', $request->cost);
            });
        })
        ->where('isdeleted', 0)->with('field_detail')
        ->get();

        return view('lapangan.index', compact('venue'));
    }

    public function venuedetail($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $venue = Venue::where('id', $id)->first();
            return view('lapangan.detail', compact('venue'));
        }
    }

    public function order($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $venue = Venue::where('id', $id)->first();
            $field = FieldDetail::where('venue_id', $id)->get();
            $field_photo = DB::table('field_detail_photos')
            ->join('field_detail', 'field_detail_photos.field_detail_id', '=', 'field_detail.id')
            ->join('venue', 'field_detail.venue_id', '=', 'venue.id')
            ->where('venue_id', '=', $id)
            ->pluck('field_detail_photos.field_photo_base64')
            ->toArray();
            return view('pesan-lapangan.index', compact('venue', 'field', 'field_photo'));
        }
    }

    public function orderdate($venueid, $fieldid){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $user = Sentinel::getUser();
            $venue = Venue::where('id', $venueid)->first();
            $field = FieldDetail::where('id', $fieldid)->first();
            return view('pesan-lapangan.pesan', compact('venueid', 'fieldid', 'venue', 'field', 'user'));
        }
    }

    public function ordertime($venueid, $fieldid, Request $request){
        // dd(1);
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $request->validate([
                'order_date' => 'required',
            ]);

            $availability = RentHours::where('order_date', $request->order_date)->get();
            $date = $request->order_date;
            $hours = RentHoursAvailable::where('venue_id', $venueid)->first();
            $venue = Venue::where('id', $venueid)->first();
            $field = FieldDetail::where('id', $fieldid)->first();
            // dd($availability);
            return view('pesan-lapangan.pilih-jam', compact('venueid', 'fieldid', 'venue', 'field', 'date', 'hours', 'availability'));
        }
    }

    public function orderconfirm($venueid, $fieldid, $date, Request $request){
        // dd(1);
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            // dd(1);
            try {
                
                $request->validate([
                    'up' => 'required',
                ]);
    
                DB::beginTransaction();
                $hours = $request->up;
                $venue = Venue::where('id', $venueid)->first();
                $field = FieldDetail::where('id', $fieldid)->first();
                $user = Sentinel::getUser();
                $price_sum = $field->field_cost_hour * count($hours) + 5000;
    
                $rent_order = $user->rent_order()->create([
                    'cust_name'     => $user->name,
                    'venue_id'      => $venueid,
                    'venue_name'    => $venue->venue_name,
                    'cust_number'   => $user->no_telephone,
                    'cust_email'    => $user->email,
                    'field'         => $field->field_name,
                    'order_date'    => $date,
                    'price_sum'     => $price_sum,
                    'created_at'    => Carbon::now(),
                ]);
    
                $venue_rent = $venue->rent_hours()->create([
                    'field_id'      => $fieldid,
                    'order_date'    => $date,
                    'order_id'      => $rent_order->id,
                ]);
    
                $venue_id_forrent = RentHours::where('id', $venue_rent->id)->first();
                for ($i=0; $i<count($hours); $i++) { 
                    if ($hours[$i] == 0) {
                        $venue_id_forrent->up00 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 1) {
                        $venue_id_forrent->up01 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 2) {
                        $venue_id_forrent->up02 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 3) {
                        $venue_id_forrent->up03 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 4) {
                        $venue_id_forrent->up04 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 5) {
                        $venue_id_forrent->up05 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 6) {
                        $venue_id_forrent->up06 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 7) {
                        $venue_id_forrent->up07 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 8) {
                        $venue_id_forrent->up08 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 9) {
                        $venue_id_forrent->up09 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 10) {
                        $venue_id_forrent->up10 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 11) {
                        $venue_id_forrent->up11 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 12) {
                        $venue_id_forrent->up12 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 13) {
                        $venue_id_forrent->up13 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 14) {
                        $venue_id_forrent->up14 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 15) {
                        $venue_id_forrent->up15 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 16) {
                        $venue_id_forrent->up16 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 17) {
                        $venue_id_forrent->up17 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 18) {
                        $venue_id_forrent->up18 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 19) {
                        $venue_id_forrent->up19 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 20) {
                        $venue_id_forrent->up20 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 21) {
                        $venue_id_forrent->up21 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 22) {
                        $venue_id_forrent->up22 = 1;
                        $venue_id_forrent->save();
                    } elseif ($hours[$i] == 23) {
                        $venue_id_forrent->up23 = 1;
                        $venue_id_forrent->save();
                    }
                }
                
                DB::commit();

                $order_info = RentOrder::where('user_id', $user->id)
                ->where('order_date', $date)
                ->where('price_sum', $price_sum)
                ->first();

                return view('pesan-lapangan.pesan-konfirmasi', compact('order_info', 'field', 'venue_id_forrent', 'venueid'));
            } catch (\Exception $e) {
                // dd($e);
                DB::rollBack();
                return redirect()->route('lapangan-order-date', [$venueid, $fieldid])->with('failed', 'Anda belum memilih jam bermain! Silahkan isi formulir dengan lengkap.');
            }
        }
    }

    public function transferfunds($rentorder_id, $venue_id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $order_info = RentOrder::where('id', $rentorder_id)->first();
            $venue_info = Venue::where('id', $venue_id)->first();
            return view('pesan-lapangan.pembayaran', compact('order_info', 'venue_info'));
        }
    }

    public function storetransfer(Request $request, $rentorder_id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            try {
                $validator = request()->validate([
                    'transfer_confirm_base64' => 'required',
                ]);
                
                $transcript = RentOrder::where('id', $rentorder_id)->first();
                
                $transfer_image = $request->transfer_confirm_base64;
                if ($transfer_image != null) {
                    $transferBase64 = base64_encode(file_get_contents($transfer_image));
                }

                $transcript->transfer_confirm_base64 = $transferBase64;
                $transcript->save();
                return view('pesan-lapangan.sukses');
            } catch (\Exception $e) {
                // dd($e->getMessage());
                DB::rollBack();
                return back()->with('failed', 'Anda belum upload bukti pembayaran, Cek kelengkapan dari form anda!');
            }
        }
    }
}
