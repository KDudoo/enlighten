@extends('enlighten::layout.main')

@section('content')
    <div class="w-full mx-auto">
        <table class="w-full rounded-lg overflow-hidden bg-white">
            <thead>
                <tr class="uppercase text-gray-700 text-sm bg-gray-200 border-b border-gray-300">
                    <td class="px-6 py-4">Commit</td>
                    <td class="px-6 py-4">Date</td>
                    <td class="px-6 py-4">Status</td>
                    <td class="px-6 py-4"></td>
                </tr>
            </thead>
            <tbody>
            @foreach($runs as $run)
                <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-gray-100' : '' }} text-gray-700">
                    <td class=" px-6 py-4 ">{{ $run->head }}</td>
                    <td class=" px-6 py-4 ">{{ $run->created_at->toDateTimeString() }}</td>
                    <td class=" px-6 py-4 ">
                        <span class="h-2 w-2 table mx-auto rounded-full bg-{{ $run->modified ? 'red' : 'green' }}-500"></span>
                    </td>
                    <td class=" px-6 py-4 ">
                        <a href="{{ route('enlighten.run.show', $run->id) }}" class="text-teal-500 hover:text-teal-600">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
