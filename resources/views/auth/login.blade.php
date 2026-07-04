@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="mx-auto max-w-md px-4 py-10">
    <div class="rounded-2xl bg-white p-8 shadow-lg">
        <h1 class="mb-6 text-2xl font-semibold text-slate-900">Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label class="block text-sm font-medium text-slate-700">Email</label>
            <input type="email" name="email" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3" />

            <label class="mt-4 block text-sm font-medium text-slate-700">Password</label>
            <input type="password" name="password" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3" />

            <button type="submit" class="mt-6 w-full rounded-xl bg-slate-900 px-4 py-3 text-white">Login</button>
        </form>
    </div>
</div>
@endsection
