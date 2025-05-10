<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SanitizeInputs
{
    public function handle(Request $request, Closure $next)
    {
        $input = $request->all();

        array_walk_recursive($input, function (&$value) {
            if (is_string($value)) {
                // Remove caracteres especiais e scripts
                $value = strip_tags($value);
                // Remove espaços extras
                $value = trim($value);
                // Converte caracteres especiais em entidades HTML
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }
        });

        $request->merge($input);

        return $next($request);
    }
} 