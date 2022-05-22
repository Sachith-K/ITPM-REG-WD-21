<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    protected $primaryKey = 'id';
    // protected $fillable = [
    //     'id',
    //     'productID',
    //     'productName',
    //     'descriptions',
    //     'quantity',
    //     'pricePerUnit',
    //     'created_at',
    //     'updated_at'
    // ];
}
