<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h3>用户名:{{ $user->name }}</h3>
<h3>邮  箱:{{ $user->email }}</h3>
