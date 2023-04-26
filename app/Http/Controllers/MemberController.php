<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\School;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function create(): Response
    {

        return Inertia::render('Member/Create', [
            'schools' => School::all()
        ]);
    }

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

}
