<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Website;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request, $websiteId)
    {
        $website = Website::findOrFail($websiteId);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post = $website->posts()->create($validated);

        return response()->json(['message' => 'Post created successfully', 'post' => $post], 201);
    }
}