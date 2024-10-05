<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

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
        $sitemap = SitemapGenerator::create('https://nighthawk-routerlogin.com/')
        ->hasCrawled(function (Url $url) {
            return $url; 
        })
        ->getSitemap();

    // Add static pages to the sitemap
    $sitemap->add('/vpn-shield');
    $sitemap->add('/ttbantivirus');
    $sitemap->add('/totel-internet-security');
    $sitemap->add('/commercial');

    // Write the sitemap to the file once after adding all URLs
    $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
