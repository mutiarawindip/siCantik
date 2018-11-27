<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $table = 'produk';
    protected $fillable = [
        'nama_produk', 'id_brand', 'harga', 'deskripsi'];
}
