@extends('layouts.app')

@section('title', 'Vaccine Schedule')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Vaccine Schedule</h1>

    <x-panel title="All Schedules">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-blue-100 text-blue-900">
                    <tr>
                        <th class="p-2">#</th>
                        <th class="p-2">Patient</th>
                        <th class="p-2 hidden md:table-cell">Purok</th>
                        <th class="p-2">Vaccine</th>
                        <th class="p-2 hidden md:table-cell">Dose</th>
                        <th class="p-2">Date</th>
                        <th class="p-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($schedules as $s)
                        <tr class="{{ $loop->odd ? 'bg-blue-50' : 'bg-white' }}">
                            <td class="p-2">{{ $loop->iteration }}</td>
                            <td class="p-2">{{ $s->patient_name }}</td>
                            <td class="p-2 hidden md:table-cell">{{ $s->purok }}</td>
                            <td class="p-2">{{ $s->vaccine }}</td>
                            <td class="p-2 hidden md:table-cell">{{ $s->dose }}</td>
                            <td class="p-2">{{ $s->scheduled_at->format('M d, Y') }}</td>
                            <td class="p-2">
                                {{ $s->status }}
                                @unless ($s->status !== 'Overdue')
                                    <span class="ml-1 rounded bg-red-600 text-white text-xs px-2 py-0.5">Overdue</span>
                                @endunless
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-4 text-center text-slate-500">No schedules yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-panel>
@endsection
