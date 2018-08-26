<?php

namespace Itainathaniel\AdminNotes\Http\Middleware;

use Itainathaniel\AdminNotes\AdminNotes;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(AdminNotes::class)->authorize($request) ? $next($request) : abort(403);
    }
}
