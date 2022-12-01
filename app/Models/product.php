<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
  
class Product extends Model
{
    use HasFactory,SoftDeletes;
  
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'id_produk', 'nama_baju', 'harga','stok','id_jenis','id_ukuran'
    ];

    protected $primaryKey = 'id_produk';
    protected $keyType = 'bigInteger';
    public $incrementing = false;

}