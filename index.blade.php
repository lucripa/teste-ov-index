@extends('layouts.app')

@section('content')

@section('style')

<style>
    .select2-container--default .select2-selection--single .select2-selection__arrow,
    .select2-container--default .select2-selection--multiple,
    .select2-container .select2-selection--single {

        border-color: #181a6b !important;
        border-radius: 10px !important;
        border-width: 1px !important;
    }

    .input-daterange input:first-child,
    .input-daterange input:last-child {
        border-radius: 10px !important;
    }

    .tb__modal {
        width: 85vw !important;
        height: auto !important;
        position: absolute;
        margin-top: 150px;
        padding: 20px;
        /*background-color: #ffffff;*/
    }

    th,
    td {
        white-space: nowrap;
        overflow: hidden;
    }

    .dataTables_wrapper {
        padding-bottom: 0 !important;
    }

    .modal-header .close {
        margin-top: -2px;
        color: white;
        opacity: 1;
    }

    .close {
        float: right;
        font-size: 21px;
        font-weight: 700;
        line-height: 1;
        text-shadow: 0 1px 0 #fff;
    }

    .divisor__margin-bottom {
        margin-bottom: 20px !important;
    }

    .canhoto-img img {
        max-width: 100%;
    }

    #app {
        overflow: hidden !important;
    }

    .text__prepara__margin  {
        margin-top: 2%;
        font-family: inherit;
    }

    h4 {
        line-height: 0px !important;
    }

    .modal2 {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 85%;
        height: 70%;
        border-width: medium;
        border-style: solid;
        border-color: rgb(24, 26, 107);
        border-radius: 20px;
        display: none;
    }

    .modal2-guts {
        position: fixed;
        width: 100%;
        height: 15%;
        background-color: #181a6b;
        border-radius: 17px 17px 0px 0px;
        padding: 1vw 1vw;


    }

    .modal3-guts {
        position: fixed;
        width: 100%;
        height: 86%;
        background-color: #000;
        margin-top: 5%;
        border-radius: 0px 0px 17px 17px;

    }

    .modal4-guts {
        position: fixed;
        width: 494px;
        height: 68px;
        background-color: #fff;
        border-radius: 0px 0px 17px 17px;
        padding: 0.5vw 1vw;
        text-align: center;
        margin-top: 422px;

    }

    #btn-close-tracking {
        background-color: transparent;
        border: none;
        padding: 8px;
        font-size: 16px;
        width: 25px;
        height: 25px;
        right: 20px;
    }

    #btn-close-tracking::before {
        content: "x";
        color: black;
        font-weight: bold;
    }

    .botao-close-geo {
        position: fixed;
        border-radius: 0px 0px 17px 17px;
        padding: 0.5vw 1vw;
        text-align: center;
        margin-top: -38px;
        margin-left: 94%;
        font-size: 18px;
        font-weight: bold;
        color: #FFF;
        cursor: pointer;
    }

    .mapa {
        width: 100%;
        height: 100%;
        border-radius: 0px 0px 17px 17px;
    }

    .modal_comprovante {
        position: fixed;
        top: 54%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 70%;
        height: 85%;
        border-width: medium;
        border-style: solid;
        /*border-color: #263B96;*/
        border-radius: 20px;
        display: none;

    }

    .modal_comprovante2-guts {
        position: fixed;
        width: 100%;
        height: 75px;
        background-color: #202d69;
        border-radius: 17px 17px 0px 0px;
        padding: 1vw 1vw;

    }

    .modal_comprovante3-guts {
        position: fixed;
        width: 100%;
        height: 80%;
        background-color: #FFF;
        margin-top: 75px;
        text-align: center;
    }

    .modal_comprovante3-guts .modal-content,
    .modal_comprovante3-guts .modal-content  img {
        height: 100%;
    }

    .modal_comprovante4-guts {
        position: fixed;
        height: 10.8%;
        background-color: #fff;
        border-radius: 0px 0px 17px 17px;
        padding: 0.5vw 1vw;
        text-align: center;
        margin-top: 422px;
        width: 100% !important;
        margin-top: 50%;

    }

    .botao-close-comprovante {
        position: fixed;
        border-radius: 0px 0px 17px 17px;
        padding: 0.5vw 1vw;
        text-align: center;
        margin-top: -38px;
        margin-left: 95%;
        font-size: 18px;
        font-weight: bold;
        color: #FFF;
        cursor: pointer;
    }

    .botao-close-preparacao {
        position: fixed;
        border-radius: 0px 0px 17px 17px;
        padding: 0.5vw 1vw;
        text-align: center;
        margin-top: -5px;
        margin-left: 1%;
        font-size: 15px;
        font-weight: bold;
        color: #FFF;
        cursor: pointer;
    }

    .botao-close-rapida {
        position: fixed;
        border-radius: 0px 0px 17px 17px;
        padding: 0.5vw 1vw;
        text-align: center;
        margin-top: -5px;
        margin-left: 1%;
        font-size: 15px;
        font-weight: bold;
        color: #FFF;
        cursor: pointer;
    }

    .btn-canhoto {
        height: 50px;
        width: 50px;
        padding: 0;
        margin: 1px -3px;
        border: 2px solid #263B96;
        background: white;
        font-size: 17px;
        line-height: 1;
        color: #263B96;
        display: inline;
        position: relative;
    }

    .botao-zoomin {
        border-radius: 50% 0 0 50%;
    }

    .botao-rotate-right {
        border-radius: 0 50% 50% 0;
        margin-right: 40px;
    }

    .ibox {
        clear: both;
        margin-bottom: 25px;
        margin-top: 10%;
        padding: 0;
        width: 95%;
        height: 95%;
    }


    .text__h4__dash--size {
        font-size: 1.2em;
        line-height: 5px;
        text-align: center;
        font-family: sans-serif;
    }


    .span__preparacao__rapida {
        display: none;
        width: 18%;
        height: 20%;
        flex-direction: column;
        justify-content: space-between;
        align-items: baseline;
        position: fixed;
        margin-top: 1%;

        border-radius: 10px;
        border: 1px solid #181a6b;
        background-color: #ffffff;
        z-index: 999;
    }

    .text__h3__rapida--size {
        font-size: 1.0em;
        font-family: sans-serif;
    }

    .container__detalhes__box__footer__left__item_tracking {
        margin-top: 5px;
    }

    #detalhe_on_tracking {
        margin-top: -0.5%;
        margin-left: 3.5%;
    }

    .modalTracking {
        background-color: green;
        display: block !important;
    }

    .span__preparacao_tracking {
        background-color: white;
        height: 150px;
        margin-top: -150px;
        margin-left: 150px;
        overflow-y: initial !important;
    }

    .container__detalhes__box__top__panel {
        background-color: white;
    }

    .container__detalhes__header {
        background-color: white;
    }

</style>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/sparrow/css/pages/dashboard/agv-supply/agv-suply.css" />
<link rel="stylesheet" type="text/css" href="/sparrow/css/pages/dashboard/agv-supply/buscaRapida.css" />
<link rel="stylesheet" type="text/css"
      href="/sparrow/css/pages/dashboard/agv-supply/buscaAvancada.css" />
<link rel="stylesheet" type="text/css" href="/sparrow/css/pages/dashboard/agv-supply/detalhes.css" />

<!-- agv-styled -->
<link rel="stylesheet" type="text/css" href="/sparrow/css/agv-styled/text.css" />
<link rel="stylesheet" type="text/css" href="/sparrow/css/agv-styled/button.css" />
<link rel="stylesheet" type="text/css" href="/sparrow/css/agv-styled/input.css" />
<link rel="stylesheet" type="text/css" href="/sparrow/css/agv-styled/theme/blue-orange.css" />

<!-- COMPROVANTE -->
<link rel="stylesheet" type="text/css" href="/css/plugins/cropper/cropper.min.css" />

<!-- Graficos Dasboard -->
<link href="/css/plugins/chartist/chartist.min.css" rel="stylesheet">


@append

@section('script')

<!-- JS -->
<script type="text/javascript" src="/sparrow/js/pages/dashboard/agv-supply/agv-supply.js"></script>

<!-- Graficos Dasboard -->
<script type="text/javascript" src="/js/plugins/chartJs/Chart.min.js"></script>
<script type="text/javascript" src="/js/order-visibility.js"></script>

<!-- GEOLOCALICAO -->

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDej-p4fjObaUrS0216xUhksoLtr0Jb4SY&callback=callMap">
</script>

<!-- COMPROVANTE -->
<script type="text/javascript" src="/js/plugins/cropper/cropper.min.js"></script>
<script type="text/javascript" src="/js/plugins/lightbox2/lightbox.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>


@append

<section id="content" class="content">

