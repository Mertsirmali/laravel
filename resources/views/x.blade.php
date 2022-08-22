<form action="/" method="POST" >
@csrf
<input type="text" name="name">
<button type="submit">Ekle</button>

</form>

@if($errors->any())

    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach

@endif
