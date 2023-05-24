<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
use App\Models\RentHours;
use App\Models\RentHoursAvailable;
use App\Models\User;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller{
    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $venue = Venue::all();
            return view('lapangan.index', compact('venue'));
        }
    }

    public function venuedetail($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $venue = Venue::where('id', $id)->first();
            return view('lapangan.detail', compact('venue'));
        }
    }

    public function order($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
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
            return redirect()->route('auth.login');
        } else{
            $venue = Venue::where('id', $venueid)->first();
            $field = FieldDetail::where('id', $fieldid)->first();
            return view('pesan-lapangan.pesan', compact('venueid', 'fieldid', 'venue', 'field'));
        }
    }

    public function ordertime($venueid, $fieldid, Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
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
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $request->validate([
                'up'                => 'required',
                'field_cost_hour'   => 'required'
            ]);

            $hours = $request->up;
            $venue = Venue::where('id', $venueid)->first();
            $field = FieldDetail::where('id', $fieldid)->first();
            $user = Sentinel::getUser();

            $rent_order = $user->rent_order()->create([
                'cust_name'     => $user->name,
                'venue_id'      => $venueid,
                'venue_name'    => $venue->venue_name,
                'cust_number'   => $user->no_telephone,
                'cust_email'    => $user->email,
                'field'         => $field->field_name,
                'order_date'    => $date,
                'price_sum'     => $request->field_cost_hour * count($hours) + 5000,
            ]);

            $venue_rent = $venue->rent_hours()->create([
                'field_id'      => $fieldid,
                'order_date'    => $date,
            ]);

            $venue_id_forrent = RentHours::where('id', $venue_rent->id);
            for ($i=0; $i<count($hours)-1; $i++) { 
                if ($hours[$i] == 0) {
                    $venue_id_forrent->up00 = 1;
                } elseif ($hours[$i] == 1) {
                    $venue_id_forrent->up01 = 1;
                } elseif ($hours[$i] == 2) {
                    $venue_id_forrent->up02 = 1;
                } elseif ($hours[$i] == 3) {
                    $venue_id_forrent->up03 = 1;
                } elseif ($hours[$i] == 4) {
                    $venue_id_forrent->up04 = 1;
                } elseif ($hours[$i] == 5) {
                    $venue_id_forrent->up05 = 1;
                } elseif ($hours[$i] == 6) {
                    $venue_id_forrent->up06 = 1;
                } elseif ($hours[$i] == 7) {
                    $venue_id_forrent->up07 = 1;
                } elseif ($hours[$i] == 8) {
                    $venue_id_forrent->up08 = 1;
                } elseif ($hours[$i] == 9) {
                    $venue_id_forrent->up09 = 1;
                } elseif ($hours[$i] == 10) {
                    $venue_id_forrent->up10 = 1;
                } elseif ($hours[$i] == 11) {
                    $venue_id_forrent->up11 = 1;
                } elseif ($hours[$i] == 12) {
                    $venue_id_forrent->up12 = 1;
                } elseif ($hours[$i] == 13) {
                    $venue_id_forrent->up13 = 1;
                } elseif ($hours[$i] == 14) {
                    $venue_id_forrent->up14 = 1;
                } elseif ($hours[$i] == 15) {
                    $venue_id_forrent->up15 = 1;
                } elseif ($hours[$i] == 16) {
                    $venue_id_forrent->up16 = 1;
                } elseif ($hours[$i] == 17) {
                    $venue_id_forrent->up17 = 1;
                } elseif ($hours[$i] == 18) {
                    $venue_id_forrent->up18 = 1;
                } elseif ($hours[$i] == 19) {
                    $venue_id_forrent->up19 = 1;
                } elseif ($hours[$i] == 20) {
                    $venue_id_forrent->up20 = 1;
                } elseif ($hours[$i] == 21) {
                    $venue_id_forrent->up21 = 1;
                } elseif ($hours[$i] == 22) {
                    $venue_id_forrent->up22 = 1;
                } elseif ($hours[$i] == 23) {
                    $venue_id_forrent->up23 = 1;
                }

                $venue_id_forrent->save();
            }

            return view('pesan-lapangan.pesan-konfirmasi');
        }
    }
}
