<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
    protected $table="todos";
    protected $primaryKey = 'todo_id';
    protected $fillable = ['title', 'desc', 'status'];
}
