<?php

use JeffersonGoncalves\Filament\UsPrivacy\Pages\PersonalDataInventory;
use JeffersonGoncalves\Filament\UsPrivacy\Pages\StateLaws;
use JeffersonGoncalves\Filament\UsPrivacy\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\UsPrivacy\UsPrivacyPlugin;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Admin', 'email' => 'admin@example.com']));
});

it('lists every declared column grouped by model', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSuccessful()
        ->assertSee('Personal data inventory')
        ->assertSee('TestUser')
        ->assertSee('email')
        ->assertSee('Account login')
        ->assertSee('Targeted ads')
        ->assertSee('5 years')
        ->assertSee('Hash')
        ->assertSee('Sensitive')
        ->assertSee('Health');
});

it('explains how to register models when the inventory is empty', function () {
    config()->set('us-privacy.models', []);

    Livewire::test(PersonalDataInventory::class)
        ->assertSee('No models registered');
});

it('shows the rules of each state law', function () {
    Livewire::test(StateLaws::class)
        ->assertSuccessful()
        ->assertSee('State privacy laws')
        ->assertSee('Virginia Consumer Data Protection Act')
        ->assertSee('Colorado')
        ->assertSee('45 + 60')
        ->assertSee('Strictly necessary')
        ->assertSee('prohibited');
});

it('applies the fluent plugin options', function () {
    UsPrivacyPlugin::get()->navigationGroup('US')->navigationSort(3)->slug('inventory');

    expect(PersonalDataInventory::getNavigationGroup())->toBe('US')
        ->and(PersonalDataInventory::getNavigationSort())->toBe(3)
        ->and(PersonalDataInventory::getSlug())->toBe('inventory')
        ->and(StateLaws::getSlug())->toBe('inventory-states')
        ->and(StateLaws::getNavigationGroup())->toBe('US');
});