<section id="homeBuscaRapida" class="container">

    <!-- Header -->
    <div class="container__header">
        <div class="container__header__item container__header__item--borderLeft container__header__item--active"
             tabindex="0" onclick="btnBuscaRapida()" id="aba_rapida">
            <h2 class="text__h2--size color__text__primary">Busca Rápida</h2>
        </div>

        <div class="container__header__item container__header__item--borderCenter" tabindex="0"
             onclick="btnBuscaAvancada()" id="aba_avancada">
            <h2 class="text__h2--size color__text__primary">Busca Avançada</h2>
        </div>

        <div class="container__header__item container__header__item--borderRight" tabindex="0"
             onclick="btnDashboard()" id='btnDashboard'>
            <h2 class="text__h2--size color__text__primary">Dashboard</h2>
        </div>
    </div>

    <!-- Container - Center - Busca rápida  -->
    <div id="busca__rapida" class="container__center">
        <h3 class="text__h3__busca--size"></h3>
        <p class="text__p--size">Encontre e visualize seus pedidos rapidamente!</p>
        <p class="text__p--size">Busca apenas dos últimos três meses. Caso não tenha o Número do Pedido, NF-e ou CT-e ou prefira uma busca com mais filtros
            selecione a "Busca Avançada".</p>
        <div class="container__center__box">
            <input class="text__input--size container__center__box__input" type="text" id='buscaRapida'
                   placeholder="Númedo do Pedido, NF-e ou CT-e" required>
            <button class="text__button--small button__default button__small text__color--second"
                    id='btnBuscaRapida' onclick="goListBucaRapida()">Pesquisar</button>
        </div>
        <div class="container__botton__box">

            <div class="container__footer__box__item container__footer__box__item--notBorder">
                <h3 class="text__h2--size">Análise por Status</h3>
            </div>

            <div class="container__footer__box__item" id="botao_analise_pedido">
                <div class="container__footer__box__item__icon container__footer__box__item__icon--PR"></div>
                <div class="container__footer__box__item__text">
                    <h4 class="h4-text-size color__text__primary">Pedido</h4>
                    <h4 class="h4-text-size color__text__primary">Recebido</h4>
                </div>
            </div>

            <div class="container__footer__box__item" id="botao_analise_preparacao">
                <div class="container__footer__box__item__icon container__footer__box__item__icon--PP"></div>
                <div class="container__footer__box__item__text">
                    <h4 class="h4-text-size color__text__primary">Preparação</h4>
                    <h4 class="h4-text-size color__text__primary">do Pedido</h4>
                </div>
            </div>

            <div class="container__footer__box__item" id="botao_analise_transito">
                <div class="container__footer__box__item__icon container__footer__box__item__icon--ET"></div>
                <div class="container__footer__box__item__text">
                    <h4 class="h4-text-size color__text__primary">Em</h4>
                    <h4 class="h4-text-size color__text__primary">Trânsito</h4>
                </div>
            </div>

            <div class="container__footer__box__item" id="botao_analise_entrega">
                <div class="container__footer__box__item__icon container__footer__box__item__icon--PRZ"></div>
                <div class="container__footer__box__item__text">
                    <h4 class="h4-text-size color__text__primary">Entrega</h4>
                    <h4 class="h4-text-size color__text__primary">Realizada</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Container - Center - Busca Avançada  -->
    <div id="busca__avancada" class="container__center__grid" style="display:none;">
        <div class="container__center__grid__item">

            <!-- Line 1 -->
            <form class="container__center__grid__item__form">
                <div class="container__center__grid__item__form__box__data">
                    <h4 class="text__h4--size">Tipo data</h4>
                    <select class="select2" name="tipo_data" id="tipo_data">
                        <option value="1">Período Data de Entrega</option>
                        <option value="2" selected>Período Emissão da NF-e</option>
                        <option value="3">Previsão de Entrega</option>
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__data__picker">
                    <h4 class="text__h4--size">Data</h4>

                    <div class="container__center__grid__item__form__box__date">
                        <div class="input-daterange input-group" id="datepicker">
                            <input type="text" id="dtini" name="dtini" class="form__avancado__data--control"
                                   value="{{ $data_inicial }}" />
                            <span class="input__avancado-group-addon">a</span>
                            <input type="text" id="dtfim" name="dtfim" class="form__avancado__data--control"
                                   value="{{ $data_fim }}" />

                        </div>
                    </div>
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">Venda</h4>
                    <input type="text" name="pedido_cliente_venda" id="pedido_cliente_venda" value="" class="form__avancado--control">
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">Pedido</h4>
                    <input type="text" name="pedido_nfe" id="pedido_nfe" value="" class="form__avancado--control">
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">NF-e</h4>
                    <input type="text" name="nota" id="nota" value="" class="form__avancado--control">
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">CT-e</h4>
                    <input type="text" name="cte" id="cte" value="" class="form__avancado--control">
                </div>

            </form>

            <!-- Line 2 -->
            <form class="container__center__grid__item__form">
                <div class="container__center__grid__item__form__box__data__remet__destin">
                    <h4 class="text__h4--size">Destinatário</h4>
                    <input type="text" name="destinatario" id="destinatario" value=""
                           class="form__avancado--control">
                </div>
                <div id="iscnpjdest"></div>
                <div class="container__center__grid__item__form__box__data__uf">
                    <h4 class="text__h4--size">Estado</h4>
                    <select class="select2" name="desti_estado" id="desti_estado">
                        <option value=" ">Todos</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AM">AM</option>
                        <option value="AP">AP</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MG">MG</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="PR">PR</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SE">SE</option>
                        <option value="SP">SP</option>
                        <option value="TO">TO</option>
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__data__cidade">
                    <h4 class="text__h4--size">Cidade</h4>
                    <div>
                        <select class="select2" name="desti_cidade" id="desti_cidade" disabled>
                            <option value=" ">Todos</option>
                        </select>
                    </div>
                </div>
                <div class="container__center__grid__item__form__box__data__tipo_produto">
                    <h4 class="text__h4--size">Produto</h4>
                    <div>
                        <select class="select2" name="tipo_produto" id="tipo_produto">
                            <option value=" ">Todos</option>
                            @if(is_array($tipo_produto))
                                @foreach($tipo_produto as $produto)
                                    <option value="{{ $produto->tipo_produto }}">{{ $produto->tipo_produto }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div class="container__center__grid__item__form__box__data__tipo_produto">
                    <h4 class="text__h4--size">BU</h4>
                    <div>
                        <select class="select2" name="segmento" id="segmento">
                            <option value=" ">Todos</option>
                            @if(is_array($bu))
                                @foreach($bu as $item)
                                    <option value="{{ $item->segmento }}">{{ $item->segmento }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </form>

            <!-- Line 3 -->
            <form class="container__center__grid__item__form">

                <div class="container__center__grid__item__form__box__data__remet__destin">
                    <h4 class="text__h4--size">Remetente</h4>
                    <select class='select2' id="empresa" name="empresa" multiple>
                        <option value="">Todas</option>
                        @if(is_array($empresa))
                            @foreach($empresa as $emp)
                                <option value="{{ $emp->cgc }}">{{ $emp->raz }} - {{ $emp->cgc }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">Grupo B.O</h4>
                    <div>
                        <select class="select2" name="grupo_bo" id="grupo_bo">
                            <option value=" ">Todos</option>
                            @if(is_array($grupos_bo))
                                @foreach($grupos_bo as $grupo_bo)
                                    <option value="{{ $grupo_bo->grupo_bo }}">{{ $grupo_bo->grupo_bo }} {{ $grupo_bo->desc_grupo_bo? " - " . $grupo_bo->desc_grupo_bo : "" }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">Status</h4>
                    <select class="form-select__default" name="visao_form" id="visao_form" multiple>
                        <option value=" ">Todos</option>
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">Operacional</h4>
                    <select class="select2" name="status_op" id="status_op">
                        <option value=" ">Todos</option>
                        <option value="1">Em Preparação</option>
                        <option value="2">Em Separação</option>
                        <option value="3">Em Conferencia</option>
                        <option value="4">Conferido</option>
                        <option value="5">Expedido</option>
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">VIP</h4>
                    <select class="select2" name="vip" id="vip">
                        <option value=" ">Todos</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">Ocorrência</h4>
                    <select class="select2" name="ocorrencia" id="ocorrencia">
                        <option value=" ">Todos</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__data__dados">
                    <h4 class="text__h4--size">Transporte Solistica</h4>
                    <select class="select2" name="transp_solistica" id="transp_solistica">
                        <option value=" ">Todos</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
            </form>
        </div>

        <!-- Button - Pesquisar -->
        <div class="container__center__grid__containerButton">
            <button class="text__button--small button__default button__small text__color--second" type="button"
                    id="btnatualizar">Pesquisar</button>&nbsp;
            <div class="button_limpa" id="btnLimpa"></div>
        </div>
    </div>

    <!-- Container - Center - LISTA Busca Avançada  -->
    <div id="busca_avancada_lista" class="container__center__grid" style="display:none;">
        <div class="container__center__grid__footer__item">
            <!-- Button - Expot excel -->
            <div class="container__center__grid__containerButton">
                <button class="text__button--small button__default button__small text__color--second" type="button"
                        id="btnNovaBusca">Nova Busca</button>&nbsp;
                <div class="button_excel" id="btnExcel"></div>
            </div>
            <!-- Busca Avançada - List -->
            <div id="listBuscaAvancada" class="listBuscaAvancada">
                <div id="table_orv" class="table_orv">
                    <table class="table table-striped " id="tblmodal_avancada" style="width: 100% !important;">
                        <thead>
                        <th>STA</th>
                        <th>NF-e</th>
                        <th>Data Fat.</th>
                        <th>STA Ope.</th>
                        <th>Pedido</th>
                        <th>CT-e</th>
                        <th>Origem</th>
                        <th>Destinatário</th>
                        <th>Destino</th>
                        <th>UF</th>
                        <th>Previsão</th>
                        <th>Atualizada</th>
                        <th>Agenda</th>
                        <th>Entrega</th>
                        <th><i class="container__center__list__items__item--avancado--attachment--active"><i>
                        </th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Container - Center - Dashboard  -->
    <div id="dashboard" class="container__center__dashboard">

        <div class="container__center__dashboard__box container__center__dashboard__box__search">

            <form class="container__center__grid__item__form">
                <div class="container__center__grid__item__form__box__dasboard">
                    <h4 class="text__h4--size">Período Emissão da NF-e</h4>

                    <div class="container__center__grid__item__form__box__date">
                        <div class="input-daterange input-group" id="datepicker">
                            <input type="text" id="dtini_dash" name="dtini_dash" class="form__avancado__data--control"
                                   value="" />
                            <span class="input__avancado-group-addon">a</span>
                            <input type="text" id="dtfim_dash" name="dtfim_dash" class="form__avancado__data--control"
                                   value="" />
                        </div>
                    </div>
                </div>

                <div class="container__center__grid__item__form__box__dasboard">
                    <h4 class="text__h4--size">Remetente</h4>
                    <select class='select2' id="empresa_dash" name="empresa_dash" multiple>
                        <option value="">Todas</option>
                        @if(is_array($empresa))
                            @foreach($empresa as $emp)
                                <option value="{{ $emp->cgc }}">{{ $emp->raz }} - {{ $emp->cgc }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__dasboard">
                    <h4 class="text__h4--size">Destinatário</h4>
                    <select class='select2' id="destinatario_dash" name="destinatario_dash" multiple>
                        <option value="">Todas</option>
                        @if(is_array($destinatarios))
                            @foreach($destinatarios as $destinatario)
                                <option value="{{ $destinatario->desti_cnpj }}">{{ $destinatario->desti_razao }} - {{ $destinatario->desti_cnpj }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="container__center__grid__item__form__box__dasboard1">
                    <h4 class="text__h4--size">Produto</h4>
                    <div>
                        <select class="select2" name="tipo_produto_dash" id="tipo_produto_dash">
                            <option value="">Todos</option>
                            @if(is_array($tipo_produto))
                                @foreach($tipo_produto as $produto)
                                    <option value="{{ $produto->tipo_produto }}">{{ $produto->tipo_produto }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div class="container__center__grid__item__form__box__data__tipo_produto">
                    <h4 class="text__h4--size">BU</h4>
                    <div>
                        <select class="select2" name="segmento" id="segmento_dash">
                            <option value=" ">Todos</option>
                            @if(is_array($bu))
                                @foreach($bu as $item)
                                    <option value="{{ $item->segmento }}">{{ $item->segmento }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div class="container__center__grid__item__form__box__dasboard2">
                    <button class="text__button--small button__default button__small text__color--second" type="button"
                            id="btnatualizar_dash">Pesquisar</button>
                </div>
                <div class="container__center__grid__item__form__box__dasboard3">
                    <div class="button_limpa" id="btnLimpa_dash"></div>
                </div>



            </form>

        </div>

        <div class="container__center__dashboard__box container__center__dashboard__box__header">

            <div class="container__center__dashboard__box__items" id='botao_pedido'>
                <!-- div top-down -->
                <div class="container__center__dashboard__box__items__top">
                    <h4 class="text__h2--size text__color--second padding__left--10px">Pedido</h4>
                    <h4 class="text__h2--size text__color--second padding__left--10px">Recebido</h4>
                    <div
                        class="container__center__dashboard__box__items__top__icon container__center__dashboard__box__items__top__icon--PR">
                    </div>
                </div>

                <!-- div bottom-up -->
                <div class="container__center__dashboard__box__items__bottom">
                    <h1 class="text__h2__dash--size--large" id='pedido_qtd'>0</h1>
                    <h4 class="text__h4--size" id='pedido_valor'>R$ 0,00</h4>
                    <h6 class="text__h4--size">&nbsp;</h6>
                </div>
            </div>

            <div class="container__center__dashboard__box__items" id='botao_preparacao'>
                <!-- div top-down -->
                <div class="container__center__dashboard__box__items__top">
                    <h4 class="text__h2--size text__color--second padding__left--10px">Preparação</h4>
                    <h4 class="text__h2--size text__color--second padding__left--10px">do Pedido</h4>
                    <div
                        class=" container__center__dashboard__box__items__top__icon container__center__dashboard__box__items__top__icon--PP">
                    </div>
                </div>

                <!-- div bottom-up -->
                <div class="container__center__dashboard__box__items__bottom">
                    <h1 class="text__h2__dash--size--large" id='preparacao_qtd'>2.848</h1>
                    <h4 class="text__h4--size" id='preparacao_valor'>R$ 75.405.395,30</h4>
                    <h6 class="text__h4--size">&nbsp;</h6>
                </div>
            </div>

            <div class="container__center__dashboard__box__items" id='botao_transito'>
                <!-- div bottom-up -->
                <div class="container__center__dashboard__box__items__top">
                    <h4 class="text__h2--size text__color--second padding__left--10px">Em</h4>
                    <h4 class="text__h2--size text__color--second padding__left--10px">Trânsito</h4>
                    <div
                        class=" container__center__dashboard__box__items__top__icon container__center__dashboard__box__items__top__icon--ET">
                    </div>
                </div>

                <!-- div bottom-up -->
                <div class="container__center__dashboard__box__items__bottom">
                <span
                    class="container__center__dashboard__box__items__bottom__span"
                    id='botao_ocorrencia_transito'
                    style="cursor:pointer">
                    <span
                        class="ocorrencia"
                        id='ocorrencia_qtd_transito'
                        style="cursor:pointer"></span>
                </span>
                    <h1 class="text__h2__dash--size--large" id='transito_qtd'>1.085</h1>
                    <h4 class="text__h4--size" id='transito_valor'>R$ 45.564.456,90</h4>
                    <h6 class="text__h4--size">&nbsp;</h6>
                </div>
            </div>

            <div class="container__center__dashboard__box__items" id='botao_entrega'>
                <!-- div bottom-up -->
                <div class="container__center__dashboard__box__items__top">
                    <h4 class="text__h2--size text__color--second padding__left--10px">Entrega</h4>
                    <h4 class="text__h2--size text__color--second padding__left--10px">Realizada</h4>
                    <div
                        class=" container__center__dashboard__box__items__top__icon container__center__dashboard__box__items__top__icon--ER">
                    </div>
                </div>

                <!-- div bottom-up -->
                <div class="container__center__dashboard__box__items__bottom">
                <span
                    class="container__center__dashboard__box__items__bottom__span"
                    id='botao_ocorrencia_realizada'
                    style="cursor:pointer">
                    <span
                        class="ocorrencia"
                        id='ocorrencia_qtd_realizada'
                        style="cursor:pointer"></span>
                </span>
                    <h1 class="text__h2__dash--size--large" id='entrega_qtd'>6.392</h1>
                    <h4 class="text__h4--size" id='entrega_valor'>R$ 126.564.456,90</h4>
                    <h6 class="text__h5--size" id='entrega_data'> * Data Emissão NF-e - (
                        {{ date('d/m/Y', strtotime('-29 days', strtotime(date('d-m-Y')))) }} - {{ date('d/m/Y') }})
                    </h6>
                </div>
            </div>
        </div>

        <div class="container__center__dashboard__box container__center__dashboard__box__footer">
            <div
                class="container__center__dashboard__box__footer__items container__center__dashboard__box__footer__items--left">
                <h2 class="text__h4__dash--size">Preparação por NF-e - (
                    {{ date('d/m/Y', strtotime('-29 days', strtotime(date('d-m-Y')))) }} - {{ date('d/m/Y') }})</h2>
                <div class="ibox float-e-margins">
                    <div>
                        <canvas id="graph4" height="120"></canvas>
                    </div>
                </div>

            </div>

            <div
                class="container__center__dashboard__box__footer__items container__center__dashboard__box__footer__items--left">
                <h2 class="text__h4__dash--size">Preparaçao por Volume - (
                    {{ date('d/m/Y', strtotime('-29 days', strtotime(date('d-m-Y')))) }} - {{ date('d/m/Y') }})</h2>
                <div class="ibox float-e-margins">
                    <div>
                        <canvas id="graph3" height="120"></canvas>
                    </div>
                </div>

            </div>
            <div
                class="container__center__dashboard__box__footer__items container__center__dashboard__box__footer__items--right">
                <h2 class="text__h4__dash--size">Evolução do Faturamento - (
                    {{ date('d/m/Y', strtotime('-29 days', strtotime(date('d-m-Y')))) }} - {{ date('d/m/Y') }})</h2>
                <div class="ibox float-e-margins">
                    <div>
                        <canvas id="graph1" height="120"></canvas>
                    </div>
                </div>
            </div>
            <div
                class="container__center__dashboard__box__footer__items container__center__dashboard__box__footer__items--right">
                <h2 class="text__h4__dash--size">Evolução do Faturamento Mensal - (Mês Atual)</h2>
                <div class="ibox float-e-margins">
                    <div>
                        <canvas id="graph2" height="120"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<!-- Busca Rápida -->
<section id="busca__rapida__detalhes" class="container__buscaRapida" style="display:none;">
    <header class="container__buscaRapida__header">

        <!-- Button Prev -->
        <div class="container__buscaRapida__header__boxButton" onclick="btnGoHomeBuscaRapida()">
            <div class="button__default__arrow--left "></div>
        </div>


        <input class="text__input__center--size container__center__box__input" type="text"
               placeholder="Nova busca? Insira Número do Pedido, NF-e ou CT-e" id="buscaRapida2" required>
        <button class="text__button--small button__default button__small text__color--second" type="button"
                id="btnBuscaRapida2">Pesquisar</button>
    </header>
    <div class="container__buscaRapida__ul">
        <div class="row">
            <table class="table table-striped table-hover" id="tblmodal" class="container__buscaRapida__ul">

                <div id="modalPreparaRapido" class="span__preparacao__rapida">
                    <div class="span__preparacao__header">
                        <h4 class="text__h3--size text__color--second text__margin--left">Status Operacional</h4>
                        <h4 class="text__h4--size text__color--second text__margin--left">
                            <span id="botao-close-preparacao-rapida" class="botao-close-rapida">X</span>
                        </h4>
                    </div>
                    <div class="span__preparacao__content">
                        <div class="span__preparacao__content__panel">
                            <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                                Em Preparação :  </h3>
                            <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_1'></p>
                        </div>

                        <div class="span__preparacao__content__panel">
                            <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                                Em Separação :  </h3>
                            <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_2'></p>
                        </div>

                        <div class="span__preparacao__content__panel">
                            <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                                Em Conferencia :  </h3>
                            <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_3'></p>
                        </div>

                        <div class="span__preparacao__content__panel">
                            <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                                Conferido :  </h3>
                            <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_4'></p>
                        </div>

                        <div class="span__preparacao__content__panel">
                            <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                                Expedido :  </h3>
                            <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_5'></p>
                        </div>
                    </div>
                </div>

                <thead>
                <th>&nbsp;</th>
                </thead>
            </table>
        </div>
    </div>
</section>


<!-- Section - Detalhes -->
<section id="detalhes" class="container__detalhes" style='display:none;'>

    <!-- Header -->
    <div class="container__detalhes__header">
        <div class="container__detalhes__header__boxLeft">

            <input type='hidden' id='id_detalhe' value='' />
            <input type='hidden' id='nf_empresa_detalhe' value='' />
            <input type='hidden' id='cte_chave_detalhe' value='' />
            <input type='hidden' id='cte_numero_detalhe' value='' />
            <input type='hidden' id='cte_empresa_detalhe' value='' />
            <input type='hidden' id='cte_tipo_detalhe' value='' />
            <input type='hidden' id='cte_serie_detalhe' value='' />
            <input type='hidden' id='comprovante_detalhe' value='' />


            <!-- Button Prev -->
            <div class="button__arrow--left" id='botao_voltar_detalhes'></div>

            <h3 class="text__color--third text__h3--size">Status do Pedido</h3>
        </div>

        <div class="container__detalhes__header__boxRight">

            <div class="container__detalhes__header__boxRight__item container__detalhes__header__boxRight__item--item1"
                 onclick="openAlert()" id="botao_detalhe_ocorrencia" style="display:none;">

                <!-- Span - Ocorrências -->
                <div id="alert__ocorrencias" class="span__ocorrencia" style="display:none;">
                    <div class="span__ocorrencia__header">
                        <h4 class="text__h4--size text__color--second text__margin--left">Ocorrências</h4>
                        <h4 class="text__h4--size text__color--second text__margin--left">
                            <!--(04)-->
                        </h4>
                    </div>

                    <div class="span__ocorrencia__content">
                        <div class="span__ocorrencia__content__panel">
                            <h4 class="text__h4--size text__color--primary text__margin--left text__margin--top">
                                Número do BO:</h4>
                            <p class="text__color--primary text__margin--left text__margin--bottom" id='num_bo'></p>
                        </div>

                        <div class="span__ocorrencia__content__panel">
                            <h4 class="text__h4--size text__color--primary text__margin--left text__margin--top">
                                Grupo:</h4>
                            <p class="text__color--primary text__margin--left text__margin--bottom" id='grupoBo'></p>
                        </div>

                        <div class="span__ocorrencia__content__panel">
                            <h4 class="text__h4--size text__color--primary text__margin--left text__margin--top">
                                Motivo:</h4>
                            <p class="text__color--primary text__margin--left text__margin--bottom" id='motivo_bo'>
                                Produto danificado no transporte devido a buraco na estrada</p>
                        </div>

                    </div>

                    <div class="span__ocorrencia__content__2">
                        <div class="span__ocorrencia__content__panel">
                            <h4 class="text__h4--size text__color--primary text__margin--left text__margin--top">
                                Responsável:</h4>
                            <p class="text__color--primary text__margin--left text__margin--bottom"
                               id='responsavel'>Daniel</p>
                        </div>
                        <div class="span__ocorrencia__content__panel">
                            <h4 class="text__h4--size text__color--primary text__margin--right text__margin--top">
                                Status do BO:</h4>
                            <p class="text__color--primary text__margin--right text__margin--bottom"
                               id='status_bo'></p>
                        </div>
                    </div>

                </div>

            </div>
            <div
                class="container__detalhes__header__boxRight__item container__detalhes__header__boxRight__item--item2">
            </div>
            <div
                id="previsao__normal" class="container__detalhes__header__boxRight__item container__detalhes__header__boxRight__item--item3"
                style="display:none;">

                <h4 class="text__h4--size text__color--primar">Previsão de entrega:</h4>
                <h4 class="text__h4--size text__color--primar" id='data_previsao_entrega2'></h4>

            </div>
            <div
                id="previsao__atualizada" class="container__detalhes__header__boxRight__item container__detalhes__header__boxRight__item--item3"
                style="display:none;">
                <h4 class="text__h4--size text__color--third">Previsão de entrega inicial:</h4>
                <h4 class="text__h4--size text__color--third" id='data_previsao_entrega3'></h4>
                <h4 class="text__h4--size text__color--primar">Previsão de entrega atualizada:</h4>
                <h4 class="text__h4--size text__color--primar" id='data_previsao_entrega_atualizada'></h4>
            </div>
        </div>
    </div>

    <div id="modalPrepara" class="span__preparacao" style="display:none;">
        <div class="span__preparacao__header">
            <h4 class="text__h3--size text__color--second text__margin--left">Status Operacional</h4>
            <h4 class="text__h4--size text__color--second text__margin--left">
                <span id="botao-close-preparacao" class="botao-close-preparacao">X</span>
            </h4>
        </div>
        <div class="span__preparacao__content">
            <div class="span__preparacao__content__panel">
                <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                    Em Preparação :  </h3>
                <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_1_d'></p>
            </div>

            <div class="span__preparacao__content__panel">
                <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                    Em Separação :  </h3>
                <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_2_d'></p>
            </div>

            <div class="span__preparacao__content__panel">
                <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                    Em Conferencia :  </h3>
                <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_3_d'></p>
            </div>

            <div class="span__preparacao__content__panel">
                <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                    Conferido :  </h3>
                <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_4_d'></p>
            </div>

            <div class="span__preparacao__content__panel">
                <h3 class="text__h4--size text__color--primary text__margin--left text__prepara__margin--top">
                    Expedido :  </h3>
                <p class="text__h4--size text__color--primary text__margin--left text__margin--top" id='dt_sta_arm_5_d'></p>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container__detalhes__box">

        <!-- Content - Box Timeline -->
        <div class="container__detalhes__box__top">
            <div class="container__detalhes__box__top__panel">

                <!-- PEDIDO RECEBIDO ON -->
                <div class="container__detalhes__box__top__panel__item" style="display:none; margin-left: 100px;"
                     id="container_pedido_recebido_on">
                    <div
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PR--active">
                    </div>
                    <h4 class="text__color__h4__detalhe">Pedido</h4>
                    <h4 class="text__color__h4__detalhe">Recebido</h4>
                    <h5 class="text__color--third text__margin--top" id='data_pedido_recebido_on'></h5>
                </div>
                <!-- PEDIDO RECEBIDO COMPLETE -->
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="container_pedido_recebido_complete">
                    <div id="container_pedido_recebido_complete_title" title=""
                         class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PR--complete">
                    </div>
                    <h4 class="text__color__h4__detalhe">Pedido</h4>
                    <h4 class="text__color__h4__detalhe">Recebido</h4>
                    <h5 class="text__color--third text__margin--top" id='data_pedido_recebido_complete'></h5>
                </div>
                <!-- PEDIDO RECEBIDO OFF -->
                <div class="container__detalhes__box__top__panel__item" style="display:block;"
                     id="container_pedido_recebido_off">
                    <div
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PR--disable">
                    </div>
                    <h4 class="text__color__h4__detalhe">Pedido</h4>
                    <h4 class="text__color__h4__detalhe">Recebido</h4>
                    <h5 class="text__color--third text__margin--top" id='data_pedido_recebido_off'></h5>
                </div>
                <!-- PEDIDO RECEBIDO BARRA ON -->
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="linha_pedido_recebido_on">
                    <div
                        class="container__detalhes__box__top__panel__item__step container__detalhes__box__top__panel__item__step--complete">
                    </div>
                </div>

                <!-- PEDIDO RECEBIDO BARRA OFF -->
                <div class="container__detalhes__box__top__panel__item" style="display:block;"
                     id="linha_pedido_recebido_off">
                    <div
                        class="container__detalhes__box__top__panel__item__step container__detalhes__box__top__panel__item__step--disable">
                    </div>
                </div>

                <!-- PREPARACAO PEDIDO ON -->
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="container_preparacao_pedido_on">
                    <div id="container_preparacao_pedido_complete_title" title=""
                         class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PP--active">
                    </div>
                    <h4 class="text__color__h4__detalhe">Preparação</h4>
                    <h4 class="text__color__h4__detalhe">do Pedido</h4>
                    <h5 class="text__color--third text__margin--top" id='data_preparacao_recebido_on'></h5>
                </div>
                <!-- PREPARACAO PEDIDO OFF -->
                <div class="container__detalhes__box__top__panel__item" style="display:block;"
                     id="container_preparacao_pedido_off">
                    <div
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PP--disable">
                    </div>
                    <h4 class="text__color__h4__detalhe">Preparação</h4>
                    <h4 class="text__color__h4__detalhe">do Pedido</h4>
                    <h5 class="text__color--third text__margin--top" id='data_preparacao_recebido_off'></h5>
                </div>
                <!-- PREPARACAO PEDIDO BARRA ON -->
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="linha_preparacao_pedido_on">
                    <div
                        class="container__detalhes__box__top__panel__item__step container__detalhes__box__top__panel__item__step--complete">
                        <div class="container__detalhes__box__top__panel__item__seaching container__detalhes__box__top__panel__item__seaching--active"
                             style="display:none;" id="detalhe_on_preparacao">
                        </div>
                    </div>
                </div>
                <!-- PREPARACAO PEDIDO BARRA OFF -->
                <div class="container__detalhes__box__top__panel__item" style="display:block;"
                     id="linha_preparacao_pedido_off">
                    <div
                        class="container__detalhes__box__top__panel__item__step container__detalhes__box__top__panel__item__step--disable">
                    </div>
                </div>

                <!-- EM TRANSITO ON -->
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="container_em_transito_complete">
                    <div
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--ET--complete">
                    </div>
                    <h4 class="text__color__h4__detalhe">Em</h4>
                    <h4 class="text__color__h4__detalhe">Trânsito</h4>
                    <h5 class="text__color--third text__margin--top" id='data_previsao_entrega_on_complete'></h5>
                </div>
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="container_em_transito_on">
                    <div
                        id="pinLocationDetalhe"
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--ET--active">
                    </div>
                    <h4 class="text__color__h4__detalhe">Em</h4>
                    <h4 class="text__color__h4__detalhe">Trânsito</h4>
                    <h5 class="text__color--third text__margin--top" id='data_previsao_entrega_on'></h5>
                </div>
                <!-- EM TRANSITO OFF -->
                <div class="container__detalhes__box__top__panel__item" style="display:block;"
                     id="container_em_transito_off">
                    <div
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--ET--disable">
                    </div>
                    <h4 class="text__color__h4__detalhe">Em</h4>
                    <h4 class="text__color__h4__detalhe">Trânsito</h4>
                    <h5 class="text__color--third text__margin--top" id='data_previsao_entrega_off'></h5>
                </div>

                <!-- EM TRANSITO BARRA OFF -->
                <div class="container__detalhes__box__top__panel__item" style="display:block;"
                     id="linha_em_transito_off">

                    <div
                        class="container__detalhes__box__top__panel__item__step container__detalhes__box__top__panel__item__step">
                        <div class="container__detalhes__box__top__panel__item__step__balls container__detalhes__box__top__panel__item__step__balls--active"
                             style="display:none;" id="status_em_transito_on_1"></div>
                        <div class="container__detalhes__box__top__panel__item__step__balls container__detalhes__box__top__panel__item__step__balls--active"
                             style="display:none;" id="status_em_transito_on_2"></div>
                        <div class="container__detalhes__box__top__panel__item__step__balls container__detalhes__box__top__panel__item__step__balls--active"
                             style="display:none;" id="status_em_transito_on_3"></div>
                        <div class="container__detalhes__box__top__panel__item__step__balls container__detalhes__box__top__panel__item__step__balls--active"
                             style="display:none;" id="status_em_transito_on_4"></div>

                        <div class="container__detalhes__box__top__panel__item__step__balls container__detalhes__box__top__panel__item__step__balls--disable"
                             style="display:block;" id="status_em_transito_off_1"></div>
                        <div class="container__detalhes__box__top__panel__item__step__balls container__detalhes__box__top__panel__item__step__balls--disable"
                             style="display:block;" id="status_em_transito_off_2"></div>
                        <div class="container__detalhes__box__top__panel__item__step__balls container__detalhes__box__top__panel__item__step__balls--disable"
                             style="display:block;" id="status_em_transito_off_3"></div>
                        <div class="container__detalhes__box__top__panel__item__step__balls container__detalhes__box__top__panel__item__step__balls--disable"
                             style="display:block;" id="status_em_transito_off_4"></div>

                        <!-- Searching Road -->
                        <div class="container__detalhes__box__top__panel__item__seaching container__detalhes__box__top__panel__item__seaching--active"
                             style="display:none;" id="geo_detalhe_on"></div>
                        <div class="container__detalhes__box__top__panel__item__seaching container__detalhes__box__top__panel__item__seaching--disable"
                             style="display:none;" id="geo_detalhe_off"></div>

                    </div>
                </div>
                <!-- EM TRANSITO BARRA ON -->
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="linha_em_transito_on">
                    <div
                        class="container__detalhes__box__top__panel__item__step container__detalhes__box__top__panel__item__step--complete">
                    </div>
                </div>

                <!-- ENTREGA REALIZADA COMPLETE COM COMPROVANTE -->
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="container_entrega_realizada_complete">
                    <div
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PRD--complete">
                    </div>
                    <h4 class="text__color__h4__detalhe">Entrega</h4>
                    <h4 class="text__color__h4__detalhe">Realizada</h4>
                    <h5 class="text__color--third text__margin--top" id='data_entrega_realizada_on_complete'></h5>
                </div>
                <!-- ENTREGA REALIZADA ON -->
                <div class="container__detalhes__box__top__panel__item" style="display:none;"
                     id="container_entrega_realizada_on">
                    <div
                        id="toggleIconNaoEntrega"
                        style="display:none;"
                        title="Entrega Não Realizada"
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PRD--active--naorealizada">
                    </div>

                    <div
                        id="toggleIconEntrega"
                        style="display:none;"
                        title="Entrega Realizada"
                        class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PRD--active">
                    </div>

                    <h4 class="text__color__h4__detalhe toggleIconNaoEntregaText">Entrega Não</h4>
                    <h4 class="text__color__h4__detalhe toggleIconEntregaText">Entrega</h4>
                    <h4 class="text__color__h4__detalhe">Realizada</h4>

                    <h5 class="text__color--third text__margin--top" id='data_entrega_realizada_on'></h5>
                </div>
                <!-- ENTREGA REALIZADA OFF -->
                <div class="container__detalhes__box__footer__left__wrapper" style="display: flex;">
                    <div class="container__detalhes__box__top__panel__item" style="display:block;"
                         id="container_entrega_realizada_off">
                        <div
                            class="container__detalhes__box__top__panel__item__icon container__detalhes__box__top__panel__item__icon--PRD--disable">
                        </div>
                        <h4 class="text__color__h4__detalhe">Entrega</h4>
                        <h4 class="text__color__h4__detalhe">Realizada</h4>
                        <h5 class="text__color--third text__margin--top" id='data_entrega_realizada_off'></h5>
                    </div>
                </div>


                <!-- COMPROVANTE -->
                <div class="container__detalhes__box__top__panel__item">
                    <div class="container__detalhes__box__top__panel__item__clip container__detalhes__box__top__panel__item__clip--disable"
                         style="display:none;" id="comprovante_off"></div>
                    <div class="container__detalhes__box__top__panel__item__clip container__detalhes__box__top__panel__item__clip--active"
                         style="display:none;" id="comprovante_on"></div>
                </div>

            </div>
        </div>

        <!-- Box Content -->
        <div class="container__detalhes__box__footer">

            <!-- Box Content - Box Left -->
            <div class="container__detalhes__box__footer__left">
                <div class="container__detalhes__box__footer__left__item">
                    <h3 class="text__h3--size text__color--primary">Detalhe do Pedido</h3>
                </div>

                <div class="container__detalhes__box__footer__left__item">
                    <h4 class="text__color__h4__detalhe text__color--third">NF-e</h4>
                    <h4 class="text__h4--size text__color--third text__decoration--1463da" id='pk_nf_numero'></h4>
                </div>

                <div class="container__detalhes__box__footer__left__item">
                    <h4 class="text__color__h4__detalhe text__color--third">Pedido</h4>
                    <h4 class="text__h4--size text__color--third text__decoration--1463da" id='pk_pedido'></h4>
                </div>

                <div class="container__detalhes__box__footer__left__item">
                    <h4 class="text__color__h4__detalhe text__color--third">CT-e</h4>
                    <h4 class="text__h4--size text__color__detalhe" id='cte_detalhe'></h4>
                </div>

                <div class="container__detalhes__box__footer__left__item">
                    <h4 class="text__color__h4__detalhe text__color--third">Valor</h4>
                    <h4 class="text__h4--size text__color__detalhe" id='valor'></h4>
                </div>

                <div class="container__detalhes__box__footer__left__item">
                    <h4 class="text__color__h4__detalhe text__color--third">Volumes</h4>
                    <h4 class="text__h4--size text__color__detalhe" id='volumes'></h4>
                </div>

                <div class="container__detalhes__box__footer__left__item">
                    <h4 class="text__color__h4__detalhe text__color--third">Peso (kg)</h4>
                    <h4 class="text__h4--size text__color__detalhe" id='peso'></h4>
                </div>

                <div
                    class="container__detalhes__box__footer__left__item">
                    <h4 class="text__color__h4__detalhe text__color--third">Produto</h4>
                    <h4 class="text__h4--size text__color__detalhe" id='tipo_produto_detalhe'></h4>
                </div>

                <div
                    class="container__detalhes__box__footer__left__item">
                    <h4 class="text__color__h4__detalhe text__color--third">Transporte Solistica</h4>
                    <h4 class="text__h4--size text__color__detalhe" id='transporte_agv'></h4>
                </div>
                <div
                    class="container__detalhes__box__footer__left__item ">
                    <h4 class="text__color__h4__detalhe text__color--third">Status Operacional</h4>
                    <h4 class="text__h4--size text__color__detalhe" id='status_operacional'></h4>
                </div>
                <div
                    class="container__detalhes__box__footer__left__item container__detalhes__box__footer__left__item--marginBottom">
                    <h4 class="text__color__h4__detalhe text__color--third">Nome do Recebedor</h4>
                    <h4 class="text__h4--size text__color__detalhe" id='recebedor'></h4>
                </div>
            </div>

            <!-- Box Content - Box Right -->
            <div class="container__detalhes__box__footer__right">

                <!-- Right -->
                <div class="container__detalhes__box__footer__right__panel">
                    <div class="container__detalhes__box__footer__right__panel__header">
                        <div
                            class="container__detalhes__box__footer__right__panel__header__icon container__detalhes__box__footer__right__panel__header__icon--RT">
                        </div>
                        <h3 class="text__h3--size text__color--primary">Remetente</h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Razão Social</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='remet_razao'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">CNPJ</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='remet_cnpj'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Endereço</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='remet_endereco'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Bairro</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='remet_bairro'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Cidade/Estado</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='remet_cidade'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Contato</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='remet_fone'></h3>
                        <h3 class="text__h4--size text__color__detalhe" id='remet_email'></h3>
                    </div>
                </div>

                <!-- Left -->
                <div class="container__detalhes__box__footer__right__panel">

                    <div class="container__detalhes__box__footer__right__panel__header">
                        <div
                            class="container__detalhes__box__footer__right__panel__header__icon container__detalhes__box__footer__right__panel__header__icon--DT">
                        </div>
                        <h3 class="text__h3--size text__color--primary">Destinatário</h3>
                    </div>


                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Razão Social</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='desti_razao'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">CNPJ</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='desti_cnpj'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Endereço</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='desti_endereco'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Bairro</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='desti_bairro'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Cidade/Estado</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='desti_cidade_detalhe'></h3>
                    </div>

                    <div class="container__detalhes__box__footer__right__item">
                        <h4 class="text__color__h4__detalhe text__color--third">Contato</h4>
                        <h3 class="text__h4--size text__color__detalhe" id='desti_fone'></h3>
                        <h3 class="text__h4--size text__color__detalhe" id='desti_razao'>email@email.com.br</h3>
                    </div>

                </div>

                <div class="container__row__nf">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#aba1" data-toggle="tab">Itens da NF-e</a></li>
                            <li><a href="#aba2" data-toggle="tab">Detalhes dos eventos do pedido</a></li>
                        </ul>

                    <div class="tab-content">
                    <div class="tab-pane active" id="aba1">
                        <div class="panel__row-inter">
                            <table class="table table-striped" id="tblitens">
                                <thead>
                                    <th>Descrição</th>
                                    <th>Lote/Partida</th>
                                    <th>Quantidade</th>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="aba2">
                        <div class="panel__row-inter">
                            <table class="table table-striped" id="tbldetalhesenvio">
                                <thead>
                                <th>Macro Status</th>
                                <th>Micro Status</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Cód.</th>
                                <th>Mensagem</th>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

    <!-- Modal Tracking -->
    <div id="modalTracking" class="span__preparacao_tracking" style="display:none; tabindex=-1 role=dialog; aria-hidden=true;">
        <div class="container__row__nf" style="max-height:85%; height: 200px; width: 1000px; background-color:rgb(255, 250, 250); margin-left: 30px; box-shadow: 10px 7px 7px gray; margin-top:150px; border-radius: 20px; overflow-y: overlay;">
            <h4 class="text__h4--size text__color--second text__margin--left"></h4>
            <div class="col-lg-12">
                <div class="panel__row-inter" style="overflow-y: initial !important; height: 30px; width: 1000px; background-color: rgb(199, 192, 192); margin-left: -15px; margin-top: -1px;">
                    <div style="display: flex; align-items: center;">
                        <p style="padding-top: 10px; margin-left: 5px;"><strong>Detalhes do Trânsito</strong></p>
                        <span id="botao-close-tracking" class="botao-close-tracking" style="color: black; margin-left: auto;">
                            <button id="btn-close-tracking"></button>
                        </span>
                    </div>
                    <table class="table table-striped" id="tblitenstracking">
                        <thead>
                        <th>Macro Status</th>
                        <th>Micro Status</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Cód.</th>
                        <th>Mensagem</th>
                        </thead>
                        <tbody style="overflow-y: auto;"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div id='loading'>
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
</section>

<div class="modal2" id="modal2">
<!-- corpo do modal -->
<div class="modal2-guts">
    <!-- titulo do modal localizacao -->
    <h2 class="text__h2--size text__color--second padding__left--10px">Localização</h2>
    <span id="botao-close-geo" class="botao-close-geo">X</span>

</div>
<div class="modal3-guts">
    <!-- mapa geo -->
    <div id="mapa" class="mapa"></div>
</div>
</div>

<div class="modal_comprovante" id="modal_comprovante">
<!-- corpo do modal -->
<div class="modal_comprovante2-guts">
    <!-- titulo do modal localizacao -->
    <h2 class="text__h2--size text__color--second padding__left--10px nfe">Comprovante</h2>
    <span id="botao-close-comprovante" class="botao-close-comprovante" onclick="modalClose()">X</span>

</div>
<div class="modal_comprovante3-guts">
    <!-- imagem comprovante -->
    <div class="modal-content animated fadeIn">
        <img id="canhoto_img" src="">
    </div>
</div>
<div class="modal_comprovante4-guts">
    <!-- botao -->
    <input type="hidden" id="btnDownloadChave">
    <input type="hidden" id="btnDownloadNf">

    <input type="hidden" id="cte_numero_modal">
    <input type="hidden" id="cte_empresa_modal">
    <input type="hidden" id="cte_tipo_modal">
    <input type="hidden" id="cte_serie_modal">

    <button class="btn-canhoto botao-zoomin" id="btnZoomIn">
        <i class="fa fa-search-plus"></i>
    </button>
    <button class="btn-canhoto" id="btnZoomOut">
        <i class="fa fa-search-minus"></i>
    </button>
    <button class="btn-canhoto" id="btnRotateLeft">
        <i class="fa fa-rotate-left"></i>
    </button>
    <button class="btn-canhoto botao-rotate-right" id="btnRotateRight">
        <i class="fa fa-rotate-right"></i>
    </button>

    <button class="text__button--small button__default button__medium text__color--second" id="btnDownload"
            onclick="download()">Download</button>
</div>

</div>

@include('site._includes._modal_canhoto_pdf')

@endsection

@section('script')
{{-- <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
var OneSignal = window.OneSignal || [];
OneSignal.push(function() {
    OneSignal.setExternalUserId(window.Laravel.user.id);
    OneSignal.init({
        appId: "9f44a5af-f04d-4c45-9060-d4edeb1a70c8",
    });
});

</script> --}}

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-173207260-1', {'userId': window.Laravel.user.id});
ga('set', 'dimension1', 'UserSupply'); // 'grupo de usuario'
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

<script src="/js/plugins/pdfjs/pdf.js"></script>
<script>
var url = '{{ $url }}';
var url_plus = '{{ $url_plus }}';
var url_alvo = '{{ $url_alvo }}';
var cnpj_trava = '{{ $cnpj }}';
var empresa_usuario = '{{$empresa_usuario}}';
var dados_avancada = [];
var supplyRepresentante = '{{$supply_representante}}';
var destinatario_fornecedor = '{{$destinatario_fornecedor}}';
//console.log(destinatario_fornecedor)

if (supplyRepresentante) {
    supplyRepresentante = supplyRepresentante.split(',');
} else {
    supplyRepresentante = null;
}

//BUSCA AVANÇADA #############################################################################################

function initDataTables_avancada(visao_dash = '') {

    //console.log("teste")
    //alert('foi visao'+visao_dash);
    var dt_ini = $('#dtini').val();
    var dt_fim = $('#dtfim').val();
    var tipo_data = $('#tipo_data').val();
    var visao = $('#visao_form').val();
    var vip = $('#vip').val();
    var cnpj = $('#empresa').val();
    var cnpj_join = cnpj.join();
    var pedido_cliente = $('#pedido_cliente_venda').val();
    var pedido_nfe = $('#pedido_nfe').val();
    var nota = $('#nota').val();
    var cte = $('#cte').val();
    var num_bo = $('#num_bo').val();
    var ccusto_tms = $('#ccusto_tms').val();
    var ocorrencia = $('#ocorrencia').val();
    var status_op = $('#status_op').val();
    var desti_estado = $('#desti_estado').val();
    var desti_cidade = $('#desti_cidade').val();
    var tipo_produto = $('#tipo_produto').val();
    var cnpj_dash = $('#empresa_dash').val();
    var cnpj_join_dash = cnpj_dash.join();
    var tipo_produto_dash = $('#tipo_produto_dash').val();
    var destinatario_dash = $('#destinatario_dash').val();
    var destinatario_join_dash = destinatario_dash.join();
    var destinatario_dashboard = destinatario_join_dash;
    var grupo_bo = $("#grupo_bo").val();
    var bu = $("#segmento").val();
    var transp_solistica = $("#transp_solistica").val();

    var visao_tipo = '';

    if ($('#iscnpjdest').val() == true){
        var destinatarioCnpj = $('#destinatario').val();
        var destinatario = '';
    } else {
        var destinatario = $('#destinatario').val();
        var destinatarioCnpj = '';
    }

    if (tipo_produto == ' ') {
        tipo_produto = null;
    }

    if (visao_dash != '') {

        var dt_ini_dash = $('#dtini_dash').val();
        var dt_fim_dash = $('#dtfim_dash').val();

        if (visao_dash == 'entrega' || visao_dash == 'ocorrencia_realizada') {
            if (dt_ini_dash != '') {
                dt_ini = dt_ini_dash;
                dt_fim = dt_fim_dash;
            } else {
                dt_ini = moment().subtract(29, 'days').format('DD/MM/YYYY');
                dt_fim = moment().format('DD/MM/YYYY');
            }
        } else {
            if (dt_ini_dash != '') {
                dt_ini = dt_ini_dash;
                dt_fim = dt_fim_dash;
            } else {
                //dt_ini = '01/05/2019'; deixando 3 meses
                dt_ini = moment().subtract(90, 'days').format('DD/MM/YYYY');
                dt_fim = moment().format('DD/MM/YYYY');
            }
        }

        if (visao_dash == 'pedido') {
            document.getElementById('busca__rapida').style.display = 'none';
            ocorrencia = '';
            visao = 'Pedido NF Recebido';
            tipo_data = '2';

            $('#dtini').val(dt_ini);
            $('#dtfim').val(dt_fim);
            $('#tipo_data').val(tipo_data);
            $('#ocorrencia').val(ocorrencia).trigger('change');
            $("#visao_form").val('Pedido NF Recebido').trigger('change');

            cnpj_join = cnpj_join_dash;
            tipo_produto = tipo_produto_dash;
            destinatario_dashboard = destinatario_join_dash

            $('#empresa').val(cnpj_join_dash).trigger('change');
            $("#tipo_produto").val(tipo_produto_dash).trigger('change');
            $("#destinatarios").val(destinatario_join_dash).trigger('change');

        }
        if (visao_dash == 'preparacao') {
            document.getElementById('busca__rapida').style.display = 'none';
            ocorrencia = '';
            visao = 'Preparacao do Pedido';

            tipo_data = '2';

            $('#tipo_data').val(tipo_data);
            $('#dtini').val(dt_ini);
            $('#dtfim').val(dt_fim);
            $('#ocorrencia').val(ocorrencia).trigger('change');
            $("#visao_form").val('Preparacao do Pedido').trigger('change');

            cnpj_join = cnpj_join_dash;
            tipo_produto = tipo_produto_dash;
            destinatario_dashboard = destinatario_join_dash

            $('#empresa').val(cnpj_join_dash).trigger('change');
            $("#tipo_produto").val(tipo_produto_dash).trigger('change');
            $("#destinatarios").val(destinatario_join_dash).trigger('change');

        }
        if (visao_dash == 'transito') {
            document.getElementById('busca__rapida').style.display = 'none';
            ocorrencia = ' ';
            visao = 'Em Transito';
            tipo_data = '2';

            $('#tipo_data').val(tipo_data);
            $('#dtini').val(dt_ini);
            $('#dtfim').val(dt_fim);
            $('#ocorrencia').val(ocorrencia).trigger('change');
            $("#visao_form").val('Em Transito').trigger('change');

            cnpj_join = cnpj_join_dash;
            tipo_produto = tipo_produto_dash;
            destinatario_dashboard = destinatario_join_dash

            $('#empresa').val(cnpj_join_dash).trigger('change');
            $("#tipo_produto").val(tipo_produto_dash).trigger('change');
            $("#destinatarios").val(destinatario_join_dash).trigger('change');

        }
        if (visao_dash == 'entrega') {
            document.getElementById('busca__rapida').style.display = 'none';
            ocorrencia = ' ';
            visao = 'Entrega Realizada';
            tipo_data = '2';

            $('#dtini').val(dt_ini);
            $('#dtfim').val(dt_fim);
            $('#tipo_data').val(tipo_data);
            $('#ocorrencia').val(ocorrencia).trigger('change');
            $("#visao_form").val('Entrega Realizada').trigger('change');
            $("#tipo_data").val('2').trigger('change');

            cnpj_join = cnpj_join_dash;
            tipo_produto = tipo_produto_dash;
            destinatario_dashboard = destinatario_join_dash

            $('#empresa').val(cnpj_join_dash).trigger('change');
            $("#tipo_produto").val(tipo_produto_dash).trigger('change');
            $("#destinatarios").val(destinatario_join_dash).trigger('change');

        }

        if (visao_dash == 'ocorrencia_transito') {
            ocorrencia = '1';
            visao = 'Em Transito';
            tipo_data = '2';

            $('#dtini').val(dt_ini);
            $('#dtfim').val(dt_fim);
            $('#tipo_data').val(tipo_data);
            $("#visao_form").val('Em Transito').trigger('change');
            $("#ocorrencia").val(ocorrencia).trigger('change');

            cnpj_join = cnpj_join_dash;
            tipo_produto = tipo_produto_dash;
            destinatario_dashboard = destinatario_join_dash

            $('#empresa').val(cnpj_join_dash).trigger('change');
            $("#tipo_produto").val(tipo_produto_dash).trigger('change');
            $("#destinatarios").val(destinatario_join_dash).trigger('change');
        }
        if (visao_dash == 'ocorrencia_realizada') {
            ocorrencia = '1';
            visao = 'Entrega Realizada';
            tipo_data = '2';

            $('#tipo_data').val(tipo_data);
            $('#dtini').val(dt_ini);
            $('#dtfim').val(dt_fim);
            $("#visao_form").val('Entrega Realizada').trigger('change');
            $("#ocorrencia").val(ocorrencia).trigger('change');

            cnpj_join = cnpj_join_dash;
            tipo_produto = tipo_produto_dash;
            destinatario_dashboard = destinatario_join_dash

            $('#empresa').val(cnpj_join_dash).trigger('change');
            $("#tipo_produto").val(tipo_produto_dash).trigger('change');
            $("#destinatarios").val(destinatario_join_dash).trigger('change');
        }

        //$('#ocorrencia').val(ocorrencia);

    }

    document.getElementById('dashboard').style.display = 'none';
    document.getElementById('busca__rapida').style.display = 'none';
    document.getElementById('busca__avancada').style.display = 'none';
    document.getElementById('busca_avancada_lista').style.display = 'flex';
    document.getElementById('listBuscaAvancada').style.display = 'block';

    if ($.fn.DataTable.isDataTable('#tblmodal_avancada')) {
        $('#tblmodal_avancada').DataTable().destroy();
    }

    var dados = {
        vdata_de: dt_ini,
        vdata_ate: dt_fim,
        vtipo_data: tipo_data,
        vpedido_nfe: pedido_nfe,
        vstatus_op: status_op,
        vpedido_cliente: pedido_cliente,
        vnota: nota,
        vcte: cte,
        vnum_bo: num_bo,
        vdestinatario: destinatario,
        vdesti_cnpj: destinatarioCnpj,
        vvisao: visao,
        vvip: vip,
        vccusto_tms: ccusto_tms,
        vcnpj: cnpj_join,
        vcnpj_trava: cnpj_trava,
        destinatario_dashboard: destinatario_dashboard,
        vocorrencia: ocorrencia,
        vcidade: desti_cidade,
        vestado: desti_estado,
        vtipo_produto: tipo_produto,
        vvisao_tipo: visao_tipo,
        vgrupo_bo : grupo_bo,
        vdestinatario_fornecedor: destinatario_fornecedor,
        vsegmento: bu,
        vtransp_solistica: transp_solistica
    };

    table = $("#tblmodal_avancada").DataTable({
        processing: true,
        serverSide: true,
        //autoWidth: true,
        pageLength: 10,
        //searchable: true,
        //scrollX: true,
        bFilter: false,
        ajax: {
            url: url + 'order_visibility_on/lista_nota_fiscal',
            type: 'POST',
            data: {
                vdata_de: dt_ini,
                vdata_ate: dt_fim,
                vtipo_data: tipo_data,
                vpedido_nfe: pedido_nfe,
                vpedido_cliente: pedido_cliente,
                vnota: nota,
                vcte: cte,
                vnum_bo: num_bo,
                vdestinatario: destinatario,
                vdesti_cnpj: destinatarioCnpj,
                vvisao: visao,
                vvip: vip,
                vccusto_tms: ccusto_tms,
                vcnpj: cnpj_join,
                vcnpj_trava: cnpj_trava,
                vdestinatario_dashboard: destinatario_dashboard,
                vocorrencia: ocorrencia,
                vcidade: desti_cidade,
                vestado: desti_estado,
                vtipo_produto: tipo_produto,
                vvisao_tipo: visao_tipo,
                vrepresentante: supplyRepresentante,
                vdestinatario_fornecedor: destinatario_fornecedor,
                vstatus_op: status_op,
                vgrupo_bo : grupo_bo,
                vsegmento: bu,
                vtransp_solistica: transp_solistica
            }
        },
        columns: [{
            title: "STA",
            data: "visao",
            width: '3%',
            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {

                //console.log(oData);

                var html = '';

                if (oData.visao == 'Pedido NF Recebido'){

                    if(oData.visao_status_ov == 'Pedido NF Recebido' && oData.desc_tms_nao != null){
                        html =
                            '<div class="container__center__list__items__item--avancado container__center__list__items__item--avancado--PR--complete" title="Pedido NF Recebido - '+oData.desc_tms_nao+'" ></div>';
                    }else{
                        html =
                            '<div class="container__center__list__items__item--avancado container__center__list__items__item--avancado--PR" title="Pedido NF Recebido" ></div>';
                    }

                } else if (oData.visao == 'Preparacao do Pedido'){

                    if(oData.visao_status_ov2 == 'Preparacao do Pedido'){
                        html =
                            '<div class="container__center__list__items__item--avancado container__center__list__items__item--avancado--PP" title="Preparacao do Pedido - '+oData.desc_tms_nao+'" ></div>';
                    }else{
                        html =
                            '<div class="container__center__list__items__item--avancado container__center__list__items__item--avancado--PP"  title="Preparacao do Pedido" ></div>';
                    }

                } else if (oData.visao == 'Em Transito') {
                    html =
                        '<div class="container__center__list__items__item--avancado container__center__list__items__item--avancado--ET" title="Em Transito" ></div>';

                } else if (oData.visao == 'Entrega Realizada') {
                    if (oData.entrega_nao_realizada > 0 && oData.visao_status_ov5 == 'Entrega Nao Realizada') {
                        html =
                            '<div class="container__center__list__items__item--avancado container__center__list__items__item--avancado--PRD--incomplete" title="Entrega Não Realizada" ></div>';
                    } else {
                        html =
                            '<div class="container__center__list__items__item--avancado container__center__list__items__item--avancado--PRD--complete" title="Entrega Realizada" ></div>';
                    }

                }

                if (oData.num_bo > 0) {
                    html += '<i class="icon-ov-ocorrencia"></i>';
                }

                $(nTd).html(html);
            }
        },
            {
                data: "nf",
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {

                    //DETALHE NOTA#################################################

                    var data_nota = {
                        id: oData.id,
                        nf: oData.nf,
                        valor: oData.valor,
                        peso: oData.peso,
                        volumes: oData.volumes,
                        cubagem: oData.cubagem,
                        motivo_bo: oData.dt_ocorrencia,
                        remet_razao: oData.remet_razao,
                        remet_cnpj: oData.remet_cnpj,
                        remet_endereco: oData.remet_endereco,
                        remet_bairro: oData.remet_bairro,
                        remet_cidade: oData.remet_cidade,
                        remet_estado: oData.remet_estado,
                        remet_fone: oData.remet_fone,
                        desti_razao: oData.desti_razao,
                        desti_cnpj: oData.desti_cnpj,
                        desti_endereco: oData.desti_endereco,
                        desti_bairro: oData.desti_bairro,
                        desti_cidade: oData.desti_cidade,
                        desti_estado: oData.desti_estado,
                        desti_fone: oData.desti_fone,
                        cte: oData.cte,
                        pk_praca: oData.pk_praca,
                        pk_pedido: oData.pk_pedido,
                        pk_tipo: oData.pk_tipo,
                        pk_data: oData.pk_data,
                        pk_chave_danf: oData.pk_chave_danf,
                        dt_ocorrencia: oData.dt_ocorrencia,
                        responsavel: oData.responsavel,
                        tracking: oData.tracking,
                        micro_status: oData.micro_status,
                        num_bo: oData.num_bo,
                        visao: oData.visao,
                        dt_visao_1: oData.dt_visao_1,
                        dt_visao_2: oData.dt_visao_2,
                        dt_visao_3: oData.dt_visao_3,
                        data_entrega: oData.data_entrega,
                        comprovante: oData.comprovante,
                        cte_chave: oData.cte_chave,
                        cte_serie: oData.cte_serie,
                        cte_tipo: oData.cte_tipo,
                        numero: oData.numero,
                        empresa: oData.empresa,
                        agendamento: oData.agendamento,
                        previsao: oData.previsao,
                        nova_previsao: oData.nova_previsao,
                        ultima_coordenada: oData.ultima_coordenada,
                        url_imagem: '',
                        visao_status_ov: oData.visao_status_ov,
                        visao_status_ov2: oData.visao_status_ov2,
                        visao_status_ov3: oData.visao_status_ov3,
                        visao_status_ov4: oData.visao_status_ov4,
                        visao_status_ov5: oData.visao_status_ov5,
                        tms_nao: oData.tms_nao,
                        data_tms_nao: oData.data_tms_nao,
                        desc_tms_nao: oData.desc_tms_nao,
                        status_op: oData.status_op,
                        desc_grupo_bo: oData.desc_grupo_bo,
                        tipo_produto: oData.tipo_produto,
                        transporte_agv: oData.transporte_agv,
                        status_bo: oData.tipo_solucao,
                        recebedor: oData.recebedor,
                        entrega_nao_realizada: parseInt(oData.entrega_nao_realizada),
                        dt_sta_arm_1: oData.dt_sta_arm_1,
                        dt_sta_arm_2: oData.dt_sta_arm_2,
                        dt_sta_arm_3: oData.dt_sta_arm_3,
                        dt_sta_arm_4: oData.dt_sta_arm_4,
                        dt_sta_arm_5: oData.dt_sta_arm_5,
                        dt_sta_arm_1_d: oData.dt_sta_arm_1,
                        dt_sta_arm_2_d: oData.dt_sta_arm_2,
                        dt_sta_arm_3_d: oData.dt_sta_arm_3,
                        dt_sta_arm_4_d: oData.dt_sta_arm_4,
                        dt_sta_arm_5_d: oData.dt_sta_arm_5,
                        pedido_cliente: oData.pedido_cliente,
                        cnpj_cliente: oData.cnpj_cliente

                    };
                    // aqui
                    console.log(dt_sta_arm_1,'Retorno API - Busca Avançada');

                    var json_nota = JSON.stringify(data_nota);

                    //var codifica = btoa(json_nota);
                    var codifica = btoa(unescape(encodeURIComponent(json_nota)));

                    $(nTd).html('<a onclick="detalha_nota(\'' + codifica +
                        '\',\'2\')" id="detalhe_nota" name="detalhe_nota" title="Ver detalhes">' +
                        oData.nf + '</a>');
                }
            },
            {
                data: "data"
            },
            {
                data: "status_op",
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {

                    if (oData.status_op != null) {

                        if (oData.status_op == 1) {
                            $(nTd).html('Em Preparação');
                        }
                        else if (oData.status_op == 2) {
                            $(nTd).html('Em Separação');
                        }
                        else if (oData.status_op == 3) {
                            $(nTd).html('Em Conferencia');
                        }
                        else if (oData.status_op == 4) {
                            $(nTd).html('Conferido');
                        }
                        else if (oData.status_op == 5) {
                            $(nTd).html('Expedido');
                        }

                    } else {
                        $(nTd).html(' - ');
                    }
                }
            },
            {
                data: "pedido"
            },
            {
                data: "cte",
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {

                    if (oData.cte_serie != null) {

                        if (oData.cte_serie == 'PR' && oData.empresa != 'MK') {
                            $(nTd).html(' - ');
                        } else {
                            $(nTd).html(oData.cte);
                        }

                    } else {
                        $(nTd).html(' - ');
                    }
                }
            },
            {
                data: "origem",
                fnCreatedCell: function (nTd, sData, oData) {
                    if (sData != null  ) {
                        if (window.innerWidth < 1280) {
                            if (sData != null && sData.length > 15) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.origem + '">' + sData.substring(0, 10) + '...' + '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.origem + '">' + oData.origem + '</span>';
                            }
                            $(nTd).html(html);
                        } else if (window.innerWidth >= 1281 && window.innerWidth <= 1399) {
                            if (sData != null && sData.length > 20) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.origem + '">' + sData.substring(0, 15) + '...' + '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.origem + '">' + oData.origem + '</span>';
                            }
                            $(nTd).html(html);
                        } else if (window.innerWidth >= 1400) {
                            if (sData != null && sData.length > 20) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.origem + '">' + sData.substring(0, 30) + '...' + '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.origem + '">' + oData.origem + '</span>';
                            }
                            $(nTd).html(html);
                        } else {
                            var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                oData.origem + '">' + oData.origem + '</span>';
                            $(nTd).html(html);
                        }
                    } else{
                        $(nTd).html(html);
                    }
                }
            },
            {
                data: "destinatario",
                fnCreatedCell: function (nTd, sData, oData) {
                    // console.log(oData.cnpj_cliente)
                    if (sData != null  ) {
                        if (window.innerWidth < 1280) {
                            if (sData != null && sData.length > 15) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.destinatario + '">' + sData.substring(0, 10) + '...' +
                                    '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.destinatario + '">' + oData.destinatario + '</span>';
                            }
                            $(nTd).html(html);
                        } else if (window.innerWidth >= 1281 && window.innerWidth <= 1399) {
                            if (sData != null && sData.length > 20) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.destinatario + '">' + sData.substring(0, 15) + '...' +
                                    '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.destinatario + '">' + oData.destinatario + '</span>';
                            }
                            $(nTd).html(html);
                        } else if (window.innerWidth >= 1390) {
                            if (sData != null && sData.length > 20) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.destinatario + '">' + sData.substring(0, 30) + '...' +
                                    '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.destinatario + '">' + oData.destinatario + '</span>';
                            }
                            $(nTd).html(html);
                        } else {
                            var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                oData.destinatario + '">' + oData.destinatario + '</span>';
                            $(nTd).html(html);
                        }
                    } else {
                        $(nTd).html();
                    }
                }
            },
            {
                data: "cidade",
                fnCreatedCell: function (nTd, sData, oData) {
                    if (sData != null  ) {
                        if (window.innerWidth < 1280) {
                            if (sData.length > 15) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.cidade + '">' + sData.substring(0, 10) + '...' + '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.cidade + '">' + oData.cidade + '</span>';
                            }
                            $(nTd).html(html);
                        } else if (window.innerWidth >= 1281 && window.innerWidth <= 1399) {
                            if (sData != null && sData.length > 15) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.cidade + '">' + sData.substring(0, 15) + '...' + '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.cidade + '">' + oData.cidade + '</span>';
                            }
                            $(nTd).html(html);
                        } else if (window.innerWidth >= 1400) {
                            if (sData != null && sData.length > 15) {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.cidade + '">' + sData.substring(0, 30) + '...' + '</span>';
                            } else {
                                var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                    oData.cidade + '">' + oData.cidade + '</span>';
                            }
                            $(nTd).html(html);
                        } else {
                            var html = '<span class="text-overflow" data-toggle="tooltip" title="' +
                                oData.cidade + '">' + oData.cidade + '</span>';
                            $(nTd).html(html);
                        }
                    } else {
                        $(nTd).html();
                    }
                }
            },
            {
                data: "uf"
            },
            {
                data: "previsao",
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {

                    if (oData.previsao != '01/01/0001') {

                        $(nTd).html(oData.previsao);

                    } else {
                        $(nTd).html(' - ');
                    }
                }
            },
            {
                data: "nova_previsao",
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {

                    if (oData.nova_previsao != '01/01/0001') {

                        $(nTd).html(oData.nova_previsao);

                    } else {
                        $(nTd).html(' - ');
                    }
                }
            },
            {
                data: "agendamento",
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {

                    if ((oData.agendamento != '01/01/0001') && (oData.agendamento != '01/01/2001' )) {

                        $(nTd).html(oData.agendamento);

                    } else {
                        $(nTd).html(' - ');
                    }
                }
            },
            {
                data: "data_entrega",
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {

                    if ((oData.data_entrega != '01/01/0001') && (oData.data_entrega != '01/01/2001' )) {

                        $(nTd).html(oData.data_entrega);

                    } else {
                        $(nTd).html(' - ');
                    }
                }
            },
            {
                data: "cte_chave",
                width: '3%',
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                    if (oData.comprovante == 1 && oData.visao == 'Entrega Realizada') {

                        //if((oData.cte_chave != ' ') && (oData.cte_chave != null)){
                        $('#btnDownloadChave').val(oData.cte_chave);
                        $('#btnDownloadNf').val(oData.nf);
                        $(nTd).html(
                            "<div class='container__buscaAvancada__ul__items__item3__anexo container__buscaAvancada__ul__items__item3__anexo--active' onclick=\"modalShow('" +
                            oData.cte_chave + "','" + oData.nf + "', '"+oData.numero+"', '"+oData.empresa+"', '"+oData.cte_tipo+"', '"+oData.cte_serie+"',)\"></div></a>");
                        //}
                    } else {
                        $(nTd).html(' - ');
                    }
                }
            }
        ],
        scrollX: true,
        order: [
            [0, "asc"]
        ],
        //lengthChange: false,
        //scrollY: true,
        // scrollCollapse: true
        // lengthMenu: [
        // [ 10, 25, 50, -1 ],
        // [ '10', '25', '50', 'Todos' ]
        // ],
        // dom: 'Blfrtip',
        //buttons: ['excel']

    });

    visao_dash = '';
    visao_tipo = '';

    //document.getElementById('tblmodal_avancada_processing').style.display = 'none';

}


