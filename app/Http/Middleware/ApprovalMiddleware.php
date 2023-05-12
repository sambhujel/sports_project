<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class ApprovalMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            $user = auth()->user();
        
            if ($user->id === 1) {
                // Allow user with ID 1 to login without admin approval
            } else if ($user->id === 0) {
                // Only allow user with ID 0 to login with admin approval
                if (!$user->approved) {
                    auth()->logout();
                    return redirect()->route('login')->with('message', trans('global.yourAccountNeedsAdminApproval'));
                }
            } else {
                // For all other users, require admin approval
                if (!$user->approved || !$user->admin_approved) {
                    auth()->logout();
                    return redirect()->route('login')->with('message', trans('global.yourAccountNeedsAdminApproval'));
                }
            }
        }
        

        return $next($request);
    }
}