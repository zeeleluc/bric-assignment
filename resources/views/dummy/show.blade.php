@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <pre>{{ var_dump($dummy->toArray()) }}</pre>

    @include('dummy.partials.crud-actions')
@endsection
