<x-guest-layout>
    <nav class="navbar navbar-expand-md navbar-dark bg-second">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Choice</a>
            <div class="d-flex">
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
                </div>
            </div>
        </div>
    </nav>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/header.svg') }}">
            <div class="container">
                <div class="carousel-caption text-center">
                    <h1>Sistemas e Mídias Digitais</h1>
                </div>
            </div>
        </div>
    </div>
    <main class="mw-container ms-auto me-auto">
        <div class="d-flex mw-container box mt-3 mb-3 p-2 align-items-center">
            <div class="col-7">
                <h2>Sobre o curso</h2>
                <p>O curso tem a finalidade de formar bacharéis com conhecimentos especializados em duas grandes áreas
                    principais: Sistemas Multimídia e Mídias Digitais. <br>
                    Desta forma, pretende-se contribuir para o desenvolvimento, no médio prazo, de novos perfis
                    profissionais que possam sustentar o desenvolvimento de um polo regional tecnológico no estado do
                    Ceará,
                    fomentando e viabilizando atividades produtivas nas áreas de produção de mídias digitais e
                    desenvolvimento de sistemas multimídia, como sistemas web e para dispositivos móveis, jogos digitais
                    e
                    animações gráficas.</p>
                <div class="d-flex">
                    <div class="d-flex col-7 flex-column">
                        <h5>Endereço:</h5>
                        <p> R. Pernambuco, 3182-3216 - Demócrito Rocha, Fortaleza - CE, 60440-140</p>
                    </div>
                    <div class="d-flex col-5 flex-column">
                        <h5> Duração do curso:</h5>
                        <p>{{ $graduations->period }}</p>
                    </div>
                    
                </div>
                <div class="d-flex flex-column">
                    <h5>Notas de Corte</h5>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">2022</th>
                        <th scope="col">2021</th>
                        <th scope="col">2020</th>
                        <th scope="col">2019</th>
                        <th scope="col">2018</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Integral</th>
                        <td>694,02</td>
                        <td>694,88</td>
                        <td>704,76</td>
                        <td>721,12</td>
                        <td>700,50</td>
                      </tr>
                      <tr>
                        <th scope="row">Noturno</th>
                        <td>681,72</td>
                        <td>681,48</td>
                        <td>683,32</td>
                        <td>703,56</td>
                        <td>678,32</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="d-flex col-5 justify-content-center">
                <div id="carouselExampleIndicators-desk" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators-desk" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators-desk" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators-desk" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators-desk" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/cursos/smd/2016-10-03.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/cursos/smd/2017-01-13.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/cursos/smd/2017-11-06.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/cursos/smd/2018-06-17.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleIndicators-desk" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleIndicators-desk" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                </div>
            </div>
        </div>

    </main>
    <section class="bg-second">
        <div class="text-center mw-container ms-auto me-auto p-3">
            <h2>Estrutura Curricular:</h2>
            <h4 class="d-flex off_titulo">1º, 2º e 3º Semestre:</h4>
            <p>Até o 3º semestre o estudante deve se matriuclar nas disciplinas obrigatórias referente aos seus
                semestres
                específicos.</p>
            <p>OBS: A partir do 2º semestre o estudante tem a liberdade de escolher optativas para preencher o
                currículo.
            </p>

            <h4>4º Semestre:</h4>
            <p>No 4º semestre, o aluno deve escolher entre disciplinas eletivas, para preencher o currículo, além de
                cursar
                algumas obrigatórias.</p>
            <p>4º Semestre: No mínimo 4 Eletivas</p>

            <h4>5º Semestre:</h4>
            <p>A partir do 5º semestre, o aluno deve escolher entre disciplinas eletivas, para preencher o currículo,
                além
                de cursar algumas disciplinas eletivas.</p>
            <p>5º Semestre: No mínimo 3 Eletivas + 2 Optativas</p>

            <h4>O que são disciplinas Obrigatórias?</h4>
            <p>O curso de SMD é formado por duas grandes áreas, Sistemas Multimídias e Mídias Digitais. As disciplinas
                obrigatórias são a base curricular dessas áreas.</p>
            <p>Você Deve cursá-las ao longo de todas as graduações, algumas delas são pré-requisito para outras
                disciplinas.
            </p>

            <h4>O que são disciplinas Eletivas?</h4>
            <p>As disciplinas eletivas surgem para complementar o perfil profissional, elas são específicas de cada
                área.
            </p>
            <p>É permitido misturar as disciplinas para seguir diversas áreas.</p>

            <h4>O que são disciplinas Optativas?</h4>
            <p>As disciplinas optativas, são não-obrigatórias, podem ser ofertadas dentro do curso de SMD, fazendo parte
                do
                sistema de TRILHAS. </p>
            <p>Você pode procurar disciplinas optativas em outros cursos para enriquecer seu currículo.</p>
            <p>Geralmente a flexibilização do curso permite a matrícula em optativas a partir do 2º semestre, mas é
                recomendado que seja feita a partir do 5º semestre.</p>
            <a class="btn-trilhas p-2" href="{{ route('trilhas.show') }}">Clique e confira as TRILHAS acadêmicas</a>
        </div>
    </section>
    <footer class="bg-footer p-2 text-center">
        <p class="m-0">&copy;Todos os Direitos Reservados</p>
    </footer>

</x-guest-layout>