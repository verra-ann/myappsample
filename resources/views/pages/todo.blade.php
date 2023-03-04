<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-50">
  <body class="h-full">
  ```
-->
@extends('layouts.app')

@section('content')
<!doctype html>
<html class="h-full bg-gray-50">
    <body class="h-full">
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">To-Do List</h2>
      </div>

      @if(Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
      @endif
      
      {{-- @if ($errors->any())  --}}
      @if(Session::has('error'))
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach 
              {{Session::get('error')}}
          </ul>
        </div>
      @endif

      <form class="mt-8 space-y-6" action="/NewTodo" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="space-y-px rounded-md shadow-sm">
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input type="text" name="todo" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="To-Do" required>
          </div>
        </div>  
        <div>
          <button type="submit" class="py-2 px-4  bg-gradient-to-r from-green-400 to-blue-500 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            </span>
            Add New To-Do
          </button>
        </div>
      </form>

      <div class="inline-flex">
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
          <a href="/">HOME</a>
        </button>
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
          <a href="/ShowList">VIEW LIST</a>
        </button>
      </div>
    </div>
  </div>
</body>
</html>
@endsection