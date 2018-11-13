@if(\Illuminate\Support\Facades\Session::has('messages') || \Illuminate\Support\Facades\Session::has('messages_success') || \Illuminate\Support\Facades\Session::has('messages_info')  )


<div class="container" style="margin-top: 80px">
@if(\Illuminate\Support\Facades\Session::has('messages'))
    <div class="alert alert-danger">
        {{session('messages')}}
    </div>
@endif
@if(\Illuminate\Support\Facades\Session::has('messages_success'))
    <div class="alert alert-success">
        {{session('messages_success')}}
    </div>
@endif
@if(\Illuminate\Support\Facades\Session::has('messages_info'))
    <div class="alert alert-info">
        {{session('messages_info')}}
    </div>
@endif
</div>
    @endif