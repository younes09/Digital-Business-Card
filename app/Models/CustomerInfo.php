<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;
    protected $table = 'customer_info';
    protected $fillable =['photo','logo','name','poste','email','phone','fix','website','address','description','facbook','instagram','linkedin','youtube','tiktok','twitter','line','pinterest','renren','vk','wechat','weibo','tencent_weibo'];
    public $timestamps = false;
}
