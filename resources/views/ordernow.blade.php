@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Do zapłaty</td>
                    <td>{{$total}} zł</td>
                </tr>
                <tr>
                    <td>Dostawa</td>
                    <td>10 zł</td>
                </tr>
                <tr>
                    <td>Cała kwota</td>
                    <td>{{$total+10}} zł</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="podaj swój adres" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Metoda płatności</label><br/><br/>
                    <input type="radio" value="gotowka" name="payment"><span>Płatnośc przy odbiorze</span><br/><br/>
                    <input type="radio" value="blik" name="payment"><span>BLIK</span><br/><br/>
                    <input type="radio" value="karta" name="payment"><span>Karta płatnicza</span><br/><br/>

                </div>
                <button type="submit" class="btn btn-warning">Zamów</button>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

