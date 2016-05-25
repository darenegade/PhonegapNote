<?php
header('Content-Type: text/cache-manifest');
$filesToCache = array(
    './index.html', 
    './js/todo7.js', 
    './css/todo7.css', 
    './img/bg.jpg', 
    './js/framework7.min.js', 
    './css/framework7.min.css'
);
?>
CACHE MANIFEST

CACHE:
<?php
// Print files that we need to cache and store hash data
$hashes = '';
foreach($filesToCache as $file) {
    echo $file."\n";
    $hashes.=md5_file($file);
};
?>

NETWORK:
*

# Hash Version: <?=md5($hashes)?>