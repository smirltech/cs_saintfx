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



@php
    use App\Helpers\Helpers;
    use Carbon\Carbon;
@endphp

<style>
    @media print {
        .print-page {
            page-break-after: always; /* force saut de page après chaque copie */
            width: 100%;
            text-align: center;
        }

        .print-page:last-child {
            page-break-after: auto; /* dernière page pas de saut inutile */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }

        table, th, td {
            border: 1px solid #000;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    }
</style>

<div id="factPrint">

    {{-- ================= COPIE 1 ================= --}}
    <div class="print-page">
        <img width="80px" src="{{ url('/images/csfx/img.png') }}" alt="logo CSFX">

        <h2>College St Francois Xavier</h2>
        <div>AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe Lubumbashi, RDC</div>

        <h3>REÇU N°{{ $perception?->reference }}</h3>
        <div>Date : {{ Carbon::now()->format('d-m-Y à H:i:s') }}</div>

        <br>
        <div>Élève : <strong>{{ $inscription?->eleve->fullName }}</strong></div>

        <div style="margin: 10px 0;">
            {{ $inscription?->classe?->niveau?->label() }} |
            {{ $inscription?->classe->parent->nom }} |
            {{ $annee->nom }}
        </div>

        <div><strong>{{ $perception->frais->nom }}</strong></div>

        <table>
            <thead>
            <tr>
                <th>MONTANT DU</th>
                <th>MONTANT PAYÉ</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>
                <td>{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>
            </tr>
            </tbody>
        </table>

        <hr>

        <div style="text-align:right">
            Cash : <strong>{{ Helpers::currencyFormat($perception->montant) }} {{ $perception->frais->devise }}</strong>
        </div>
        <div style="text-align:right">
            Reste : <strong>{{ Helpers::currencyFormat($perception->reste) }} {{ $perception->frais->devise }}</strong>
        </div>

        @if($perception?->paid_by)
            <div style="text-align:right">
                Payé par : <strong>{{ $perception->paid_by }}</strong>
            </div>
        @endif

        <div class="w3-small" style="margin-top: 20px;">College St Francois Xavier - FINANCE</div>
    </div>

    {{-- ================= COPIE 2 ================= --}}
    <div class="print-page">
        <img width="80px" src="{{ url('/images/csfx/img.png') }}" alt="logo CSFX">

        <h2>College St Francois Xavier</h2>
        <div>AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe Lubumbashi, RDC</div>

        <h3>REÇU N°{{ $perception?->reference }}</h3>
        <div>Date : {{ Carbon::now()->format('d-m-Y à H:i:s') }}</div>

        <br>
        <div>Élève : <strong>{{ $inscription?->eleve->fullName }}</strong></div>

        <div style="margin: 10px 0;">
            {{ $inscription?->classe?->niveau?->label() }} |
            {{ $inscription?->classe->parent->nom }} |
            {{ $annee->nom }}
        </div>

        <div><strong>{{ $perception->frais->nom }}</strong></div>

        <table>
            <thead>
            <tr>
                <th>MONTANT DU</th>
                <th>MONTANT PAYÉ</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>
                <td>{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>
            </tr>
            </tbody>
        </table>

        <hr>

        <div style="text-align:right">
            Cash : <strong>{{ Helpers::currencyFormat($perception->montant) }} {{ $perception->frais->devise }}</strong>
        </div>
        <div style="text-align:right">
            Reste : <strong>{{ Helpers::currencyFormat($perception->reste) }} {{ $perception->frais->devise }}</strong>
        </div>

        @if($perception?->paid_by)
            <div style="text-align:right">
                Payé par : <strong>{{ $perception->paid_by }}</strong>
            </div>
        @endif

        <div class="w3-small" style="margin-top: 20px;">College St Francois Xavier - FINANCE</div>
    </div>

</div>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
    printJS({
        printable: 'factPrint',
        type: 'html',
        targetStyles: ['*']
    });

    window.onafterprint = function () {
        location.replace("{{ URL::previous() }}");
    }
</script>



