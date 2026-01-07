{{--@php use App\Helpers\Helpers;use Carbon\Carbon; @endphp--}}
{{--<div id="factPrint" class="text-center" style="text-align:center">--}}
{{--    <div style="text-align:center" class="text-center">--}}
{{--        <img width="80px" src="{{url('/images/csfx/img.png')}}" alt="cs francois xavier logo">--}}
{{--    </div>--}}
{{--    <strong>College St Francois Xavier</strong>--}}
{{--    <div class="text-center"  style="margin-bottom: 10px">AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe Lubumbashi, RDC</div>--}}
{{--    --}}{{--<div  class="text-center" style="margin-bottom: 10px"><span>Telephone:000</span>--}}
{{--        <span  class="">Email:email</span>--}}
{{--    </div>--}}

{{--    <div style="text-align:center" class="text-center">REÇU N°{{$perception?->reference}}</div>--}}
{{--    <div style="text-align:center" class="text-center">--}}
{{--        Date: {{Carbon::now()->format("d-m-Y à H:i:s")}}--}}
{{--    </div>--}}
{{--    <br>--}}
{{--    <div style="text-align:center" class="text-center">Élève :--}}
{{--        <strong>{{$inscription?->eleve->fullName}}</strong></div>--}}
{{--    <br>--}}
{{--    <div style="text-align:center; width: 100%">--}}
{{--                            <span style="text-align:left; margin-right: 10px"--}}
{{--                                  class="">{{$inscription?->classe?->niveau?->label()}} </span>--}}
{{--        <span style="text-align:center; margin-right: 10px"--}}
{{--              class=""> {{$inscription?->classe->parent->nom}} </span>--}}
{{--        <span style="text-align:right" class=""> {{$annee->nom}}</span>--}}

{{--    </div>--}}
{{--    <br>--}}
{{--    <div class="d-flex  justify-content-evenly">--}}
{{--        <strong class="">{{$perception->frais->nom}}</strong>--}}
{{--    </div>--}}
{{--    <br>--}}
{{--    <div class="table-responsive">--}}
{{--        <table style="width:100%" class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>MONTANT DU</th>--}}
{{--                <th>MONTANT PAYE</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr class="text-dark">--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    {{number_format($perception->frais_montant)}} {{ $perception->frais->devise }}--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    {{number_format($perception->montant)}} {{ $perception->frais->devise }}--}}
{{--                </td>--}}
{{--                <td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--    <hr>--}}
{{--    --}}{{--<div class="text-right">Total :--}}
{{--        <strong>{{Helpers::currencyFormat($montant)}}</strong></div>--}}
{{--    <div style="text-align:right" class="text-right">Cash :--}}
{{--        <strong>{{Helpers::currencyFormat($perception?->montant)}} {{ $perception->frais->devise }}</strong></div>--}}
{{--    <div style="text-align:right" class="text-right">Reste :--}}
{{--        <strong>{{Helpers::currencyFormat($perception?->reste)}}--}}
{{--            {{ $perception->frais->devise }} </strong>--}}
{{--    </div>--}}
{{--    @if($perception?->paid_by != null)--}}
{{--        <div style="text-align:right" class="text-right">Payé par :--}}
{{--            <strong>{{$perception?->paid_by}}</strong></div>--}}
{{--    @endif--}}
{{--    <br>--}}
{{--    <div style="text-align:center; margin-bottom: 50px" class="text-center">--}}
{{--        <span class="w3-center justify-content-center w3-small">Si les prémices sont Saintes, la masse l’est aussi;--}}
{{--            Si la racine est sainte, les branches le sont aussi</span>--}}
{{--    </div>--}}

{{--    <div class="w3-small text-center">College St Francois Xavier - FINANCE</div>--}}
{{--    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>--}}
{{--    <script>--}}

{{--        printJS({--}}
{{--            printable: 'factPrint',--}}
{{--            type: 'html',--}}
{{--            targetStyles: ['*'],--}}
{{--            maxWidth: 300,--}}
{{--            style: "text-align:center",--}}
{{--            onPrintDialogClose: redirectBack--}}
{{--        });--}}


{{--        window.onafterprint = function () {--}}
{{--            redirectBack();--}}
{{--        }--}}

{{--        function redirectBack() {--}}
{{--            location.replace("{{URL::previous()}}");--}}
{{--        }--}}

{{--    </script>--}}
{{--</div>--}}

@php use App\Helpers\Helpers;use Carbon\Carbon; @endphp

<style>
    /* Format ticket 80mm */
    #factPrint {
        width: 80mm;
        margin: auto;
        font-family: Arial, sans-serif;
        font-size: 11px;
        color: #000;
    }

    #factPrint img {
        max-width: 60px;
        margin-bottom: 5px;
    }

    #factPrint strong {
        font-size: 12px;
    }

    #factPrint .title {
        font-weight: bold;
        font-size: 13px;
    }

    #factPrint .separator {
        border-top: 1px dashed #000;
        margin: 6px 0;
    }

    #factPrint table {
        width: 100%;
        border-collapse: collapse;
        font-size: 11px;
    }

    #factPrint table th,
    #factPrint table td {
        padding: 3px 0;
        text-align: left;
    }

    #factPrint table th {
        border-bottom: 1px solid #000;
        font-weight: bold;
    }

    .text-right {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    @media print {
        body {
            margin: 0;
        }
    }
</style>

<div id="factPrint">

    <div class="text-center">
        <img src="{{ url('/images/csfx/img.png') }}" alt="logo">
        <div class="title">COLLÈGE ST FRANÇOIS XAVIER</div>
        <div>AV. Kilenge coin Wamba</div>
        <div>Q/Bel-Air C/Kampembe</div>
        <div>Lubumbashi – RDC</div>
    </div>

    <div class="separator"></div>

    <div class="text-center">
        <strong>REÇU N° {{ $perception?->reference }}</strong><br>
        {{ Carbon::now()->format('d/m/Y H:i') }}
    </div>

    <div class="separator"></div>

    <div>
        Élève :<br>
        <strong>{{ $inscription?->eleve->fullName }}</strong>
    </div>

    <div>
        {{ $inscription?->classe?->niveau?->label() }} –
        {{ $inscription?->classe->parent->nom }}<br>
        Année : {{ $annee->nom }}
    </div>

    <div class="separator"></div>

    <div class="text-center">
        <strong>{{ $perception->frais->nom }}</strong>
    </div>

    <table>
        <thead>
        <tr>
            <th>Montant dû</th>
            <th class="text-right">Payé</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>
            <td class="text-right">{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>
        </tr>
        </tbody>
    </table>

    <div class="separator"></div>

    <div class="text-right">
        Cash : <strong>{{ Helpers::currencyFormat($perception->montant) }} {{ $perception->frais->devise }}</strong>
    </div>

    <div class="text-right">
        Reste : <strong>{{ Helpers::currencyFormat($perception->reste) }} {{ $perception->frais->devise }}</strong>
    </div>

    @if($perception?->paid_by)
        <div class="text-right">
            Payé par : <strong>{{ $perception->paid_by }}</strong>
        </div>
    @endif

    <div class="separator"></div>

    <div class="text-center" style="font-size:10px">
        College St Francois Xavier<br>
        Département Finance
    </div>

</div>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
    printJS({
        printable: 'factPrint',
        type: 'html',
        targetStyles: ['*'],
        maxWidth: 300,
        onPrintDialogClose: redirectBack
    });

    function redirectBack() {
        location.replace("{{ URL::previous() }}");
    }
</script>



