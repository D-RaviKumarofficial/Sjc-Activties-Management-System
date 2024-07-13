<?php
namespace App\Http\Controllers;

use App\Models\W2w_Event_type;
use App\Models\W2w_Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class W2wEventController extends Controller
{
    public function index()
    {
        $events = W2w_Event::all();
        return view('admin.EventManagement.event.index', compact('events'));
    }

    public function create()
    {
        $eventTypes = W2w_Event_type::all();
        return view('admin.EventManagement.event.create', compact('eventTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_type_id' => 'required',
            'event_type' => 'required',
            'short_description' => 'required',
            'event_date' => 'required|date',
            'event_start_time' => 'required',
            'event_end_time' => 'required',
            'event_location' => 'required',
        ]);

        W2w_Event::create($request->all());
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function edit(W2w_Event $event)
    {
        $eventTypes = W2w_Event_type::all();
        return view('admin.EventManagement.event.create', compact('event', 'eventTypes'));
    }

    public function update(Request $request, W2w_Event $event)
    {
        $request->validate([
            'event_type_id' => 'required',
            'event_type' => 'required',
            'short_description' => 'required',
            'event_date' => 'required|date',
            'event_start_time' => 'required',
            'event_end_time' => 'required',
            'event_location' => 'required',
        ]);

        $event->update($request->all());
        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(W2w_Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
