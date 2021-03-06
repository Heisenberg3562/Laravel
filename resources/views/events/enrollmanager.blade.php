@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Events
                        <a href=" {{ route('events.index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Enrolled at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $enroll as $e)
                                @foreach($user as $u)
                                    @if($e->user_id == $u->id)
                                        <tr>

                                            <td>
                                                {{ $u->name }}
                                            </td>
                                            <td>
                                                {{ $u->email }}
                                            </td>
                                            <td>
                                                {{ $e->created_at }}
                                            </td>
                                            <td>
                                                <form action="{{route('enrolls.destroy',[$e])}}}" method="post" style="all: unset;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-secondary" style="display: inline-block;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                 @endforeach
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
