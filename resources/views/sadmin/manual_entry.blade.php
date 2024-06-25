@extends('sadmin.layout_sadmin')
@section('sadmin')
<div class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md p-8 bg-white rounded-md shadow-md dark:bg-gray-800">
        <x-title text="Manual Enter And Exit" />
        <br>
        <form id="entryForm" action="{{ route('manual_entry.store') }}" method="POST">
            @csrf

            <!--Select Enter or Exit-->
            <div class="mb-4">
                <x-input-label for="select_enter_or_exit" :value="__('Select Enter or Exit  ')" />
                <select id="entryExit" name="entryExit" class="block w-full mt-1 bg-white border border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600">
                    <option value="enter">Enter</option>
                    <option value="exit">Exit</option>
                </select>
            </div>

            <!--Vehicle Number-->
            <div class="mt-4">
                <x-input-label for="vehicle_number" :value="__('Enter Vehicle Number ')" />
                <x-text-input id="vehicle_number" class="block w-full mt-1" type="text" name="vehicle_number" placeholder="ABCxxxx" :value="old('vehicle_number')" required autocomplete="vehicle_number"/>
                <x-input-error :messages="$errors->get('vehicle_number')" class="mt-2" />
            </div>

            <!--Spot ID-->
            <div class="mt-4">
                <x-input-label for="spot_id" :value="__('Enter Spot ID ')" />
                <x-text-input id="spot_id" class="block w-full mt-1" type="text" name="spot_id" placeholder="A01" :value="old('spot_id')" required autocomplete="spot_id"/>
                <x-input-error :messages="$errors->get('spot_id')" class="mt-2" />
            </div>

            <!-- Submit -->
            <div>
                <br>
                <button type="submit" class="block w-full mt-1 text-white bg-blue-600 rounded-md shadow-sm hover:bg-blue-700">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('entryExit').addEventListener('change', function() {
        if (this.value === 'exit') {
            window.location.href = "{{ url('/manual_exit') }}";
        }
    });
</script>

@endsection
