@component('mail::message')
# Hi, {{ $name }}

This is an email to inform you that we have saved your elective subject selection regarding <b>{{ $electiveName }}</b>.

You have selected <b>{{ $subjectName }} ({{ $subjectCode }})</b> for next semester.

For any queries that you may have, please feel free to email us at <a href="mailto:cseadmin@cbit.ac.in">cseadmin@cbit.ac.in</a>.

Regards,<br>
{{ config('app.name') }}
@endcomponent
