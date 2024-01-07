<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'sort',
    ];


    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    // public function children()
    // {
    //     return $this->hasMany(ProductCategory::class, 'parent_id')->orderBy('sort');
    // }

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id')->with('children');
    }

    public function getAllChildrenIds($ids = [])
    {
        $ids[] = $this->id;

        foreach ($this->children as $child) {
            $ids = array_merge($ids, $child->getAllChildrenIds());
        }

        return $ids;
    }
}
