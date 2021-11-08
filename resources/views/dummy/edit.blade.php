@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <form method="POST" action="{{ route('dummy.update', ['dummy' => $dummy]) }}">
        @csrf
        @method('PUT')
        <input value="{{ $dummy->lorem }}" name="lorem" type="text" placeholder="lorem">
        <input value="{{ $dummy->ipsum }}" name="ipsum" type="text" placeholder="ipsum">

        <input class="btn" type="submit" value="SUBMIT" />
    </form>
@endsection
