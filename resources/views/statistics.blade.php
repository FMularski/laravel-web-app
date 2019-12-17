@extends('layout.base')

@section('title')
    Statistics
@stop

@section('header')
    <h1 class='alert alert-info'>Statystyki</h1>
@stop

@section('appContent')
    <h3 class='alert'>Tak prezentują się statystyki z ubiegłych lat:</h3>

    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Rok</th>
            <th scope="col">Dodane posty</th>
            <th scope="col">Wyświetlenia</th>
            <th scope="col">Subskrybenci</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">2019</th>
            <td>414</td>
            <td>512033</td>
            <td>+44023</td>
            </tr>
            <tr>
            <th scope="row">2018</th>
            <td>398</td>
            <td>422320</td>
            <td>+33124</td>
            </tr>
            <tr>
            <th scope="row">2017</th>
            <td>401</td>
            <td>360679</td>
            <td>+29931</td>
            </tr>
            <tr>
            <th scope="row">2016</th>
            <td>382</td>
            <td>486120</td>
            <td>+37553</td>
            </tr>
            <tr>
            <th scope="row">2015</th>
            <td>416</td>
            <td>40086</td>
            <td>+30151</td>
            </tr>
        </tbody>
    </table>
@stop