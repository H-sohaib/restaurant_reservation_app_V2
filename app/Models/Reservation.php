<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['reserver_name', 'reserver_email', 'reserver_phone', 'table_id', 'reservation_date', 'guest'];
    protected $dates = ['reservation_date'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}