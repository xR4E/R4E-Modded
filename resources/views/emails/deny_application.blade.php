@component('mail::message')
# Your {{ config('other.title') }} Application
Your application has been denied. Better luck next time.
{{ $denied_message }}
Regards,
{{ config('other.title') }}
@endcomponent
