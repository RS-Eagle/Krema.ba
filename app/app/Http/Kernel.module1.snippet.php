<?php
// Add to app/Http/Kernel.php -> $routeMiddleware

'resolveSalon' => \App\Http\Middleware\ResolveSalon::class,
'requireRole' => \App\Http\Middleware\RequireRole::class,
'requireSuperAdmin' => \App\Http\Middleware\RequireSuperAdmin::class,
