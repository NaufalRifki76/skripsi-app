<?php

namespace App\Http\Controllers\Features;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
use App\Models\RentItems;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\DB;

class MitraController extends Controller
{
    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $rent = RentItems::all();
            return view('mitra.join', compact('rent'));
        }
    }

    public function store(Request $request){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            // dd($request->drinks);
            try {
                $request->validate([
                    'venue_name'         => 'required',
                    'venue_address'      => 'required',
                    'open_hour'          => 'required',
                    'venue_photo_base64' => 'nullable',
                    'venue_desc'         => 'required',
                    'close_hour'         => 'required',
                    'drinks'             => 'nullable',
                    'locker_room'        => 'nullable',
                    'toilet'             => 'nullable',
                    'parking_space'      => 'nullable',
                    'wifi'               => 'nullable',
                    'rent_equipments'    => 'nullable',
                    'field_name'         => 'required',
                    'field_photo_base64' => 'nullable',
                    'field_cost_hour'    => 'required',
                    'item_id'            => 'nullable',
                    'item_qty'           => 'nullable',
                    'item_rent_cost'     => 'nullable',
                ]);

                $user = Sentinel::getUser();
                DB::beginTransaction();

                $venue = $user->user_venue()->create([
                    'venue_name'        => $request->venue_name,
                    'venue_address'     => $request->venue_address,
                    'open_hour'         => $request->open_hour,
                    'close_hour'        => $request->close_hour,
                    'venue_desc'        => $request->venue_desc,
                    'drinks'            => $request->drinks,
                    'locker_room'       => $request->locker_room,
                    'toilet'            => $request->toilet,
                    'parking_space'     => $request->parking_space,
                    'wifi'              => $request->wifi,
                    'rent_equipments'   => $request->rent_equipments
                ]);

                $venue_id = Venue::where('id', $venue->id)->first();

                $field_detail = $request->field_name;
                $field_cost = $request->field_cost_hour;
                $venue_image = $request->venue_photo_base64;
                $field_image = $request->file('field_photo_base64');

                if ($venue_image != null) {
                    $venueBase64 = base64_encode(file_get_contents($venue_image));
                    $venuephoto = $venue_id->venue_base64()->create([
                        'venue_photo_base64' => $venueBase64
                    ]);
                }

                for($i=0; $i<count($field_detail)-1; $i++){
                    $fielddetail = $venue_id->field_detail()->create([
                        'field_name'        => $field_detail[$i],
                        'field_cost_hour'   => $field_cost[$i]
                    ]);

                    // $field_id = FieldDetail::where('id', $fielddetail)->first();
                    // if ($field_image != null) {
                    //     $realpath = $field_image[$i]->getRealPath();
                    //     $fieldBase64[$i] = base64_encode(file_get_contents($realpath));
                    //     $venuephoto = FieldDetail::where('id', $fielddetail)->first()->photo_field_detail()->create([
                    //         'field_photo_base64' => $fieldBase64[$i]
                    //     ]);
                    // }
                }

                if ($request->item_id != null) {
                    $item_id = $request->item_id;
                    $item_qty = $request->item_qty;
                    $item_cost = $request->item_rent_cost;
                    for ($j=0; $j < count($item_id); $j++) { 
                        $venuerent = $venue_id->venue_rent_item()->create([
                            'item_id'           => $item_id[$j],
                            'item_qty'          => $item_qty[$j],
                            'item_rent_cost'    => $item_cost[$j],
                        ]);
                    }
                }

                $vendorRole = Role::where('slug', 'vendor')->first();
                $user->roles()->detach();
                $user->roles()->attach($vendorRole->id);

                DB::commit();
                return redirect()->route('mitra.home')->with('success', 'Akun anda telah menjadi akun Vendor!');
            } catch (\Throwable $th) {
                dd($th);
                DB::rollBack();
            }
        }
    }

    public function mitraIndex(){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            return view('layout.penyedia-lapangan.index');
        }
    }
}
