@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <form method="POST" action="/dummy">
        @csrf
        <input name="lorem" type="text" placeholder="lorem">
        <input name="ipsum" type="text" placeholder="ipsum">

        <input class="btn" type="submit" value="ADD DUMMY" />
    </form>
    <hr />
    <table class="table" cellpadding="5" cellspacing="5" border="1px">
        <thead>
        <tr>
            <td>ID</td>
            <td>Token</td>
            <td>Lorem</td>
            <td>Ipsum</td>
            <td>Mail Count</td>
            <td>Actions</td>
        </tr>
        </thead>
        @foreach($dummies as $dummy)
            <tr>
                <td>{{ $dummy->id }}</td>
                <td>{{ $dummy->token }}</td>
                <td>{{ $dummy->lorem }}</td>
                <td>{{ $dummy->ipsum }}</td>
                <td>{{ $dummy->mail_count }}</td>
                <td>
                    @include('dummy.partials.crud-actions')
                </td>
            </tr>
        @endforeach
    </table>
@endsection
