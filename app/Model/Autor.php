<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['name'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'autores';

    public function livros (){
        return $this->hasMany('App\Model\Livro');
        
    }

}