function carregaVisao() {
    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: url + 'order_visibility_on/visao'
    }).done(function (data) {
        var selectbox = $('#visao_form');
        selectbox.find('option').remove();
        $('<option>').val('-').text('Todos').appendTo(selectbox);
        $.each(data, function (i, d) {
            $('<option>').val(d.visao).text(d.visao).appendTo(selectbox);
        });
        $('<option>').val('entrega nao realizada').text('Entrega Não Realizada').appendTo(selectbox);
        selectbox.select2();
    });
}
carregaVisao();

$('#desti_cidade').on('click', function () {
    alert('Escolha o estado');
});

$('#desti_estado').on('change', function () {

    var val_funcao = $('#desti_estado').val();

    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: url + 'order_visibility_on/cidades',
        data: {
            vestado: val_funcao
        }
    }).done(function (data) {
        if (val_funcao == '') {
            $('#desti_cidade').prop('disabled', 'disabled');
        }
        var selectbox = $('#desti_cidade');
        $('#desti_cidade').prop('disabled', false);
        selectbox.find('option').remove();
        $('<option>').val(' ').text('Todos').appendTo(selectbox);
        $.each(data, function (i, d) {
            $('<option>').val(d.desti_cidade).text(d.desti_cidade).appendTo(selectbox);
        });
        selectbox.select2();
    });
});

