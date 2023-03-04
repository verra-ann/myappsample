@extends('layouts.app')

@section('home')
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div class="relative h-screen overflow-hidden bg-indigo-900">
            <img src="/img/2.jpg" class="absolute object-cover w-full h-full"/>
            <div class="absolute inset-0 bg-black opacity-25">
            </div>
            <div class="container relative z-10 flex items-center px-6 py-32 mx-auto md:px-12 xl:py-40">
                <div class="relative z-10 flex flex-col items-center w-full font-mono">
                    <h1 class="mt-1 text-5xl font-extrabold leading-tight text-center text-white animate-bounce">
                        To-Do List
                    </h1>
                    <form class="mt-1 space-y-6" action="/NewTodo" method="POST">
                        @csrf
                        <input type="hidden" name="remember" value="true">
                        <div class="space-y-px rounded-md shadow-sm">
                          <div>
                            <label for="email-address" class="sr-only">Email address</label>
                            <input type="text" name="todo" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-10 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="To-Do" required>
                          </div>
                        </div>  
                        <div>
                          <button type="submit" class="py-3 px-4  bg-gradient-to-r from-green-400 to-blue-500 text-black w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            </span>
                            Add New To-Do
                          </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>  
    </body>
</html>
@endsection
