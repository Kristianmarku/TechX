<div>
    <a href="#"><i class="fa-solid fa-bell"></i></a>
    <div class="dropdown-content-a">
        @php
            $unreadCount = 0;
            $unreadNotifications = $notifications->whereNull('read_at');
            if ($unreadNotifications && !$unreadNotifications->isEmpty()) {
                $unreadCount = $unreadNotifications->count();
            }
        @endphp
        @if ($notifications && !$notifications->isEmpty())

            @if ($unreadNotifications->isEmpty())
                <div class="content-a">
                    You don't have any unread notifications.
                </div>
            @else
                @foreach ($unreadNotifications as $notify)
                <div class="content-a">
                    <div wire:click="markNotificationAsRead('{{ $notify->id }}')">
                        <p>{{ $notify->data['message'] }}</p>
                    </div>
                    <div wire:click="markNotificationAsRead('{{ $notify->id }}')">
                        <i class="fa-regular fa-eye-slash"></i>
                    </div>
                </div>
                @endforeach
            @endif
        @else
            <div class="content-a">
                You don't have any notifications.
            </div>
        @endif
    </div>
    @if($unreadCount)
        <span class="notification-dot">
            {{ $unreadCount }}
        </span>
    @endif 
</div>



    {{-- <div class="content-a">
        <img src="{{ asset('images/product.jpg') }}" src="err"></img>
        <div class="px-2">
            <h4></h4> <h5>{{ $notify->data['message'] }}</h5>
        </div>
        <div wire:click="markNotificationAsRead({{ $notify->id }})">
            <i class="fa-regular fa-eye-slash"></i>
        </div>
    </div> --}}