$('.input-daterange').datepicker({
    keyboardNavigation: false,
    language: "pt-BR",
    forceParse: false,
    todayBtn: "linked",
    autoclose: true,
    orientation: 'bottom'
});

$('#empresa').select2({
    placeholder: "Selecione o(s) CNPJ(s)",
});

$("#btnatualizar").on("click", function () {

    if ($.fn.DataTable.isDataTable('#tblmodal_avancada')) {
        $('#tblmodal_avancada').DataTable().destroy();
    }

    initDataTables_avancada();

});

$('#destinatario').on('input', function() {
    if(!isNaN($(this).val().charAt(1)) && $(this).val().charAt(1) != ''){
        inputMask($(this).val());
        $('#iscnpjdest').val(true);
    } else {
        $('#destinatario').unmask();
        $('#iscnpjdest').val(false);
    }
});

function inputMask(documento) {
    var masks = ['000.000.000-000', '00.000.000/0000-00'];
    if (documento.length > 14) {
        $('#destinatario').mask(masks[1]);
        $('#iscnpjdest').val(true);
    } else {
        $('#destinatario').mask(masks[0]);
        $('#iscnpjdest').val(true);
    }
}



//BUSCA AVANÇADA FIM #############################################################################################


function initMap(converte) {

    var desconverte = converte;
    console.log('COORDENADAS NA FUNCAO INITMAP:' + desconverte);

    if (desconverte != null) {
        var ultima_coordenada = desconverte.split(',');

        //console.log(ultima_coordenada);

        var qtd = ultima_coordenada.length;
        var location = {
            'lat': parseFloat(ultima_coordenada[0]),
            'lng': parseFloat(ultima_coordenada[1])
        };
        var centralizar = location;
        var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 8,
            center: centralizar
        });
        var geocoder = new google.maps.Geocoder();
        var marcador = new google.maps.Marker({
            position: location,
            zoom: 12,
            map: map,
            title: 'Localização'
        });

    }
}


function callMap() {
    initMap(null);
}

function verificaCoordenadas(id, nf_empresa,geo) {

    //alert('foi');

    var vempresa_usuario = '{{$empresa_usuario}}';

    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: url + 'rastreio/index',
        data: {
            "id": id,
            "empresa_usuario": vempresa_usuario
        }
    }).done(function (data) {
        if (data['ultima_coordenada'] > '' && geo != 'N') {

            if (data['visao'] == 'Em Transito') {

                document.getElementById('container_em_transito_complete').style.display = 'flex';
                document.getElementById('container_em_transito_on').style.display = 'none';
                document.getElementById('container_em_transito_off').style.display = 'none';

                // document.getElementById('etapa_em_transito_off_' + id).style.display = 'none';
                // document.getElementById('etapa_em_transito_complete_' + id).style.display = 'flex';

                document.getElementById('linha_em_transito_off').style.display = 'flex';
                document.getElementById('linha_em_transito_on').style.display = 'none';

                if (data['aereo'] == 'N') {

                    $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--active', true);
                    $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--complete', false);


                    if (document.getElementById('geo_detalhe_on') != null) {
                        document.getElementById('geo_detalhe_on').style.display = 'flex';
                    }

                    if (document.getElementById('geo_detalhe_off')) {
                        document.getElementById('geo_detalhe_off').style.display = 'none';
                    }

                    if (document.getElementById('geolocalizacao_em_transito_off_' + id) != null) {
                        document.getElementById('geolocalizacao_em_transito_off_' + id).style.display = 'none';
                    }

                    if (document.getElementById('geolocalizacao_em_transito_on_' + id) != null) {
                        document.getElementById('geolocalizacao_em_transito_on_' + id).style.display = 'flex';
                    }

                }else{

                    $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--active', false);
                    $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--complete', true);

                    document.getElementById('geo_detalhe_on').style.display = 'none';
                    document.getElementById('geo_detalhe_off').style.display = 'none';

                    document.getElementById('geolocalizacao_em_transito_off_' + id).style.display = 'flex';
                    document.getElementById('geolocalizacao_em_transito_on_' + id).style.display = 'none';

                }

            }

            //geo_detalhe_on

            initMap(data['ultima_coordenada']);

        } else {

            if (data['visao'] == 'Em Transito') {
                document.getElementById('container_em_transito_complete').style.display = 'none';
                document.getElementById('container_em_transito_on').style.display = 'flex';
                document.getElementById('container_em_transito_off').style.display = 'none';

                document.getElementById('geo_detalhe_on').style.display = 'none';
                document.getElementById('geo_detalhe_off').style.display = 'none';

                // document.getElementById('geolocalizacao_em_transito_off_' + id).style.display = 'flex';
                // document.getElementById('geolocalizacao_em_transito_on_' + id).style.display = 'none';

            } else {
                document.getElementById('geo_detalhe_on').style.display = 'none';
                document.getElementById('geo_detalhe_off').style.display = 'none';

                document.getElementById('geolocalizacao_em_transito_off_' + id).style.display = 'flex';
                document.getElementById('geolocalizacao_em_transito_on_' + id).style.display = 'none';
            }
        }
        //return data['ultima_coordenada'];
    });

}

function verificaDadosPreparacaoRapida(id) {

    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: url + 'order_visibility_on/itensPreparacao',
        data: {
            "id": id
        }
    }).done(function (data) {

        //--data_nota = JSON.parse(data[0]);
        $('#dt_sta_arm_1').text(data[0].dt_sta_arm_1).trigger('change');
        $('#dt_sta_arm_2').text(data[0].dt_sta_arm_2).trigger('change');
        $('#dt_sta_arm_3').text(data[0].dt_sta_arm_3).trigger('change');
        $('#dt_sta_arm_4').text(data[0].dt_sta_arm_4).trigger('change');
        $('#dt_sta_arm_5').text(data[0].dt_sta_arm_5).trigger('change');

        document.getElementById('modalPreparaRapido').style.display = 'flex'

        //console.log(data[0].dt_sta_arm_1, 'log2');


    }).fail(function (jqXHR, textStatus, msg) {
        //alert(msg);
    });

}

function carregaStatus(data_nota) {
    var vempresa_usuario = '{{$empresa_usuario}}';

    var status_teste = $.ajax({
        dataType: 'json',
        type: 'POST',
        url: url + 'rastreio/rastreio_entrega',
        data: {
            vcte: data_nota.cte,
            vempresa: data_nota.empresa,
            vempresa_usuario: vempresa_usuario,
            vcte_chave: data_nota.cte_chave,
            vcte_serie: data_nota.cte_serie,
            vcte_tipo: data_nota.cte_tipo,
            vnota: data_nota.nf,
            vid: data_nota.id
        },
        beforeSend: function () {
            //console.log('enviando..');
        }
    }).done(function (data) {
        return data;
    }).fail(function (jqXHR, textStatus, msg) {
        //alert(msg);
    });

    return status_teste;

}

//DETALHA NOTA ######################################################################################################################################


function itens_on(data_nota) {

    $('#tblitens tbody').html('');

    var c_itens;

    $.ajax({
        type: 'POST',
        url: url + 'order_visibility_on/itens_on',
        data: {
            "praca":  data_nota.pk_praca,
            "pedido": data_nota.pk_pedido,
            "tipo":   data_nota.pk_tipo,
            "data":   data_nota.pk_data,
            "nf":     data_nota.nf
        }
    }).done(function (data) {
        var qtd = data.length;

        if (qtd > 0) {
            for (var x = 0; x < qtd; x++) {

                $('#tblitens tbody').append(
                    '<tr>' +
                    '<td>' + data[x].des + '</td>' +
                    '<td>' + data[x].lote + '</td>' +
                    '<td>' + data[x].qtd + '</td>' +
                    '</tr>');
            }
        }

    });

}

function tracking(data_nota) {
  if (window.Laravel.user.empresa_id != 2) {
    var urlApiAgv = window.orv.api_oracle_3pl_base_url;
  } else {
    var urlApiAgv = window.orv.api_oracle_base_url;
  }
  $('#tbldetalhesenvio tbody').html('');
  $.ajax({
    type: 'POST',
    dataType: 'json',
    url: url + 'order_visibility_on/detalhe_tracking_itens?legacy=1',
    data: {
      "chave_danf": data_nota.pk_chave_danf
    },
  }).done(function (data) {
    var qtd = data.length;
    if (qtd > 0) {
      for (var x = 0; x < qtd; x++) {
        let dateNw = moment(data[x].date);
        let hourFormatted = data[x].hour ? moment(data[x].hour, 'HH:mm').format('HH:mm') : '';
        let messageFormatted = data[x].message !== null ? data[x].message : '';
        $('#tbldetalhesenvio tbody').append(
          '<tr>' +
          '<td>' + data[x].macro_status + '</td>' +
          '<td>' + data[x].micro_status + '</td>' +
          '<td>' + dateNw.format("DD/MM/YYYY") + '</td>' +
          '<td>' + hourFormatted + '</td>' +
          '<td>' + data[x].original_code + '</td>' +
          '<td>' + messageFormatted + '</td>' +
          '</tr>');
      }
    }
  });
}

function numberToReal(numero) {

    var numero = parseFloat(numero);
    numero = numero.toFixed(2).split('.');
    numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}

function numberToDash(numero) {

    var numero = parseInt(numero);
    numero = numero.toFixed(0).split('.');
    numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}


function numberVolume(numero) {
    if (numero != null && numero !== undefined) {
        if (numero.substr(0, 1) == ".") {
            numero = '0' + numero;
        }
        return numero.replace(".", ",");
    } else {
        return numero;
    }

}

function atualizaTransito(obj) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: url + 'rastreio/transito_atual',
        data: obj
    }).done((data) => {
        console.log('Status de Transito atualizado.');
    }).catch((e) => {
        console.log(e);
    });
}

