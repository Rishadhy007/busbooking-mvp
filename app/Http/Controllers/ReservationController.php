<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Reservation;
use App\Models\Station;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $stations = Station::all();
        return view('dashboard', compact('stations'));
    }

    /**
     * @param Request $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // validate datas = ...

        $route = BusRoute::where([
            "from_station" => $request->departure,
            "to_station" => $request->arrival
        ])->first();

        $bus = Bus::where("bus_route_id", $route->id)->inRandomOrder()->first();
        $request->merge([
            "bus_id" => $bus->id,
            "total_price" => $route->price * $request->seat_count,
            "user_id" => auth()->id()
        ]);

        $reservation = Reservation::create($request->all());

        return redirect(route("reservation.show", $reservation));
    }

    /**
     * @param Reservation $reservation
     * @return Application|Factory|View
     */
    public function show(Reservation $reservation)
    {
        $stations = Station::all();
        $user = User::where('id', $reservation->user_id)->first(['name', 'nic_no']);
        $busNumber = Bus::where('id', $reservation->bus_id)->first(['number'])->number;

        $data = [
            "departure" => $stations->where('id', $reservation->departure)->pluck('name')->first(),
            "arrival" => $stations->where('id', $reservation->arrival)->pluck('name')->first(),
            "userName" => $user->name,
            "nic" => $user->nic_no,
            "busNumber" => $busNumber
        ];

        return view("reservation", compact('reservation', 'data'));
    }

    /**
     * @return Application|Factory|View
     */
    public function showMyBookings()
    {
        $myBookings = Reservation::with(['user', 'arrivalStation', 'departureStation'])->where('user_id', auth()->id())->get();

        return view("my-reservation", compact('myBookings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
