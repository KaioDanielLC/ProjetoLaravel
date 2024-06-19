@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'dark:border-segundaria dark:bg-primaria dark:text-gray-300 dark:focus:border-segundaria dark:focus:ring-segundaria rounded-md shadow-sm']) !!}>
