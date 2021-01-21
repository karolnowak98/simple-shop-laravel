@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <a href="ordernow" class="btn btn-success">Zamów teraz</a><br/><br/>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                </a>
                </div>
                <div class="col-sm-4">
                    <div class=''>
                        <h3>{{$item->name}}</h3>
                        <h5>{{$item->description}}</h5>
                    </div>
                </a>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}} "class="btn btn-warning">Usuń przedmiot</a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="ordernow" class="btn btn-success">Zamów teraz</a><br/><br/>
    </div>
</div>
@endsection

