<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/site.php';
$fbp_page_title = $fbp_page_title ?? 'Hi there Gaffer!!';

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo fbp_h($fbp_page_title); ?></title>
<?php include __DIR__ . '/includes/head-assets.php'; ?>
</head>
