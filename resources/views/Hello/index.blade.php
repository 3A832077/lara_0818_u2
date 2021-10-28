<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')
@section('title','Hello')
@section('content')
    <h1>This is{{ $name }}'s home.</h1>
@endsection
</body>
</html>
<?php
