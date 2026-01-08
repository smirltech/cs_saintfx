
{{--@php--}}
{{--    use App\Helpers\Helpers;--}}
{{--    use Carbon\Carbon;--}}
{{--@endphp--}}

{{--<div id="factPrint" style="width:100%; max-width:210mm; margin:0 auto; padding:10px; font-family:monospace; font-size:14px; line-height:1.5; color:#000;">--}}

{{--    <!-- LOGO & EN-TÊTE -->--}}
{{--    <div style="text-align:center; margin-bottom:10px;">--}}
{{--        <img src="{{ url('/images/csfx/img.png') }}" alt="csfx logo" style="max-width:100px; margin-bottom:6px;">--}}
{{--        <div style="font-weight:bold;">COLLÈGE ST FRANÇOIS XAVIER</div>--}}
{{--        <div>AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe, Lubumbashi – RDC</div>--}}
{{--    </div>--}}

{{--    <div style="border-top:1px dashed #000; margin:6px 0;"></div>--}}

{{--    <!-- INFO REÇU -->--}}
{{--    <div style="text-align:center; font-weight:bold;">REÇU N°{{ $perception?->reference }}</div>--}}
{{--    <div style="text-align:center;">Date: {{ Carbon::now()->format("d-m-Y à H:i:s") }}</div>--}}

{{--    <div style="border-top:1px dashed #000; margin:6px 0;"></div>--}}

{{--    <!-- ÉLÈVE -->--}}
{{--    <div style="margin-bottom:6px;">--}}
{{--        Élève : <strong>{{ $inscription?->eleve->fullName }}</strong>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        {{ $inscription?->classe?->niveau?->label() }} – {{ $inscription?->classe->parent->nom }}<br>--}}
{{--        Année : {{ $annee->nom }}--}}
{{--    </div>--}}

{{--    <div style="border-top:1px dashed #000; margin:6px 0;"></div>--}}

{{--    <!-- FRAIS -->--}}
{{--    <div style="text-align:center; font-weight:bold; margin-bottom:6px;">{{ $perception->frais->nom }}</div>--}}

{{--    <table style="width:100%; border-collapse:collapse; margin-bottom:6px;">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th style="text-align:left; border-bottom:1px solid #000;">Montant dû</th>--}}
{{--            <th style="text-align:right; border-bottom:1px solid #000;">Payé</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <td>{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>--}}
{{--            <td style="text-align:right;">{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}

{{--    <div style="border-top:1px dashed #000; margin:6px 0;"></div>--}}

{{--    <!-- TOTAUX -->--}}
{{--    <div style="text-align:right; margin-bottom:3px;">--}}
{{--        Cash : <strong>{{ Helpers::currencyFormat($perception->montant) }} {{ $perception->frais->devise }}</strong>--}}
{{--    </div>--}}
{{--    <div style="text-align:right; margin-bottom:3px;">--}}
{{--        Reste : <strong>{{ Helpers::currencyFormat($perception->reste) }} {{ $perception->frais->devise }}</strong>--}}
{{--    </div>--}}
{{--    @if($perception?->paid_by)--}}
{{--        <div style="text-align:right; margin-bottom:3px;">--}}
{{--            Payé par : <strong>{{ $perception->paid_by }}</strong>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <div style="border-top:1px dashed #000; margin:6px 0;"></div>--}}

{{--    <!-- PIED DE PAGE -->--}}
{{--    <div style="text-align:center; font-size:12px; margin-top:8px;">--}}
{{--        COLLÈGE ST FRANÇOIS XAVIER - FINANCE--}}
{{--    </div>--}}

{{--</div>--}}

{{--<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>--}}
{{--<script>--}}
{{--    printJS({--}}
{{--        printable: 'factPrint',--}}
{{--        type: 'html',--}}
{{--        targetStyles: ['*'],--}}
{{--        // maxWidth: 300,--}}
{{--        style: "text-align:center",--}}
{{--        onPrintDialogClose: redirectBack--}}
{{--    });--}}


{{--    window.onafterprint = function () {--}}
{{--        redirectBack();--}}
{{--    }--}}

{{--    function redirectBack() {--}}
{{--        location.replace("{{URL::previous()}}");--}}
{{--    }--}}
{{--</script>--}}


@php use App\Helpers\Helpers;use Carbon\Carbon; @endphp
<div id="factPrint" class="text-center" style="text-align:center">
    <div style="text-align:center" class="text-center">
        <img width="80px" src="{{url('/images/logo.png')}}" alt="cenk logo">
    </div>
    <strong>COLLÈGE ST FRANÇOIS XAVIER</strong>
    <div class="text-center"  style="margin-bottom: 10px">Route Kamasaka, Kilobelobe, Lubumbashi, RDC</div>
    {{--<div  class="text-center" style="margin-bottom: 10px"><span>Telephone:000</span>
        <span  class="">Email:email</span>
    </div>--}}

    <div style="text-align:center" class="text-center">REÇU N°{{$perception?->reference}}</div>
    <div style="text-align:center" class="text-center">
        Date: {{Carbon::now()->format("d-m-Y à H:i:s")}}
    </div>
    <br>
    <div style="text-align:center" class="text-center">Élève :
        <strong>{{$inscription?->eleve->fullName}}</strong></div>
    <br>
    <div style="text-align:center; width: 100%">
                            <span style="text-align:left; margin-right: 10px"
                                  class="">{{$inscription?->classe?->niveau?->label()}} </span>
        <span style="text-align:center; margin-right: 10px"
              class=""> {{$inscription?->classe->parent->nom}} </span>
        <span style="text-align:right" class=""> {{$annee->nom}}</span>

    </div>
    <br>
    <div class="d-flex  justify-content-evenly">
        <strong class="">{{$perception->frais->nom}}</strong>
    </div>
    <br>
    <div class="table-responsive">
        <table style="width:100%" class="table">
            <thead>
            <tr>
                <th>MONTANT DU</th>
                <th>MONTANT PAYE</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-dark">
            <tr>
                <td>
                    {{number_format($perception->frais_montant)}} {{ $perception->frais->devise }}
                </td>
                <td>
                    {{number_format($perception->montant)}} {{ $perception->frais->devise }}
                </td>
                <td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr>
    {{--<div class="text-right">Total :
        <strong>{{Helpers::currencyFormat($montant)}}</strong></div>--}}
    <div style="text-align:right" class="text-right">Cash :
        <strong>{{Helpers::currencyFormat($perception?->montant)}} {{ $perception->frais->devise }}</strong></div>
    <div style="text-align:right" class="text-right">Reste :
        <strong>{{Helpers::currencyFormat($perception?->reste)}}
            {{ $perception->frais->devise }} </strong>
    </div>
    @if($perception?->paid_by != null)
        <div style="text-align:right" class="text-right">Payé par :
            <strong>{{$perception?->paid_by}}</strong></div>
    @endif
    <br>


    <div class="w3-small text-center">CENK - FINANCE</div>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script>

        printJS({
            printable: 'factPrint',
            type: 'html',
            targetStyles: ['*'],
            // maxWidth: 300,
            style: "text-align:center",
            onPrintDialogClose: redirectBack
        });


        window.onafterprint = function () {
            redirectBack();
        }

        function redirectBack() {
            location.replace("{{URL::previous()}}");
        }

    </script>
</div>

