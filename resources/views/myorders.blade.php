@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Moje zamówienia</h4>
            @foreach ($orders as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->product_id}}">
                    <img class="trending-image img-responsive center-block" src="{{$item->gallery}}">
                </a>
                </div>
                <div class="col-sm-4">
                    <div class=''>
                        <h3>{{$item->name}}</h3>
                        <h5>Status dostawy: {{$item->status}}</h5>
                        <h5>Adres: {{$item->address}}</h5>
                        <h5>Status płatności: {{$item->payment_status}}</h5>
                        <h5>Metoda płatności: {{$item->payment_method}}</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

