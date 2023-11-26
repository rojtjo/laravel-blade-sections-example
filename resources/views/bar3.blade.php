@extends('foo')

@section('content')
    @parent

    <h2>Bar content</h2>
@endsection

@section('title')
    <h2>Bar title</h2>
@endsection

@section('footer')
    <h2>Bar footer</h2>
@endsection
