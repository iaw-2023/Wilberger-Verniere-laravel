@if ($message = Session::get('Success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('Error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif