@extends('layouts.userslayout')
@section("main")

<div>
    <h2>San pham ban chay</h2>
    @foreach($ds as $d)
        <div class="col-4">
            <div> <img src="{{$d->Picture}}" alt=""></div>
            <div>{{$d->ProductName}}</div>
            <div>{{$d->catename}}</div>
            <div>{{$d->Price}}</div>

        </div>
    
    @endforeach
</div>
<hr>
<div>
    <h2>San pham dang co</h2>
</div>

@endsection