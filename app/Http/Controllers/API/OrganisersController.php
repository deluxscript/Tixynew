<?php

namespace app\Http\Controllers\API;

use App\Models\Organiser;
use Illuminate\Http\Request;

class OrganisersApiController extends ApiBaseController
{

    public function index()
    {
        return Organiser::all();
    }

    public function show($id)
    {
        return Organiser::findOrFail($id);
    }
}