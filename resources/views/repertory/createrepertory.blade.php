@extends('layouts/structure')
@section('page-title')
    Create  a Repertory
@endsection

@section('page-content')
    <form action="">
        <input type="text" placeholder="Name" required>
        <input type="text" placeholder="Style" required>
        <input type="submit" value="Add">
    </form>
@endsection