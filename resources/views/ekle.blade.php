<form action="{{route('oyun.ekle.post')}}" method="POST">
    @csrf
    Oyun İsmi : <br>
    <input type="text" name="isim">
    <br>
    <button type="submit" >Ekle</button>



</form>
