@extends('layouts.main')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group">
                <label for="models">Назва ноутбуку</label>
                <input type="text" name="models" class="form-control" id="models">
            </div>
            <div class="form-group">
                <label for="cost">Ціна</label>
                <input type="text" name="cost" class="form-control" id="cost">
            </div>
            <div class="form-group">
                <div class="col">
                    <label class="mr-sm-2" for="wallet" >Тип валюти</label>
                    <select class="custom-select mr-sm-2" name="wallet" id="wallet">
                        <option>USD</option>
                        <option>EUR</option>
                        <option>UAH</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="diagonal">Діагональ ноутбуку</label>
                <input type="text" name="diagonal" class="form-control" id="diagonal">
            </div>
            <div class="form-group">
                <label for="processor">Назва процесору</label>
                <input type="text" name="processor" class="form-control" id="processor">
            </div>
            <div class="form-group">
                <label for="videocard">Назва відеокарти</label>
                <input type="text" name="videocard" class="form-control" id="videocard">
            </div>
            <div class="form-group">
                <label for="memory">Кількість оперативної пам'яті</label>
                <input type="text" name="memory" class="form-control" id="memory">
            </div>
            <div class="form-group">
                <label for="kilk">Кількість на складі</label>
                <input type="text" name="kilk" class="form-control" id="kilk">
            </div>
            <div class="form-group">
                <label for="information">Інформація про ноутбук</label>
                <input type="text" name="information" class="form-control" id="information">
            </div>
            <div>
                <button type="submite" class="btn btn-primary">Опублікувати</button>
            </div>
        </div>
    </form>
@stop