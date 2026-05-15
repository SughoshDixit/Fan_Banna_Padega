<?php

declare(strict_types=1);

if (!function_exists('fbp_asset_url')) {
    /**
     * Root-relative URL for files in the web root (correct on Render and local Apache).
     */
    function fbp_asset_url(string $path): string
    {
        return '/' . ltrim($path, '/');
    }
}

if (!function_exists('fbp_img')) {
    /**
     * URL for images stored under /img (same paths as in templates: img/lfc.jpg, etc.).
     * Width/height are accepted for call-site compatibility but not used — static files keep intrinsic size.
     */
    function fbp_img(string $filename, int $width = 1200, int $height = 600): string
    {
        unset($width, $height);
        $normalized = str_replace('\\', '/', $filename);
        $base = basename($normalized);
        if ($base === '') {
            return fbp_asset_url('img/');
        }

        return fbp_asset_url('img/' . $base);
    }
}

if (!function_exists('fbp_h')) {
    function fbp_h(?string $s): string
    {
        return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
