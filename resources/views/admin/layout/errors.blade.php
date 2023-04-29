@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul style="list-style: none">
        @foreach ($errors->all() as $error)
        <li style="font-weight: bold">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif