<?php

// app/Http/Controllers/NotificationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class NotificationController extends Controller
{
    public function getNotifications()
    {
        $subs = Subscriber::where('is_seen', false)
                          ->orderBy('created_at', 'desc')
                          ->take(5)
                          ->get();

        return response()->json([
            'notifications' => $subs->map(function ($s) {
                return [
                    'name' => $s->email,
                    'message' => 'New user subscribed',
                    'time' => $s->created_at->diffForHumans(),
                ];
            }),
            'has_unseen' => $subs->count() > 0
        ]);
    }

    public function markNotificationsSeen()
    {
        Subscriber::where('is_seen', false)->update(['is_seen' => true]);
        return response()->json(['status' => 'seen']);
    }
    


}

