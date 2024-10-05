<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Manually create sitemap
        $sitemap = Sitemap::create();

        // Static pages
        $sitemap->add('/');
        $sitemap->add('/vpn-shield');
        $sitemap->add('/ttbantivirus');
        $sitemap->add('/totel-internet-security');
        $sitemap->add('/commercial');
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
