<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

Class Post extends Model {
    use HasFactory;

    protected $with = ['author', 'category'];
    
    protected $guarded = ['id'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    #[Scope]
    public function titleSearch(Builder $query, array $keyword): void 
    {
        $query->when($keyword['keyword'] ?? false, function($query, $keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%');
        });
    }
};
