<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index(Request $request)
    {
        return Plan::all();
    }

    public function store(Request $request)
    {
        return Plan::create($request->all());
    }

    public function show(Plan $plan)
    {
        return $plan;
    }

    public function update(Plan $plan)
    {
        $plan->update(request()->all());
        return $plan;
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return response()->json(['result' => 'ok']);
    }

}
