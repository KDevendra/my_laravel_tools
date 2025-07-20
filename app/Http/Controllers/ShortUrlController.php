<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;

class ShortUrlController extends Controller
{
    public function shorten(Request $request)
    {
        $request->validate(['url' => 'required']);

        $agent = new Agent();
        $shortCode = Str::random(6);
        while (ShortUrl::where('short_code', $shortCode)->exists()) {
            $shortCode = Str::random(6);
        }

        $shortUrl = ShortUrl::create([
            'original_url' => $request->url,
            'short_code' => $shortCode,
            'ip_address' => $request->ip(),
            'browser' => $agent->browser(),
            'device' => $agent->device(),
            'os' => $agent->platform(),
            'created_by' => null,
            'updated_by' => null,
        ]);

        return response()->json(['short_url' => url($shortCode), 'message' => 'URL shortened successfully!'], 201);
    }

    public function redirect($shortCode)
    {
        $shortUrl = ShortUrl::where('short_code', $shortCode)->firstOrFail();
        $shortUrl->increment('clicks');
        return redirect($shortUrl->original_url);
    }
}