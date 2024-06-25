@extends('ssadmin.layout_ssadmin')
@section('ssadmin')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <div>
            <x-title text="CLIENT INFORMATION" />
            <div class="flex mt-6 ml-[750px]">
                <div class="flex mr-4">
                    <x-input-field id="client" name="client" type="text" placeholder="Enter Client" value="" />
                    <x-search-button />
                </div>
            <x-add-button href="{{ route('ssadmin.register_client') }}">
                {{ __('Add') }}
            </x-add-button>
            </div>
            <div class="mt-8">
                <x-table :headers="$headers" :records="$records" />
            </div>
            </div>
        
        </div>
    </div>
@endsection
