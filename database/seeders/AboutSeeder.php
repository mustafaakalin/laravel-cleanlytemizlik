<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\About::create([
            'title' => 'Cleanly Temizlik Hakkında',
            'description' => 'Cleanly Temizlik olarak, profesyonel temizlik hizmeti anlayışımızla evinizin ve iş yerinizin her köşesini pırıl pırıl yapıyoruz. Şimdilik sadece Antalya Merkezde hizmet veriyoruz.',
        ]);
    }
}
