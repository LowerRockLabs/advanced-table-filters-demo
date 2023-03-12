<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Livewire Tables Demo');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/tailwind')
                    ->assertSee('Tailwind 2 Implementation');
        });
    }
}
