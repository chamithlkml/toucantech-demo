<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Returns an array of members owned by a given school
     *
     * @param string $id
     * @return array
     */
    public function get(string $id): array
    {
        $school = School::find($id);
        
        $members = [];

        if($school){
            $members = $school->members->toArray();
        }

        return $members;
    }
}
