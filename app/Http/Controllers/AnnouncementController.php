<?php

namespace App\Http\Controllers;

//Services
use App\Services\AnnouncementService;

class AnnouncementController extends Controller {
    public function index() {
        return view('announcements');
    }
}
