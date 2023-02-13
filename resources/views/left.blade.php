<ul class="list-group">
    @foreach($ds as $d)
    <li>
        <a href="{{url('list-cate/'.$d->cateid)}}">{{$d->catename}}</a>
    </li>
    @endforeach
</ul>