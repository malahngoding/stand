<?php

namespace App\Http\Controllers;

use App\Models\EventTrackerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //
    public function insert(Request $request)
    {
        $user_id = $request->user_id;
        $event_type = $request->event_type;
        $event_name = $request->event_name;
        $event_value = $request->event_value;
        $created_at = $request->created_at;
        $updated_at = $request->updated_at;

        if ($user_id === null && $event_name === null && $event_type === null && $event_value === null) {
            return response()->json(
                [
                    "message" => ["Maaf data user id", "Maaf data event name", "Maaf data event type", "Maaf data event value kosong"],
                    "success" => false
                ],
            );
        } elseif ($event_name === null && $event_type === null && $event_value === null) {
            return response()->json(
                [
                    "message" => ["Maaf data event name", "Maaf data event type", "Maaf data event value kosong"],
                    "success" => false
                ],
            );
        } elseif ($user_id === null && $event_name === null && $event_type === null) {
            return response()->json(
                [
                    "message" => ["Maaf data user id", "Maaf data event name", "Maaf data event type"],
                    "success" => false
                ],
            );
        } elseif ($user_id === null && $event_type === null && $event_value === null) {
            return response()->json(
                [
                    "message" => ["Maaf data user id", "Maaf data event type", "Maaf data event value kosong"],
                    "success" => false
                ],
            );
        } elseif ($user_id === null && $event_name === null && $event_value === null) {
            return response()->json(
                [
                    "message" => ["Maaf data user id", "Maaf data event name", "Maaf data event value kosong"],
                    "success" => false
                ],
            );
        } elseif ($event_type === null && $event_value === null) {
            return response()->json(
                [
                    "message" => ["Maaf data event type", "Maaf data event value kosong"],
                    "success" => false
                ],
            );
        } elseif ($user_id === null && $event_name === null) {
            return response()->json(
                [
                    "message" => ["Maaf data user id", "Maaf data event name"],
                    "success" => false
                ],
            );
        } elseif ($user_id === null && $event_value === null) {
            return response()->json(
                [
                    "message" => ["Maaf data user id", "Maaf data event value kosong"],
                    "success" => false
                ],
            );
        } elseif ($user_id === null && $event_type === null) {
            return response()->json(
                [
                    "message" => ["Maaf data user id", "Maaf data event type"],
                    "success" => false
                ],
            );
        } elseif ($event_name === null && $event_type === null) {
            return response()->json(
                [
                    "message" => ["Maaf data event name", "Maaf data event type"],
                    "success" => false
                ],
            );
        } elseif ($event_name === null && $event_value === null) {
            return response()->json(
                [
                    "message" => ["Maaf data event name", "Maaf data event value kosong"],
                    "success" => false
                ],
            );
        } elseif ($user_id === null) {
            return response()->json(
                [
                    "message" => ["Maaf data user id"],
                    "success" => false
                ],
            );
        } elseif ($event_name === null) {
            return response()->json(
                [
                    "message" => ["Maaf data event name"],
                    "success" => false
                ],
            );
        } elseif ($event_type === null) {
            return response()->json(
                [
                    "message" => ["Maaf data event type"],
                    "success" => false
                ],
            );
        } elseif ($event_value === null) {
            return response()->json(
                [
                    "message" => ["Maaf data event value kosong"],
                    "success" => false
                ],
            );
        }


        $insert_event = EventTrackerModel::insert($user_id, $event_name, $event_type, $event_value, $created_at, $updated_at);
        return response()->json(
            [
                "messages" => ["Data berhasil"],
                "succes" => $insert_event,

            ]
        );
    }
}
