<h4><strong>Kategori</strong></h4>
<ul class="list-group list-group-flush">
  @foreach ($kategori as $item)
    <li class="list-group-item"><a href="/home/post?kategori_id={{$item->id}}"><b>{{$item->nama}}</b></a></li>
  @endforeach
</ul>