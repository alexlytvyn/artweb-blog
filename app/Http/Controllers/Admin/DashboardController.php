<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Article;

class DashboardController extends Controller
{
    // Admin Dashboard
		public function dashboard() {
			return view('admin.dashboard', [
				'categories' => Category::lastCategories(5),
				'articles' => Article::lastArticles(5),
				'categories_count' => Category::count(),
				'articles_count' => Article::count()
			]);
		}
}
