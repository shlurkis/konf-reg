<!-- resources/views/client/conferences/show.blade.php -->

<h1>{{ $conference['name'] }}</h1>

<p><strong>Data:</strong> {{ $conference['date'] }}</p>
<p><strong>Aprašymas:</strong> {{ $conference['description'] }}</p>
<p><strong>Vieta:</strong> {{ $conference['location'] }}</p>

<a href="{{ url('/client') }}">Grįžti į konferencijų sąrašą</a>
