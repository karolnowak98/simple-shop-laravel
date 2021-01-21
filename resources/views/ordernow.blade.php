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
                    <td>Podatek</td>
                    <td>0 zł</td>
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
                <form action="/action_page.php">
                    <div class="form-group">
                        <textarea type="email" placeholder="podaj swój adres" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Metoda płatności</label><br/><br/>
                        <input type="radio" name="payment"><span>Płatnośc przy odbiorze</span><br/><br/>
                        <input type="radio" name="payment"><span>BLIK</span><br/><br/>
                        <input type="radio" name="payment"><span>Karta płatnicza</span><br/><br/>

                    </div>
                    <button type="submit" class="btn btn-warning">Zamów</button>
                </form>
            </div>
    </div>
</div>
@endsection

