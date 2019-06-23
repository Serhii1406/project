@extends('layouts.main')
@section('content')

    <style>
        TD, TH {
            text-align: center; /* Выравнивание по центру */
            padding: 3px; /* Поля вокруг содержимого ячеек */
        }
        TH {
            background: #4682b4; /* Цвет фона */
            color: white; /* Цвет текста */
            border-bottom: 2px solid black; /* Линия снизу */
        }
    </style>
    <form>
        {{ csrf_field() }}
        <div class="users-tables-group">
            <div class="table-users-row">
                <div class="table-user">
                    @foreach($product as $offer)
                        <div class="tale-user-body clearfix">
                            <br>
                            <table class="user-details" style="width: 100%;border: 2px solid black; background: silver;">
                                <tbody>
                                <tr>
                                    <img src="{{$offer->image}}">
                                </tr><tr>
                                    <td>{{__('education.Models')}}</td>
                                    <td>{{$offer->models}}</td>
                                </tr>
                                <tr>
                                    <td>{{__('education.Cost')}}</td>
                                    <td>{{$offer->cost}}{{$offer->wallet}}</td>
                                </tr>
                                <tr>
                                    <td>{{__('education.Diagonal')}}</td>
                                    <td>{{$offer->diagonal}}</td>
                                </tr>
                                <tr>
                                    <td>{{__('education.Proc')}}</td>
                                    <td>{{$offer->processor}}</td>
                                </tr>
                                <tr>
                                    <td >{{__('education.Video')}}</td>
                                    <td style="">{{$offer->videocard}}</td>
                                </tr>
                                <tr>
                                    <td>{{__('education.Memory')}}</td>
                                    <td>{{$offer->memory}}GB</td>
                                </tr>
                                <tr>
                                    <td>{{__('education.Inf')}}</td>
                                    <td>{{$offer->information}}</td>
                                </tr>
                                <tr>
                                    <td>{{__('education.Kilk')}}</td>
                                    <td>{{$offer->kilk}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </form>
@stop