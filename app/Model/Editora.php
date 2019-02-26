<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $fillable = ['name'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'editoras';


    public function livros (){
        return $this->hasMany('App\Model\Livro');
    }
}
