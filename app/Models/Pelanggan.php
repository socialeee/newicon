<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = ['readable','nomor_so','nama', 'alamat', 'status', 'ptl', 'file1', 'activator_id'];

    // public function sales()
    // {
    //     return $this->belongsTo(User::class, 'sales_id');
    // }

    public function activator()
    {
        return $this->belongsTo(User::class, 'activator_id');
    }
}
