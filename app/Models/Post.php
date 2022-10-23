<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getbyLimited(int $limit_num=10){
        return $this->orderBy('updated_at', 'desc')->limit($limit_num)->get();
    }
}
