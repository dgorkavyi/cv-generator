@extends('layouts.app')
@section('title', 'CV Generator')
@section('content')
    <h1 class="mb-4">CREATE FORM</h1>
    <form action="{{ route('details.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-4 mb-4">
            <input class="block form-control w-full" type="text" name="fullname" id="fullname" placeholder="Full name">
            <input class="block form-control w-full" type="text" name="email" id="email" placeholder="Email">
            <input class="block form-control w-full" type="text" name="address" id="address" placeholder="Address">
            <input class="block form-control w-full" type="tel" name="phone" id="phone" placeholder="Phone">
        </div>

        <button class="btn btn-success text-2xl">Create</button>
    </form>
@endsection('content')
