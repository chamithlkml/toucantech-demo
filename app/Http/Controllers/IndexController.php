<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\School;
use Inertia\Inertia;
use Inertia\Response;

class IndexController extends Controller
{
    /**
     * Loads the home page
     *
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Index/Index', []);
    }
}
