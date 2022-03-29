@extends('template')

@section('container')
    <h1>{{ $title }} <br></h1>
    <h2>{{ $name }}</h2>
    <br>{{ $address }} </p>

    {{-- <hr/> --}}
    @foreach($record as $records)
        <article class="mb-5 border-bottom pb-4">
            <h3>
                {{-- menghilangkan underline -> class="text-decoration-none" --}}
                <a href="/record/{{ $records->slug }}" class="text-decoration-none">
                {{ $records->title}}
                </a>                    
            </h3>
            <h6>
                Pasien: <a href="/pasien/{{ $record->pasien->nama }}" class="text-decoration-none">{{ $record->pasien->nama }}</a> | 
                <a href="/dokter/{{ $record->dokter->nama }}" class="text-decoration-none" > {{ $record->dokter->nama  }}</a>
            </h6>
            <p>{{ $records->excerpt }}</p>
            <a href="/record/{{ $records->slug }}" class="text-decoration-none"> Read more..</a>
        </article>
    @endforeach
@endsection
