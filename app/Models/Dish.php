<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $table = 'dishes';

    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'image',
    ];
    public function translations(): HasMany
    {
        return $this->hasMany(DishTranslation::class);
    }

    public function translation(?string $locale = null): ?DishTranslation
    {
        $locale = $locale ?? app()->getLocale();
        $fallbackLocale = 'uk';

        return $this->translations->firstWhere('locale', $locale)
            ?? $this->translations->firstWhere('locale', $fallbackLocale)
            ?? $this->translations->first();
    }

    public function getLocalizedNameAttribute(): string
    {
        return $this->translation()?->name ?? $this->name;
    }

    public function getLocalizedDescriptionAttribute(): ?string
    {
        return $this->translation()?->description ?? $this->description;
    }
}