function detalha_nota(array, janela_busca) {
    janela_busca = janela_busca || '';
    var data_nota = atob(array);
    data_nota = JSON.parse(data_nota);

    $('#id_detalhe').val(data_nota.id);
    $('#nf_empresa_detalhe').val(data_nota.empresa);
    $('#cte_chave_detalhe').val(data_nota.cte_chave);
    $('#cte_numero_detalhe').val(data_nota.numero);
    $('#cte_empresa_detalhe').val(data_nota.empresa);
    $('#cte_tipo_detalhe').val(data_nota.cte_tipo);
    $('#cte_serie_detalhe').val(data_nota.cte_serie);
    $('#comprovante_detalhe').val(data_nota.comprovante);
    $('#pinLocationDetalhe').removeAttr('title');

    $('#pinLocationDetalhePreparacao').removeAttr('title');

    $('#pk_nf_numero').text(data_nota.nf);
    $('#pk_pedido').text(data_nota.pk_pedido);
    $('#valor').text(numberToReal(data_nota.valor));
    $('#peso').text(numberVolume(data_nota.peso));
    $('#volumes').text(numberVolume(data_nota.volumes));
    $('#cubagem').text(numberVolume(data_nota.cubagem));

    $('#grupoBo').text(data_nota.desc_grupo_bo);
    $('#motivo_bo').text(data_nota.dt_ocorrencia);
    $('#responsavel_bo').text(data_nota.responsavel);
    $('#num_bo').text(data_nota.num_bo);

    $('#remet_razao').text(data_nota.remet_razao);
    $('#remet_cnpj').text(data_nota.remet_cnpj);
    $('#remet_endereco').text(data_nota.remet_endereco);
    $('#remet_bairro').text(data_nota.remet_bairro);
    $('#remet_cidade').text(data_nota.remet_cidade + ' / ' + data_nota.remet_estado);
    $('#remet_estado').text(data_nota.remet_estado);
    $('#remet_fone').text(data_nota.remet_fone);

    $('#desti_razao').text(data_nota.desti_razao);
    $('#desti_cnpj').text(data_nota.desti_cnpj);
    $('#desti_endereco').text(data_nota.desti_endereco);

    $('#desti_bairro').text(data_nota.desti_bairro);
    $('#desti_cidade_detalhe').text(data_nota.desti_cidade + ' / ' + data_nota.desti_estado);
    $('#desti_estado').text(data_nota.desti_estado);
    $('#desti_fone').text(data_nota.desti_fone);

    $('#motivo_bo').text(data_nota.dt_ocorrencia);
    $('#responsavel').text(data_nota.responsavel);

    $('#tipo_produto_detalhe').text(data_nota.tipo_produto);
    $('#status_bo').text(data_nota.status_bo);

    var estilo_preparacao_pedido_title = '';
    var estilo_preparacao_pedido_title = data_nota.status_op;

    if(estilo_preparacao_pedido_title > ''){

        if(estilo_preparacao_pedido_title == 1){
            estilo_preparacao_pedido_title = 'Em Preparação';
        }
        if(estilo_preparacao_pedido_title == 2){
            estilo_preparacao_pedido_title = 'Em Separação';
        }
        if(estilo_preparacao_pedido_title == 3){
            estilo_preparacao_pedido_title = 'Em Conferencia';
        }
        if(estilo_preparacao_pedido_title == 4){
            estilo_preparacao_pedido_title = 'Conferido';
        }
        if(estilo_preparacao_pedido_title == 5){
            estilo_preparacao_pedido_title = 'Expedido';
        }
    }
    $('#dt_sta_arm_1').text(data_nota.dt_sta_arm_1);
    $('#dt_sta_arm_2').text(data_nota.dt_sta_arm_2);
    $('#dt_sta_arm_3').text(data_nota.dt_sta_arm_3);
    $('#dt_sta_arm_4').text(data_nota.dt_sta_arm_4);
    $('#dt_sta_arm_5').text(data_nota.dt_sta_arm_5);

    $('#dt_sta_arm_1_d').text(data_nota.dt_sta_arm_1_d);
    $('#dt_sta_arm_2_d').text(data_nota.dt_sta_arm_2_d);
    $('#dt_sta_arm_3_d').text(data_nota.dt_sta_arm_3_d);
    $('#dt_sta_arm_4_d').text(data_nota.dt_sta_arm_4_d);
    $('#dt_sta_arm_5_d').text(data_nota.dt_sta_arm_5_d);
    $('#status_operacional').text(estilo_preparacao_pedido_title);

    var isTranspAgv = '';

    if (data_nota.transporte_agv == 'N') {
        isTranspAgv = 'Não';
    } else {
        isTranspAgv = 'Sim';
    }

    $('#recebedor').text(data_nota.recebedor);

    $('#transporte_agv').text(isTranspAgv);

    document.getElementById('busca__rapida__detalhes').style.display = 'none';
    document.getElementById('botao_detalhe_ocorrencia').style.display = 'none';

    if (!data_nota.responsavel == ' ' && !data_nota.dt_ocorrencia == ' ') {

        document.getElementById('botao_detalhe_ocorrencia').style.display = 'flex';

        //document.getElementById('motivo_bo_display').style.display = 'block';

    }
    if (!data_nota.responsavel == 'null' && !data_nota.dt_ocorrencia == 'null') {

        document.getElementById('botao_detalhe_ocorrencia').style.display = 'flex';
        //document.getElementById('motivo_bo_display').style.display = 'block';
    }

    if (data_nota.cte == 0) {
        $('#cte_detalhe').text('');
    } else {
        $('#cte_detalhe').text(data_nota.cte);
    }

    $('#data_entrega_realizada, #data_previsao_entrega, data_pedido_recebido, #data_preparacao_recebido').text("");

    if (data_nota.desc_tms_nao != null) {
        document.getElementById('container_pedido_recebido_complete_title').title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
    }

    console.log(data_nota, 'pega a visao');

    if (data_nota.dt_visao_1 != null) {
        if (data_nota.dt_visao_1 != '01/01/2001' && data_nota.dt_visao_1 != '2001-01-01 00:00:00' && data_nota
            .dt_visao_1 != '01/01/0001') {

            $('#data_pedido_recebido_complete').text('' + data_nota.dt_visao_1);
            $('#data_pedido_recebido_on').text('' + data_nota.dt_visao_1);
            $('#data_pedido_recebido_off').text('' + data_nota.dt_visao_1);
        }

        if (data_nota.agendamento != '01/01/2001' && data_nota.agendamento != '2001-01-01 00:00:00' && data_nota
            .agendamento != '01/01/0001' && data_nota.agendamento != null) {
            $('#data_previsao_entrega2').text('' + data_nota.agendamento);
            $('#data_previsao_entrega3').text('' + data_nota.agendamento);
        } else {

            if (data_nota.previsao != '01/01/2001' && data_nota.previsao != '2001-01-01 00:00:00' && data_nota
                .previsao != '01/01/0001' && data_nota.previsao != null) {
                $('#data_previsao_entrega2').text('' + data_nota.previsao);
                $('#data_previsao_entrega3').text('' + data_nota.previsao);
            } else {
                $('#data_previsao_entrega2').text('');
                $('#data_previsao_entrega3').text('');
            }
        }
        if (data_nota.nova_previsao != '01/01/2001' && data_nota.nova_previsao != '2001-01-01 00:00:00' && data_nota
            .nova_previsao != '01/01/0001' && data_nota.nova_previsao != null) {
            $('#data_previsao_entrega_atualizada').text('' + data_nota.nova_previsao);
        }

    }

    if (data_nota.dt_visao_2 != null) {
        if (data_nota.dt_visao_2 != '01/01/2001' && data_nota.dt_visao_2 != '2001-01-01 00:00:00' && data_nota
            .dt_visao_2 != '01/01/0001') {
            $('#data_preparacao_recebido_on').text('' + data_nota.dt_visao_2);
            $('#data_preparacao_recebido_off').text('' + data_nota.dt_visao_2);
        }

        if (data_nota.agendamento != '01/01/2001' && data_nota.agendamento != '2001-01-01 00:00:00' && data_nota
            .agendamento != '01/01/0001' && data_nota.agendamento != null) {
            $('#data_previsao_entrega2').text('' + data_nota.agendamento);
            $('#data_previsao_entrega3').text('' + data_nota.agendamento);
        } else {

            if (data_nota.previsao != '01/01/2001' && data_nota.previsao != '2001-01-01 00:00:00' && data_nota
                .previsao != '01/01/0001' && data_nota.previsao != null) {
                $('#data_previsao_entrega2').text('' + data_nota.previsao);
                $('#data_previsao_entrega3').text('' + data_nota.previsao);
            } else {
                $('#data_previsao_entrega2').text('');
                $('#data_previsao_entrega3').text('');
            }
        }
        if (data_nota.nova_previsao != '01/01/2001' && data_nota.nova_previsao != '2001-01-01 00:00:00' && data_nota
            .nova_previsao != '01/01/0001' && data_nota.nova_previsao != null) {
            $('#data_previsao_entrega_atualizada').text('' + data_nota.nova_previsao);
        }
    }
    if (data_nota.dt_visao_3 != null) {
        if (data_nota.dt_visao_3 != '01/01/0001' && data_nota.dt_visao_3 != '2001-01-01 00:00:00' && data_nota
            .dt_visao_3 != '01/01/0001') {
            $('#data_previsao_entrega_on').text('' + data_nota.dt_visao_3);
            $('#data_previsao_entrega_off').text('' + data_nota.dt_visao_3);
            $('#data_previsao_entrega_on_complete').text('' + data_nota.dt_visao_3);

            if (data_nota.agendamento != '01/01/2001' && data_nota.agendamento != '2001-01-01 00:00:00' && data_nota
                .agendamento != '01/01/0001' && data_nota.agendamento != null) {
                $('#data_previsao_entrega2').text('' + data_nota.agendamento);
                $('#data_previsao_entrega3').text('' + data_nota.agendamento);
            } else {

                if (data_nota.previsao != '01/01/2001' && data_nota.previsao != '2001-01-01 00:00:00' && data_nota
                    .previsao != '01/01/0001' && data_nota.previsao != null) {
                    $('#data_previsao_entrega2').text('' + data_nota.previsao);
                    $('#data_previsao_entrega3').text('' + data_nota.previsao);
                } else {
                    $('#data_previsao_entrega2').text('');
                    $('#data_previsao_entrega3').text('');
                }
            }
        }
        if (data_nota.nova_previsao != '01/01/2001' && data_nota.nova_previsao != '2001-01-01 00:00:00' && data_nota
            .nova_previsao != '01/01/0001' && data_nota.nova_previsao != null) {
            $('#data_previsao_entrega_atualizada').text('' + data_nota.nova_previsao);
        }
    }

    if (data_nota.data_entrega != null) {
        if (data_nota.data_entrega != '01/01/2001' && data_nota.data_entrega != '2001-01-01 00:00:00' && data_nota
            .data_entrega != '01/01/0001') {
            $('#data_entrega_realizada_on').text('' + data_nota.data_entrega);
            $('#data_entrega_realizada_on_complete').text('' + data_nota.data_entrega);
            $('#data_entrega_realizada_off').text('' + data_nota.data_entrega);

            if (data_nota.agendamento != '01/01/2001' && data_nota.agendamento != '2001-01-01 00:00:00' && data_nota
                .agendamento != '01/01/0001' && data_nota.agendamento != null) {
                $('#data_previsao_entrega2').text('' + data_nota.agendamento);
                $('#data_previsao_entrega3').text('' + data_nota.agendamento);
            } else {

                if (data_nota.previsao != '01/01/2001' && data_nota.previsao != '2001-01-01 00:00:00' && data_nota
                    .previsao != '01/01/0001' && data_nota.previsao != null) {
                    $('#data_previsao_entrega2').text('' + data_nota.previsao);
                    $('#data_previsao_entrega3').text('' + data_nota.previsao);
                } else {
                    $('#data_previsao_entrega2').text('');
                    $('#data_previsao_entrega3').text('');
                }
            }
        }
        if (data_nota.nova_previsao != '01/01/2001' && data_nota.nova_previsao != '2001-01-01 00:00:00' && data_nota
            .nova_previsao != '01/01/0001' && data_nota.nova_previsao != null) {
            $('#data_previsao_entrega_atualizada').text('' + data_nota.nova_previsao);
        }
    }

    document.getElementById('previsao__normal').style.display = "none";
    document.getElementById('previsao__atualizada').style.display = "none";

    if (data_nota.nova_previsao != '01/01/2001' && data_nota.nova_previsao != '2001-01-01 00:00:00' &&
        data_nota.nova_previsao != '01/01/0001' && data_nota.nova_previsao != null) {
        document.getElementById('previsao__atualizada').style.display = "flex";
        document.getElementById('previsao__normal').style.display = "none";
    } else {
        document.getElementById('previsao__normal').style.display = "flex";
        document.getElementById('previsao__atualizada').style.display = "none";
    }

    var visao_lista_rapida = data_nota.visao;

    if (visao_lista_rapida == 'Pedido NF Recebido') {

        if (data_nota.visao_status_ov == 'Pedido NF Recebido' && data_nota.desc_tms_nao != null) {

            document.getElementById('container_pedido_recebido_complete').style.display = 'flex';
            document.getElementById('container_pedido_recebido_complete_title').title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
            document.getElementById('container_pedido_recebido_on').style.display = 'none';
            document.getElementById('container_pedido_recebido_off').style.display = 'none';

        }else{

            document.getElementById('container_pedido_recebido_complete').style.display = 'none';
            document.getElementById('container_pedido_recebido_on').style.display = 'flex';
            document.getElementById('container_pedido_recebido_off').style.display = 'none';
        }

        document.getElementById('container_preparacao_pedido_on').style.display = 'none';
        document.getElementById('container_preparacao_pedido_off').style.display = 'flex';
        document.getElementById('detalhe_on_preparacao').style.display = 'none';

        document.getElementById('container_em_transito_on').style.display = 'none';
        document.getElementById('container_em_transito_complete').style.display = 'none';
        document.getElementById('container_em_transito_off').style.display = 'flex';

        document.getElementById('linha_pedido_recebido_on').style.display = 'none';
        document.getElementById('linha_pedido_recebido_off').style.display = 'flex';
        document.getElementById('linha_preparacao_pedido_on').style.display = 'none';
        document.getElementById('linha_preparacao_pedido_off').style.display = 'flex';
        document.getElementById('linha_em_transito_on').style.display = 'none';
        document.getElementById('linha_em_transito_off').style.display = 'flex';

        document.getElementById('status_em_transito_off_1').style.display = 'flex';
        document.getElementById('status_em_transito_off_2').style.display = 'flex';
        document.getElementById('status_em_transito_off_3').style.display = 'flex';
        document.getElementById('status_em_transito_off_4').style.display = 'flex';
        document.getElementById('status_em_transito_on_1').style.display = 'none';
        document.getElementById('status_em_transito_on_2').style.display = 'none';
        document.getElementById('status_em_transito_on_3').style.display = 'none';
        document.getElementById('status_em_transito_on_4').style.display = 'none';
        document.getElementById('geo_detalhe_off').style.display = 'none';

        document.getElementById('container_entrega_realizada_on').style.display = 'none';
        document.getElementById('container_entrega_realizada_off').style.display = 'flex';
        document.getElementById('container_entrega_realizada_complete').style.display = 'none';

    } else if (visao_lista_rapida == 'Preparacao do Pedido') {

        if (data_nota.desc_tms_nao != null) {
            document.getElementById('container_pedido_recebido_complete_title').title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
            document.getElementById('container_pedido_recebido_on').title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
            document.getElementById('container_pedido_recebido_complete').style.display = 'flex';
            document.getElementById('container_pedido_recebido_on').style.display = 'none';
            document.getElementById('container_pedido_recebido_off').style.display = 'none';
        } else{

            document.getElementById('container_pedido_recebido_complete').style.display = 'none';
            document.getElementById('container_pedido_recebido_on').style.display = 'flex';
            document.getElementById('container_pedido_recebido_off').style.display = 'none';
            document.getElementById('container_pedido_recebido_complete_title').title = "";
        }
        if (data_nota.visao_status_ov2 == 'Preparacao do Pedido') {
            document.getElementById('container_preparacao_pedido_on').style.display = 'flex';
            document.getElementById('container_preparacao_pedido_off').style.display = 'none';

        }else{

            document.getElementById('container_preparacao_pedido_on').style.display = 'flex';
            document.getElementById('container_preparacao_pedido_off').style.display = 'none';
            document.getElementById('container_preparacao_pedido_complete_title').title = '';
        }

        document.getElementById('linha_preparacao_pedido_on').style.display = 'flex';
        document.getElementById('linha_preparacao_pedido_off').style.display = 'none';
        document.getElementById('linha_pedido_recebido_on').style.display = 'flex';
        document.getElementById('linha_pedido_recebido_off').style.display = 'none';

        document.getElementById('container_em_transito_on').style.display = 'none';
        document.getElementById('container_em_transito_complete').style.display = 'none';
        document.getElementById('container_em_transito_off').style.display = 'flex';

        document.getElementById('linha_em_transito_on').style.display = 'none';
        document.getElementById('linha_em_transito_off').style.display = 'flex';

        document.getElementById('status_em_transito_off_1').style.display = 'flex';
        document.getElementById('status_em_transito_off_2').style.display = 'flex';
        document.getElementById('status_em_transito_off_3').style.display = 'flex';
        document.getElementById('status_em_transito_off_4').style.display = 'flex';
        document.getElementById('status_em_transito_on_1').style.display = 'none';
        document.getElementById('status_em_transito_on_2').style.display = 'none';
        document.getElementById('status_em_transito_on_3').style.display = 'none';
        document.getElementById('status_em_transito_on_4').style.display = 'none';

        document.getElementById('container_entrega_realizada_on').style.display = 'none';
        document.getElementById('container_entrega_realizada_off').style.display = 'flex';
        document.getElementById('container_entrega_realizada_complete').style.display = 'none';
        document.getElementById('geo_detalhe_off').style.display = 'none';
        document.getElementById('detalhe_on_preparacao').style.display = 'flex';

    } else if (visao_lista_rapida == 'Em Transito') {
        if (data_nota.desc_tms_nao != null) {
            document.getElementById('container_pedido_recebido_complete_title').title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
            document.getElementById('container_pedido_recebido_on').title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
            document.getElementById('container_pedido_recebido_complete').style.display = 'flex';
            document.getElementById('container_pedido_recebido_on').style.display = 'none';
            document.getElementById('container_pedido_recebido_off').style.display = 'none';
        }  else{
            document.getElementById('container_pedido_recebido_complete').style.display = 'none';
            document.getElementById('container_pedido_recebido_on').style.display = 'flex';
            document.getElementById('container_pedido_recebido_off').style.display = 'none';
            document.getElementById('container_pedido_recebido_complete_title').title = "";
        }
        if (data_nota.visao_status_ov2 == 'Preparacao do Pedido') {
            document.getElementById('container_preparacao_pedido_on').style.display = 'flex';
            document.getElementById('container_preparacao_pedido_off').style.display = 'none';

        } else{
            document.getElementById('container_preparacao_pedido_on').style.display = 'flex';
            document.getElementById('container_preparacao_pedido_off').style.display = 'none';
            document.getElementById('container_preparacao_pedido_complete_title').title = '';
        }

        document.getElementById('container_em_transito_off').style.display = 'none';
        document.getElementById('linha_pedido_recebido_on').style.display = 'flex';
        document.getElementById('linha_pedido_recebido_off').style.display = 'none';
        document.getElementById('linha_preparacao_pedido_on').style.display = 'flex';
        document.getElementById('linha_preparacao_pedido_off').style.display = 'none';
        document.getElementById('detalhe_on_preparacao').style.display = 'flex';

        if (data_nota.ultima_coordenada != null && data_nota.ultima_coordenada != '') {
            document.getElementById('geo_detalhe_on').style.display = 'flex';
            document.getElementById('container_em_transito_on').style.display = 'none';
            document.getElementById('container_em_transito_complete').style.display = 'flex';
            document.getElementById('container_em_transito_off').style.display = 'none';
        } else {
            document.getElementById('container_em_transito_on').style.display = 'flex';
            document.getElementById('container_em_transito_complete').style.display = 'none';
            document.getElementById('container_em_transito_off').style.display = 'none';
            document.getElementById('geo_detalhe_off').style.display = 'none';
            document.getElementById('geo_detalhe_on').style.display = 'none';
        }

        document.getElementById('linha_em_transito_on').style.display = 'none';
        document.getElementById('linha_em_transito_off').style.display = 'flex';
        document.getElementById('container_entrega_realizada_on').style.display = 'none';
        document.getElementById('container_entrega_realizada_off').style.display = 'flex';
        document.getElementById('container_entrega_realizada_complete').style.display = 'none';

        calculo_status = carregaStatus(data_nota);

        calculo_status.then((response) => {
            /** mostra o resultado */

            console.log(response, 'Rastreio entrega');

            var cheguei = response.cheguei;
            var infoCross = '';

            if (cheguei != undefined) {
                infoCross = 'Chegada XDOC ' + cheguei.filial + ' - ' + cheguei.data;

                if (cheguei.saida != null) {
                    infoCross += '\nExpedição XDOC ' + cheguei.filial + ' - ' + cheguei.saida;
                }
                $('#pinLocationDetalhe').attr('title', infoCross);
                $('#container_em_transito_complete').attr('title', infoCross);
                $('#status_em_transito_on_2').removeClass('container__detalhes__box__top__panel__item__step__balls--active');
                $('#status_em_transito_on_2').addClass('container__detalhes__box__top__panel__item__step__balls--cross');
            } else {
                $('#status_em_transito_on_2').addClass('container__detalhes__box__top__panel__item__step__balls--active');
                $('#status_em_transito_on_2').removeClass('container__detalhes__box__top__panel__item__step__balls--cross');
                $('#pinLocationDetalhe').removeAttr('title');
                $('#container_em_transito_complete').removeAttr('title');
                $('#status_em_transito_on_2').removeAttr('title');
            }

            atualizaTransito({
                id: data_nota.id,
                status: response.status
            });

            let transitoAtual = data_nota.transito_atual;

            if (response.status > transitoAtual ) {
                transitoAtual = response.status;
            }

            if (transitoAtual == undefined) {
                transitoAtual = response.status;
            }

            if (response.aereo_valida != 'S') {
                if (data_nota.ultima_coordenada != null && data_nota.ultima_coordenada != '') {
                    $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--active', false);
                    $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--complete', true);
                } else {
                    $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--active', true);
                    $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--complete', false);
                }
            } else {
                $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--active', true);
                $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--complete', false);
            }

            if (transitoAtual == 1) {
                document.getElementById('status_em_transito_on_1').style.display = 'flex';
                document.getElementById('status_em_transito_off_1').style.display = 'none';
                document.getElementById('status_em_transito_off_2').style.display = 'flex';
                document.getElementById('status_em_transito_off_3').style.display = 'flex';
                document.getElementById('status_em_transito_off_4').style.display = 'flex';

                if (response.aereo_valida == 'S') {

                    document.getElementById('geo_detalhe_off').style.display = 'none';
                    document.getElementById('geo_detalhe_on').style.display = 'none';

                }

            }
            if (transitoAtual == 2) {
                document.getElementById('status_em_transito_on_1').style.display = 'flex';
                document.getElementById('status_em_transito_on_2').style.display = 'flex';
                document.getElementById('status_em_transito_off_1').style.display = 'none';
                document.getElementById('status_em_transito_off_2').style.display = 'none';
                document.getElementById('status_em_transito_off_3').style.display = 'flex';
                document.getElementById('status_em_transito_off_4').style.display = 'flex';

                if (response.aereo_valida == 'S') {

                    document.getElementById('geo_detalhe_off').style.display = 'none';
                    document.getElementById('geo_detalhe_on').style.display = 'none';

                }

            }
            if (transitoAtual == 3) {
                document.getElementById('status_em_transito_on_1').style.display = 'flex';
                document.getElementById('status_em_transito_on_2').style.display = 'flex';
                document.getElementById('status_em_transito_on_3').style.display = 'flex';
                document.getElementById('status_em_transito_off_1').style.display = 'none';
                document.getElementById('status_em_transito_off_2').style.display = 'none';
                document.getElementById('status_em_transito_off_3').style.display = 'none';
                document.getElementById('status_em_transito_off_4').style.display = 'flex';

                if (response.aereo_valida == 'S') {

                    document.getElementById('geo_detalhe_off').style.display = 'none';
                    document.getElementById('geo_detalhe_on').style.display = 'none';

                }

            }
            if (transitoAtual == 4) {

                document.getElementById('status_em_transito_off_1').style.display = 'none';
                document.getElementById('status_em_transito_off_2').style.display = 'none';
                document.getElementById('status_em_transito_off_3').style.display = 'none';
                document.getElementById('status_em_transito_off_4').style.display = 'none';
                document.getElementById('status_em_transito_on_1').style.display = 'flex';
                document.getElementById('status_em_transito_on_2').style.display = 'flex';
                document.getElementById('status_em_transito_on_3').style.display = 'flex';
                document.getElementById('status_em_transito_on_4').style.display = 'flex';

                if (response.aereo_valida == 'S') {

                    document.getElementById('geo_detalhe_off').style.display = 'none';
                    document.getElementById('geo_detalhe_on').style.display = 'none';

                }

            }

            verificaCoordenadas(data_nota.id, data_nota.nf,response.geoposicao);

        }).catch((error) => {
            /** mostra o erro caso haja algum */
            console.log(error);
        });

        if (data_nota.visao_status_ov3 == 'Em Transito') {
            $('#container_em_transito_on').css('display', 'flex');
            $('#container_em_transito_on_off').css('display', 'none');
        } else {
            $('#container_em_transito_on').css('display', 'none');
            $('#container_em_transito_on_off').css('display', 'flex');
        }

    } else {

        $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--active', true);
        $('#pinLocationDetalhe').toggleClass('container__detalhes__box__top__panel__item__icon--ET--complete', false);

        if (data_nota.desc_tms_nao != null) {
            document.getElementById('container_pedido_recebido_complete_title').title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
            document.getElementById('container_pedido_recebido_on').title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
            document.getElementById('container_pedido_recebido_complete').style.display = 'flex';
            document.getElementById('container_pedido_recebido_on').style.display = 'none';
            document.getElementById('container_pedido_recebido_off').style.display = 'none';
        }

        else{

            document.getElementById('container_pedido_recebido_complete').style.display = 'none';
            document.getElementById('container_pedido_recebido_on').style.display = 'flex';
            document.getElementById('container_pedido_recebido_off').style.display = 'none';
            document.getElementById('container_pedido_recebido_complete_title').title = "";

        }
        if (data_nota.visao_status_ov2 == 'Preparacao do Pedido') {
            document.getElementById('container_preparacao_pedido_on').style.display = 'flex';
            document.getElementById('container_preparacao_pedido_off').style.display = 'none';

        }else{
            document.getElementById('container_preparacao_pedido_on').style.display = 'flex';
            document.getElementById('container_preparacao_pedido_off').style.display = 'none';
            document.getElementById('container_preparacao_pedido_complete_title').title = '';
        }

        document.getElementById('container_em_transito_on').style.display = 'flex';
        document.getElementById('container_em_transito_complete').style.display = 'none';
        document.getElementById('container_em_transito_off').style.display = 'none';
        document.getElementById('container_entrega_realizada_on').style.display = 'flex';

        if (data_nota.entrega_nao_realizada > 0 && data_nota.visao_status_ov5 == 'Entrega Nao Realizada') {
            $('#toggleIconEntrega').hide();
            $('.toggleIconEntregaText').hide();
            $('#toggleIconNaoEntrega').show();
            $('.toggleIconNaoEntregaText').show();
        } else {
            $('#toggleIconNaoEntrega').hide();
            $('.toggleIconNaoEntregaText').hide();
            $('#toggleIconEntrega').show();
            $('.toggleIconEntregaText').show();
        }

        document.getElementById('container_entrega_realizada_off').style.display = 'none';
        document.getElementById('container_entrega_realizada_complete').style.display = 'none';
        document.getElementById('linha_pedido_recebido_on').style.display = 'flex';
        document.getElementById('linha_pedido_recebido_off').style.display = 'none';
        document.getElementById('linha_preparacao_pedido_on').style.display = 'flex';
        document.getElementById('linha_preparacao_pedido_off').style.display = 'none';
        document.getElementById('linha_em_transito_on').style.display = 'flex';
        document.getElementById('linha_em_transito_off').style.display = 'none';
        document.getElementById('detalhe_on_preparacao').style.display = 'flex';

    }

    if (data_nota.comprovante != 0 && data_nota.comprovante != null && visao_lista_rapida == 'Entrega Realizada') {

        document.getElementById('comprovante_on').style.display = 'flex';

        document.getElementById('container_entrega_realizada_complete').style.display = 'flex';
        document.getElementById('container_entrega_realizada_off').style.display = 'none';
        document.getElementById('container_entrega_realizada_on').style.display = 'none';

    }
    //alert(visao);

    //FAZER OS CAMPOS DE RESPONSAVEL E MOTIVO BO APARECEREM SE FORAM MAIOR QUE NADA
    if (!data_nota.responsavel == ' ' && !data_nota.dt_ocorrencia == ' ') {

        //document.getElementById('motivo_bo_display').style.display = 'block';

    }
    if (!data_nota.responsavel == 'null' && !data_nota.dt_ocorrencia == 'null') {
        //document.getElementById('motivo_bo_display').style.display = 'block';
    }

    //btnGoDetalhes();
    document.getElementById('busca_avancada_lista').style.display = "none";
    document.getElementById('busca__rapida__detalhes').style.display = "none";
    document.getElementById('detalhes').style.display = "block";

    itens_on(data_nota);
    tracking(data_nota);

    $("#botao_voltar_detalhes").on("click", function () {
        document.getElementById('alert__ocorrencias').style.display = "none";
        //alert('foi'+janela_busca);

        if (janela_busca == '1') {
            document.getElementById('busca__rapida__detalhes').style.display = "flex";
            document.getElementById('detalhes').style.display = "none";
        }
        if (janela_busca == '2') {
            //document.getElementById('busca__rapida__detalhes').style.display = "flex";
            document.getElementById('busca_avancada_lista').style.display = "flex";
            document.getElementById('detalhes').style.display = "none";
        }

        janela_busca = '';


        $('#id_detalhe').val('');
        $('#nf_empresa_detalhe').val('');
        $('#cte_chave_detalhe').val('');
        $('#comprovante_detalhe').val('');

        $('#cte_numero_detalhe').val('');
        $('#cte_empresa_detalhe').val('');
        $('#cte_tipo_detalhe').val('');
        $('#cte_serie_detalhe').val('');

        $('#cte_numero_modal').val('');
        $('#cte_empresa_modal').val('');
        $('#cte_tipo_modal').val('');
        $('#cte_serie_modal').val('');

        $('#pk_nf_numero').text('');
        $('#pk_pedido').text('');
        $('#valor').text('');
        $('#peso').text('');
        $('#volumes').text('');
        $('#cubagem').text('');

        $('#motivo_bo').text('');
        $('#responsavel_bo').text('');

        $('#remet_razao').text('');
        $('#remet_cnpj').text('');
        $('#remet_endereco').text('');
        $('#remet_bairro').text('');
        $('#remet_cidade').text('');
        $('#remet_estado').text('');
        $('#remet_fone').text();

        $('#desti_razao').text('');
        $('#desti_cnpj').text('');
        $('#desti_endereco').text('');
        $('#desti_bairro').text('');
        $('#desti_cidade_detalhe').text('');
        $('#desti_estado').text('');
        $('#desti_fone').text('');

        $('#motivo_bo').text('');
        $('#responsavel').text('');

        $('#cte_detalhe').text('');
        $('#data_pedido_recebido_on').text('');
        $('#data_pedido_recebido_off').text('');
        $('#data_preparacao_recebido_on').text('');
        $('#data_preparacao_recebido_off').text('');
        $('#data_previsao_entrega_on').text('');
        $('#data_previsao_entrega_off').text('');
        $('#data_entrega_realizada_on').text('');
        $('#data_entrega_realizada_on_complete').text('');
        $('#data_entrega_realizada_off').text('');
        $('#data_previsao_entrega2').text('');
        $('#data_previsao_entrega3').text('');
        $('#data_previsao_entrega_atualizada').text('');

        estilo_preparacao_pedido_title = '';

        document.getElementById('container_pedido_recebido_complete_title').title = '';
        document.getElementById('container_pedido_recebido_complete').style.display = 'none';
        document.getElementById('container_pedido_recebido_on').style.display = 'none';
        document.getElementById('container_pedido_recebido_off').style.display = 'flex';

        document.getElementById('container_preparacao_pedido_complete_title').title = '';
        document.getElementById('container_preparacao_pedido_on').style.display = 'none';
        document.getElementById('container_preparacao_pedido_off').style.display = 'flex';
        document.getElementById('detalhe_on_preparacao').style.display = 'none';
        document.getElementById('modalPrepara').style.display = 'none';
        document.getElementById('modalPreparaRapido').style.display = 'none';

        document.getElementById('container_em_transito_on').style.display = 'none';
        document.getElementById('container_em_transito_complete').style.display = 'none';
        document.getElementById('container_em_transito_off').style.display = 'flex';

        document.getElementById('container_entrega_realizada_on').style.display = 'none';
        document.getElementById('container_entrega_realizada_off').style.display = 'flex';
        document.getElementById('container_entrega_realizada_complete').style.display = 'none';

        document.getElementById('linha_pedido_recebido_on').style.display = 'none';
        document.getElementById('linha_pedido_recebido_off').style.display = 'flex';
        document.getElementById('linha_preparacao_pedido_on').style.display = 'none';
        document.getElementById('linha_preparacao_pedido_off').style.display = 'flex';
        document.getElementById('linha_em_transito_on').style.display = 'none';
        document.getElementById('linha_em_transito_off').style.display = 'flex';
        document.getElementById('geo_detalhe_on').style.display = 'none';
        document.getElementById('geo_detalhe_off').style.display = 'flex';

        document.getElementById('status_em_transito_off_1').style.display = 'flex';
        document.getElementById('status_em_transito_off_2').style.display = 'flex';
        document.getElementById('status_em_transito_off_3').style.display = 'flex';
        document.getElementById('status_em_transito_off_4').style.display = 'flex';
        document.getElementById('status_em_transito_on_1').style.display = 'none';
        document.getElementById('status_em_transito_on_2').style.display = 'none';
        document.getElementById('status_em_transito_on_3').style.display = 'none';
        document.getElementById('status_em_transito_on_4').style.display = 'none';

        document.getElementById('comprovante_on').style.display = 'none';
    });

}

