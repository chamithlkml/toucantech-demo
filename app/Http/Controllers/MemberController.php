<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\School;

class MemberController extends Controller
{
    public function create(): Response
    {

        return Inertia::render('Member/Create', [
            'schools' => School::all()
        ]);
    }
}
