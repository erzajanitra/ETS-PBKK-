@extends('template')

@section('container')
    <article class="mb-5 pb-4">
        <h3>
            {{-- menghilangkan underline -> class="text-decoration-none" --}}
            <a href="/record/{{ $record->slug }}" class="text-decoration-none">
            {{ $record->title}}
            </a>                    
        </h3>
        <h6>
            Pasien: <a href="/pasien/{{ $record->pasien->nama }}" class="text-decoration-none">{{ $record->pasien->nama }}</a> | 
            <a href="/dokter/{{ $record->dokter->nama }}" class="text-decoration-none" > {{ $record->dokter->nama  }}</a>
        </h6>
        <p>Temperatur Pasien : {{ $record->suhu }} </p>
        <p>{{ $record->body }}</p>
        <a href="/record" class="d-block mt-5">Back to all records</a>
    </article>
@endsection