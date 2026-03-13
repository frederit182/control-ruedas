<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
<<<<<<< HEAD

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
=======
use Laravel\Fortify\Features;

abstract class TestCase extends BaseTestCase
{
    protected function skipUnlessFortifyFeature(string $feature, ?string $message = null): void
    {
        if (! Features::enabled($feature)) {
            $this->markTestSkipped($message ?? "Fortify feature [{$feature}] is not enabled.");
        }
    }
>>>>>>> 8c04070 (Trabajo inicial: base Laravel y configuración)
}
