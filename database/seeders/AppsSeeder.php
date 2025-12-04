<?php
// database/seeders/AppsSeeder.php (unchanged - 3 samples)

namespace Database\Seeders;

use App\Models\App;
use Illuminate\Database\Seeder;

class AppsSeeder extends Seeder
{
    public function run(): void
    {
        App::create(['app_name' => 'Swits_Bytes', 'api_key' => 'sweetshopmobile_abc123xyz']);
        
    }
}
