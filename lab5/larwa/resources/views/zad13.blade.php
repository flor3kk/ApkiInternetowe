{{-- to jest komentarz --}}

@php

    if ($name == '') {
        echo  "brak imienia <BR><BR>";
    }
    else {
        echo "hej $name <br><BR>";
    }

    if (Str::startsWith($name, 'B')) {
        echo "Imie zaczyna sie na B <BR><BR>";
    }
    else {
        echo "Nie zaczyna sie na litere B <BR><BR>";
    }


@endphp


@if (count($arr) == 0)
    <P> tablica jest pusta </P>
@else
    @foreach ($arr as $val)

        @if ($loop->first)
            <p> wartosc pierwsza {{$val}}</p>
        @elseif ($loop->last)
            <p> wartosc ostatnia {{$val}} </p>
        @else
            <p> {{$val}}</p>
        @endif

    @endforeach
@endif
