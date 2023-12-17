<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $users = User::query()
            ->select('id', 'name', 'email')
            ->paginate(3);

        return view('home', compact('users'));
    }
}
