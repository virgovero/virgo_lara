@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fase show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif