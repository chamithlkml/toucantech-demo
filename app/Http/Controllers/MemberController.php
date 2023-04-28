<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\School;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Cache;

class MemberController extends Controller
{
    /**
     * Loads the create member page
     *
     * @return Response
     */
    public function create(): Response
    {

        return Inertia::render('Member/Create', [
            'schools' => Cache::get('schools')
        ]);
    }

    /**
     * Validates inputs for creates a member. Then redirects to home page with a flash message
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Member::create(
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|unique:members|email',
                'school_id' => 'required'
            ])
        );

        return redirect('/')
        ->with('message', 'Member is added');
    }

    /**
     * Loads the View member page
     *
     * @return Response
     */
    public function show(): Response
    {
        return Inertia::render('Member/Show', [
            'schools' => Cache::get('schools'),
            'members' => []
        ]);
    }

}
