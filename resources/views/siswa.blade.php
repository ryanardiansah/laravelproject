<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ryan</title>
</head>

<body>
    //menampilkan data
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nama ?>
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nilai ?>
        </h1>
    </div>

    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ date(now())  }}
        </h1>
    </div>
    
    //kondisi if else
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ date(now())  }}
        </h1>
    </div>
    <div class="alert alert-secondary d-inline-block">
        <?php
        if (($nilai >= 0) and ($nilai < 50))
        {
            echo "Maaf, anda tidak lulus";
        }
        else if (($nilai >= 50) and ($nilai <= 100))
        {
            echo "Selamat, anda lulus";
        }
        ?>
    </div>
    
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ date(now())  }}
        </h1>
    </div>
    <br>
    @if (($nilai >= 0) and ($nilai <= 50))
    <div class="alert alert-danger d-inline-block">
        Maaf, anda tidak lulus
    </div>
    @elseif (($nilai >= 50) and ("$nilai <=100"))
    <div class="alert alert-success d-inline-block">
        Selamat, anda lulus
    </div>
    @else
    <div class="alert alert-dark d-inline-block">
        Nilai tidak valid
    </div>
    @endif
    </div>

    //kondisi switch
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ date(now())  }}
        </h1>
    </div>
    <br>
    @switch($nilai)
    @case(0)
    <div class="alert alert-danger d-inline-block">
        Tidak ikut ujian
    </div>
    @break
    @case(80)
    <div class="alert alert-success d-inline-block">
        Baik
    </div>
    @break
    @case(100)
    <div class="alert alert-success d-inline-block">
        Sempurna
    </div>
    @break
    @default
    <div class="alert alert-dark d-inline-block">
        Nilai tidak valid
    </div>
    @endswitch

    //perulangan for
    <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i = 0; $i < 5; $i++)
        <div class="alert alert-info d-inline-block">
            Laravel
        </div>
        @endfor
    </div>

    <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i = 0; $i < 5; $i++)
        <div class="alert alert-info d-inline-block">
            {{ $i }}
        </div>
        @endfor
    </div>

    //perulangan while
    <div class="container text-center mt-3 pt-3 bg-white">
        <?php $i = 0; ?>
        @while($i < 5)
        <div class="alert alert-info d-inline-block">
            {{ $i }}
        </div>
        <?php $i++ ?>
        @endwhile
    </div>

    //perulangan foreach
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach ($nilaiarray as $val)
        <div class="alert alert-info d-inline-block">
            {{ $val }}
        </div>
        @endforeach
    </div>

    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach ($nilaiarray as $val)
            @if (($val >= 0) and ($val <=50))
        <div class="alert alert-danger d-inline-block">
            {{$val}}
        </div>
        @elseif (($val >= 50) and ($val <= 100))
        <div class="alert alert-success d-inline-block">
            {{$val}}
        </div>
        @endif
        @endforeach
    </div>

    //perulangan forelse
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @forelse ($nilaiarray as $val)
            @if (($val >= 0) and ($val <=50))
        <div class="alert alert-danger d-inline-block">
            {{$val}}
        </div>
        @elseif (($val >= 50) and ($val <= 100))
        <div class="alert alert-success d-inline-block">
            {{$val}}
        </div>
        @endif
        @empty
        <div class="alert alert-dark d-inline-block">
            Tidak ada data...
        </div>
        @endforelse
    </div>

</body>

</html>