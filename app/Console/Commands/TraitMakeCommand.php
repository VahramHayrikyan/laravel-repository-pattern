<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class TraitMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = ' Create a new Trait';

    /**
     * @var string
     */
    protected $type = 'Trait';
    /**
     * Create a new command instance.
     *
     * @return void
     */

    /**
     * @return string
     */
    protected function getStub(): string
    {
        // TODO: Implement getStub() method.
        return __DIR__ . '/stubs/traits.stub';
    }

    /**
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Traits';
    }
}
