<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
		// Mass assignation
		protected $fillable = ['title', 'slug', 'parent_id', 'is_published', 'created_by', 'modified_by'];

		// Slug field
		public function setSlugAttribute($value) {
			$this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
		}

    // Get children Category
		public function children() {
			return $this->hasMany('App\Category', 'parent_id');
		}
}
