@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
template
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Templates</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>templates</li>
        <li class="active">templates</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    template {{ $template->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $template->id }}</td></tr>
                     <tr><td>name</td><td>{{ $template['name'] }}</td></tr>
					<tr><td>detail</td><td>{{ $template['detail'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop