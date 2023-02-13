@extends('layouts.userslayout')
@section("main")

<div class="row">
    <h2>Chi tiet san pham</h2>
    <div class="col-5">
        <img class="img-thumbnail" src="{{$ds->Picture}}" alt="">
    </div>
    <div class="col-7">
        <div>{{$ds->ProductName}}</div>
        <div>{{$ds->catename}}</div>
        <div>{{number_format($ds->Price,0)}}&#36;</div>
        <div><a href="{{url('gio-hang/'.$ds->ProductID.'.html')}}">Them vao gio hang</a></div>
    </div>
        
</div>

@endsection