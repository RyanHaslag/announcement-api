<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder {
    public function run(): void {
        $announcements = json_decode(file_get_contents('./database/faker/announcements.json'), true);

        foreach ($announcements as $announcement) {
            Announcement::create([
                'title' => $announcement['title'],
                'author' => $announcement['author'],
                'date' => $announcement['date'],
                'body' => $announcement['body'],
            ]);
        }
    }
}

