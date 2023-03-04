@extends('layouts.app')

@section('edit')
<!DOCTYPE html>
<html class="h-full bg-gray-50">
    <body class="h-full">
        <form action="/editTodo/<?php echo $todo->id; ?>" method="POST">
        <input type="hidden" name="_token" value= "<?php echo csrf_token(); ?>">
        <table>                              
            <tr>
                <label for="taskname" class="form-label">To-Do</label><br>                             
                {{-- <input type ='text' name= 'task' value= '<?php echo $todo[0]->todo; ?>'/> --}}
                <input type ='text' name= 'todo' value= "{{$todo['todo']}}"/>
            </tr>
            <tr>
                <td>
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    </span>
                    Edit To-Do
                </button>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>    
@endsection