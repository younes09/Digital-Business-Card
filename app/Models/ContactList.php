<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
    use HasFactory;
    protected $table = 'contacts_list';
    protected $fillable =['user_id','card_id'];
}
