<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    // Mass assignation
		protected $fillable = ['title', 'slug', 'description_short', 'description_full', 'image', 'image_show', 'meta_title', 'meta_description', 'meta_keywords', 'is_published', 'created_by', 'modified_by'];

		// Slug field
		public function setSlugAttribute($value) {
			$this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
		}

		// Polymorphic relation with categories
		public function categories() {
			return $this->morphToMany('\App\Category', 'categoryable');
		}

		// Several last articles
		public function scopeLastArticles($query, $count) {
			return $query->orderBy('created_at', 'desc')->take($count)->get();
		}
}
