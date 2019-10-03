<?php

namespace app\Http\Controllers\API;

use App\Models\Attendee;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AttendeesApiController extends ApiBaseController
{

    public function index()
    {
        return Attendee::all();
    }

    public function show($id)
    {
        return Attendee::findOrFail($id);
    }

    public function showQR($qrcode)
    {
        //return Attendee::where('private_reference_number', $qrcode)->findOrFail($qrcode);
        return Attendee::where('private_reference_number', $qrcode)->firstOrFail();
    }

    public function update($id)
    {
        $attendee = Attendee::find($id);
        $attendee->update([
            'has_arrived' => 1,
            'arrival_time' => Carbon::now()
        ]);
        return response()->JSON([
            'status' => 'success',
            'data' => $attendee->toArray()
        ]);
    }

    // /**
    //  * @param Request $request
    //  * @return mixed
    //  */
    // public function index(Request $request)
    // {
    //     return Attendee::scope($this->account_id)->paginate($request->get('per_page', 25));
    // }


    // /**
    //  * @param Request $request
    //  * @param $attendee_id
    //  * @return mixed
    //  */
    // public function show(Request $request, $attendee_id)
    // {
    //     if ($attendee_id) {
    //         return Attendee::scope($this->account_id)->find($attendee_id);
    //     }

    //     return response('Attendee Not Found', 404);
    // }

    // public function store(Request $request)
    // {
    // }

    // public function update(Request $request)
    // {
    // }

    // public function destroy(Request $request)
    // {
    // }


}