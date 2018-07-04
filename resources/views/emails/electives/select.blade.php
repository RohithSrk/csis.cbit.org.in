@component('mail::message')
# Hi, {{ $name }}

Please select your elective subject for next semester regarding {{ $electiveName }}.

@component('mail::button', ['url' => $actionUrl])
{{ $actionText }}
@endcomponent

Please find the next year elective syllabus in the attachment.

Regards,<br>
{{ config('app.name') }}

@component('mail::subcopy')
    @lang(
        "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
        'into your web browser: [:actionURL](:actionURL)',
        [
            'actionText' => $actionText,
            'actionURL' => $actionUrl
        ]
    )
@endcomponent

@endcomponent
