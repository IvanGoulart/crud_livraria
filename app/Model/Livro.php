<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['name','editora_id','autor_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'livros';

    public function autor(){
        return $this->belongsTo('App\Model\Autor');
    }
    public function editora(){
        return $this->belongsTo('App\Model\Editora');
    }
}