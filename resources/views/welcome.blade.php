@if(Auth::check())
    <p>Hello {{ Auth::user()->name }}, welcome to andperm</p>
    <p>please  go to <span><a href="/dashboard">dashboard</a></span></p>
@else
    <p>welcome to andperm</p>
@endif
@if(!Auth::check())
    <p>please <span><a href="/login">login</a></span></p>
@endif