<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function showHomePage() {
        $publishers = Publisher::all();
        $categories = Category::all();
        return view('publisher.index', compact('publishers', 'categories'));
    }
    public function showDetailPage(Publisher $publisher) {
        $categories = Category::all();
        return view('publisher.detail', compact('publisher', 'categories'));
    }
}
