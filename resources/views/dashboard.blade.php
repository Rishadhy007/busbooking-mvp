<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reserve Your Seats') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Villvay Systems Pvt Ltd</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Rishadhy MJM, No 519/4, Jayanthi Mawatha, Anuradhapura, 0716352515
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="{{route('reservation.store')}}" method="POST">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="fromStation"
                                                           class="block text-sm font-medium text-gray-700">From
                                                        Station</label>
                                                    <select id="fromStation" name="departure" required
                                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="" disabled selected> From</option>
                                                        @foreach($stations as $station)
                                                            <option
                                                                value="{{$station->id}}"> {{$station->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="toStation"
                                                           class="block text-sm font-medium text-gray-700">To
                                                        Station</label>
                                                    <select id="toStation" name="arrival" required
                                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="" disabled selected> To</option>
                                                        @foreach($stations as $station)
                                                            <option
                                                                value="{{$station->id}}"> {{$station->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="seatCount"
                                                           class="block text-sm font-medium text-gray-700">Number of
                                                        Seats</label>
                                                    <input type="number" name="seat_count" id="seatCount" required min="1" step="1"
                                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="reservationDate"
                                                           class="block text-sm font-medium text-gray-700">Date &
                                                        Time</label>
                                                    <input type="datetime-local" name="reservation_date" required
                                                           id="reservationDate"
                                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>


                                            </div>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Submit
                                            </button>
                                            <button type="button" onclick="window.location='{{ route("reservation.showMyBookings") }}'"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                View My Bookings
                                            </button>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
