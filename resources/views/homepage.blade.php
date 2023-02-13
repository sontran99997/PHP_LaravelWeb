@extends('layouts.userslayout')
@section("main")

<div class="row">
    <h2>San pham ban chay</h2>
    @foreach($ds as $d)
        <div class="col-4">
            <div> <img class="img-thumbnail" src="{{$d->Picture}}" alt=""></div>
            <div>{{$d->ProductName}}</div>
            <div>{{$d->catename}}</div>
            <div>{{number_format($d->Price,0)}}&#36;</div>
            <div>
                <a href="{{url('chi-tiet/pro-'.$d->ProductID.'.html')}}">Xem chi tiet</a>
                <div>

                </div>
            </div>

        </div>
    
    @endforeach
</div>
<hr>
<div>
    <h2>San pham dang co</h2>
</div>

@endsection