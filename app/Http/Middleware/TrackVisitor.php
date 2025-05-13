<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //handle agar tidak mencatat halaman admin saja jika mempunyai role
        // if ((!Auth::check() || Auth::user()->role !== 'admin') && !$request->is('admin/*')) {
        //     Visitor::create([
        //         'ip_address' => $request->ip(),
        //         'user_agent' => $request->userAgent(),
        //         'url' => $request->fullUrl()
        //     ]);
        // }


        // Jangan simpan data pengunjung jika:
        // - user sudah login (anggap sebagai admin)
        // - atau mengakses URL admin
        if (!Auth::check() && !$request->is('admin/*')) {
            $ip = $request->ip();
            $today = Carbon::today();

            $alreadyVisited = Visitor::where('ip_address', $ip)
                ->whereDate('created_at', $today)
                ->exists();

            if (!$alreadyVisited) {
                Visitor::create([
                    'ip_address' => $ip,
                    'user_agent' => $request->userAgent(),
                    'url' => $request->fullUrl()
                ]);
            }
        }

        return $next($request);
    }
}
