<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Satuan;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [
        "id"
    ];




    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }
}