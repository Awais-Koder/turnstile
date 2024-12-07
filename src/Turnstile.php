<?php

namespace Turnstile\Turnstile;
use Illuminate\Support\Facades\Http;

class Turnstile
{
    public static function verify($token)
    {
        $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => config('turnstile.secret_key'),
            'response' => $token,
        ]);

        return $response->json();
    }
}
