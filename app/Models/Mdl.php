<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mdl extends Model
{
    protected $table = 'mdl'; // 테이블명
    protected $primaryKey = 'id'; // 기본 키 (필요 시 수정)
    public $timestamps = false; // created_at, updated_at 없으면 false

    protected $fillable = [
        'name_device',
        'manf_device',
        // 필요한 컬럼들 추가
    ];
}
