@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Danh sách trò chuyện</div>

                <div class="panel-body">
                @foreach($users as $user)
                    <table class="table">
                        <tr>
                            <td>
                                <img src="{{$user->avatar}}">
                                {{$user->name}}
                            </td>
                            <td>
                                <a href="{{route('message.read', ['id'=>$user->id])}}" class="btn btn-success pull-right">Nhắn Tin</a>
                            </td>
                        </tr>
                    </table>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
