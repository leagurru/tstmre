@if(session('success'))
    <div class="alert alert-success">
        <h2>{{session('success')}}</h2>
    </div>
@endif