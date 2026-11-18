<x-filament-panels::page>
    @php
        $label = \JeffersonGoncalves\Filament\UsPrivacy\Pages\PersonalDataInventory::label(...);
    @endphp

    @forelse ($this->getInventory() as $model => $rows)
        <x-filament::section :heading="class_basename($model)" :description="$rows[0]['table']">
            <div style="overflow-x: auto;">
                <table style="width: 100%; font-size: 0.875rem; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="opacity: 0.7;">
                            @foreach (['column', 'category', 'purpose', 'processing', 'retention', 'anonymize'] as $heading)
                                <th style="padding: 0.5rem; font-weight: 600;">{{ __("filament-us-privacy::filament-us-privacy.fields.{$heading}") }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr style="border-top: 1px solid rgba(127, 127, 127, 0.2);">
                                <td style="padding: 0.5rem; font-family: monospace;">{{ $row['column'] }}</td>
                                <td style="padding: 0.5rem;">
                                    <x-filament::badge :color="$row['category'] !== 'personal' ? 'danger' : 'gray'" style="display: inline-flex;">
                                        {{ $label('category', $row['category']) }}
                                    </x-filament::badge>
                                    @if ($row['sensitive_type'])
                                        <div style="opacity: 0.7;">{{ $label('sensitive_type', $row['sensitive_type']) }}</div>
                                    @endif
                                </td>
                                <td style="padding: 0.5rem;">{{ $row['purpose'] ?? '-' }}</td>
                                <td style="padding: 0.5rem;">
                                    @foreach (['sold', 'targeted_advertising', 'profiling'] as $flag)
                                        @if ($row[$flag])
                                            <x-filament::badge color="warning" style="display: inline-flex;">{{ __("filament-us-privacy::filament-us-privacy.{$flag}") }}</x-filament::badge>
                                        @endif
                                    @endforeach
                                    @if (! $row['sold'] && ! $row['targeted_advertising'] && ! $row['profiling'])
                                        -
                                    @endif
                                </td>
                                <td style="padding: 0.5rem;">{{ $row['retention'] ?? '-' }}</td>
                                <td style="padding: 0.5rem;">{{ $label('anonymize', $row['anonymize']) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-filament::section>
    @empty
        <x-filament::section>
            {{ __('filament-us-privacy::filament-us-privacy.empty') }}
        </x-filament::section>
    @endforelse
</x-filament-panels::page>
