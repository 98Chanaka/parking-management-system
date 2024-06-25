<!-- resources/views/sadmin/parking_map_add.blade.php -->

@extends('sadmin.layout_sadmin')

@section('sadmin')
<div class="min-h-screen p-4 bg-gray-100 sm:ml-64 dark:bg-gray-900">
    <div class="p-4 mt-14">
        <div class="flex flex-col items-center mt-8">
            <!-- Main Content -->
            <div class="w-full p-4 bg-white rounded-lg shadow-md lg:w-3/4">
                <h2 class="text-lg font-semibold text-gray-600">Add New Parking</h2>

                @if (session('success'))
                    <div class="p-4 mt-4 text-green-700 bg-green-100 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('store_parking_slot') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="mt-4">
                        <x-input-label for="c" :value="__('Sport ID')" />
                        <x-text-input id="Sport_ID" class="block w-full mt-1" type="text" name="Sport_ID" :value="old('Sport_ID')" required autofocus autocomplete="Sport_ID" />
                        <x-input-error :messages="$errors->get('Sport_ID')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="Status" :value="__('Status')" />
                        <x-text-input id="Status" class="block w-full mt-1" type="text" name="Status" :value="old('Status')" required autofocus autocomplete="Status" />
                        <x-input-error :messages="$errors->get('Status')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="Availability" :value="__('Availability')" />
                        <div class="flex items-center mt-2 space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="availability" value="yes" {{ old('availability') === 'yes' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 form-radio">
                                <span class="ml-2 text-gray-700">Yes</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="availability" value="no" {{ old('availability') === 'no' ? 'checked' : '' }} class="w-4 h-4 text-blue-600 form-radio">
                                <span class="ml-2 text-gray-700">No</span>
                            </label>
                        </div>
                        <x-input-error :messages="$errors->get('availability')" class="mt-2" />
                    </div>

                    <div class="flex items-center mt-4">
                        <p class="mr-2 dark:text-white">Vehicle Category</p>
                        @php
                            $categoryRadios = [
                                ['id' => 'long', 'value' => 'long', 'label' => 'long', 'checked' => old('vehicle_category') === 'long', 'disabled' => false],
                                ['id' => 'light', 'value' => 'light', 'label' => 'light', 'checked' => old('vehicle_category') === 'light', 'disabled' => false],
                            ];
                        @endphp
                        <x-radio-button-group :radios="$categoryRadios" name="category" />
                    </div>
                    <div class="flex items-center mt-4">
                        <p class="mr-2 dark:text-white">Vehicle Class</p>
                        @php
                            $classRadios = [
                                ['id' => 'class-A', 'value' => 'A', 'label' => 'A', 'checked' => old('vehicle_class') === 'A', 'disabled' => false],
                                ['id' => 'class-E', 'value' => 'E', 'label' => 'E', 'checked' => old('vehicle_class') === 'E', 'disabled' => false],
                                ['id' => 'class-F', 'value' => 'F', 'label' => 'F', 'checked' => old('vehicle_class') === 'F', 'disabled' => false],
                            ];
                        @endphp
                        <x-radio-button-group :radios="$classRadios" name="class" />
                    </div>
                    <br>
                    <x-primary-button>{{ __('Update') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
