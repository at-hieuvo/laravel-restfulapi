Hello {{ $user->name }}
Thank you for create account.Please verify your mail using this link:
{{ route('verify', $user->verification_token) }}