<?php
// In app/Console/Kernel.php
protected function schedule(\Illuminate\Console\Scheduling\Schedule $schedule)
{
    // ...
    $schedule->command('krema:webhooks:process --limit=100')->everyMinute()->withoutOverlapping();
}
