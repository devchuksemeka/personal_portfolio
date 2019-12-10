<?php

namespace App\Http\Middleware;

use App\Exceptions\Auth\JwtException;
use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws JwtException
     */
    public function handle($request, Closure $next)
    {
        try {
//            $request->headers->add(["Authorization"=>"Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hbnNjaW1zLnRlc3RcL2FwaVwvdjFcL0NvbW1vblwvYXV0aCIsImlhdCI6MTU3MTE0OTQ0OCwiZXhwIjoxNTcxMjM1ODQ4LCJuYmYiOjE1NzExNDk0NDgsImp0aSI6Ilkxekczb3FXZ25HelJVS3giLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.EW6NL5ImWhJiDX0mEme7bSCydqKcRZeuMzLRbu8drnM"]);
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) throw new JwtException("Token is Invalid");
            else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) throw new JwtException("Token is Expired");
            else throw new JwtException("Authorization Token not found");
        }
        return $next($request);
    }
}
