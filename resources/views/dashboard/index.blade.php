@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>

    <div class="grid gap-4 md:grid-cols-4 mb-6">
        @foreach ($stats as $stat)
            <x-stat-card :title="$stat['label']" :value="$stat['value']" />
        @endforeach
    </div>

    @if ($alerts->count() > 0)
        <div class="mb-6 rounded-lg bg-red-100 text-red-800 p-4">
            ⚠️ {{ $alerts->count() }} resident(s) have overdue vaccinations.
        </div>
    @elseif (count($outOfStock) > 0)
        <div class="mb-6 rounded-lg bg-yellow-100 text-yellow-800 p-4">
            Out of stock: {{ implode(', ', $outOfStock) }}. Please reschedule affected residents.
        </div>
    @else
        <div class="mb-6 rounded-lg bg-green-100 text-green-800 p-4">
            ✅ All clear! No overdue vaccinations.
        </div>
    @endif

    <x-panel title="Overdue Residents">
        <ul class="divide-y">
            @forelse ($alerts as $alert)
                <li class="py-2 flex flex-col sm:flex-row sm:justify-between">
                    <span>{{ $alert->patient_name }} ({{ $alert->purok }})</span>
                    <span class="text-sm text-slate-500">
                        {{ $alert->vaccine }} – {{ $alert->dose }}, {{ $alert->scheduled_at->format('M d, Y') }}
                    </span>
                </li>
            @empty
                <li class="py-2 text-slate-500">Nobody is overdue.</li>
            @endforelse
        </ul>
        <a href="/schedule" class="inline-block mt-3 text-sm text-emerald-700 hover:underline">View full schedule →</a>
    </x-panel>
@endsection
