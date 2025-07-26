<h2>Welcome, {{ Auth::user()->name }}</h2>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
