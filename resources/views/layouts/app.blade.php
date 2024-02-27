<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="adam">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    {{-- Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- Styles --}}
    @yield('styles')
    @livewireStyles
      @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Scripts --}}
    @yield('scripts')
  </head>
  <body class="font-sans antialiased">
    @if (session()->has('success'))
      <x-alert title="{{session('success')}}" icon="o-check-circle" class="alert-success" />
    @elseif (session()->has('error'))
      <x-alert title="{{session('error')}}" icon="c-x-circle" class="alert-error" />
    @endif
    {{-- @auth('web') --}}
      @extends('layouts.system')
    {{-- @else
      @yield('content')
    @endauth     --}}
    @livewireScripts
  </body>
</html>
