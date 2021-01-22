@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Nazwa użytkownika</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nazwa Użytkownika">
                </div>
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Adres E-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Adres E-mail">
                </div>
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Hasło</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło">
                </div>
                <button type="submit" class="btn btn-default">Uwtórz konto</button>
            </form>
        </div>
    </div>
</div>

@endsection