//Thales
function carregaValores(visao) {
    if (visao == 'visao_0') {
        $('#dtini').val('');
        $('#dtfim').val('');
        $('#tipo_data').val('').trigger('change');
        $('#vip').val('').trigger('change');
        $('#ocorrencia').val('');
        $('#pedido_nfe').val('');
        $('#nota').val('');
        $('#cte').val('');
        $('#num_bo').val('');
        $('#destinatario').val('').trigger('change');
        $('#tipo_produto').val('').trigger('change');
        $('#ccusto_tms').val('');
        $('#empresa').val('').trigger('change');
        $('#ocorrencia').val('').trigger('change');
        $('#visao_form').val('').trigger('change');
        $('#status_op').val('');
        $('#empresa').val('').trigger('change');
        $('#desti_cidade').val('').trigger('change');
        $('#desti_estado').val('').trigger('change');
        carregaVisao();
    }
}

//Danilo Alves de Souza
//21/03/2019
function carregaRelatorio(data) {

    var url = '{{ route("order_visibility_novo.export",":vars") }}';

    var dados = 'data=' + data


    url = url.replace(':vars', dados);

    console.log(url);

    window.open(url);
}

$('#btnExcel').on('click', function () {
    var dt_ini = document.getElementById('dtini').value;
    var dt_fim = document.getElementById('dtfim').value;
    var tipo_data = $('#tipo_data').val();
    var visao = $('#visao_form').val();
    var vip = $('#vip').val();
    var cnpj = $('#empresa').val();
    var cnpj_join = cnpj.join();
    var pedido_nfe = $('#pedido_nfe').val();
    var nota = $('#nota').val();
    var cte = $('#cte').val();
    var num_bo = $('#num_bo').val();
    var destinatario = $('#destinatario').val();
    var ccusto_tms = $('#ccusto_tms').val();
    var ocorrencia = $('#ocorrencia').val();
    var desti_estado = $('#desti_estado').val();
    var desti_cidade = $('#desti_cidade').val();
    var tipo_produto = $('#tipo_produto').val();
    var visao_tipo = $('#visao_tipo').val();
    var status_op = $('#status_op').val();
    var bu = $('#segmento').val();
    var representante = supplyRepresentante;
    var transp_solistica = $("#transp_solistica").val();
    // var destinatario_fornecedor = destinatario_fornecedor

    var data = {};
    if (dtini != '') {
        data.vdata_de = dtini.value;
    }

    if (dtfim != '') {
        data.vdata_ate = dtfim.value;
    }

    if (tipo_data != '') {
        data.vtipo_data = tipo_data;
    }

    if (pedido_nfe != '') {
        data.vpedido_nfe = pedido_nfe;
    }

    if (nota != '') {
        data.vnota = nota;
    }

    if (cte != '') {
        data.vcte = cte;
    }

    if (destinatario != '') {
        data.vdestinatario = destinatario;
    }

    if (visao_form.value != '' && visao_form.value != '-') {
        data.vvisao = visao_form.value;
    }

    if (status_op != ' ') {
        data.vstatus_op = status_op;
    }

    if (vip != ' ') {
        data.vvip = vip;
    }

    if (cnpj_join != '') {
        data.vcnpj = cnpj_join;
    }

    if (cnpj_trava != '') {
        data.vcnpj_trava = cnpj_trava;
    }

    if (ocorrencia != ' ') {
        data.vocorrencia = ocorrencia;
    }

    if (desti_cidade != '' && desti_cidade != ' ') {
        data.vcidade = desti_cidade;
    }
    if (desti_estado != '' && desti_estado != ' ') {
        data.vestado = desti_estado;
    }

    if (tipo_produto != '' && tipo_produto != ' ') {
        data.vtipo_produto = tipo_produto;
    }

    if (bu != '' && bu != ' ') {
        data.vsegmento = bu;
    }

    if (transp_solistica != '' && transp_solistica != ' ') {
        data.vtransp_solistica = transp_solistica;
    }

    data.representante = representante;

    // data.destinatario_fornecedor = destinatario_fornecedor

    var search = {
        busca: data
    };

    buscaParametroColunaRelatorio(search);
    //gravaRelatorio(search);
});

function buscaParametroColunaRelatorio(search) {
    $.ajax({
        type: 'GET',
        headers: {
            'Accept': 'application/json',
            'Authorization': 'Bearer '+ window.Laravel.userToken
        },
        url: window.Laravel.gatewayBaseUri + '/services/manutencao/users/' + window.Laravel.userId + '/parametros'
    }).done(function (data){
        var parametro = data;
        var colunaOculta = false;
        parametro.map((info) => {
            if(info.controle == 'ORDER_VISIBILITY' && info.tipo == 'OV_RELATORIO_COLUNAS_OCULTAS' && info.ativo == true) {
                colunaOculta = true;
            }
        });

        gravaRelatorio(search, colunaOculta);
    });
}

function gravaRelatorio(dados_avancada, colunaOculta = false) {
    var obj = {
        user_id: window.Laravel.user.id,
        user_email: window.Laravel.user.email,
        data: moment().format('YYYY-MM-DD H:mm:s'),
        status: 'OPEN',
        filtro: dados_avancada.busca,
        coluna_oculta: colunaOculta
    }

    swal('O relatório está sendo gerado!', '', 'success');

    $.ajax({
        type: 'POST',
        url: url + 'order_visibility_on/fila-relatorio',
        data:  obj,
    }).fail(function(err) {
        swal('Falha ao gerar o relatório!', err.message, 'error');
    });
}

$("#btnLimpa").on("click", function () {

    var visao_mata = 'visao_0';

    carregaValores(visao_mata);

    var click = document.getElementById('busca__avancada');
    var clickClose1 = document.getElementById('busca__rapida');
    var clickClose2 = document.getElementById('dashboard');

    var aba_rapida = document.getElementById('aba_rapida');
    var aba_avancada = document.getElementById('aba_avancada');
    var btnDashboard = document.getElementById('btnDashboard');
    aba_rapida.classList.remove("container__header__item--active");
    aba_avancada.classList.add("container__header__item--active");
    btnDashboard.classList.remove("container__header__item--active");

    document.getElementById('busca_avancada_lista').style.display = 'none';
    document.getElementById('listBuscaAvancada').style.display = 'none';

    click.style.display = "block";
    clickClose1.style.display = "none";
    clickClose2.style.display = "none";

});



$('#btnNovaBusca').on('click', function () {
    var click = document.getElementById('busca__avancada');
    var clickClose1 = document.getElementById('busca__rapida');
    var clickClose2 = document.getElementById('dashboard');

    var aba_rapida = document.getElementById('aba_rapida');
    var aba_avancada = document.getElementById('aba_avancada');
    var btnDashboard = document.getElementById('btnDashboard');
    aba_rapida.classList.remove("container__header__item--active");
    aba_avancada.classList.add("container__header__item--active");
    btnDashboard.classList.remove("container__header__item--active");

    document.getElementById('busca_avancada_lista').style.display = 'none';
    document.getElementById('listBuscaAvancada').style.display = 'none';

    click.style.display = "block";
    clickClose1.style.display = "none";
    clickClose2.style.display = "none";

    var desti_estado = document.getElementById('desti_estado');
    desti_estado.innerHTML = '<option value=" ">Todos</option>' +
        '<option value="AC">AC</option>' +
        '<option value="AL">AL</option>' +
        '<option value="AM">AM</option>' +
        '<option value="AP">AP</option>' +
        '<option value="BA">BA</option>' +
        '<option value="CE">CE</option>' +
        '<option value="DF">DF</option>' +
        '<option value="ES">ES</option>' +
        '<option value="GO">GO</option>' +
        '<option value="MA">MA</option>' +
        '<option value="MG">MG</option>' +
        '<option value="MS">MS</option>' +
        '<option value="MT">MT</option>' +
        '<option value="PA">PA</option>' +
        '<option value="PB">PB</option>' +
        '<option value="PE">PE</option>' +
        '<option value="PI">PI</option>' +
        '<option value="PR">PR</option>' +
        '<option value="RJ">RJ</option>' +
        '<option value="RN">RN</option>' +
        '<option value="RS">RS</option>' +
        '<option value="RO">RO</option>' +
        '<option value="RR">RR</option>' +
        '<option value="SC">SC</option>' +
        '<option value="SE">SE</option>' +
        '<option value="SP">SP</option>' +
        '<option value="TO">TO</option>';
    //if ( $.fn.DataTable.isDataTable('#tblmodal_avancada') ) {
    $('#tblmodal_avancada').DataTable().destroy();
    //}

});

$("#btnBuscaRapida").on("click", function () {

    var busca_rapida_campo = $('#buscaRapida').val();
    initDataTables(busca_rapida_campo);

});

$("#aba_avancada").on("click", function () {

    var desti_estado = document.getElementById('desti_estado');
    desti_estado.innerHTML = '<option value=" ">Todos</option>' +
        '<option value="AC">AC</option>' +
        '<option value="AL">AL</option>' +
        '<option value="AM">AM</option>' +
        '<option value="AP">AP</option>' +
        '<option value="BA">BA</option>' +
        '<option value="CE">CE</option>' +
        '<option value="DF">DF</option>' +
        '<option value="ES">ES</option>' +
        '<option value="GO">GO</option>' +
        '<option value="MA">MA</option>' +
        '<option value="MG">MG</option>' +
        '<option value="MS">MS</option>' +
        '<option value="MT">MT</option>' +
        '<option value="PA">PA</option>' +
        '<option value="PB">PB</option>' +
        '<option value="PE">PE</option>' +
        '<option value="PI">PI</option>' +
        '<option value="PR">PR</option>' +
        '<option value="RJ">RJ</option>' +
        '<option value="RN">RN</option>' +
        '<option value="RS">RS</option>' +
        '<option value="RO">RO</option>' +
        '<option value="RR">RR</option>' +
        '<option value="SC">SC</option>' +
        '<option value="SE">SE</option>' +
        '<option value="SP">SP</option>' +
        '<option value="TO">TO</option>';
});


$("#btnBuscaRapida2").on("click", function () {

    var busca_rapida_campo = $('#buscaRapida2').val();
    initDataTables(busca_rapida_campo);
});


function download() {

    var cteNumero = $('#cte_numero_modal').val();
    var cteEmp = $('#cte_empresa_modal').val();
    var cteTipo = $('#cte_tipo_modal').val();
    var cteSerie = $('#cte_serie_modal').val();

    var url = '{{ route("order_visibility_novo.canhoto"  , ":vars") }}';
    var param = 'cte_chave=' + $('#btnDownloadChave').val() + '&nf=' + $('#btnDownloadNf').val() + '&tipo=download';
    param += '&cte=' + cteNumero + '&empresa=' + cteEmp + '&tipo_cte=' + cteTipo + '&serie=' + cteSerie;

    url = url.replace(':vars', param);
    console.log(url);
    window.open(url);

}

function modalShow(cte, nf, cteNumero, cteEmp, cteTipo, cteSerie) {
    $('#cte_numero_modal').val(cteNumero);
    $('#cte_empresa_modal').val(cteEmp);
    $('#cte_tipo_modal').val(cteTipo);
    $('#cte_serie_modal').val(cteSerie);

    var url = '{{ route("order_visibility_novo.canhoto"  , ":vars") }}';
    var param = 'cte_chave=' + cte + '&nf=' + nf + '&tipo=view';
    param += '&cte=' + cteNumero + '&empresa=' + cteEmp + '&tipo_cte=' + cteTipo + '&serie=' + cteSerie;

    url = url.replace(':vars', param);

    $('#btnDownloadChave').val(cte);
    $('#btnDownloadNf').val(nf);
    $('.nfe').html('Canhoto da NF-e : '+ nf);

    console.log(url);

    $('#loading').toggleClass('sk-loading');

    $.ajax({
        type: 'GET',
        url: url
    }).done(function (data) {
        console.log('canhoto', data);
        console.log('tipo', data.tipo);

        $('#title_cte').html('Canhoto da NF-e : ' + nf);

        if (data != false) {
            console.log('canhoto', data);

            if (data.status != true) {
                $('#loading').toggleClass('sk-loading');
                swal('Atenção', 'Arquivo não encontrado.', 'error');
            } else {
                if (data.tipo === 'pdf') {
                    document.getElementById('modal_canhoto_pdf').style.display = 'flex';
                    $('#modal_canhoto_pdf').show();

                    $(document).ready(function () {
                        var url = atob(data.data);

                        $('#loading').removeClass('sk-loading');

                        var pdfDoc = null;
                        var pageNum = 1;
                        var pageRendering = true;
                        var pageNumPending = null;
                        var scale = 1.0;
                        var zoomRange = 0.2;
                        var canvas = document.getElementById('the-canvas');
                        var ctx = canvas.getContext('2d');

                        /**
                         * Get page info from document, resize canvas accordingly, and render page.
                         * @param num Page number., m
                         */
                        function renderPage(num, scale) {
                            pageRendering = true;
                            // Using promise to fetch the page
                            pdfDoc.getPage(num).then(function (page) {
                                var viewport = page.getViewport(scale);
                                canvas.height = viewport.height;
                                canvas.width = viewport.width;

                                // Render PDF page into canvas context
                                var renderContext = {
                                    canvasContext: ctx,
                                    viewport: viewport
                                };
                                var renderTask = page.render(renderContext);

                                // Wait for rendering to finish
                                renderTask.promise.then(function () {
                                    pageRendering = false;
                                    if (pageNumPending !== null) {
                                        // New page rendering is pending
                                        renderPage(pageNumPending);
                                        pageNumPending = null;
                                    }
                                });
                            });

                            // Update page counters
                            document.getElementById('page_num').value = num;
                        }

                        /**
                         * If another page rendering in progress, waits until the rendering is
                         * finised. Otherwise, executes rendering immediately.
                         */
                        function queueRenderPage(num) {
                            if (pageRendering) {
                                pageNumPending = num;
                            } else {
                                renderPage(num, scale);
                            }
                        }

                        /**
                         * Displays previous page.
                         */
                        function onPrevPage() {
                            if (pageNum <= 1) {
                                return;
                            }
                            pageNum--;
                            var scale = pdfDoc.scale;
                            queueRenderPage(pageNum, scale);
                        }

                        document.getElementById('prev').addEventListener('click', onPrevPage);

                        /**
                         * Displays next page.
                         */
                        function onNextPage() {
                            if (pageNum >= pdfDoc.numPages) {
                                return;
                            }
                            pageNum++;
                            var scale = pdfDoc.scale;
                            queueRenderPage(pageNum, scale);
                        }

                        document.getElementById('next').addEventListener('click', onNextPage);

                        /**
                         * Zoom in page.
                         */
                        function onZoomIn() {
                            if (scale >= pdfDoc.scale) {
                                return;
                            }
                            scale += zoomRange;
                            var num = pageNum;
                            renderPage(num, scale)
                        }

                        document.getElementById('zoomin').addEventListener('click', onZoomIn);

                        /**
                         * Zoom out page.
                         */
                        function onZoomOut() {
                            if (scale >= pdfDoc.scale) {
                                return;
                            }
                            scale -= zoomRange;
                            var num = pageNum;
                            queueRenderPage(num, scale);
                        }

                        document.getElementById('zoomout').addEventListener('click', onZoomOut);

                        /**
                         * Zoom fit page.
                         */
                        function onZoomFit() {
                            if (scale >= pdfDoc.scale) {
                                return;
                            }
                            scale = 1;
                            var num = pageNum;
                            queueRenderPage(num, scale);
                        }

                        document.getElementById('zoomfit').addEventListener('click', onZoomFit);


                        /**
                         * Asynchronously downloads PDF.
                         */
                        PDFJS.getDocument({
                            data: url,
                        }).then(function (pdfDoc_) {
                            pdfDoc = pdfDoc_;
                            var documentPagesNumber = pdfDoc.numPages;
                            document.getElementById('page_count').textContent = '/ ' +
                                documentPagesNumber;

                            $('#page_num').on('change', function () {
                                var pageNumber = Number($(this).val());

                                if (pageNumber > 0 && pageNumber <=
                                    documentPagesNumber) {
                                    queueRenderPage(pageNumber, scale);
                                }

                            });

                            // Initial/first page rendering
                            renderPage(pageNum, scale);
                        });
                    });
                } else {
                    //var canhoto_modal = $("#modal_imagem");
                    var canhoto_modal = $("#modal_comprovante");

                    var $img = canhoto_modal.find("#canhoto_img");

                    $img.attr('src','');

                    $($img).cropper({
                        rotate: true,
                        zoomable: true,
                        zoomOnTouch: false,
                        zoomOnWheel: false,
                        autoCrop:false
                    });

                    $('#btnUpload').attr('disabled',true);
                    $('#img_conf').hide();

                    $('#loading').toggleClass('sk-loading');

                    /**
                     * Funções de manuseio da imagem
                     */
                    $('#btnZoomIn').on('click',function(){
                        $img.cropper("zoom",0.1);
                    });

                    $('#btnZoomOut').on('click',function(){
                        $img.cropper("zoom",-0.1);
                    });

                    $('#btnRotateLeft').on('click',function(){
                        $img.cropper("rotate",-90);
                    });

                    $('#btnRotateRight').on('click',function(){
                        $img.cropper("rotate",90);
                    });

                    $('#btnCancelar').on('click',function(){
                        $img.attr('src','');
                        $img.cropper("destroy",true);
                    });

                    $('.close').on('click',function(){
                        $img.attr('src','');
                        $img.cropper("destroy",true);
                    });

                    $img.cropper("replace", data.data);

                    $('#loading').removeClass('sk-loading');
                    $('#modal_comprovante').show();

                }

            }

        }
    }).fail(function (error) {
        $('#loading').removeClass('sk-loading');
    });
}

function modalClose() {
    //$('#modal_imagem').hide();
    document.getElementById('modal_comprovante').style.display = 'none';
    $('#modal_canhoto_pdf').hide();
}


$('#comprovante_on').on('click', function () {

    var cte_chave = $('#cte_chave_detalhe').val();
    var nf = $('#pk_nf_numero').text();
    var comprovante = $('#comprovante_detalhe').val();
    var cte = $('#cte_numero_detalhe').val();
    var empresa = $('#cte_empresa_detalhe').val();
    var tipo = $('#cte_tipo_detalhe').val();
    var serie = $('#cte_serie_detalhe').val();

    // alert('cte:'+cte_chave);
    // alert('nf:'+nf);

    if ((comprovante != ' ') && (comprovante != null) && (comprovante != 0)) {

        modalShow(cte_chave, nf, cte, empresa, tipo, serie);

    } else {
        //$('#baixar_comprovantes').html(' - ');
    }

});


//DETALHE NOTA FIM ############################################################################################

//BUSCA RAPIDA#######################################################################################################################################

function comprovante_buscarapida(cte_chave_rapida, nf_rapida, comprovante_rapida) {

    //var cte_chave = $('#cte_chave_detalhe').val();
    //var nf = $('#pk_nf_numero').text();
    //var comprovante = $('#comprovante_detalhe').val();
    // alert('cte:'+cte_chave_rapida);
    // alert('nf:'+nf_rapida);
    // alert('comprovante:'+comprovante_rapida);


    if ((comprovante_rapida != ' ') && (comprovante_rapida != null)) {

        modalShow(cte_chave_rapida, nf_rapida);

    } else {
        //$('#baixar_comprovantes').html(' - ');
    }

}


