<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index()
    {
        return Group::with('plan')->get();
    }

    public function store(Request $request)
    {
        return Group::create($request->all());
    }

    public function show(Group $group)
    {
        return $group;
    }

    public function update(Request $request, Group $group)
    {
        $group->update(request()->all());
        return $group;
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return response()->json(['result' => 'ok']);

    }
}
