<?php
// In app/Console/Kernel.php add to $commands:
\App\Console\Commands\ProcessNotificationOutbox::class,

// And schedule it:
$schedule->command('notifications:process-outbox --limit=50')->everyMinute();
