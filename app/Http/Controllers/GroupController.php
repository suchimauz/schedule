<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function index()
    {
        return Group::get();
    }

    public function store(Request $request)
    {
        $group = Group::create([
            'name' => $request->name
        ]);

        return $group;
    }

    public function show($id)
    {
        $group = Group::findOrFail($id);

        return $group;
    }

    public function update(Request $request, $id)
    {
        $group = Group::findOrFail($id);

        $group->name = $request->name;
        $group->save();

        return $group;
    }

    public function destroy($id)
    {
        $group = Group::destroy($id);

        return $group;
    }
}
