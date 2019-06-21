@extends('layouts.main')
@section('content')
    @foreach($product as $offer)
        <form method="post" class="form-group">
            {{ csrf_field() }}
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <span class="right">
                    <a href="{{route('edit')}}" class=" action" style="color: white">Edit</a>

                    <a href="" class="action" style="color: white; padding-left: 20px;">Delet</a>
                </span>
                    <div class="alert alert-primary" role="alert">
                        <h2 class="display-5">{{$offer->models}}</h2>
                        <p class="lead">{{$offer->cost}}{{$offer->wallet}}</p>
                    </div>
            </div>
        </form>
    @endforeach
@stop