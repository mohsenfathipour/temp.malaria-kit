<!-- Notification -->
<div class="item @if($notification->is_read == 0) unread-notification @endif">
    <div class="dot @if($notification->is_read == 0) bg-success @endif"></div>
    <div class="content">
        <h4 class="title">{{ $notification->title }}</h4>
        <div class="text my-2">{{ $notification->content }}</div>
        <span class="time">{{ $notification->created_at->diffForHumans() }}</span>
    </div>
</div>
<!-- * Notification -->
