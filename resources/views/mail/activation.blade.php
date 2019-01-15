<h1>GLOBIZE</h1>
<h3>Hello, {{ $name }}</h3>
<p>Thanks for signing up with <strong>{{ config('app.name') }}</strong>! You must follow this link to activate your account:</p><br>
{{ url('user/activation', $link) }}
<p>Have fun, and don't hesitate to contact us with your feedback</p>
<br>
<p>Best regards</p>
<p>{{ config('app.name')}} </p>