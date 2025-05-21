<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class CustomWelcomeWidget extends Widget
{
    protected static string $view = 'filament.widgets.custom-welcome-widget';

    protected int | string | array $columnSpan = 'full';
}
