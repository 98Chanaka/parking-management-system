@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-clickboder dark:focus:border-clickboder focus:ring-clickboder dark:focus:ring-clickboder rounded-md shadow-sm']) !!}>