function initDataTables(busca_rapida_campo) {
    var buscarapida = busca_rapida_campo;

    if ($.fn.DataTable.isDataTable('#tblmodal')) {
        $('#tblmodal').DataTable().destroy();
    }

    $("#tblmodal").DataTable({
        processing: true,
        serverSide: true,
        autoWidth: false,
        paging: true,
        lengthChange: false,
        ordering: false,
        searching: false,
        pageLength: 5,
        ajax: {
            url: url + 'order_visibility_on/lista_nota_fiscal',
            type: 'POST',
            data: {
                vcnpj_trava: cnpj_trava,
                vbusca_rapida: buscarapida,
                vrepresentante: supplyRepresentante,
                vdestinatario_fornecedor: destinatario_fornecedor
            },
        },
        columns: [{
            data: "visao",
            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                let cteChave = '';
                let nfE = '';
                let cteNumero = '';
                let cteTipo = '';
                let cteSerie = '';
                let cteEmpresa = '';

                if (oData.cte_chave != null) {
                    cteChave = oData.cte_chave;
                }

                if (oData.nf != null) {
                    nfE = oData.nf;
                }

                if (oData.numero != null) {
                    cteNumero = oData.numero;
                }

                if (oData.empresa != null) {
                    cteEmpresa = oData.empresa;
                }

                if (oData.cte_tipo != null) {
                    cteTipo = oData.cte_tipo;
                }

                if (oData.cte_serie != null) {
                    cteSerie = oData.cte_serie;
                }


                //DETALHE NOTA#################################################
                var data_nota = {
                    id: oData.id,
                    nf: oData.nf,
                    valor: oData.valor,
                    peso: oData.peso,
                    volumes: oData.volumes,
                    cubagem: oData.cubagem,
                    motivo_bo: oData.dt_ocorrencia,
                    remet_razao: oData.remet_razao,
                    remet_cnpj: oData.remet_cnpj,
                    remet_endereco: oData.remet_endereco,
                    remet_bairro: oData.remet_bairro,
                    remet_cidade: oData.remet_cidade,
                    remet_estado: oData.remet_estado,
                    remet_fone: oData.remet_fone,
                    desti_razao: oData.desti_razao,
                    desti_cnpj: oData.desti_cnpj,
                    desti_endereco: oData.desti_endereco,
                    desti_bairro: oData.desti_bairro,
                    desti_cidade: oData.desti_cidade,
                    desti_estado: oData.desti_estado,
                    desti_fone: oData.desti_fone,
                    cte: oData.cte,
                    pk_praca: oData.pk_praca,
                    pk_pedido: oData.pk_pedido,
                    pk_tipo: oData.pk_tipo,
                    pk_data: oData.pk_data,
                    pk_chave_danf: oData.pk_chave_danf,
                    dt_ocorrencia: oData.dt_ocorrencia,
                    responsavel: oData.responsavel,
                    num_bo: oData.num_bo,
                    visao: oData.visao,
                    dt_visao_1: oData.dt_visao_1,
                    dt_visao_2: oData.dt_visao_2,
                    dt_visao_3: oData.dt_visao_3,
                    data_entrega: oData.data_entrega,
                    comprovante: oData.comprovante,
                    cte_chave: oData.cte_chave,
                    cte_serie: oData.cte_serie,
                    cte_tipo: oData.cte_tipo,
                    numero: oData.numero,
                    empresa: oData.empresa,
                    agendamento: oData.agendamento,
                    previsao: oData.previsao,
                    nova_previsao: oData.nova_previsao,
                    ultima_coordenada: oData.ultima_coordenada,
                    url_imagem: '',
                    transito_atual: oData.transito_atual,
                    visao_status_ov: oData.visao_status_ov,
                    visao_status_ov2: oData.visao_status_ov2,
                    visao_status_ov3: oData.visao_status_ov3,
                    visao_status_ov4: oData.visao_status_ov4,
                    visao_status_ov5: oData.visao_status_ov5,
                    tms_nao: oData.tms_nao,
                    data_tms_nao: oData.data_tms_nao,
                    desc_tms_nao: oData.desc_tms_nao,
                    status_op: oData.status_op,
                    desc_grupo_bo: oData.desc_grupo_bo,
                    tipo_produto: oData.tipo_produto,
                    transporte_agv: oData.transporte_agv,
                    status_bo: oData.tipo_solucao,
                    recebedor: oData.recebedor,
                    entrega_nao_realizada: parseInt(oData.entrega_nao_realizada),
                    dt_sta_arm_1_d: oData.dt_sta_arm_1,
                    dt_sta_arm_2_d: oData.dt_sta_arm_2,
                    dt_sta_arm_3_d: oData.dt_sta_arm_3,
                    dt_sta_arm_4_d: oData.dt_sta_arm_4,
                    dt_sta_arm_5_d: oData.dt_sta_arm_5

                };

                // console.log('Retorno API - Busca Rapida');
                //console.log(data_nota);

                var json_nota = JSON.stringify(data_nota);

                //var codifica = btoa(json_nota);
                var codifica = btoa(json_nota);

                var html = '';
                var estilo_pedido_recebido_title = '';


                var visao_lista_rapida = data_nota.visao;

                var estilo_pedido_recebido = 'disable';
                var estilo_pedido_recebido_linha = 'disable';
                var estilo_preparacao_pedido = 'disable';
                var estilo_em_transito = 'disable';
                var estilo_entregue = 'disable';

                var comprovante_on = 'none';
                var comprovante_off = 'flex';

                var entrega_verde_on = 'none';
                var entrega_verde_off = 'flex';

                var estilo_preparacao_pedido_title = '';
                var entregaRealizadaText = 'none';
                var entregaNaoRealizadaText = 'flex';

                //ocorrencia

                var ocorrencia_on = 'none';
                var ocorrencia_off = 'flex';

                //Nova Previsão
                var previsao__atualizada = 'none';
                var previsao__normal = 'none';

                if (data_nota.nova_previsao != '01/01/2001' && data_nota.nova_previsao != '2001-01-01 00:00:00' &&
                    data_nota.nova_previsao != '01/01/0001' && data_nota.nova_previsao != null) {
                    previsao__atualizada = 'flex';
                    previsao__normal = 'none';
                } else {
                    previsao__normal = 'flex';
                    previsao__atualizada = 'none';
                }

                if (visao_lista_rapida == 'Pedido NF Recebido') {

                    if(data_nota.visao_status_ov == 'Pedido NF Recebido'){

                        if(data_nota.desc_tms_nao != null ){
                            estilo_pedido_recebido_title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
                            estilo_pedido_recebido = 'complete';
                            estilo_pedido_recebido_linha = 'active';
                        }else{
                            estilo_pedido_recebido = 'active';
                            estilo_pedido_recebido_linha = 'active';
                            estilo_pedido_recebido_title = '';
                        }
                    }else{
                        estilo_pedido_recebido = 'active';
                        estilo_pedido_recebido_linha = 'active';
                        estilo_pedido_recebido_title = '';
                    }

                    comprovante_on = 'none';
                    comprovante_off = 'flex';

                    entrega_verde_on = 'none';
                    entrega_verde_off = 'flex';


                } else if (visao_lista_rapida == 'Preparacao do Pedido') {

                    estilo_preparacao_pedido = 'active';

                    if(data_nota.visao_status_ov == 'Pedido NF Recebido') {

                        if (data_nota.desc_tms_nao != null ) {
                            estilo_pedido_recebido_title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
                            estilo_pedido_recebido = 'complete';
                            estilo_pedido_recebido_linha = 'active';
                        } else {
                            estilo_pedido_recebido = 'active';
                            estilo_pedido_recebido_linha = 'active';
                            estilo_pedido_recebido_title = '';
                        }

                    }else{
                        estilo_pedido_recebido = 'active';
                        estilo_pedido_recebido_linha = 'active';
                    }

                    if (data_nota.visao_status_ov2 == 'Preparacao do Pedido') {
                        estilo_preparacao_pedido_title = data_nota.status_op;

                        if(data_nota.desc_tms_nao != null ){
                            estilo_pedido_recebido_title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
                            estilo_pedido_recebido = 'complete';
                            estilo_pedido_recebido_linha = 'active';
                        } else {
                            estilo_pedido_recebido = 'active';
                            estilo_pedido_recebido_linha = 'active';
                            estilo_pedido_recebido_title = '';
                        }
                    } else {
                        //estilo_pedido_recebido = 'active';
                        estilo_pedido_recebido_linha = 'active';
                        estilo_preparacao_pedido = 'active';
                        estilo_preparacao_pedido_linha = 'active';

                    }

                    comprovante_on = 'none';
                    comprovante_off = 'flex';

                    entrega_verde_on = 'none';
                    entrega_verde_off = 'flex';

                } else if (visao_lista_rapida == 'Em Transito') {

                    if(data_nota.visao_status_ov == 'Pedido NF Recebido'){

                        if(data_nota.desc_tms_nao != null ){
                            estilo_pedido_recebido_title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
                            estilo_pedido_recebido = 'complete';
                            estilo_pedido_recebido_linha = 'active';
                        }else{
                            estilo_pedido_recebido = 'active';
                            estilo_pedido_recebido_linha = 'active';
                            estilo_pedido_recebido_title = '';
                        }
                    }else{
                        estilo_pedido_recebido = 'active';
                        estilo_pedido_recebido_linha = 'active';
                    }
                    if(data_nota.visao_status_ov2 == 'Preparacao do Pedido'){
                        estilo_preparacao_pedido = 'active';
                        estilo_preparacao_pedido_title = data_nota.status_op;

                    }else{
                        estilo_preparacao_pedido = 'active';

                    }
                    estilo_em_transito = 'active';

                    comprovante_on = 'none';
                    comprovante_off = 'flex';

                    entrega_verde_on = 'none';
                    entrega_verde_off = 'flex';

                    calculo_status = carregaStatus(data_nota);

                    calculo_status.then((response) => {
                        /** mostra o resultado */

                        atualizaTransito({
                            id: data_nota.id,
                            status: response.status
                        });

                        let transitoAtual = data_nota.transito_atual;

                        if (response.status > transitoAtual) {
                            transitoAtual = response.status;
                        }

                        atualizaTransito({
                            id: data_nota.id,
                            status: response.status
                        });

                        var cheguei = response.cheguei;
                        var infoCross = '';

                        console.log(response.cheguei);

                        if (cheguei != null) {
                            $('#estilo_em_transito_2_on_' + oData.id).toggleClass('container__detalhes__box__top__panel__item__step__balls--cross');

                            infoCross = 'Chegada XDOC ' + cheguei.filial + ' - ' + cheguei.data;

                            if (cheguei.saida != null) {
                                infoCross += '\nExpedição XDOC ' + cheguei.filial + ' - ' + cheguei.saida;
                            }

                            $('#geoRapida_'+oData.id).attr('title', infoCross);
                        } else {
                            $('#geoRapida_'+oData.id).removeAttr('title');
                        }

                        if (response.aereo_valida == 'S') {
                            $('#pinLocation'+oData.id).toggleClass('container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--active', true);
                            $('#pinLocation'+oData.id).toggleClass('container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--complete', false);
                        } else {
                            $('#pinLocation'+oData.id).toggleClass('container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--active', false);
                            $('#pinLocation'+oData.id).toggleClass('container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--complete', true);
                        }

                        if (transitoAtual == 1) {
                            document.getElementById(
                                'estilo_em_transito_1_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_2_off_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_3_off_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_4_off_' + oData.id)
                                .style.display = 'flex';

                            document.getElementById(
                                'estilo_em_transito_0_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_5_on_' + oData.id)
                                .style.display = 'none';

                        }
                        if (transitoAtual == 2) {
                            document.getElementById(
                                'estilo_em_transito_1_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_2_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_3_off_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_4_off_' + oData.id)
                                .style.display = 'flex';

                            document.getElementById(
                                'estilo_em_transito_0_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_5_on_' + oData.id)
                                .style.display = 'none';


                        }
                        if (transitoAtual == 3) {
                            document.getElementById(
                                'estilo_em_transito_1_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_2_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_3_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_4_off_' + oData.id)
                                .style.display = 'flex';

                            document.getElementById(
                                'estilo_em_transito_0_on_' + oData.id)
                                .style.display = 'flex';
                            document.getElementById(
                                'estilo_em_transito_5_on_' + oData.id)
                                .style.display = 'none';

                        }

                        if (transitoAtual == 4) {

                            document.getElementById(
                                'estilo_em_transito_1_on_' + oData.id)
                                .style.display = 'none';
                            document.getElementById(
                                'estilo_em_transito_2_on_' + oData.id)
                                .style.display = 'none';
                            document.getElementById(
                                'estilo_em_transito_3_on_' + oData.id)
                                .style.display = 'none';
                            document.getElementById(
                                'estilo_em_transito_4_on_' + oData.id)
                                .style.display = 'none';

                            document.getElementById(
                                'estilo_em_transito_0_on_' + oData.id)
                                .style.display = 'none';
                            document.getElementById(
                                'estilo_em_transito_5_on_' + oData.id)
                                .style.display = 'flex';
                        }

                        if (response.geoposicao == 'S') {
                            $('#geoRapida_'+oData.id).toggleClass('container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--complete', true);
                            $('#geoRapida_'+oData.id).toggleClass('container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--active', false);
                        } else {
                            $('#geoRapida_'+oData.id).toggleClass('container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--complete', false);
                            $('#geoRapida_'+oData.id).toggleClass('container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--active', true);
                        }

                        verificaCoordenadas(oData.id, empresa_usuario, response.geoposicao);

                    }).catch((error) => {
                        /** mostra o erro caso haja algum */
                        console.log(error);
                    });

                } else {

                    //Entrega Realizada
                    if(data_nota.visao_status_ov == 'Pedido NF Recebido'){

                        if(data_nota.desc_tms_nao != null ){
                            estilo_pedido_recebido_title = data_nota.desc_tms_nao+' - '+data_nota.data_tms_nao;
                            estilo_pedido_recebido = 'complete';
                            estilo_pedido_recebido_linha = 'active';
                        }else{
                            estilo_pedido_recebido = 'active';
                            estilo_pedido_recebido_linha = 'active';
                            estilo_pedido_recebido_title = '';
                        }
                    }else{
                        estilo_pedido_recebido = 'active';
                        estilo_pedido_recebido_linha = 'active';
                    }
                    if(data_nota.visao_status_ov2 == 'Preparacao do Pedido'){
                        estilo_preparacao_pedido = 'active';
                        estilo_preparacao_pedido_title = data_nota.status_op;

                    }else{
                        estilo_preparacao_pedido = 'active';

                    }

                    estilo_em_transito = 'active';
                    if (data_nota.entrega_nao_realizada > 0 && data_nota.visao_status_ov5 == 'Entrega Nao Realizada') {
                        estilo_entregue = 'active--naorealizada';
                        entregaNaoRealizadaText = 'flex';
                        entregaRealizadaText = 'none';
                    } else {
                        estilo_entregue = 'active';
                        entregaNaoRealizadaText = 'none';
                        entregaRealizadaText = 'flex';
                    }
                }

                //if (oData.comprovante == 1) {
                if (oData.data_entrega != null && oData.comprovante == 1 && oData.comprovante != 0) {

                    if (oData.data_entrega != '01/01/2001' && oData.data_entrega !=
                        '2001-01-01 00:00:00' && oData.data_entrega != '01/01/0001' && oData.comprovante == 1
                    ) {

                        comprovante_on = 'flex';
                        comprovante_off = 'none';

                        //entrega_verde_on = 'flex';
                        //entrega_verde_off = 'none';


                        if (data_nota.entrega_nao_realizada > 0 && data_nota.visao_status_ov5 == 'Entrega Nao Realizada') {
                            estilo_entregue = 'active--naorealizada';
                        } else {
                            entrega_verde_on = 'flex';
                            entrega_verde_off = 'none'
                        }


                    }else{

                        comprovante_on = 'none';
                        comprovante_off = 'flex';

                        entrega_verde_on = 'none';
                        entrega_verde_off = 'flex';

                    }

                } else {
                    comprovante_on = 'none';
                    comprovante_off = 'flex';

                    entrega_verde_on = 'none';
                    entrega_verde_off = 'flex';
                }

                if (oData.dt_ocorrencia > '' && oData.responsavel > '') {
                    ocorrencia_on = 'flex';
                    ocorrencia_off = 'none';
                } else {
                    ocorrencia_on = 'none';
                    ocorrencia_off = 'flex';
                }

                if(estilo_preparacao_pedido_title > ''){

                    if(estilo_preparacao_pedido_title == 1){
                        estilo_preparacao_pedido_title = 'Em Preparação';
                    }
                    if(estilo_preparacao_pedido_title == 2){
                        estilo_preparacao_pedido_title = 'Em Separação';
                    }
                    if(estilo_preparacao_pedido_title == 3){
                        estilo_preparacao_pedido_title = 'Em Conferencia';
                    }
                    if(estilo_preparacao_pedido_title == 4){
                        estilo_preparacao_pedido_title = 'Conferido';
                    }
                    if(estilo_preparacao_pedido_title == 5){
                        estilo_preparacao_pedido_title = 'Expedido';
                    }
                }

                //Items List
                html = html +
                    '<div class="container__buscaRapida__ul__items container__buscaRapida__ul__items--silver">';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item1">';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item1__boxText">';
                html = html +
                    '<h4 class="text__h4--size text__color--third text__margin--right">Destinatário:</h4>';
                html = html + '<h4 class="text__h4--size">' + oData.destinatario +
                    ' - ' + oData.desti_cidade + '/' + oData.uf + '</h4>';
                html = html + '</div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item1__boxText">';
                html = html +
                    '<h4 class="text__h4--size text__color--third text__margin--right">Remetente:</h4>';
                html = html + '<h4 class="text__h4--size">' + oData.remet_razao +
                    ' - ' + oData.remet_cidade + '/' + oData.remet_estado + '</h4>';
                html = html + '</div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item1__boxText">';
                html = html +
                    '<h4 class="text__h4--size text__color--third text__margin--right">Nota Fiscal:</h4>';
                html = html + '<h4 class="text__h4--size">' + oData.nf + '</h4>';

                html = html +
                    '<h4 class="text__h4--size text__color--third text__margin--right">&nbsp;&nbsp;Pedido:</h4>';
                html = html + '<h4 class="text__h4--size">' + oData.pedido + '</h4>';
                html = html + '</div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item1__boxText">';
                html = html +
                    '<h4 class="text__h4--size text__color--third text__margin--right">CT-e:</h4>';
                html = html + '<h4 class="text__h4--size">' + oData.cte + '</h4>';
                html = html + '<h4 class="text__h4--size text__color--third text__margin--right">&nbsp;&nbsp;Transporte Solistica:</h4>';

                if (oData.transporte_agv == 'N') {
                    html = html + '<h4 class="text__h4--size">NÃO</h4>';
                } else {
                    html = html + '<h4 class="text__h4--size">SIM</h4>';
                }

                html = html +
                    '<h4 class="text__h4--size text__color--third text__margin--right">&nbsp;&nbsp;Produto:</h4>';
                //html = html + '<h4 class="text__h4--size">' + oData.tipo_produto + '</h4>';

                if (oData.tipo_produto == null) {
                    html = html + '<h4 class="text__h4--size"> </h4>';
                } else {
                    html = html + '<h4 class="text__h4--size">'+oData.tipo_produto+'</h4>';
                }

                html = html + '</div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item1__boxText">';
                html = html +
                    '<h4 class="text__h4--size text__color--third text__margin--right">Status Operacional:</h4>';

                if(oData.status_op == null || oData.status_op == ''){
                    html = html + '<h4 class="text__h4--size"> </h4>';
                }


                if(oData.status_op == 1){
                    html = html + '<h4 class="text__h4--size">Em Preparação</h4>';
                }

                if(oData.status_op == 2){
                    html = html + '<h4 class="text__h4--size">Em Separação</h4>';
                }

                if(oData.status_op == 3){
                    html = html + '<h4 class="text__h4--size">Em Conferencia</h4>';
                }

                if(oData.status_op == 4){
                    html = html + '<h4 class="text__h4--size">Conferido</h4>';
                }

                if(oData.status_op == 5){
                    html = html + '<h4 class="text__h4--size">Expedido</h4>';
                }


                html = html + '</div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item1__boxText">';

                if (oData.nova_previsao != '01/01/2001' && oData.nova_previsao !=
                    '2001-01-01 00:00:00' && oData.nova_previsao != '01/01/0001' &&
                    oData.nova_previsao != null) {

                    html = html +
                        '<h4 class="text__h4--size text__color--third text__margin--right">Previsão de Entrega Inicial:</h4>';

                    if (oData.agendamento != '01/01/2001' && oData.agendamento !=
                        '2001-01-01 00:00:00' && oData.agendamento != '01/01/0001' &&
                        oData.agendamento != null) {
                        html = html + '<h4 class="text__h4--size">' + oData
                            .agendamento + '</h4>';
                    } else {
                        if (oData.previsao != '01/01/2001' && oData.previsao !=
                            '2001-01-01 00:00:00' && oData.previsao != '01/01/0001' &&
                            oData.previsao != null) {
                            html = html + '<h4 class="text__h4--size">' + oData
                                .previsao + '</h4>';
                        } else {
                            html = html +
                                '<h4 class="text__h4--size">Sem previsão</h4>';
                        }
                    }

                    html = html +
                        '<h4 class="text__h4--size text__color--third text__margin--right">&nbsp;&nbsp;Previsão de Entrega Atualizada:</h4>';
                    html = html + '<h4 class="text__h4--size">' + oData.nova_previsao + '</h4>';

                } else {
                    html = html +
                        '<h4 class="text__h4--size text__color--third text__margin--right">Previsão de Entrega:</h4>';

                    if (oData.agendamento != '01/01/2001' && oData.agendamento !=
                        '2001-01-01 00:00:00' && oData.agendamento != '01/01/0001' &&
                        oData.agendamento != null) {
                        html = html + '<h4 class="text__h4--size">' + oData
                            .agendamento + '</h4>';
                    } else {
                        if (oData.previsao != '01/01/2001' && oData.previsao !=
                            '2001-01-01 00:00:00' && oData.previsao != '01/01/0001' &&
                            oData.previsao != null) {
                            html = html + '<h4 class="text__h4--size">' + oData
                                .previsao + '</h4>';
                        } else {
                            html = html +
                                '<h4 class="text__h4--size">Sem previsão</h4>';
                        }
                    }
                }

                html = html + '</div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item1__boxText">';
                html = html +
                    '<h4 class="text__h4--size text__color--third text__margin--right">Nome do Recebedor:</h4>';

                if (oData.recebedor == null || oData.recebedor == '') {
                    html = html + '<h4 class="text__h4--size"> </h4>';
                } else {
                    html = html + '<h4 class="text__h4--size">'+oData.recebedor+'</h4>';
                }

                html = html + '</div>';
                html = html + '</div>';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2">';
                //html = html+'<div class="container__buscaRapida__ul__items__item2__boxText">';
                //html = html+'</div>';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements">';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements">';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements__icon container__buscaRapida__ul__items__item2__boxElements__elements__icon--PR--' +
                    estilo_pedido_recebido + '" title="'+estilo_pedido_recebido_title+'"></div>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">Pedido</h4>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">Recebido</h4>';

                if (oData.dt_visao_1 != null) {
                    if (oData.dt_visao_1 != '01/01/2001' && oData.dt_visao_1 !=
                        '2001-01-01 00:00:00' && oData.dt_visao_1 != '01/01/0001') {

                        html = html +
                            '<h6 class="text__color--third text__margin--top">' +
                            oData.dt_visao_1 + '</h6>';

                    }
                } else {

                    html = html +
                        '<h6 class="text__color--third text__margin--top">&nbsp;</h6>';

                }

                html = html + '</div>';

                //Step - Active/Desable
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor container__buscaRapida__ul__items__item2__boxElements__divisor--' +
                    estilo_pedido_recebido_linha + '"></div>';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements">';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements__icon container__buscaRapida__ul__items__item2__boxElements__elements__icon--PP--' +
                    estilo_preparacao_pedido + '" title="'+estilo_preparacao_pedido_title+'" ></div>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">Preparação</h4>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">do Pedido</h4>';

                if (oData.dt_visao_2 != null) {
                    if (oData.dt_visao_2 != '01/01/2001' && oData.dt_visao_2 !=
                        '2001-01-01 00:00:00' && oData.dt_visao_2 != '01/01/0001') {

                        html = html +
                            '<h6 class="text__color--third text__margin--top">' +
                            oData.dt_visao_2 + '</h6>';
                    }
                } else {

                    html = html +
                        '<h6 class="text__color--third text__margin--top">&nbsp;</h6>';
                }

                html = html + '</div>';

                html = html + '<!-- Step - Active/Desable -->';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor container__buscaRapida__ul__items__item2__boxElements__divisor--' +
                    estilo_preparacao_pedido + '">';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__searching container__buscaRapida__ul__items__item2__boxElements__divisor__searching--' +
                    estilo_pedido_recebido + '" style="display:flex;"  onclick="verificaDadosPreparacaoRapida('+ oData.id +')"></div>';

                html = html + '</div>';


                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements"  id="etapa_em_transito_off_' +
                    oData.id + '" style="display:flex;">';
                html = html +
                    '<div id="geoRapida_'+oData.id+'" class="container__buscaRapida__ul__items__item2__boxElements__elements__icon container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--' +
                    estilo_em_transito + '"></div>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">Em</h4>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">Trânsito</h4>';

                if (oData.dt_visao_3 != null) {
                    if (oData.dt_visao_3 != '01/01/2001' && oData.dt_visao_3 !=
                        '2001-01-01 00:00:00' && oData.dt_visao_3 != '01/01/0001') {

                        html = html +
                            '<h6 class="text__color--third text__margin--top">' +
                            oData.dt_visao_3 + '</h6>';

                    }
                } else {

                    html = html +
                        '<h6 class="text__color--third text__margin--top">&nbsp;</h6>';

                }

                html = html + '</div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements" id="etapa_em_transito_complete_' +
                    oData.id + '" style="display:none;">';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements__icon container__buscaRapida__ul__items__item2__boxElements__elements__icon--ET--complete" ></div>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">Em</h4>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">Trânsito</h4>';

                if (oData.dt_visao_3 != null) {
                    if (oData.dt_visao_3 != '01/01/2001' && oData.dt_visao_3 !=
                        '2001-01-01 00:00:00' && oData.dt_visao_3 != '01/01/0001') {

                        html = html +
                            '<h6 class="text__color--third text__margin--top">' +
                            oData.dt_visao_3 + '</h6>';

                    }
                } else {

                    html = html +
                        '<h6 class="text__color--third text__margin--top">&nbsp;</h6>';

                }


                html = html + '</div>';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements">';


                html = html + '<!-- ICONE GEOLOCALIZACAO -->';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__searching container__buscaRapida__ul__items__item2__boxElements__divisor__searching--active" id="geolocalizacao_em_transito_on_' +
                    oData.id + '" style="display:none;" onclick="geo(' + oData.id +
                    ',' + empresa_usuario + ')" ></div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__searching container__buscaRapida__ul__items__item2__boxElements__divisor__searching--disable" id="geolocalizacao_em_transito_off_' +
                    oData.id + '" style="display:flex;"></div>';

                //Step - Active/disable
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor" id="estilo_em_transito_0_on_' +
                    oData.id + '" style="display:none;" >';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__balls container__buscaRapida__ul__items__item2__boxElements__divisor__balls--active" id="estilo_em_transito_1_on_' +
                    oData.id + '" style="display:none;" ></div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__balls container__buscaRapida__ul__items__item2__boxElements__divisor__balls--active" id="estilo_em_transito_2_on_' +
                    oData.id + '" style="display:none;" ></div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__balls container__buscaRapida__ul__items__item2__boxElements__divisor__balls--active" id="estilo_em_transito_3_on_' +
                    oData.id + '" style="display:none;" ></div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__balls container__buscaRapida__ul__items__item2__boxElements__divisor__balls--active" id="estilo_em_transito_4_on_' +
                    oData.id + '" style="display:none;" ></div>';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__balls container__buscaRapida__ul__items__item2__boxElements__divisor__balls--disable" id="estilo_em_transito_1_off_' +
                    oData.id + '" style="display:none;" ></div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__balls container__buscaRapida__ul__items__item2__boxElements__divisor__balls--disable" id="estilo_em_transito_2_off_' +
                    oData.id + '" style="display:none;" ></div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__balls container__buscaRapida__ul__items__item2__boxElements__divisor__balls--disable" id="estilo_em_transito_3_off_' +
                    oData.id + '" style="display:none;" ></div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor__balls container__buscaRapida__ul__items__item2__boxElements__divisor__balls--disable" id="estilo_em_transito_4_off_' +
                    oData.id + '" style="display:none;" ></div>';

                html = html + '</div>';

                html = html + '<!-- Step - Active/Desable -->';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__divisor container__buscaRapida__ul__items__item2__boxElements__divisor--' +
                    estilo_em_transito + '" id="estilo_em_transito_5_on_' + oData
                        .id + '"></div>';

                html = html + '</div>';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements">';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements__icon container__buscaRapida__ul__items__item2__boxElements__elements__icon--ER--' +
                    estilo_entregue + '" id="estilo_entrega_realizada_1_' + oData
                        .id + '" style="display:' + entrega_verde_off + ';" ></div>';

                html = html +
                    '<div class="container__buscaRapida__ul__items__item2__boxElements__elements__icon container__buscaRapida__ul__items__item2__boxElements__elements__icon--ER--complete" id="estilo_entrega_realizada_2_' +
                    oData.id + '" style="display:' + entrega_verde_on +
                    ';" ></div>';


                html = html +
                    '<h4 class="text__h4--size text__align--center" style="display:'+ entregaRealizadaText +'">Entrega</h4>';
                html = html +
                    '<h4 class="text__h4--size text__align--center" style="display:'+ entregaNaoRealizadaText +'">Entrega não</h4>';
                html = html +
                    '<h4 class="text__h4--size text__align--center">Realizada</h4>';

                if (oData.data_entrega != null) {
                    if (oData.data_entrega != '01/01/2001' && oData.data_entrega !=
                        '2001-01-01 00:00:00' && oData.data_entrega != '01/01/0001'
                    ) {

                        html = html +
                            '<h6 class="text__color--third text__margin--top">' +
                            oData.data_entrega + '</h6>';

                    }
                } else {

                    html = html +
                        '<h6 class="text__color--third text__margin--top">&nbsp;</h6>';

                }


                html = html + '</div>';
                html = html + '</div>';
                html = html + '</div>';



                html = html +
                    '<div class="container__buscaRapida__ul__items__item3">';
                html = html +
                    '<button class="text__button--small button__flat button__small text__color--primary" onclick="detalha_nota(\'' +
                    codifica + '\',\'1\')">Detalhes</button>'; //btnGoDetalhes()

                //COMPROVANTE
                html = html +
                    "<div class='container__buscaRapida__ul__items__item3__anexo container__buscaRapida__ul__items__item3__anexo--active' id='comprovante_on_" +
                    oData.id + "' style='display: " + comprovante_on +
                    "'; onclick=\"modalShow('" + cteChave + "', '" + nfE +
                    "','"+cteNumero+"','"+cteEmpresa+"', '"+cteTipo+"', '"+cteSerie+"');\"></div>";
                html = html +
                    '<div class="container__buscaRapida__ul__items__item3__anexo container__buscaRapida__ul__items__item3__anexo--disable" id="comprovante_off_' +
                    oData.id + '" style="display:' + comprovante_off + ';"></div>';

                //OCORRENCIA
                html = html +
                    '<div class="container__buscaRapida__ul__items__item3__anexo botao_ocorrencia--active" id="ocorrencia_on_' +
                    oData.id + '" style="display:' + ocorrencia_on +
                    ';" title="Ocorrencia: ' + oData.dt_ocorrencia + '">';
                //Span - Ocorrências
                html = html + '<div id="alert_ocorrencias_lista_' + oData.id +
                    '" class="span__ocorrencia" style="display:none;">';
                html = html + '<div class="span__ocorrencia__header">';
                html = html +
                    '<h4 class="text__h4--size text__color--second text__margin--left">Ocorrências</h4>';
                html = html +
                    '<h4 class="text__h4--size text__color--second text__margin--left"><!--(04)--></h4>';
                html = html + '</div>';

                html = html + '<div  class="span__ocorrencia__content">';
                html = html + '<div class="span__ocorrencia__content__panel">';
                html = html +
                    '<h4 class="text__h4--size text__color--primary text__margin--left text__margin--top">Motivo:</h4>';
                html = html +
                    '<p class="text__color--primary text__margin--left text__margin--bottom" id="motivo_bo_lista">' +
                    oData.dt_ocorrencia + '</p>';
                html = html + '</div>';

                html = html + '<div class="span__ocorrencia__content__panel">';
                html = html +
                    '<h4 class="text__h4--size text__color--primary text__margin--left text__margin--top">Responsável:</h4>';
                html = html +
                    '<p class="text__color--primary text__margin--left text__margin--bottom" id="responsavel_lista">' +
                    oData.responsavel + '</p>';
                html = html + '</div>';
                html = html + '</div>';
                html = html + '</div>';

                html = html + '</div>';
                html = html +
                    '<div class="container__buscaRapida__ul__items__item3__anexo botao_ocorrencia--disable" id="ocorrencia_off_' +
                    oData.id + '" style="display:' + ocorrencia_off + ';" ></div>';

                html = html + '</div>';

                $(nTd).html(html);

                comprovante_on = 'none';
                comprovante_off = 'true';
                estilo_preparacao_pedido_title = '';

            }
        }

        ],
        scrollX: true
    });


}


