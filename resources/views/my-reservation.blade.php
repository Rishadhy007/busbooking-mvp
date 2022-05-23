<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <title>My Reservations</title>
</head>
<body>

<h2>My Reservations</h2>

<table>
    <tr>
        <th>Booking Id</th>
        <th>Passenger Name</th>
        <th>From</th>
        <th>To</th>
        <th>Travelling Date</th>
        <th>Seat Count</th>
        <th>Bus Id</th>
        <th>Total Price</th>



    </tr>

    @foreach($myBookings as $myBooking)
        <tr>
            <td>{{$myBooking->id}}</td>
            <td>{{$myBooking->user->name}}</td>
            <td>{{$myBooking->departureStation->name}}</td>
            <td>{{$myBooking->arrivalStation->name}}</td>
            <td>{{$myBooking->reservation_date}}</td>
            <td>{{$myBooking->seat_count}}</td>
            <td>{{$myBooking->bus_id}}</td>
            <td>{{$myBooking->total_price}}</td>

        </tr>
    @endforeach

</table>

</body>

<button type="button" onclick="window.location='{{ route("dashboard") }}'"
        class="noPrint text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    Home
</button>
</html>

