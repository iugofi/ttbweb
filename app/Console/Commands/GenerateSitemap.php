<?php

namespace App\Console\Commands;

use App\Models\News;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:sitemap:generate';

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
        $sitemap = Sitemap::create();

        // Define the base URL
        $baseUrl = 'https://nighthawk-routerlogin.com';

        // Static pages
        $sitemap->add($baseUrl . '/');
        $sitemap->add($baseUrl . '/vpn-shield');
        $sitemap->add($baseUrl . '/ttbantivirus');
        $sitemap->add($baseUrl . '/totel-internet-security');
        $sitemap->add($baseUrl . '/commercial');
        $sitemap->add($baseUrl . '/news');
        $sitemap->add($baseUrl . '/blog');

        $news = News::all();
        foreach ($news as $newss) {
            $sitemap->add($baseUrl . "/{$newss->slug}");
        }
        // Write sitemap to file
        $sitemap->writeToFile(base_path('sitemap.xml'));
    }
}
