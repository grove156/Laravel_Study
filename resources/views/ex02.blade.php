<ul>
  @foreach($arr as $item)
    <li>{{$item}}</li>
  @endforeach
</ul>

<ol>
  @for($i=0; $i< count($arr); $i++)
    <li>{{$arr[$i]}}</li>
  @endfor
</ol>
