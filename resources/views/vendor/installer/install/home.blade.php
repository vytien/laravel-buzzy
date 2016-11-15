@extends('installer::layouts.master')

@section('container')
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <div class="panel panel-success">
       <div class="panel-body">
            @if(null == Session::get('ok'))
               <h3 style="text-align: center;">Verify Buzzy Access </h3>
            <hr>
            <div class="bs-component" style="text-align: center;padding:30px 80px;">
                <h3>Check Buzzy Access Code</h3>
                    <form method="post" action="{{ route('installer::checkedcode') }}">
                        <div class="row">
                            <div class="form-group col-md-12">

                                <div class="col-md-10">
                                    <input class="input-lg form-control" style="height: 46px;padding: 10px 16px; font-size: 18px; line-height: 1.3333333; border-radius: 6px;" name="code" type="text" value='Nulled' disabled="disabled" >
                                </div>
                                    <div class="col-md-2">
                                    <button class="btn btn-success" type="submit">
                                        Check
                                    </button>


                                </div>
                            </div>
                        </div>
                        {!! csrf_field() !!}

                    </form>
            </div>
            @endif
            @if(null !== Session::get('ok'))
                <center>
            <a class="btn btn-success" href="{{ route('installer::permissions') }}">
                @lang('installer::installer.next')
            </a>
                </center>
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    @include('errors.swalerror')
@stop
