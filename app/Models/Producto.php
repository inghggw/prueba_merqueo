<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $product_id
 * @property string $name
 * @property string $product_description
 * @property float $price
 * @property Customer[] $customers
 */
class Producto extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'producto';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'referencia', 'precio','unidades_actuales','estado_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo('App\Models\Estado');
    }
}
