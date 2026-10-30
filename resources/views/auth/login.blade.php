@extends('layouts.app')

@section('title', 'Sign in')

@section('content')
<form method="POST" action="/login" class="max-w-sm mx-auto mt-10 space-y-4 p-6 bg-white rounded-lg shadow">
    @csrf
    <h1 class="text-xl font-bold text-blue-700 text-center">Health Worker Sign in</h1>

    <div>
        <label for="email" class="block text-sm mb-1">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="nurse@bakuna.test"
               class="w-full border rounded p-2">
        @error('email') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="password" class="block text-sm mb-1">Password</label>
        <input type="password" id="password" name="password" placeholder="Password"
               class="w-full border rounded p-2">
        @error('password') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white rounded p-2">Sign in</button>
</form>
@endsection
