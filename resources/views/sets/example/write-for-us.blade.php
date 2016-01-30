@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Write For Us</div>
                <div class="panel-body">
                    <p>We have committed to blind submissions, meaning that all submissions will come to us with no indication of the authors gender, race, Twitter following, ethnicity or beliefs. We will simply judge all submissions on the merit of the content. We think this is the best way to evaluate new work without any risk of accidental prejudice.</p>
                    <p>When you submit this form, we will give you a web page link where you can check for a response from us completely anonymously. If you'd like us to have an email address too, that's great, but there's absolutely no obligation to supply that - it's completely up to you. If you want to give us an email address, we'll let you know when we've posted a reply - otherwise just check your custom link regularly. </p>
                    <form method="POST" action="/set/example">
                        {{ csrf_field() }}
                        <h4>Your Email Address</h4>
                        <div class='form-group'>
                            <p>We only use this to give you updates about your submission - Five Simple Steps will never see this email address.</p>
                            <input type='email' class='form-control' />
                        </div>

                        <div class='form-group'>
                            <p>
                                Reasons why you want to write this book and why you want us to publish it
                            </p>
                            <textarea name='reasons_for_writing' class='form-control'></textarea>
                        </div>

                        <h4>About Your Book</h4>
                        
                        <div clas='form-group'>
                            <p>Proposed Title</p>
                            <input type='text' name='proposed_title' class='form-control' />
                        </div>

                        <div class='form-group'>
                            <p>Summarise your book in a few sentences</p>
                            <textarea name='book_summary' class='form-control'></textarea>
                        </div>
                        
                        <div class='form-group'>
                            <p>A more detailed outline (include any section and chapter headings, if known)</p>
                            <textarea name='detailed_outline' class='form-control'></textarea>
                        </div>

                        <div class='form-group'>
                            <p>Attach a sample chapter - this gives us an idea of your writing style</p>
                            <span class='btn btn-default btn-file'>
                                Attach <input type='file' name='sample-file'>
                            </span>
                        </div>

                        <div class='form-group'>
                            <p>Summarise what the reader will be able to do or understand at the end of the book, that they couldn't do at the beginning</p>
                            <textarea name='reader_understand' class='form-control'></textarea>
                        </div>

                        <div class='form-group'>
                            <p>To which of our book formats do you feel your manuscript is best suited?</p>
                            <label for'book_format'><input type='radio' name='book_format' value='fast-read'> Fast Read</label> <br />
                            <label for'book_format'><input type='radio' name='book_format' value='handbook'> Handbook</label> <br />
                            <label for'book_format'><input type='radio' name='book_format' value='practical-guide'> Practical Guide</label>
                        </div>

                        <div class='form-group'>
                            <p>Anything else you feel is relevant to this book?</p>
                            <textarea name='additional_details' class='form-control'></textarea>
                        </div>

                        <button class='btn btn-success pull-right btn-lg'>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
