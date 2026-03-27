<?php

require __DIR__ . '/vendor/autoload.php';

// Load compiled Phel entry file (adjust if needed)
require __DIR__ . '/out/index.php';

// Run your Phel function
echo \Phel\Phel::run('hello', 'page');