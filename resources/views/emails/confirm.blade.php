Hello {{ $user->name }}

You changed your email. so we need yo verify this new address. Please use this link below:
{{ route('verify', $user->verification_token) }}