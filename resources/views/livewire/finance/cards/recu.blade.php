{{--@php use App\Helpers\Helpers;use Carbon\Carbon; @endphp--}}
{{--<style>--}}
{{--    .page-break {--}}
{{--        page-break-before: always;--}}
{{--        break-before: page;--}}
{{--    }--}}
{{--</style>--}}

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

{{--    --}}{{--    <div style="text-align:center; margin-bottom: 50px" class="text-center">--}}
{{--        <span class="w3-center justify-content-center w3-small">Si les prémices sont Saintes, la masse l’est aussi;--}}
{{--            Si la racine est sainte, les branches le sont aussi</span>--}}
{{--    </div>--}}

{{--    <div class="w3-small text-center">College St Francois Xavier - FINANCE</div>--}}
{{--    <div style="text-align:center" class="text-center">--}}
{{--        <img width="80px" src="{{url('/images/csfx/img.png')}}" alt="cs francois xavier logo">--}}
{{--    </div>--}}
{{--    <strong>College St Francois Xavier</strong>--}}

{{--    <div class="page-break"></div>--}}
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
{{--    --}}{{--    <div style="text-align:center; margin-bottom: 50px" class="text-center">--}}
{{--    --}}{{--        <span class="w3-center justify-content-center w3-small">Si les prémices sont Saintes, la masse l’est aussi;--}}
{{--    --}}{{--            Si la racine est sainte, les branches le sont aussi</span>--}}
{{--    --}}{{--    </div>--}}

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

@php use App\Helpers\Helpers; use Carbon\Carbon; @endphp

<style>
    .page-break {
        page-break-before: always;
        break-before: page;
    }
</style>

<div id="factPrint" style="text-align:center">

    {{-- ================= REÇU 1 ================= --}}
    <div class="receipt">

        <img width="80px" src="{{ url('/images/csfx/img.png') }}">
        <strong>College St Francois Xavier</strong>
        <div>AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe Lubumbashi, RDC</div>

        <div>REÇU N° {{ $perception?->reference }}</div>
        <div>Date : {{ Carbon::now()->format("d-m-Y à H:i:s") }}</div>

        <br>
        Élève : <strong>{{ $inscription?->eleve->fullName }}</strong>

        <br><br>
        {{ $inscription?->classe?->niveau?->label() }}
        |
        {{ $inscription?->classe->parent->nom }}
        |
        {{ $annee->nom }}

        <br><br>
        <strong>{{ $perception->frais->nom }}</strong>

        <table style="width:100%">
            <tr>
                <th>MONTANT DU</th>
                <th>MONTANT PAYÉ</th>
            </tr>
            <tr>
                <td>{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>
                <td>{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>
            </tr>
        </table>

        <hr>

        Cash :
        <strong>{{ Helpers::currencyFormat($perception->montant) }} {{ $perception->frais->devise }}</strong>

        <br>
        Reste :
        <strong>{{ Helpers::currencyFormat($perception->reste) }} {{ $perception->frais->devise }}</strong>

        @if($perception?->paid_by)
            <br>Payé par : <strong>{{ $perception->paid_by }}</strong>
        @endif

        <br><br>
        <small>College St Francois Xavier - FINANCE</small>
    </div>

    {{-- ========= SAUT DE PAGE (ICI SEULEMENT) ========= --}}
    <div class="page-break"></div>

    {{-- ================= REÇU 2 ================= --}}
    <div class="receipt">

        <img width="80px" src="{{ url('/images/csfx/img.png') }}">
        <strong>College St Francois Xavier</strong>
        <div>AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe Lubumbashi, RDC</div>

        <div>REÇU N° {{ $perception?->reference }}</div>
        <div>Date : {{ Carbon::now()->format("d-m-Y à H:i:s") }}</div>

        <br>
        Élève : <strong>{{ $inscription?->eleve->fullName }}</strong>

        <br><br>
        {{ $inscription?->classe?->niveau?->label() }}
        |
        {{ $inscription?->classe->parent->nom }}
        |
        {{ $annee->nom }}

        <br><br>
        <strong>{{ $perception->frais->nom }}</strong>

        <table style="width:100%">
            <tr>
                <th>MONTANT DU</th>
                <th>MONTANT PAYÉ</th>
            </tr>
            <tr>
                <td>{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>
                <td>{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>
            </tr>
        </table>

        <hr>

        Cash :
        <strong>{{ Helpers::currencyFormat($perception->montant) }} {{ $perception->frais->devise }}</strong>

        <br>
        Reste :
        <strong>{{ Helpers::currencyFormat($perception->reste) }} {{ $perception->frais->devise }}</strong>

        @if($perception?->paid_by)
            <br>Payé par : <strong>{{ $perception->paid_by }}</strong>
        @endif

        <br><br>
        <small>College St Francois Xavier - FINANCE</small>
    </div>
</div>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
    printJS({
        printable: 'factPrint',
        type: 'html',
        targetStyles: ['*'],
        maxWidth: 300
    });
</script>



