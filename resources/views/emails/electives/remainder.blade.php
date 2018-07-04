@component('mail::message')
# Hi, {{ $name }}

The last date for choosing your elective for next semester is 28th May 2018.
Submit your choice using the button below if you haven't already or else feel free to change your choice.
You can change your selection anytime till the last date.

@component('mail::button', ['url' => $actionUrl])
    {{ $actionText }}
@endcomponent

Please find the next semester elective syllabus in the attachment.

For any queries that you may have, please feel free to email us at <a href="mailto:cseadmin@cbit.ac.in">cseadmin@cbit.ac.in</a>.

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
