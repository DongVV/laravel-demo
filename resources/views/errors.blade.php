@if ($errors->any())
<div class="alert is-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>

</div>
@endif
