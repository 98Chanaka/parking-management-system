@extends('ssadmin.layout_ssadmin')
@section('ssadmin')
<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        <x-title text="VEHICLE HISTORY" />
        <div class="w-3/4 mt-8 ml-36 ">
            <x-card>
                <form id="filter-form" action="{{ route('ssadmin.vehicle_history') }}" method="GET">
                    <div class="flex ml-12">
                        <div class="flex mr-2">
                            <x-input-label class='mr-2' for="date" :value="__('Date')" />
                            <x-input-field id="date" name="date" type="text" placeholder="YYYY-MM-DD" value="" />
                        
                        </div>
                        <div class="flex mr-2">
                            <x-input-label class='mr-2' for="vehicle_number" :value="__('Vehicle number')" />
                            <x-input-field id="vehicle_number" name="vehicle_number" type="text" placeholder="xxxxxx" value="" />
                        </div>
                        <div class="flex mr-2">
                            <x-primary-button class="ms-4">
                                {{ __('Filter') }}
                            </x-primary-button>
                        </div>
                        <div class="flex mr-2">
                            <x-danger-button type="button" class="ms-4" onclick="resetForm()">
                                {{ __('Reset') }}
                            </x-danger-button>
                        </div>
                    </div>
                </form>
            </x-card> 
        </div>
        <div class="mt-12">
            <x-table :headers="$headers2" :records="$records2" />
        </div>
    </div>
</div>

<!-- Include flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Include flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#date", {
        dateFormat: "Y-m-d",
    });

    function resetForm() {
        document.getElementById('filter-form').reset();
        window.location.href = "{{ route('ssadmin.vehicle_history') }}";
    }
</script>
@endsection
