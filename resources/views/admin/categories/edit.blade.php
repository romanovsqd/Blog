@extends('layouts.app')

@section('title')
    edit category
@endsection

@section('content')
    <x-categories.form action="{{ route('admin.categories.update', $category) }}" method="PUT" buttonText="save" :category="$category"/>
@endsection
