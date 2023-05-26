<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
    {{-- @notifyCss --}}
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @if (Auth::check())
        <?php $unseenCount = \Chatify\ChatifyMessenger::getCountUnseenMessages(Auth::id()); ?>
        <a href="http://127.0.0.1:8000/chatify" id="chat-btn" target="new">
            <i class="fas fa-comments"></i> Chats
            @if ($unseenCount > 0)
                <span class="badge badge-pill badge-danger">{{ $unseenCount }}</span>
            @endif
        </a>
    @else
        <a href="http://127.0.0.1:8000/login" id="chat-btn" target="new">
            <i class="fas fa-comments"></i> Chats
        </a>
    @endif
