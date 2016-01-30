@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your Question Sets</div>

                <div class="panel-body">
                    <button class='pull-right btn btn-sm btn-primary btn-addon' disabled><i class='fa fa-plus'></i> New Question Set</button>
                    <br />
                    <div class='media'>
                        <div class='media-left media-middle'>
                            <a href='/set/example'>
                                <img class='media-object' src='http://cdn.shopify.com/s/files/1/0067/4082/assets/logo.svg' alt='' width='100'>
                            </a>
                        </div>
                        <div class='media-body'>
                            <a href='/set/example'><h4 class='media-heading'>Five Simple Steps - Blind Book Submission</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus id ligula id consequat. Vivamus aliquam massa eu fringilla pellentesque. Quisque mattis leo sed tortor tempor lobortis. Integer id odio varius, ullamcorper erat at, finibus lorem. Mauris suscipit, tellus et ultricies cursus, est nisl blandit libero, non fermentum massa metus non est.</p>
                        </div>
                        <div class='media-footer' style='text-align: center'>
                            <p>Shareable URL</p>
                            <pre>http://submit.ninja/set/example</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
