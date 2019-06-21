@extends('layouts.main')
@section('content')

    <form class="form-group">
        <div class="alert alert-primary" role="alert">
            Створити нове оголошення <a href="{{route('add')}}" class="alert-link">( тик )</a>.
        </div>
        <div class="alert alert-primary" role="alert">
            Переглянути всіх користувачів <a href="{{route('user')}}" class="alert-link">( тик )</a>.
        </div>
        <div class="alert alert-primary" role="alert">
            Редагувати оголошення <a href="{{route('product-edit')}}" class="alert-link">( тик )</a>.
        </div>
    </form>

@stop