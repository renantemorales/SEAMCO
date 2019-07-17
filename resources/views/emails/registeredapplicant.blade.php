@component('mail::message')
# iAccs Portal

Someone just submitted an membership application.<br/>
Click the button below to vote the applicant.

@component('mail::button', ['url' => $link])
VOTE
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
