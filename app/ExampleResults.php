<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExampleResults extends Model
{
    protected $table = 'example_results';

    protected $fillable = ['reasons_for_writing', 'proposed_title', 'book_summary', 'detailed_outline', 'sample-file', 'reader_understand', 'book_format', 'additional_details'];
}
