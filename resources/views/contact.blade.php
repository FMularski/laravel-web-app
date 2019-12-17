@extends('layout.base')

@section('title')
    Contact
@stop

@section('header')
    <h1 class='alert alert-success'>Kontakt</h1>
@stop

@section('appContent')
    <h3 class='alert'>Masz pytanie? Napisz do nas!</h3>
    
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Email:</b></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Twój adres email nie zostanie nigdzie udostępniony..</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><b>Pseudonim:</b></label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Twoja wiadomość:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Akceptuję regulamin</label>
        </div>
        <button type="submit" class="btn btn-outline-success">Wyślij</button>
    </form>
@stop