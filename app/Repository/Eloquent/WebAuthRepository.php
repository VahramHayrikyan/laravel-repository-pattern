<?php


namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\WebAuthRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class WebAuthRepository implements WebAuthRepositoryInterface
{
    public function login($request)
    {

        return [];
    }

    public function register($request): bool
    {
        try {
            $user = User::create([
                "username" => $request['username'],
                "email" => $request['email'],
                "password" => Hash::make($request['password']),
                "role" => 'user',
            ]);
            auth()->login($user);
            return true;
        } catch (\Exception $exception) {
            Log::error($exception);
            return false;
        }

    }
}
