<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
use App\Models\RefundHours;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RefundController extends Controller{
    public function snk(){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            return view('pengembalian-dana.syarat-ketentuan');
        }
    }

    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $user = Sentinel::getUser();
            $venue = Venue::all();
            return view('pengembalian-dana.index', compact('user', 'venue'));
        }
    }

    public function dependentfield($id){
        $field = FieldDetail::where('venue_id', $id)->get();
        return response()->json($field);
    }

    public function dependentprice($id){
        $price = FieldDetail::where('id', $id)->first();
        return response()->json($price);
    }

    public function store(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else {
            $request->validate([
                'name'                      => 'required',
                'no_telephone'              => 'required',
                'email'                     => 'required',
                'bank'                      => 'required',
                'bank_acc_no'               => 'required',
                'bank_acc_name'             => 'required',
                'venue_id'                  => 'required',
                'field_detail_id'           => 'required',
                'order_date'                => 'required',
                'up'                        => 'required',
                'price_sum'                 => 'required',
                'transfer_confirm_base64'   => 'required',
            ]);

            DB::beginTransaction();
            $hours = $request->up;
            $user = Sentinel::getUser();
            $transfer_image = $request->transfer_confirm_base64;
            if ($transfer_image != null) {
                $transferBase64 = base64_encode(file_get_contents($transfer_image));
            }
            
            $refund = $user->refund()->create([
                'name'                      => $request->name,
                'no_telephone'              => $request->no_telephone,
                'email'                     => $request->email,
                'bank'                      => $request->bank,
                'bank_acc_no'               => $request->bank_acc_no,
                'bank_acc_name'             => $request->bank_acc_name,
                'venue_id'                  => $request->venue_id,
                'field_detail_id'           => $request->field_detail_id,
                'order_date'                => $request->order_date,
                'price_sum'                 => $request->price_sum,
                'transfer_confirm_base64'   => $transferBase64,
            ]);

            $submittedhours = RefundHours::where('refund_id', $refund->id)->first();
            for ($i=0; $i<count($hours); $i++){
                $refundhours = $submittedhours->refund_hours()->create([
                    'hours' => $request->name,
                ]);
            }
        }
    }
}
