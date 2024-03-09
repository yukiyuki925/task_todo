<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  use HasFactory;
  
  protected $table = 'tasks';

  // テーブルに関連づける主キー
    protected $primaryKey = 'id';

    // 登録・編集ができるカラムのリスト
    protected $fillable = [
        'name',
        'content',
        'created_at',
        'updated_at',
    ];

}