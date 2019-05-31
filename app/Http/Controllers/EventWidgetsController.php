<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

use App\Models\User;
use Auth;

/*
  Attendize.com   - Event Management & Ticketing
 */

class EventWidgetsController extends MyBaseController
{

    /**
     * Show the event widgets page
     *
     * @param Request $request
     * @param $event_id
     * @return mixed
     */
    public function showEventWidgets(Request $request, $event_id)
    {
        $event = Event::scope()->findOrFail($event_id);
        $logged_in = Auth::user();

        $data = [
            'event' => $event,
            'user'       => $logged_in
        ];

        return view('ManageEvent.Widgets', $data);
    }


}
