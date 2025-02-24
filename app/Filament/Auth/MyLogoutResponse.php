<?php

namespace App\Filament\Auth;

use Filament\Http\Responses\Auth\Contracts\LogoutResponse as Responsable;

class MyLogoutResponse implements Responsable
{
    public function toResponse($request)
    {
        return redirect()->route('welcome');
    }
}