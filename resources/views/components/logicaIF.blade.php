@if (session()->has('message'))
    <div class="container" style="display:flex;justify-content:center;align-items:center; width:100%">
        <div class="alert alert-success "
            style="display:flex;justify-content:center;align-items:center;width:50%;border:none">
            <h5>{{ session('message') }}</h5>
        </div>
    </div>
@elseif(session()->has('error'))
    <div class="container" style="display:flex;justify-content:center;align-items:center; width:100%">
        <div class="alert alert-danger"
            style="display:flex;justify-content:center;align-items:center;width:50%;bprder:none">
            <h5>{{ session('error') }}</h5>
        </div>
    </div>
@endif
