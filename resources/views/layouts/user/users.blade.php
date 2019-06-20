@extends('layouts.main')
@section('content')
            <table class="table table-sm">

                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">{{__('users.id')}}</th>
                    <th scope="col">{{__('users.Name')}}</th>
                    <th scope="col">{{__('users.Email')}}</th>
{{--                    <th scope="col">{{__('users.phone')}}</th>--}}
                    <th scope="col">{{__('users.role')}}</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                @foreach($user as $users)
                <tbody>
                <tr>
                    <td></td>
                    <td>{{$users->id}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
{{--                    <td>{{$users->phone}}</td>--}}
                    <td>{{$users->role}}</td>
                    <td><a href="" class="action" style="color: white; padding-left: 20px;">{{__('offers.Delete')}}</a></td>
                    <td><a href="" class="action" style="color: white; padding-left: 20px;">{{__('offers.Edit')}}</a></td>
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>
@stop