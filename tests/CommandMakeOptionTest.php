<?php

namespace BinaryCabin\Options\Tests;

use Orchestra\Testbench\TestCase;
use Illuminate\Support\Facades\Artisan;

class CommandMakeOptionTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [\BinaryCabin\Options\Providers\OptionServiceProvider::class];
    }

    public function test_make_option_creates_option_file()
    {
        $generatedFileLocation = app_path().'/Options/Countries.php';
        if (file_exists($generatedFileLocation)) {
            unlink($generatedFileLocation);
        }
        $this->withoutMockingConsoleOutput();
        $this->artisan('make:option Countries');
        $output = Artisan::output();
        $this->assertContains('Done!', $output);
        $this->assertTrue(file_exists($generatedFileLocation));
        unlink($generatedFileLocation);
    }
}
