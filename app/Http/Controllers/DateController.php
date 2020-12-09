<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Time;

class DateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        if($id > 0 && $id < 4) {
            $currentTime = Carbon::now()->timezone('Europe/Stockholm')->toDateTimeString();
            $startTime = Time::pluck('time' . $id)->first();
            $endTime = Carbon::create($startTime)->addMinutes(30);
            
    
            // if($startTime <= $currentTime && $endTime > $currentTime) {
                return view('date', ['id' => $id]);
            // }else return redirect()->route('dashboard');
        } else return redirect()->route('dashboard');
    }
}
