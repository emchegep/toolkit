<x-mail::message>
# Hello {{ $user }}

Job created successfully!.

<x-mail::button :url="''" color="green">
View Job
</x-mail::button>

Regards,<br>
{{ config('app.name') }}
</x-mail::message>
