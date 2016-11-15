@extends('installer::layouts.master')

@section('container')
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="glyphicon glyphicon-home"></i>
                {{ trans('installer::installer.upgrade.title') }}
            </h3>
        </div>
        <div class="panel-body">

			@if(!$errors->isEmpty())
			<div class="row">
				<div class="alert alert-error">
					<ul class="alert alert-danger">
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif
		
            <p>
                {{ trans('installer::installer.upgrade.welcome', ['current' => $currentVersion, 'latest' => $last_version]) }}
            </p>
            <a class="btn btn-success" href="{{ route('installer::process') }}">
                {{ trans('installer::installer.upgrade.button') }}
            </a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    @include('errors.swalerror')
@stop