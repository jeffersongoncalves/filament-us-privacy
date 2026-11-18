<?php

namespace JeffersonGoncalves\Filament\UsPrivacy\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Authenticatable;
use JeffersonGoncalves\UsPrivacy\Attributes\PersonalData;
use JeffersonGoncalves\UsPrivacy\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\UsPrivacy\Contracts\HasPersonalData;
use JeffersonGoncalves\UsPrivacy\Enums\AnonymizeStrategy;
use JeffersonGoncalves\UsPrivacy\Enums\SensitiveType;

#[PersonalData('email', purpose: 'Account login', targetedAdvertising: true, retention: '5 years', anonymize: AnonymizeStrategy::Hash)]
#[PersonalData('health_notes', sensitiveType: SensitiveType::Health, purpose: 'Accessibility support')]
class TestUser extends Authenticatable implements HasPersonalData
{
    use InteractsWithPersonalData;

    protected $table = 'users';

    protected $guarded = [];

    public $timestamps = false;
}
