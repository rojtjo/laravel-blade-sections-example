@extends('foo')

@section('content')
    <h2>Bar content</h2>
@endsection

@section('title')
    <h2>This will not be visible because the section 'content' is overwritten</h2>
@endsection

@section('footer')
    <h2>Bar footer</h2>
@endsection
