@extends('layouts.app')

@section('content')
<?php

try {
    echo "Loaded verseny " . $nev;
} catch (Exception $e) {
    echo "No verseny was selected";
}

?>
@endsection