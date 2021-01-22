@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
            
        </div>
        
        <div class="col-sm-6">
            <a href="/">Powrót</a>
            <h2>{{$product['name']}}</h2>
            <h3>Cena: {{$product['price']}} zł</h3>
            <h4>Opis: {{$product['description']}}<h4>
            <h4>Kategoria: {{$product['category']}}<h4>
            <br/><br/>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-success">Dodaj do koszyka</button>
            </form>
        </div>
        
    </div>
    
</div>
@endsection

