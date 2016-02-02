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
                            <p>We have committed to blind submissions, meaning that all submissions will come to us with no indication of the authors gender, race, Twitter following, ethnicity or beliefs. We will simply judge all submissions on the merit of the content. We think this is the best way to evaluate new work without any risk of accidental prejudice.</p>
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
