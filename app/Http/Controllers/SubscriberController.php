<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\Website;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(Request $request, $websiteId)
    {
        $website = Website::findOrFail($websiteId);

        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = $website->subscribers()->create($validated);

        return response()->json(['message' => 'Subscribed successfully', 'subscriber' => $subscriber], 201);
    }
}