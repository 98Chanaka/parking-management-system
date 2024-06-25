@extends('sadmin.layout_sadmin')
@section('sadmin')
      <div class="min-h-screen flex flex-col justify-center sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="w-full sm:max-w-lg mt-6 px-4 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg ">
                  @include('auth.register')
            </div>
      </div>
@endsection