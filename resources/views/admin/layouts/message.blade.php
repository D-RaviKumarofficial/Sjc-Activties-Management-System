@if($message=Session::get('success'))
<div class="alert alert-success alert-dismissible fade show">
    <strong>Success.</strong>{{$message}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

@if($message=Session::get('error'))
<div class="alert alert-success alert-dismissible fade show">
    <strong>Failed.</strong>{{$message}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif