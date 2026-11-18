<x-filament-panels::page>
    @php
        $t = fn (string $key): string => __("filament-us-privacy::filament-us-privacy.states.{$key}");
    @endphp

    <x-filament::section :description="$t('description')">
        <div style="overflow-x: auto;">
            <table style="width: 100%; font-size: 0.875rem; border-collapse: collapse; text-align: left;">
                <thead>
                    <tr style="opacity: 0.7;">
                        @foreach (['state', 'effective', 'response', 'appeal', 'sensitive', 'universal_opt_out', 'assessments', 'minors'] as $heading)
                            <th style="padding: 0.5rem; font-weight: 600;">{{ $t("columns.{$heading}") }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->getStates() as $state)
                        <tr style="border-top: 1px solid rgba(127, 127, 127, 0.2);">
                            <td style="padding: 0.5rem;">
                                <strong>{{ $state->name }}</strong>
                                <div style="opacity: 0.7;">{{ $state->law }}</div>
                            </td>
                            <td style="padding: 0.5rem;">
                                {{ $state->effective->toDateString() }}
                                @unless ($state->inForce())
                                    <x-filament::badge color="gray" style="display: inline-flex;">{{ $t('not_yet') }}</x-filament::badge>
                                @endunless
                            </td>
                            <td style="padding: 0.5rem;">{{ $state->responseDays }} + {{ $state->extensionDays }}</td>
                            <td style="padding: 0.5rem;">{{ $state->hasAppeals() ? $state->appealDays.($state->appealExtensionDays ? ' + '.$state->appealExtensionDays : '') : '-' }}</td>
                            <td style="padding: 0.5rem;">
                                <x-filament::badge :color="$state->sensitive === 'opt_out' ? 'gray' : 'warning'" style="display: inline-flex;">{{ $t("sensitive.{$state->sensitive}") }}</x-filament::badge>
                            </td>
                            <td style="padding: 0.5rem;">{{ $state->universalOptOut?->toDateString() ?? '-' }}</td>
                            <td style="padding: 0.5rem;">{{ $state->assessments ? $t('yes') : $t('no') }}</td>
                            <td style="padding: 0.5rem;">{{ $t('under') }} {{ $state->minorAge }}{{ $state->minorRule === 'prohibited' ? ' ('.$t('prohibited').')' : '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-filament::section>
</x-filament-panels::page>
