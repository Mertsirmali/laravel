<form enctype="multipart/form-data" action="{{route('oyun.ekle.post')}}" method="POST">
    @csrf
    Oyun İsmi : <br>
    <input type="file" name="image">
    <input type="text" name="isim">
    <br>
    <button type="submit" >Ekle</button>



</form>
