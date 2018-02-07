@extends('core.layout')

@section('content')
    <div class="level level-hero hero-home has-hint mb-40">

        <div class="hero-overlay visible-lg"></div>

        <video loop id=bg-video class=fullscreen-video>
            <source src="video/bitlitas.webm" type="video/webm">
            <source src="video/bitlitas.mp4" type="video/mp4">
        </video>

        <div class="container full-height">
            <div class="v-align-parent">
                <div class="v-center headerRow">
                    <div class="row">
                        <div class="col-xs-12  col-sm-3 col-md-2 mb-20">
                            <img src="img/logo.png" alt="BitLitas logo">
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <h1 class="heading">BitLitas</h1>

                            <div class="subheading mb-50">Lietuviškas pinigas vėl sugrįžo!</div>
                        </div>
                    </div>
                    <div class="mb-15">
                        <a class="btn btn-prepend" href="downloads/v1/bitlitas.tar.gz">
                            <img src="img/linux.png"> Linux versija
                        </a>
                        <a class="btn btn-prepend" href="downloads/v1/bitlitas.exe">
                            <img src="img/windows.png"> Windows versija
                        </a>
                    </div>
                    <div>
                        v1.0.1
                    </div>
                </div>
            </div>

            <div class=hint-arrow></div>
        </div>
    </div>

    <div>
        <div class="container mb-50 xs-mb-30">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="progress green">
                        {{--<span class="progress-left">--}}
                        {{--<span class="progress-bar"></span>--}}
                        {{--</span>--}}
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>

                        <div class="progress-value">{{ $moneyPercent }} %</div>
                    </div>
                    <p class="text-center">Iš 18.3 mln. jau iškasta {{ $money }}</p>
                    <p class="text-center fs-12">*Bet ne mažiau 0.3 LIT už bloką</p>

                    <hr class="hidden-sm hidden-md hidden-lg">
                </div>

                <div class="col-sm-4 col-xs-12">
                    <ul class="list-group text-center">
                        <li class="list-group-item">Algoritmas: CryptoNight, Monero</li>
                        <li class="list-group-item">Bloko laikas: 60 sek.</li>
                        <li class="list-group-item">Dabartinis blokų aukštis: {{ $lastBlockHeight }}</li>
                        <li class="list-group-item">Apdovanojimas už paskutinį bloką: {{ $lastBlockAmount }} LIT</li>
                    </ul>
                    <hr class="hidden-sm hidden-md hidden-lg">
                </div>

                <div class="col-sm-4 col-xs-12 text-center">
                    <h2 class="fs-35 speed">Tinklo greitis <span class="label label-success">{{ $hashRate }}</span></h2>
                    <hr>
                    <p>Sunkumas <span class="label label-warning">{{ number_format($difficulty, 0) }}</span></p>
                </div>
            </div>
            <hr>
        </div>


        <div class="container mb-100 xs-mb-40">
            <div class="row xs-text-center">
                <div class="col-sm-5 col-md-4 col-md-offset-2 col-sm-offset-1">
                    <h1 class="mb-10 xs-mb-10 color-dark heading-bordered">Viskas vienoje<br class=hidden-xs> programoje
                    </h1>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <h2 class="w-300 color-dark mb-10 xs-mb-10">Kask ir laikyk valiutą</h2>

                    <p class="xs-mw">Tik nepamiršk pasidaryti atsarginės kopijos!
                </div>
            </div>
        </div>

        <img src="img/programoje.png" alt class="mb-80 hidden-xs program-inline">

        <div class=container>
            <div class="row mb-90 xs-mb-0 xs-text-center">

                <div class="col-sm-1 col-sm-offset-2">
                    <i class="icon icon-check"></i>
                </div>
                <div class="col-sm-3">
                    <h3 class="mb-15">Saugumas</h3>

                    <p class="smaller xs-mb-40 xs-mw">BitLitas yra decentralizuota valiuta, o tai reiškia, kad
                        transakcijų patikimumą užtikrina visi tinkle esantys kompiuteriai</div>

                <div class="col-sm-1">
                    <i class="icon icon-calendar"></i>
                </div>
                <div class="col-sm-3">
                    <h3 class="mb-15">Mokesčiai</h3>

                    <p class="smaller xs-mb-40 xs-mw">Už pervedimus tinkle taikomas mažas mokestis, kuris keliauja
                        kasėjams
                </div>

            </div>

            <div class="row xs-text-center">

                <div class="col-sm-1 col-sm-offset-2">
                    <i class="icon icon-user"></i>
                </div>
                <div class="col-sm-3">
                    <h3 class="mb-15">Privatumas</h3>

                    <p class="smaller xs-mb-40 xs-mw">Sistema naudoja žiedinius parašus (Ring Signature) ir slaptus
                        adresus tam, kad apsunkintų visų sandorių kilmę ir sumą. Kitaip nei BitCoin, ši valiuta nėra
                        vien tik pseudo anoniminė.</p>
                </div>

                <div class="col-sm-1">
                    <i class="icon icon-clock"></i>
                </div>
                <div class="col-sm-3">
                    <h3 class="mb-15">Greitis</h3>

                    <p class="smaller xs-mb-40 xs-mw">BitLito tinkle vykdomi momentiniai pervedimai, kuriuos užtvirtina
                        tinklo dalyviai statydami blokų grandinę
                </div>

            </div>
        </div>
    </div>

    <div class="level level-img-right">

        <div class="container xs-mb-30">
            <div class="row mb-60 xs-mb-20">
                <div class="col-sm-6 col-lg-offset-1 col-lg-5">
                    <h1 class="mb-20 xs-mb-10 heading color-dark heading-bordered xl-heading-outdent">Daugiau</h1>
                </div>
            </div>

            <div class="visible-xs xs-mb-40 programImg">
                <img src="img/programoje.png" alt>
            </div>


            <div class="row mb-60 xs-mb-20">
                <div class="col-sm-1 col-lg-offset-1">
                    <i class="icon icon-eye"></i>
                </div>
                <div class="col-sm-8 col-md-8">
                    <h3 class="mb-15">Atviro kodo bendruomenė</h3>

                    <p class="smaller xs-mw">
                        <a target="_blank" href="https://github.com/bitlitas/">GitHub.com</a>, <a target="_blank"
                                                                                                  href="http://bit.ly/bitlitas">Discord
                            Chat kanalas</a>
                    </p>
                </div>
            </div>

            <div class="row mb-60 xs-mb-20">
                <div class="col-sm-1 col-lg-offset-1">
                    <i class="icon icon-loop"></i>
                </div>
                <div class="col-sm-8 col-md-8 support">
                    <h3 class="mb-15">Parama projektui</h3>

                    <p class="smallest">
                        LIT:
                        48s6r8VYQKUTrVvujtLxijTEzwCRyeW8PjF9aCAEeMGW1FLDJM2LhorEShbpbPRrxHANx3TKLT2mpaHybvKZLzC964iWHq6
                    </p>

                    <p class="smallest">
                        BTC: 1G6x6ww5EbWgMrkY9jUXtX5Sio7DTm7u35
                    </p>

                    <p class="smallest">
                        ETH: 0x3602d4586a8129f400eddc503e85f95c576043b2
                    </p>

                    <p class="smaller xs-mw">
                        <a target="_blank" href="https://paypal.me/spliffymap/4.20"><img height="40"
                                                                                         src="https://spliffymap.com/library/images/paypal.png"></a>
                    </p>
                </div>
            </div>

            <div class="row mb-60 xs-mb-20">
                <div class="col-sm-1 col-lg-offset-1">
                    <i class="icon icon-globe"></i>
                </div>
                <div class="col-sm-4 col-md-3">
                    <h3 class="mb-15">Mes facebook</h3>

                    <p class="smaller">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBitlitas&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=922462774589472"
                                width="340" height="214" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowTransparency="true"></iframe>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="level level-outro text-center">-->
    <!--<div class=container>-->

    <!--<form class=contact method=get action="/" accept-charset="UTF-8">-->

    <!--<div class="h2 mb-20">Gaukite visas <br class=visible-xs-block> naujienas</div>-->
    <!--<p class="mb-35">Įveskite savo el. pašto adresą-->

    <!--<div class="btn-append">-->
    <!--<input type=tel class="text phoneNumber" name="tel" placeholder="El. paštas" required>-->

    <!--<input type=submit class="submit appended" value="Sekti">-->
    <!--</div>-->
    <!--</form>-->
    <!--</div>-->
    <!--</div>-->
@endsection