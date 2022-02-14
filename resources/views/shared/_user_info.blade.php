<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h5>用户名:{{ $user->name }}</h5>
<h5>邮  箱:{{ $user->email }}</h5>
