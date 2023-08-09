<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40Periodicidad extends Model
{
    protected $table = 'cfdi_40_periodicidades';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
