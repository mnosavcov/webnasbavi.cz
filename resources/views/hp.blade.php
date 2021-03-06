@extends('layouts.app', ['page_id' => 'hp'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pre-header">tvoříme projekty na&nbsp;úrovni</div>
                <h1>web nás baví</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 btn-napiste-nam-wrap">
                <a href="javascript:void(0);" class="btn-napiste-nam">napište nám</a>
            </div>
        </div>
    </div>

    <div class="top-block">
        <div class="top-block-bottom">
            <div class="container">
                <div class="arrow-down-wrap">
                    <div class="arrow-down-arrow"></div>
                </div>
                <div class="naladeni-wrap">
                    <div class="bg-dark nase-hodnoty">
                        <div class="line-01">
                            <span>naše hodnoty</span><br>v kostce
                            <ul>
                                <li>spolehlivost</li>
                                <li>flexibilita</li>
                                <li>spokojenost</li>
                            </ul>
                        </div>
                    </div>

                    <div class="naladeni-content">
                        <h2 class="light">na&nbsp;čem nám&nbsp;záleží</h2>
                        <ul class="d-block d-lg-flex justify-content-between">
                            <li><h3>zkušenosti</h3><span class="line"></span><span
                                        class="naladeni-text">máme {{ date('Y') - 2002 }}
                                    let praxe<br>a vytvořili jsme<br>desítky projektů</span>
                            </li>
                            <li><h3>osobní&nbsp;přístup</h3><span class="line"></span><span class="naladeni-text">postaráme se o vás,<br>protože na našich klientech<br>nám záleží</span>
                            </li>
                            <li><h3>profesionalita</h3><span class="line"></span><span class="naladeni-text">pracujeme důsledně,<br>kreativně a efektivně</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center">
        <h2>co nabízíme</h2><span class="wave"></span>
    </div>

    <div class="container balicky">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="box box-01">
                    <div class="line-01">web</div>
                    <div class="line-02">STANDARD</div>
                    <div class="icon-wrap">
                        {{--<div class="icon"></div>--}}
                        <span class="fas fa-paper-plane icon"></span>
                    </div>
                    <div class="line-03">
                        grafický návrh<br>
                        jednoduchá administrace<br>
                        kontaktní formulář<br>
                        <a href="javascript:void(0);" class="btn-napiste-nam-second" style="text-decoration: none;"><span><strong>.&nbsp;.&nbsp;.</strong></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="box box-02">
                    <div class="line-01">web</div>
                    <div class="line-02">PREMIUM</div>
                    <div class="icon-wrap">
                        {{--<div class="icon"></div>--}}
                        <span class="fas fa-plane icon"></span>
                    </div>
                    <div class="line-03">
                        grafický návrh<br>
                        <span>pokročilá administrace</span><br>
                        <span>fotogalerie</span><br>
                        <a href="javascript:void(0);" class="btn-napiste-nam-second" style="text-decoration: none;"><span><strong>.&nbsp;.&nbsp;.</strong></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="box box-03">
                    <div class="line-01">web</div>
                    <div class="line-02">NA MÍRU</div>
                    <div class="icon-wrap">
                        {{--<div class="icon"></div>--}}
                        <span class="fas fa-rocket icon"></span>
                    </div>
                    <div class="line-03">
                        grafický návrh<br>
                        <span>administrace na míru</span><br>
                        <span><strong>dynamický prvek</strong></span><br>
                        <a href="javascript:void(0);" class="btn-napiste-nam-second" style="text-decoration: none;"><span><strong>.&nbsp;.&nbsp;.</strong></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="container text-center">--}}
    {{--<a href="{{ route('cenik') }}" class="offer">více</a>--}}
    {{--</div>--}}
    <div style="height: 150px;"></div>
    {{--jen dočasně--}}

    <div class="container text-center">
        <h2>naše projekty</h2><span class="wave"></span>
    </div>

    <div class="ochutnavka-wrap">
        <div class="container">
            <div class="row jssor_1-wrap">
                <div id="jssor_1"
                     style="position:relative;top:0px;left:0px;width:1140px;height:704px;overflow:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin"
                         style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                             src="svg/spin.svg"/>
                    </div>
                    <div data-u="slides"
                         style="position:absolute;top:0px;left:0px;width:1140px;height:704px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="/img/reference/001.png"/>
                        </div>
                        <div>
                            <img data-u="image" src="/img/reference/002.png"/>
                        </div>
                        <div>
                            <img data-u="image" src="/img/reference/003.png"/>
                        </div>
                        <div>
                            <img data-u="image" src="/img/reference/004.png"/>
                        </div>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;"
                         data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewBox="0 0 16000 16000"
                                 style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;"
                         data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewBox="0 0 16000 16000"
                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;"
                         data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewBox="0 0 16000 16000"
                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--
    <div class="reference-wrap">
        <div class="container text-center">
            <div>
                <h2>reference</h2><span class="wave"></span>
            </div>
            <ul class="reference">
                <li>
                    <span class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</span>
                    <span class="name text-right">Karel Mařík</span>
                    <span class="company text-right">majitel společnosti.</span>
                </li>
                <li>
                    <span class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</span>
                    <span class="name">Karel Mařík</span>
                    <span class="company">majitel společnosti.</span>
                </li>
            </ul>
        </div>
    </div>
    --}}

    <div class="form-wrap" id="napiste-nam">
        <div class="container text-center">
            <div>
                <h2>chcete také úspěšný web?
                    <div class="napiste-nam-mezera"></div>
                    napište nám
                </h2>
                <span class="wave"></span>
            </div>
            <form id="contact-form" class="contact-form" action="{{ route('ajax--napiste-nam') }}" method="post" onsubmit="return false;" data-c="nejsem" data-d="chobot">
                @csrf
                <label for="f-name">jméno</label>
                <input type="text" name="name" id="f-name" class="text-input">
                <label for="f-contact">e-mail, nebo telefon *</label>
                <input type="text" name="contact" id="f-contact" class="text-input">
                <label for="f-message">zpráva *</label>
                <textarea name="message" id="f-message"></textarea>
                <div class="text-left">
                    <input type="checkbox" name="confirm" id="f-confirm" class="checkbox-input">
                    <label for="f-confirm" class="label-checkbox">* odesláním formuláře souhlasíte se zpracováním
                        osobních
                        údajů <a href="{{ route('ochrana-osobnich-udaju') }}" target="_blank">ochrana os.
                            údajů</a></label>
                </div>
                <button type="submit" name="odeslat_zpravu" class="btn-odeslat-zpravu">odeslat</button>
            </form>
            <script>
                var f = $('#contact' + '-' + 'form');
                f.append('<in'+'put ty'+'pe="hid' + 'den" na' + 'me="r' + 'eca' + 'ptch' + 'a" val="robot">');
                f.find('input[name=rec' + 'aptc' + 'ha]').val(f.attr('data-c'));
                f.on('sub' + 'mit', function() {
                    $(this).find('input[name=rec' + 'aptc' + 'ha]').val($(this).attr('data-d')).attr('name', 're');
                })
            </script>
        </div>
    </div>
@endsection
