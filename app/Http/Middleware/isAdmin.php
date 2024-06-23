<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function authorize()
    {
        return true;
    }
    public function handle(Request $request, Closure $next): Response
    {   
        if(auth()->user()->isAdmin){
            return $next($request);       
        }else{
            dd("it's not working");
        }
       
    }
}
