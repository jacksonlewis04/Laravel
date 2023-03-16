<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image'
    ];
}

/*
use Kyslik\ColumnSortable\Sortable;

    use Sortable;

    public $sortable = [
            'id', 'title', 'description', 'image', 'created_at', 'updated_at'
    ];
}
*/