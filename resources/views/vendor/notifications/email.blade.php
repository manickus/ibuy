@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# Witaj
@endif
@endif

{{-- Intro Lines --}}
Aby zrestertować swoje hasło naciśnij przycisk poniżej.

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset
Jeśli to nie Ty wysłałeś proźbę o odzyskanie hasła, żadna akcja nie jest wymagana
{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
Regards,<br>{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
    Jeśli masz problem z restartowaniem hasła, skontaktuj się z naszym biurem.
@endcomponent
@endisset
@endcomponent
