<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TodoController;
use App\Models\Todo;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todos';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'todos',
    ];
}
