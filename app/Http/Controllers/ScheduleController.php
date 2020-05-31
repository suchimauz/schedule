<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Group;
use Illuminate\Http\Exception\HttpResponseException;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $group_id)
    {
        Group::findOrFail($group_id);
        $schedules = Schedule::where('group_id', $group_id);

        $type = $request->get('type');
        if(!$type) {
            return response('Please send type', 500);
        }

        return [
            'mon' => $schedules->where('type', $type)->where('week', 'mon')->first(),
            'tue' => $schedules->where('type', $type)->where('week', 'tue')->first(),
            'wed' => $schedules->where('type', $type)->where('week', 'wed')->first(),
            'thu' => $schedules->where('type', $type)->where('week', 'thu')->first(),
            'fri' => $schedules->where('type', $type)->where('week', 'fri')->first(),
            'sat' => $schedules->where('type', $type)->where('week', 'sat')->first(),
            'sun' => $schedules->where('type', $type)->where('week', 'sun')->first()
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $group_id)
    {
        $schedule = Schedule::updateOrCreate(
            [
                'week' => $request->week,
                'group_id' => $group_id,
                'type' => $request->type
            ], 
            [
                'group_id' => $group_id,
                'week' => $request->week,
                'type' => $request->type,
                'first_lesson_name' => $request->first_lesson_name,
                'first_lesson_teacher' => $request->first_lesson_teacher,
                'second_lesson_name' => $request->second_lesson_name,
                'second_lesson_teacher' => $request->second_lesson_teacher,
                'third_lesson_name' => $request->third_lesson_name,
                'third_lesson_teacher' => $request->third_lesson_teacher,
                'fouth_lesson_name' => $request->fouth_lesson_name,
                'fouth_lesson_teacher' => $request->fouth_lesson_teacher,
                'fifth_lesson_name' => $request->fifth_lesson_name,
                'fifth_lesson_teacher' => $request->fifth_lesson_teacher,
                'sixth_lesson_name' => $request->sixth_lesson_name,
                'sixth_lesson_teacher' => $request->sixth_lesson_teacher,
                'seventh_lesson_name' => $request->seventh_lesson_name,
                'seventh_lesson_teacher' => $request->seventh_lesson_teacher,
                'eight_lesson_name' => $request->eight_lesson_name,
                'eight_lesson_teacher' => $request->eight_lesson_teacher
            ]
        );

        return $schedule;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $group_id)
    {
        //
    }

    public function update(Request $request, $id, $group_id)
    {
        //
    }

    public function destroy($id, $group_id)
    {
        //
    }
}
