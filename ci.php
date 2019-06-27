<?php

function removeDirectoryContent($path) {
    $files = glob($path . '/*');
    foreach ($files as $file) {
        is_dir($file) ? removeDirectoryContent($file) : unlink($file);
    }
}

// remove cache directory (because of documentation)
if(file_exists('runtime/cache')) {
    removeDirectoryContent('runtime/cache');
}

exec('php /usr/local/bin/composer install --verbose --no-interaction');
exec('php yii migrate --interactive=0');

// run phpmetrics to generate report
exec('"./vendor/bin/phpmetrics" . --report-html="./web/report" --exclude="vendor","web","runtime","migrations"');