<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mcl extends Model
{
    protected $table = 'mcl'; // 테이블명
    protected $primaryKey = 'id'; // 기본 키 (필요 시 수정)
    public $timestamps = false; // created_at, updated_at 없으면 false

    protected $fillable = [
        'name_cpu',
        'manf_cpu',
        // 필요한 컬럼들 추가
    ];
}
