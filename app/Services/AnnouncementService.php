<?php

namespace App\Services;

use App\Models\Announcement;
use Illuminate\Http\JsonResponse;

class AnnouncementService {

    /**
     * Get all announcements
     *
     * @param $perPage
     * @param $page
     * @return JsonResponse
     */
    public function load($perPage, $page): JsonResponse {
        $announcements = Announcement::paginate($perPage, ['*'], 'page', $page);
        //Include the announcement items and the total for pagination controls
        return response()->json([
            'announcements' => $announcements->items(),
            'total' => $announcements->total(),
        ]);
    }
}
