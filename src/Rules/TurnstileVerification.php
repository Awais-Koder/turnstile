<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Turnstile\Turnstile\Facades\Turnstile;
class TurnstileVerification implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response = Turnstile::verify($value);
    }
}
