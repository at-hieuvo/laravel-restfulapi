@component('mail::message')
# Hello {{ $user->name }}
Thank you for create account.Please verify your mail using this button:

@component('mail::button', ['url' =>  route('verify', $user->verification_token) ])
Verify Account
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent