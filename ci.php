<?php
// run phpmetrics to generate report
exec('"./vendor/bin/phpmetrics" . --report-html="./web/report" --exclude="vendor","web","runtime","migrations"');

function removeDirectory($path) {
    $files = glob($path . '/*');
    foreach ($files as $file) {
        is_dir($file) ? removeDirectory($file) : unlink($file);
    }
    rmdir($path);
    return;
}

// remove cache directory (because of documentation)
removeDirectory('runtime/cache');

exec('composer install --no-interaction');
exec('php yii migrate --interactive=0');