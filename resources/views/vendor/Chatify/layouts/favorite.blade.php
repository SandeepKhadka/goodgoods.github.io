<div class="favorite-list-item">
    @if ($user)
        <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m"
            style="background-image: url('{{ $user->photo ? $user->photo : Chatify::getUserWithAvatar($user)->avatar }}');">
        </div>
        <p>{{ strlen($user->full_name) > 5 ? substr($user->full_name, 0, 6) . '..' : $user->full_name }}</p>
    @endif
</div>
