<style>@media print {
        .noPrint {
            display: none;
        }
    }


</style>


<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Your Booking :') }}
</h2>

<div>
    <ul>
        <li> Reservation ID : {{$reservation->id}}</li>
        <li>Traveling Date : {{$reservation->reservation_date}}</li>
        <li>Departure : {{$data['departure']}}</li>
        <li>Arrival : {{$data['arrival']}}</li>
        <li>Reservation Date : {{$reservation->created_at}}</li>
        <li>Passenger Name : {{$data['userName']}}</li>
        <li>Passenger NIC NO : {{$data['nic']}}</li>
        <li>Vehicle Number : {{$data['busNumber']}}</li>
        <li>Reservation Price : {{$reservation->total_price}}</li>
    </ul>

    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="button" onclick="window.print()"
                class="noPrint text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Print Ticket
        </button>

        <button type="button" onclick="window.location='{{ route("dashboard") }}'"
                class="noPrint text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Home
        </button>
    </div>


</div>
