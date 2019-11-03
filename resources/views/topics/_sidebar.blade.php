<div class="card ">
  <div class="card-body">
    <a class="btn btn-success btn-clock" href="{{ route('topics.create') }}" aria-label="Left Align">
      <i class="fa fa-pencil-alt mr-2"></i>新建帖子
    </a>
  </div>
</div>

@if (count($active_users))
  <div class="card mt-4">
    <div class="card-body active-users pt-2">
      <div class="text-center mt-1 mb-0 text-muted">活跃用户</div>
      <hr class="mt-2">
      @foreach ($active_users as $active_user)
        <a class="media mt-2" href="{{ route('users.show', $active_user->id) }}">
          <div class="media-left media-middle mr-2 ml-1">
            <img class="media-object" src="{{ $active_user->avatar }}" width="24px" height="24px">
          </div>
          <div class="media-body">
            <samll class="media-heading text-secondary">{{ $active_user->name }}</samll>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif
