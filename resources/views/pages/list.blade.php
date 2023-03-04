@extends('layouts.app')

@section('list')
<!doctype html>
<html class="h-full bg-gray-50">
<body class="h-full">
    <div class="container max-w-3xl px-4 mx-auto sm:px-8">
        <div class="py-8">
            <p class="text-3xl font-bold text-center text-gray-800 dark:text-black">
                To-Do List
            </p>
            <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                @if(Session::has('success'))
                <div class="alert alert-success">
                {{Session::get('success')}}
                </div>
                @endif
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                    To Do
                                </th>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                    Created at
                                </th>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                    status
                                </th>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                    EDIT
                                </th>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todo as $Todos)
                                <tr>
                                    <td>{{ $Todos->todo }}</td>
                                    <td>{{ $Todos->created_at }}</td>
                                    <td>{{ $Todos->updated_at }}</td>
                                    <td><a href = 'edit/{{ $Todos->id }}'>Edit</a></td>
                                    <td><a href = 'delete/{{ $Todos->id }}'>Done</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="inline-flex">
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                        <a href="/">HOME</a>
                    </button>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                      <a href="/list">VIEW LIST</a>
                    </button>
                  </div>
            </div>
        </div>
    </div>
    
    </body>
</html>
@endsection