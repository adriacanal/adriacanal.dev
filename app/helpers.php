<?php

use GNAHotelSolutions\ImageCacher\Adapters\Laravel\Facades\ImageCacher;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\HtmlString;

if (! function_exists('vite')) {
    /**
     * @throws JsonException
     */
    function vite(): HtmlString
    {
        $devServerIsRunning = false;

        if (app()->environment('local')) {
            try {
                Http::get('https://localhost:3000');
                $devServerIsRunning = true;
            } catch (Exception) {
            }
        }

        if ($devServerIsRunning) {
            return new HtmlString(<<<HTML
                <script type="module" src="https://localhost:3000/@vite/client"></script>
                <script type="module" src="https://localhost:3000/resources/js/app.js"></script>
            HTML);
        }

        $manifest = json_decode(file_get_contents(
            public_path('build/manifest.json')
        ), true, 512, JSON_THROW_ON_ERROR);

        return new HtmlString(<<<HTML
            <script type="module" src="/build/{$manifest['resources/js/app.js']['file']}"></script>
            <link rel="stylesheet" href="/build/{$manifest['resources/js/app.js']['css'][0]}">
        HTML);
    }
}

if (! function_exists('image')) {
    function image(string $name, int $width, int $height): string
    {
        return ImageCacher::crop($name, $width, $height)->getOriginalName();
    }
}
