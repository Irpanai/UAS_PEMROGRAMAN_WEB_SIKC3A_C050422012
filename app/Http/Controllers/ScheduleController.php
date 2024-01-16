<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
        public function index(Request $request)
    {
        $schedules = DB::table('schedules')
            ->when($request->input('subject_id'), function ($query, $subject_id) {
                return $query->where('subject_id', 'like', '%' . $subject_id . '%');
            })
            ->select('id', 'subject_id', 'hari', 'jam_mulai', 'jam_selesai', 'ruangan')
            ->orderBy('id', 'asc')
            ->paginate(15);
            return view('pages.users.schedule.index', compact('schedules'));

    }

    public function create()
    {
        return view('pages.users.schedule.create');
    }

    public function store(StoreScheduleRequest $request)
    {

        Schedule::create([
            'subject_id' => $request['subject_id'],
            'hari' => $request['hari'],
            'jam_mulai' => $request['jam_mulai'],
            'jam_selesai' => $request['jam_selesai'],
            'ruangan' => $request['ruangan'],
        ]);

        return redirect(route('schedule.index'))->with('success', 'Create New Schedule Successfully');
    }

    public function edit(Schedule $schedule)
    {
        return view('pages.users.schedule.edit')->with('schedule', $schedule);
    }

    public function show(string $id)
    {
        //
    }

    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $validate = $request->validated();
        $schedule->update($validate);
        return redirect()->route('schedule.index')->with('success', 'Edit Schedule Successfully');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect(route('schedule.index'))->with('success', 'Delete Schedule successfully');
    }
}
