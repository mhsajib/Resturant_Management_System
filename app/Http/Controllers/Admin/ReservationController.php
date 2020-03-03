<?php

namespace App\Http\Controllers\Admin;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Notifications\ReservationConfirmed;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    } 

    public function status($id){
        $reservations = Reservation::find($id);
        $reservations->status = true;
        $reservations->save();
          
        Notification::route('mail', $reservations->email)
            ->route('nexmo', '5555555555')
            ->route('slack', 'https://hooks.slack.com/services/...')
            ->notify(new ReservationConfirmed());


        Toastr::success('Reservation successfully Confirmed','success',["positionClass" => "toast-top-right"]);
        // Toastr::success('Reservation successfully Confirmed', 'success', ["positionClass" => "toast-top-center"]);
       

        return redirect()->back();

    }

    public function destroy($id){
         Reservation::find($id)->delete();
         Toastr::success('Reservation successfully Deleted','Success',["positionClass" => "toast-top-right"]);
         return redirect()->back();
    }
}
