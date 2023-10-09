<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

//Services
use App\Services\AnnouncementService;

class AnnouncementController extends Controller
{
    protected AnnouncementService $announcementService;

    /**
     * Create a new controller instance.
     *
     * @param AnnouncementService $announcementService
     */
    public function __construct(AnnouncementService $announcementService)
    {
        $this->announcementService = $announcementService;
    }

    /**
     * Load the announcements based on
     * the provided params for page and page sizing
     *
     */
    public function load(Request $request): JsonResponse {
        //Get per_page parameter from the request, default to 4
        $perPage = $request->input('per_page', 4);
        //Get page parameter from the request, default to 1
        $page = $request->input('page', 1);

        return $this->announcementService->load($perPage, $page);
    }
}
