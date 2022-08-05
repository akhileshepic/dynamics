<li class="dropdown-menu-header">
    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0" id="badge">@if($notifycount>0){{ $notifycount }} New @else 0 New @endif</span>
</li>

@if($notifycount>0)
   @foreach ($notificationdata as $notification) 
  
    <li class="scrollable-container media-list w-100 ps">
        <a href="@if($notification->data['message']['type']=='order')

          {{ route('admin.online_order') }}

          @endif" class="">
            <div class="media">
              <div class="media-left align-self-center">
                  <i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i>
              </div>
              <div class="media-body">
                <div class="d-flex justify-content-between">
                  <h6 class="media-heading">  {{ $notification->data['message']['title']}}</h6>
                  <time class="media-meta  text-muted" datetime="2015-06-11T18:29:20+08:00">{{$notification->created_at->diffForHumans()}}</time>
                </div>
                <p class="notification-text font-small-3 text-muted">{{ $notification->data['message']['description']}}</p>
                  
              </div>


            </div>
        </a>
    </li>  
    @endforeach
    <h6 class="text-center mb-0 py-2"><a href="{{ route('admin.all-notifications') }}" style="text-decoration: none;">Read All Notification</a></h6>
@endif