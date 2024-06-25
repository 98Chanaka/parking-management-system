@extends('sadmin.layout_sadmin')

@section('sadmin')
<div class="min-h-screen p-4 bg-gray-100 sm:ml-64 dark:bg-gray-900">
    <div class="p-4 mt-14">
        <div class="flex flex-col items-center mt-8">
            <!-- Main Content -->
            <div class="w-full p-4 lg:w-3/4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-600">Parking Spots</h2>
                        <p class="text-2xl font-bold text-gray-800">Total: {{ $parkingSlots->count() }}</p>
                        <div class="mt-2">
                            <p class="text-gray-600">A Pass: <span class="font-bold">{{ $countA }}</span></p>
                            <p class="text-gray-600">E Pass: <span class="font-bold">{{ $countE }}</span></p>
                            <p class="text-gray-600">F Pass: <span class="font-bold">{{ $countF }}</span></p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-600">Total Blocked</h2>
                        <p class="text-2xl font-bold text-gray-800">{{ $countBlocked }}</p>
                    </div>

                    <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-600">Total Available</h2>
                        <p class="text-2xl font-bold text-gray-800">{{ $countAvailable }}</p>
                    </div>

                    <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-600">Total Parked</h2>
                        <p class="text-2xl font-bold text-gray-800">{{ $countParked }}</p>
                    </div>
                </div>

                <!-- Parking Spots data table -->
                <div id="parking-sports-data-table" class="mt-12 text-center">
                    <div class="flex items-center justify-between mb-4 ml-4">
                        <div class="flex items-center space-x-4">
                            <x-title text="Parking Spots Table" />
                            <div class="flex items-center space-x-2">
                                <form method="GET" action="{{ route('sadmin.parking_map') }}" class="flex items-center">
                                    <label for="search" class="mr-2 text-gray-700"></label>
                                    <x-input-field id="search" name="search" type="text" placeholder="Search" value="{{ request('search') }}" class="mr-2"/>
                                    <x-search-button>{{ __('Search') }}</x-search-button>
                                </form>
                            </div>
                        </div>
                        <!-- Add button on the right side -->
                        <div class="flex items-center space-x-4">
                            <x-add-button href="{{ route('sadmin.parking_map_add') }}">
                                {{ __('Add') }}
                            </x-add-button>
                        </div>
                    </div>

                    <div class="mt-8">
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Spot ID</th>
                                    <th class="px-4 py-2">Availability</th>
                                    <th class="px-4 py-2">Vehicle Category</th>
                                    <th class="px-4 py-2">Vehicle Class</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($parkingSlots as $slot)
                                    <tr>
                                        <td class="px-4 py-2">{{ $slot->Sport_ID }}</td>
                                        <td class="px-4 py-2">{{ $slot->Availability }}</td>
                                        <td class="px-4 py-2">{{ $slot->vehicle_category }}</td>
                                        <td class="px-4 py-2">{{ $slot->vehicle_class }}</td>
                                        <td class="px-4 py-2">{{ $slot->Status }}</td>
                                        <td class="px-4 py-2">
                                            <a href="{{ route('sadmin.edit', $slot->id) }}" class="text-blue-500">Edit</a>
                                            <form action="{{ route('sadmin.destroy', $slot->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
