@extends('layouts.app')
@section('content')



    <div class="container-fluid app-body">
        <h3>Recent Post Sent To Buffer</h3>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover buffer-posting table-bordered">
                    <thead>
                    <tr><th>Group Name</th>
                        <th>Group Type</th>
                        <th>Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th> </tr>
                    </thead>
                    <tbody>

                    @foreach ($socialusers as $socialuser)
                        @if ( $socialuser['type'] != 'google' )
                            <tr>
                                <td width="350">
                                    <div class="media">
                                        <div class="media-body media-middle" style="width: 180px;">
                                            <h4 class="media-heading">{{$socialuser['name']}}</h4>
                                        </div>
                                    </div>
                                </td>

                                <td width="350">
                                    <div class="media">
                                        <div class="media-body media-middle" style="width: 180px;">
                                            <h4 class="media-heading">{{$socialuser['type']}}</h4>
                                        </div>
                                    </div>
                                </td>

                                <td width="350">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="">
                                                <span class="fa fa-{{$socialuser['avatar']}}"></span>
                                                <img width="50" class="media-object img-circle" src="{{$socialuser['avatar']}}" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle" style="width: 180px;">
                                        <h4 class="media-heading">{{$socialuser['name']}}</h4>
                                        </div>
                                    </div>
                                </td>
                                {{--@foreach ($profiles as $profile)--}}

                                    {{--<td width="350">--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="media-body media-middle" style="width: 180px;">--}}
                                                {{--<h4 class="media-heading">{{$profile['post_text']}}</h4>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td width="350">--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="media-body media-middle" style="width: 180px;">--}}
                                                {{--<h4 class="media-heading">{{$profile['created_at']}}</h4>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}


                            {{--@endforeach--}}
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