function abre_ocorrencia_lista(id) {

    var status_janela = document.getElementById('alert_ocorrencias_lista_' + id).style.display;

    if (status_janela == 'none') {

        document.getElementById('alert_ocorrencias_lista_' + id).style.display = 'flex';

    }
    if (status_janela == 'flex') {

        document.getElementById('alert_ocorrencias_lista_' + id).style.display = 'none';

    }

}

function geo(id, nf_empresa) {

    console.log('geo');
    verificaCoordenadas(id, nf_empresa);

    //$('#modalGeo').modal('show');
    document.getElementById('modal2').style.display = 'flex';
}

$('#geo_detalhe_on').on('click', function () {

    var id_detalhe = $('#id_detalhe').val();
    var nf_empresa_detalhe = $('#nf_empresa_detalhe').val();

    console.log('geo_detalhe_on');
    verificaCoordenadas(id_detalhe, empresa_usuario);

    //$('#modalGeo').modal('show');
    document.getElementById('modal2').style.display = 'flex';
});

$('#detalhe_on_preparacao').on('click', function () {

    var id_detalhe = $('#id_detalhe').val();

    //verificaDadosPreparacao(id_detalhe);

    document.getElementById('modalPrepara').style.display = 'flex';
});

$('#botao-close-preparacao').on('click', function(){
    callMap();

    document.getElementById('modalPrepara').style.display = 'none';
});

$('#detalhe_on_tracking').on('click', function () {

    var id_detalhe = $('#id_tracking').val();

    document.getElementById('modalTracking').style.display = 'flex';
});

$('#botao-close-tracking').on('click', function(){
    callMap();

    document.getElementById('modalTracking').style.display = 'none';
});

//function verificaDadosPreparacao(id) {

//    $.ajax({
//        dataType: 'json',
//        type: 'POST',
//        url: url + 'order_visibility_on/itensPreparacao',
//        data: {
//            "id": id
//        }
//    }).done(function (data_nota) {

//        $('#dt_sta_arm_1').text(data_nota[0].dt_sta_arm_1).trigger('change');
//        $('#dt_sta_arm_2').text(data_nota[0].dt_sta_arm_2).trigger('change');
//        $('#dt_sta_arm_3').text(data_nota[0].dt_sta_arm_3).trigger('change');
//        $('#dt_sta_arm_4').text(data_nota[0].dt_sta_arm_4).trigger('change');
//        $('#dt_sta_arm_5').text(data_nota[0].dt_sta_arm_5).trigger('change');

//    }).fail(function (jqXHR, textStatus, msg) {
//alert(msg);
//    });
//}

//function rapida_on_preparacao() {
//   document.getElementById('modalPreparaRapido').style.display = 'flex';
//};

$('#botao-close-preparacao-rapida').on('click', function(){
    callMap();

    document.getElementById('modalPreparaRapido').style.display = 'none';
});

$('#botao-close-geo').on('click', function () {
    callMap();
    document.getElementById('modal2').style.display = 'none';
});



$("#botao_analise_pedido").click(function (e) {
    e.preventDefault();

    //alert('teste');

    initDataTables_avancada('pedido');

});

$("#botao_analise_preparacao").click(function (e) {
    e.preventDefault();

    initDataTables_avancada('preparacao');

});

$("#botao_analise_transito").click(function (e) {
    e.preventDefault();

    initDataTables_avancada('transito');

});

$("#botao_analise_entrega").click(function (e) {
    e.preventDefault();

    initDataTables_avancada('entrega');

});



//BUSCA RAPIDA FIM ##################################################################################################################################



//DASHBOARD  ##################################################################################################

//alert('teste');

// $('#ocorrencia_qtd_transito').text('teste');

function CarregaDash(){

    var array_visoes = [
        'Pedido NF Recebido',
        'Preparacao do Pedido',
        'Em Transito',
        'Entrega Realizada'
    ];

    var visao_tipo = '';
    var ocorrencia = '0';
    var visao_ajax = '';
    var visao_tipo_ocorrencia = null;
    var visao_tipo_ocorrencia_entrega = null;

    var cnpj_dash = $('#empresa_dash').val();
    var cnpj_join_dash = cnpj_dash.join();

    var tipo_produto_dash = $('#tipo_produto_dash').val();

    var destinatario_dash = $('#destinatario_dash').val();
    var destinatario_join_dash = destinatario_dash.join();

    var dt_ini_dash = $('#dtini_dash').val();
    var dt_fim_dash = $('#dtfim_dash').val();

    var dt_ini_dash_oco = $('#dtini_dash').val();
    var dt_fim_dash_oco = $('#dtfim_dash').val();
    var bu = $('#segmento_dash').val();


    if (dt_ini_dash == '') {
        visao_tipo_ocorrencia = 0;
        visao_tipo_ocorrencia_entrega = 1;
        dt_ini_dash_oco = null;
        dt_fim_dash_oco = null;
    }

    var i;
    for (i = 0; i < array_visoes.length; i++) {

        visao_ajax = array_visoes[i];

        if (visao_ajax == 'Pedido NF Recebido') {
            if (dt_ini_dash != '' ) {
                ocorrencia = '';
                //  visao_tipo = '0';
                dt_ini = dt_ini_dash;
                dt_fim = dt_fim_dash;
                tipo_data = '2';
            } else {
                ocorrencia = '';
                visao_tipo = '';
                //dt_ini = '01/05/2019'; deixando 3 meses
                dt_ini = moment().subtract(90, 'days').format('DD/MM/YYYY');
                dt_fim = moment().format('DD/MM/YYYY');
                tipo_data = '2';
            }
        }
        if (visao_ajax == 'Preparacao do Pedido') {

            if (dt_ini_dash != '' ) {
                ocorrencia = '';
                //  visao_tipo = '0';
                dt_ini = dt_ini_dash;
                dt_fim = dt_fim_dash;
                tipo_data = '2';
            } else {
                ocorrencia = '';
                visao_tipo = '';
                //dt_ini = '01/05/2019'; deixando 3 meses
                dt_ini = moment().subtract(29, 'days').format('DD/MM/YYYY');
                dt_fim = moment().format('DD/MM/YYYY');
                tipo_data = '2';
            }
        }
        if (visao_ajax == 'Em Transito') {
            if (dt_ini_dash != '' ) {
                ocorrencia = '1';
                //  visao_tipo = '0';
                dt_ini = dt_ini_dash;
                dt_fim = dt_fim_dash;
                tipo_data = '2';
            } else {
                ocorrencia = '1';
                visao_tipo = '';
                //dt_ini = '01/05/2019'; deixando 3 meses
                dt_ini = moment().subtract(90, 'days').format('DD/MM/YYYY');
                dt_fim = moment().format('DD/MM/YYYY');
                tipo_data = '2';
            }
        }
        if (visao_ajax == 'Entrega Realizada') {
            if (dt_ini_dash != '' ) {
                ocorrencia = '1';
                //  visao_tipo = '1';
                dt_ini = dt_ini_dash;
                dt_fim = dt_fim_dash;
                tipo_data = '2';
            } else {
                ocorrencia = '1';
                visao_tipo = '1';
                dt_ini = moment().subtract(29, 'days').format('DD/MM/YYYY');
                dt_fim = moment().format('DD/MM/YYYY');
                tipo_data = '2';
            }
        }
        $('#entrega_data').text("* Data Emissão NF-e - (" + dt_ini + " - " + dt_fim + ")");
        $.ajax({
            type: 'POST',
            url: url + 'order_visibility_on/soma_caixa',
            data: {
                vvisao: visao_ajax,
                vcnpj_trava: cnpj_trava,
                vvisao_tipo: visao_tipo,
                vcnpj: cnpj_join_dash,
                vcnpj_desti: destinatario_join_dash,
                vtipo_produto: tipo_produto_dash,
                vtipo_data:tipo_data,
                vdata_de:dt_ini,
                vdata_ate:dt_fim,
                vrepresentante: supplyRepresentante,
                vdestinatario_fornecedor: destinatario_fornecedor,
                vsegmento: bu
            }
        }).done(function (data_soma) {

            $.each(data_soma, function (i, s) {
                if (s.resultado_valor == '0') {
                    //s.resultado_valor = '0,00';
                }

                if (s.visao == 'Pedido NF Recebido') {
                    $('#pedido_qtd').text(number_format(s.resultado_pedido));
                    $('#pedido_valor').text(numberToDash(s.resultado_valor));
                    //$('#pedido_volumes').text(number_format(s.resultado_volumes));

                }

                if (s.visao == 'Preparacao do Pedido') {
                    $('#preparacao_qtd').text(number_format(s.resultado_pedido));
                    $('#preparacao_valor').text(numberToDash(s.resultado_valor));
                    //$('#preparacao_volumes').text(number_format(s.resultado_volumes));
                }

                if (s.visao == 'Em Transito') {
                    $('#transito_qtd').text(number_format(s.resultado_pedido));
                    $('#transito_valor').text(numberToDash(s.resultado_valor));
                    //$('#transito_volumes').text(number_format(s.resultado_volumes));

                    $.ajax({
                        type: 'POST',
                        url: url + 'order_visibility_on/busca_ocorrencia',
                        data: {
                            vcnpj_trava: cnpj_trava,
                            vvisao: 'Em Transito',
                            vocorrencia: ocorrencia,
                            vvisao_tipo: visao_tipo_ocorrencia,
                            vcnpj: cnpj_join_dash,
                            vcnpj_desti: destinatario_join_dash,
                            vtipo_produto: tipo_produto_dash,
                            vdata_de:dt_ini_dash_oco,
                            vdata_ate:dt_fim_dash_oco
                        }
                    }).done(function (data_oco) {

                        data_oco = jQuery.parseJSON(data_oco);

                        if (data_oco[0]['visao'] == 'Em Transito') {
                            $('#ocorrencia_qtd_transito').text(data_oco[0][
                                'total_ocorrencia'
                                ]);
                        } else {
                            $('#ocorrencia_qtd_transito').text('-');
                        }
                    });
                }

                if (s.visao == 'Entrega Realizada') {
                    $('#entrega_qtd').text(number_format(s.resultado_pedido));
                    $('#entrega_valor').text(numberToDash(s.resultado_valor));

                    $.ajax({
                        type: 'POST',
                        url: url + 'order_visibility_on/busca_ocorrencia',
                        data: {
                            vcnpj_trava: cnpj_trava,
                            vvisao: 'Entrega Realizada',
                            vocorrencia: ocorrencia,
                            vvisao_tipo: visao_tipo_ocorrencia_entrega,
                            vcnpj: cnpj_join_dash,
                            vcnpj_desti: destinatario_join_dash,
                            vtipo_produto: tipo_produto_dash,
                            vdata_de:dt_ini_dash_oco,
                            vdata_ate:dt_fim_dash_oco
                        }
                    }).done(function (data_oco2) {

                        if ($('#ocorrencia_qtd_realizada').text() == '') {
                            $('#ocorrencia_qtd_realizada').text('-');
                        }

                        data_oco2 = jQuery.parseJSON(data_oco2);

                        if (data_oco2[0]['visao'] == 'Entrega Realizada') {
                            $('#ocorrencia_qtd_realizada').text(data_oco2[0][
                                'total_ocorrencia'
                                ]);
                        } else {
                            $('#ocorrencia_qtd_realizada').text('-');
                        }



                    });
                }

            }); //fim data

        }); // fim ajax soma




        ocorrencia = '0';
        visao_tipo = '';


    } //fim do for do array_visoes
}

CarregaDash();

$("#btnatualizar_dash").click(function (e) {

    CarregaDash();
    carregaValoresDashboard();

});

$("#btnLimpa_dash").click(function (e) {

    $('#tipo_produto_dash').val('').trigger('change');
    $('#empresa_dash').val('').trigger('change');
    $('#destinatario_dash').val('').trigger('change');

    $('#dtini_dash').val('').trigger('change');
    $('#dtfim_dash').val('').trigger('change');

    CarregaDash();

});



function carregaValoresDashboard() {

    //alert('teste');

    /* GRAFICOS */
    var cnpj_dash                = $('#empresa_dash').val();
    var cnpj_join_dash           = cnpj_dash.join();
    var tipo_produto_dash        = $('#tipo_produto_dash').val();
    var destinatario_dash        = $('#destinatario_dash').val();
    var destinatario_join_dash   = destinatario_dash.join();
    var dt_ini_dash              = $('#dtini_dash').val();
    var dt_fim_dash              = $('#dtfim_dash').val();

    if (dt_ini_dash != '') {
        dt_ini = moment(dt_ini_dash).format('YYYY-MM-DD');
        dt_fim = moment(dt_fim_dash).format('YYYY-MM-DD');
    } else {
        dt_ini = moment().subtract(30, 'days').format('YYYY-MM-DD');
        dt_fim = moment().format('YYYY-MM-DD');
    }

    console.log('Retorno API - Busca Rapida');

    if (cnpj_join_dash != '') {
        cnpj_trava = cnpj_join_dash
    }

    $.ajax({
        url: url + 'order_visibility_on/grafico_faturamento_estados',
        type: 'POST',
        dataSrc: "data",
        data: {
            vcnpj_trava:    cnpj_trava,
            vrepresentante: supplyRepresentante ? supplyRepresentante.join(',') : '',
            vcnpj_desti:    destinatario_join_dash,
            vdata_de:       dt_ini,
            vdata_ate:      dt_fim,
            vtipo_produto:  tipo_produto_dash,
            // vdestinatario_fornecedor: destinatario_fornecedor ? destinatario_fornecedor.join(',') : '',
        },
        success: function (data) {

            let arrValores = [0, 0, 0, 0, 0];
            var soma = 0;

            for (x in data) {
                let reg = data[x];
                let index;

                if (reg.regiao == 'NORTE')
                    index = 0;
                else if (reg.regiao == 'NORDESTE')
                    index = 1;
                else if (reg.regiao == 'CENTRO OESTE')
                    index = 2;
                else if (reg.regiao == 'SUDESTE')
                    index = 3;
                else
                    index = 4;

                arrValores[index] += parseFloat(reg.valor);
            }

            for (x in arrValores) {

                soma = soma + arrValores[x];
                arrValores[x] = arrValores[x].toFixed(2);

            }

            var graph1Data = {
                labels: [
                    'Norte', 'Nordeste', 'Centro-oeste', 'Sudeste', 'Sul'
                ],
                datasets: [{
                    data: arrValores,
                    borderColor: "#555655",
                    borderWidth: 0.7,
                    boxWidth: 10,
                    backgroundColor: [
                        "#bdcafc",
                        "#fea581",
                        '#5a72d2',
                        "#f26a35",
                        "#243b98"
                    ]
                }]
            };

            var graph1Options = {
                responsive: true,
                legend: {
                    display: true,
                    position: 'left'
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            return numberToReal(data.datasets[0].data[tooltipItem
                                    .index]) + ' (' + (data.datasets[0].data[
                                    tooltipItem.index] / soma * 100).toFixed(0) +
                                '%)';
                        }
                    }
                }
            };

            var graph1 = document.getElementById("graph1").getContext("2d");
            new Chart(graph1, {
                type: 'pie',
                data: graph1Data,
                options: graph1Options
            });

        }
    });

    $.ajax({
        url: url + 'order_visibility_on/grafico_faturamento_semanas',
        type: 'POST',
        dataSrc: "data",
        data: {
            vcnpj_trava:    cnpj_trava,
            vrepresentante: supplyRepresentante ? supplyRepresentante.join(',') : '',
            vcnpj_desti:    destinatario_join_dash,
            vdata_de:       dt_ini,
            vdata_ate:      dt_fim,
            vtipo_produto:  tipo_produto_dash,
            // vdestinatario_fornecedor: destinatario_fornecedor ? destinatario_fornecedor.join(',') : '',
        },
        success: function (data) {
            var graph2Data = {
                labels: data.map((x) =>
                    x.data
                ),
                fontSize: 4,
                datasets: [{
                    label: 'Valor',
                    borderColor: "#0866C0",
                    data: data.map((x, i) =>
                        x.soma_valor
                    ),
                    backgroundColor: [
                        "#c63902",
                        "#ea5a22",
                        '#f26a35',
                        "#fb9245",
                        '#fbb045',
                        "#f9bf6b",
                        "#fdd49a"
                    ]

                }],

            };

            //console.log(graph2Data);

            var graph2Options = {
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            callback: function (value, index, values) {
                                return numberToReal(value);
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            return numberToReal(tooltipItem.yLabel);
                        }
                    }
                }
            };

            var graph2 = document.getElementById("graph2").getContext("2d");
            new Chart(graph2, {
                type: 'bar',
                data: graph2Data,
                options: graph2Options
            });

        }

    });

    $.ajax({
        url: url + 'order_visibility_on/grafico_prepara_volumes',
        type: 'POST',
        dataSrc: "data",
        data: {
            vcnpj_trava:    cnpj_trava,
            vrepresentante: supplyRepresentante ? supplyRepresentante.join(',') : '',
            vcnpj_desti:    destinatario_join_dash,
            vdata_de:       dt_ini,
            vdata_ate:      dt_fim,
            vtipo_produto:  tipo_produto_dash,
            // vdestinatario_fornecedor: destinatario_fornecedor ? destinatario_fornecedor.join(',') : '',
        },
        success: function (data) {
            var graph3Data = {
                labels: data.map((x) =>
                    x.status_op
                ),
                fontSize: 4,
                datasets: [{
                    label: 'Valor',

                    borderColor: "#0866C0",
                    data: data.map((x, i) =>
                        x.valor
                    ),
                    //backgroundColor: "#0866C0"
                    backgroundColor: [
                        "#c63902",
                        "#ea5a22",
                        '#f26a35',
                        "#fb9245",
                        '#fbb045',
                        "#f9bf6b",
                        "#fdd49a"
                    ]

                }],

            };

            console.log(graph3Data);

            var graph3Options = {
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            callback: function (value, index, values) {
                                return value;
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            return numberVolume(data.datasets[0].data[tooltipItem.index]) ;

                        }
                    }
                }
            };

            var graph3 = document.getElementById("graph3").getContext("2d");
            new Chart(graph3, {
                type: 'horizontalBar',
                data: graph3Data,
                options: graph3Options
            });

        }
    });


    $.ajax({
        url: url + 'order_visibility_on/grafico_prepara_notas',
        type: 'POST',
        dataSrc: "data",
        data: {
            vcnpj_trava:    cnpj_trava,
            vrepresentante: supplyRepresentante ? supplyRepresentante.join(',') : '',
            vcnpj_desti:    destinatario_join_dash,
            vdata_de:       dt_ini,
            vdata_ate:      dt_fim,
            vtipo_produto:  tipo_produto_dash,
            // vdestinatario_fornecedor: destinatario_fornecedor ? destinatario_fornecedor.join(',') : '',
        },
        success: function (data) {
            var graph4Data = {
                labels: data.map((x) =>
                    x.status_op
                ),
                fontSize: 4,
                datasets: [{
                    label: 'Valor',

                    borderColor: "#0866C0",
                    data: data.map((x, i) =>
                        x.valor
                    ),
                    //backgroundColor: "#0866C0"
                    backgroundColor: [
                        "#c63902",
                        "#ea5a22",
                        '#f26a35',
                        "#fb9245",
                        '#fbb045',
                        "#f9bf6b",
                        "#fdd49a"
                    ]

                }],

            };

            var graph4Options = {
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            callback: function (value, index, values) {
                                return value;
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            return numberVolume(data.datasets[0].data[tooltipItem.index]) ;
                        }
                    }
                }
            };

            var graph4 = document.getElementById("graph4").getContext("2d");
            new Chart(graph4, {
                type: 'horizontalBar',
                data: graph4Data,
                options: graph4Options
            });

        }
    });

}

$("#btnDashboard").on("click", function () {

    carregaValoresDashboard();

    // $('#btnFiltros').removeClass('hide');
    // $('#btnExcel').removeClass('hide');
});

$("#botao_pedido").click(function (e) {
    e.preventDefault();

    //alert('teste');

    initDataTables_avancada('pedido');

});

$("#botao_preparacao").click(function (e) {
    e.preventDefault();

    initDataTables_avancada('preparacao');

});

$("#botao_transito").click(function (e) {
    e.preventDefault();

    if ($(e.target).closest('#botao_ocorrencia_transito').length > 0) {
        initDataTables_avancada('ocorrencia_transito');
    } else {
        initDataTables_avancada('transito');
    }
});

$("#botao_entrega").click(function (e) {
    e.preventDefault();

    if ($(e.target).closest('#botao_ocorrencia_realizada').length > 0) {
        initDataTables_avancada('ocorrencia_realizada');
    } else {
        initDataTables_avancada('entrega');
    }
});

//DASHBOARD FIM ##################################################################################################




//FUNCAO PARA HABILITAR O ENTER PARA SUBMETER OS FORMULARIOS
$(document).keypress(function(e) {




    if (e.which == 13) {

        var busca_rapida      = document.getElementById('busca__rapida').style.display;
        var busca_avancada    = document.getElementById('busca__avancada').style.display;
        var dashboard         = document.getElementById('dashboard').style.display;

        if(busca_rapida == ''){

            //$('btnBuscaRapida').focus();
            if($('#buscaRapida2').val() > ''){
                $('#btnBuscaRapida2').trigger('click');
            }else{
                $('#btnBuscaRapida').trigger('click');
            }
            //goListBucaRapida()
        }
        if(busca_rapida == 'block'){
            //alert('busca_rapida: '+busca_rapida);
            //$('btnBuscaRapida').focus();
            $('#btnBuscaRapida').trigger('click');
            //goListBucaRapida()
        }
        if(busca_avancada == 'block'){
            //alert('busca_avancada: '+busca_avancada);
            //$('#btnatualizar').focus();
            $('#btnatualizar').trigger('click');
            //initDataTables_avancada();
        }
        if(dashboard == 'block'){
            //alert('dashboard: '+dashboard);
            $('#btnatualizar_dash').trigger('click');
            //CarregaDash();
        }

    }
});


</script>



@append
