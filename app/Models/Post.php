<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    public function getbyLimit(int $limit_num=10){
        return $this->orderBy('updated_at', 'desc')->limit($limit_num)->get();
    }
    
    public function getbyPaginate(int $limit_num=10){
        return $this->orderBy('updated_at', 'desc')->paginate($limit_num);
    }
    
    protected $fillable = ['title', 'body'];
    
    use SoftDeletes;
}
