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
     * Image URL for paths like img/foo.jpg. The repo does not ship img/; use Wikimedia + Picsum
     * so deploys show real images without committing binaries.
     */
    function fbp_img(string $filename, int $width = 1200, int $height = 600): string
    {
        $base = basename($filename);
        static $special = [
            'football.jpg' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Football.svg/200px-Football.svg.png',
        ];
        if (isset($special[$base])) {
            return $special[$base];
        }
        $stem = pathinfo($filename, PATHINFO_FILENAME);
        $seed = preg_replace('/[^a-zA-Z0-9]/', '', $stem) ?: 'pic';
        return sprintf(
            'https://picsum.photos/seed/fbp%s/%d/%d',
            rawurlencode($seed),
            max(1, $width),
            max(1, $height)
        );
    }
}

if (!function_exists('fbp_h')) {
    function fbp_h(?string $s): string
    {
        return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
