<?php

namespace App\Http\Controllers\Web\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebAuthRequest;
use App\Models\User;
use App\Repository\Eloquent\WebAuthRepository;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    private $webAuthRepository;

    public function __construct(WebAuthRepository $webAuthRepository)
    {
        $this->webAuthRepository = $webAuthRepository;
    }

    public function loginIndex()
    {
        auth()->login(User::first());
        return view('site.auth.login');
    }
    public function login(WebAuthRequest $request)
    {
        $data = $this->webAuthRepository->login($request->validated());

    }
    public function registerIndex()
    {
        return view('site.auth.register');

    }
    public function register(WebAuthRequest $request): RedirectResponse
    {
        try {
            $this->webAuthRepository->register($request->validated());
            return redirect()->to('/');
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back()->withErrors($request)->withInput();
        }

    }
    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
