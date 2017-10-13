@component('mail::message')
# Hello {{ $user->name }}
You change your mail, so we need to verify this new address.Please the buuton below:

@component('mail::button', ['url' => {{ route('verify', $user->verification_token) }}])
Verifi Account
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent