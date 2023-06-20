<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LUA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-second">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lua</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trilhas</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/header.svg') }}">
            <div class="container">
                <div class="carousel-caption text-center">
                    <h1>Trilhas Acadêmicas</h1>
                </div>
            </div>
        </div>
    </div>
    <main class="mw-container">
        <h2>O que são trilhas acadêmicas?</h2>
        <p>As trilhas, chamadas também de intrinerários formativos, são áreas específicas, compostas por determinadas
            disciplinas optativas, ofertadas pelo próprio curso. Cada trilha possui um grupo de disciplnas que compoem a
            formação na área.
            As áreas são:
        </p>
        <div class="bg-second p-3 m-3 rounded">
            <a class="d-flex justify-content-between align-items-center" href="{{ route('trilhas.animacao') }}">
                <div class="col-7">
                <h3>Animação e audiovisual</h3>
                <p>Busca explorar os recursos tecnológicos, as ferramentas e os conhecimentos operacionais aplicados às
                    áreas de produção artística, cultural e multimídia, para uso nas produções estudantis.
                </p>
            </div>
            <img class="col-5 sz-200" src="{{ asset('images/icones/animacao.svg') }}" alt="">
            </a>
        </div>
        <div class="bg-second p-3 m-3 rounded">
            <a class="d-flex justify-content-between align-items-center" href="{{ route('trilhas.design') }}">
               <div class="col-7">
                <h3>Design Digital Interativo</h3>
                <p>Busca estimular uma visão crítica do processo de design, e de suas funções (prática, estética e simbólica). Abrange a interatividade no design digital, e questões relativas a experiência do usuário. 
                </p>
            </div>
            <img class="col-5 sz-200" src="{{ asset('images/icones/design.svg') }}" alt="">
            </a>
        </div>
        <div class="bg-second p-3 m-3 rounded">
            <a class="d-flex justify-content-between align-items-center" href="{{ route('trilhas.jogos') }}">
                <div class="col-7">
                <h3>Jogos Digitais</h3>
                <p>Os componentes curriculares da trilha oferecem múltiplas perspectivas sobre a interatividade em multimídia digital, contemplando aspectos teóricos e práticos no desenvolvimento de jogos.
                </p>
                </div>
                <img class="col-5 sz-200" src="{{ asset('images/icones/jogos.svg') }}" alt="">
            </a>
        </div>
        <div class="bg-second p-3 m-3 rounded">
            <a class= "d-flex justify-content-between align-items-center" href="{{ route('trilhas.sistemas') }}">
                <div class="col-7">
                <h3>Sistemas Multimídia</h3>
                <p >Busca desenvolver nos discentes a capacidade de representar as informações nestes sistemas de forma múltipla, como por meio de imagens, vídeos e linguagem sonora, sejam elas integradas ou isoladas em mídias interativas. 
                </p>
                </div>
                <img class="col-5 sz-200" src="{{ asset('images/icones/prog.svg') }}" alt="">
            </a>
        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>
