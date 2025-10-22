<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriItem extends Model
{
    protected $fillable = ['kode', 'nama'];

    public function items()
    {
        return $this->belongsToMany(MasterItem::class, 'item_kategori', 'kategori_item_id', 'master_item_id');
    }
}
