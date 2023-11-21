<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Language;
use Illuminate\Support\Facades\Artisan;

class AddLanguagesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:languages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add languages to the database based on filament-language-switch configuration';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $locales = config('filament-language-switch.locales');

        foreach ($locales as $code => $data) {
            Language::updateOrCreate(['code' => $code], [
                'name' => $data['name'],
                'flag_code' => $data['flag_code'] ?? null,
                'native' => $data['native'] ?? '',
            ]);
        }

        $this->info('Languages added successfully.');

        // Run migration to update the database with the new languages
        Artisan::call('migrate');

        return 0;
    }
}
