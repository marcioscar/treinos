@extends('layouts.app')

<header class="masthead" style="background-image:url('img/fundo.jpg');">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"><span>Bem-vindo a Quattor</span></div>
            <div class="intro-heading text-uppercase"><span>Completa como tem de ser</span></div><a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" role="button" href="#services">Quem somos</a></div>
    </div>
</header>

@section('content')

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/fonts/font-awesome.min.css">



</head>
<body>
    <section id="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Quattor Academia</h2>
                    <h3 class="text-muted section-subheading">A academia para toda família</h3>

                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-clock-o fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Horário</h4>
                    <p class="text-muted" ><h5>SEGUNDA A SEXTA</h5>6h - 23h</p>
                    <p class="text-muted" ><h5>SÁBADOS</h5>8h-12h / 15h-19h</p>
                    <p class="text-muted" ><h5>DOMINGOS E FERIADOS</h5>8h-12h</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-home fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Endereço</h4>
                    <p class="text-muted">Rua 5 Sul Lote 7 - Araucárias - Águas Claras</p>
                    <p class="text-muted">(61) 3965-7444 - (61) 99319-0568</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-table fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Método Quattor</h4>
                    <p class="text-muted">Método com treinamento de musculação, que envolve no mesmo programa exercícios para força, e o trabalho de outras valências musculares: Coordenação Motora e Resistência.</p>
                    <p class="text-muted">Os programas são atualizados semanalmente</p>
                    <p class="text-muted">Na sala de musculação, estarão os líderes, capacitados para orientar não somente sobre os treinos como também condutas e posturas no dia-a-dia.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Fique por dentro</h2>
                    <h3 class="section-subheading text-muted">fique sabendo o que acontece na Quator Academia</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="img/aulas_t.jpg"></a>
                    <div class="portfolio-caption">
                        <h4>Próximas Aulas</h4>
                        <p class="text-muted">aulas do dia</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="img/grade_t.jpg"></a>
                    <div class="portfolio-caption">
                        <h4>Grade de Aulas</h4>
                        <p class="text-muted">aulas da semana</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="img/prime.jpg"></a>
                    <div class="portfolio-caption">
                        <h4>Quattor Prime</h4>
                        <p class="text-muted">treinos individualizados</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">Time</h2>
                    <h3 class="text-muted section-subheading">Conheça nosso Time</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="img/renato.jpg">
                        <h4>Renato Neres</h4>
                        <p class="text-muted">Musculação</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="img/tiago.jpg">
                        <h4>Tiago</h4>
                        <p class="text-muted">Musculação</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="img/andre.jpg">
                        <h4>André</h4>
                        <p class="text-muted">Judô</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="img/renato_borges.jpg">
                        <h4>Renato Borges</h4>
                        <p class="text-muted">Coordenador</p>
                    </div>
                </div>


            <div class="col-sm-4">
                <div class="team-member"><img class="rounded-circle mx-auto" src="img/gustavo.jpg">
                    <h4>Gustavo</h4>
                    <p class="text-muted">Coordenador Musculação</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section id="contact" style="background-image:url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Fale com a gente</h2>
                    <h3 class="section-subheading text-muted">Mande sua sugestão ou solicite informação</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <form id="contactForm" name="contactForm" action="{{route('contato')}}"  novalidate="novalidate">
                    @csrf
                    @method('post');
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" name="nome" placeholder="Seu Nome *" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Seu Email *" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" name="tel" placeholder="Seu Telefone *" required=""><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" name="mensagem" placeholder="sua Mensagem *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Quattor Academia 2020</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="https://www.instagram.com/quattor_academia/"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/QuattorAcademia/"><i class="fa fa-facebook"></i></a></li>


                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="copyright">Rua 5 Sul Lote 7  -  Águas Claras - 3965-7444</span>

                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Próximas Aulas</h2>
                                    <p class="item-intro text-muted">Aulas de hoje</p>
                                    <tabela-lista
                                    v-bind:titulos="['Aula', 'Horário']"
                                    v-bind:itens="{{ $listaAulasDia }}"
                                    ></tabela-lista>

                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Sair</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Grade de Aulas</h2>
                                    <p class="item-intro text-muted">Selecione o dia da semana</p>
                                    <tabela-dia
                                    v-bind:titulos="['Aula', 'Horário', 'Dia']"
                                    v-bind:itens="{{ $listaAulas }}"
                                    ></tabela-dia>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Sair</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Quattor Prime</h2>
                                    <p class="item-intro text-muted">Conta com uma equipe de profissionais altamente qualificados, com a missão de proporcionar um atendimento diferenciado e uma experiência única e inovadora.</p>
                                    <h3>TREINOS INDIVIDUALIZADOS</h3>
                                    <p>Com treinos individualizados para todos e também para idosos, pessoas com problemas de saúde como diabete, obesidade, hérnias, osteoporose, fibromialgia, entre outros, e com trabalho em conjunto quando necessário de fisioterapeuta e/ou médicos para garantir a segurança e acelerar o processo de recuperação,
                                        a quattor prime visa resultados. A Quattor Prime está pronta para receber você e lhe ajudar a atingir seus objetivos!!</p>

                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Sair</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>


@endsection
