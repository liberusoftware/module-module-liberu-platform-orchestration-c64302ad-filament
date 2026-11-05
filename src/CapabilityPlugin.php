<?php

namespace Liberu\Presentation\Capability440ef19cd2e7;

use Filament\Contracts\Plugin;
use Filament\Panel;

/** Explicit panel extension point; no capabilities are implemented by the skeleton. */
final class CapabilityPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'module-module-liberu-platform-orchestration-c64302ad-filament';
    }

    public function register(Panel $panel): void
    {
        // Register reviewed capability resources, pages or widgets here.
    }

    public function boot(Panel $panel): void
    {
        // Add lifecycle behavior only when its domain and authorization contracts are reviewed.
    }
}
