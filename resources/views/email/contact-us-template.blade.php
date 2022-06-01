@component('mail::message')
  **{{ $name }}({{ $email }})** has asked a question.

  {{ $message }}

  @component('mail::button', ['url' => 'mailto:' . $email])
    Reply
  @endcomponent

  Thanks,<br>
  {{ config('app.name') }}
@endcomponent
