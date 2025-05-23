<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;
use Symfony\Component\Process\Process;

class UpdateFeaturedPets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-featured-pets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update featured pets based on adoption prediction';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Use the correct path to Python and your script
        $pythonPath = 'C:\Users\jonas\AppData\Local\Programs\Python\Python313\python.exe';
        $scriptPath = base_path('scripts/ml/prediction_script.py');

        // Verify the script exists
        if (!file_exists($scriptPath)) {
            $this->error("Script not found at: " . $scriptPath);
            return 1;
        }

        $process = new Process([
            $pythonPath,
            $scriptPath
        ]);

        $process->setTimeout(300);  // Set timeout to 300 seconds (5 minutes)

        $process->run();

        if ($process->isSuccessful()) {
            $this->info('Featured pets updated successfully!');
            $this->info($process->getOutput());
        } else {
            $this->error('Error updating featured pets:');
            $this->error($process->getErrorOutput());
        }

        return $process->isSuccessful() ? 0 : 1;
    }

    /**
     * Define the command's schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        // Run the command monthly on the first day of the month at midnight
        $schedule->command('app:update-featured-pets')->everySecond();

        // Alternatively, you could specify a specific day and time like this:
        // $schedule->command('app:update-featured-pets')->monthlyOn(1, '00:00');
    }
}
