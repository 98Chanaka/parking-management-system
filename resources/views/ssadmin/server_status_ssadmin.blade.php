@extends('ssadmin.layout_ssadmin')
@section('ssadmin')
<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        <x-title text="SERVER STATUS" />
        <div class="mt-8">
            <x-card>
                <!--<form id="filter-form" action="{{ route('ssadmin.vehicle_history') }}" method="GET">-->
                    <div class="flex">
                        <div class="flex mr-2">
                            <x-input-label class='mr-2' for="date" :value="__('Start Date')" />
                            <x-input-field id="date" name="date" type="text" placeholder="YYYY-MM-DD" value="" />
                        </div>
                        <div class="flex mr-2">
                                <x-input-label class='mr-2' for="date" :value="__('End Date')" />
                                <x-input-field id="date" name="date" type="text" placeholder="YYYY-MM-DD" value="" />
                            </div>
                        <div class="flex mr-2">
                            <x-input-label class='mr-2' for="client" :value="__('Client')" />
                            <x-input-field id="client" name="client" type="text" placeholder="Enter Name" value="" />
                        </div>
                        <div class="flex mr-2">
                                <x-input-label class='mr-2' for="stype" :value="__('Status Type')" />
                                <x-input-field id="type" name="status_type" type="text" placeholder="Enter Type" value="" />
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
               <!-- </form> -->
            </x-card> 
            
        </div>
    </div>
 </div>
@endsection