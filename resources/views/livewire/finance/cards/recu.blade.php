
@php
    use App\Helpers\Helpers;
    use Carbon\Carbon;
@endphp

<div id="factPrint" style="width:100%; max-width:210mm; margin:0 auto; padding:10px; font-family:monospace; font-size:14px; line-height:1.5; color:#000;">

    <!-- LOGO & EN-TÊTE -->
    <div style="text-align:center; margin-bottom:10px;">
        <img src="{{ url('/images/csfx/img.png') }}" alt="csfx logo" style="max-width:100px; margin-bottom:6px;">
        <div style="font-weight:bold;">COLLÈGE ST FRANÇOIS XAVIER</div>
        <div>AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe, Lubumbashi – RDC</div>
    </div>

    <div style="border-top:1px dashed #000; margin:6px 0;"></div>

    <!-- INFO REÇU -->
    <div style="text-align:center; font-weight:bold;">REÇU N°{{ $perception?->reference }}</div>
    <div style="text-align:center;">Date: {{ Carbon::now()->format("d-m-Y à H:i:s") }}</div>

    <div style="border-top:1px dashed #000; margin:6px 0;"></div>

    <!-- ÉLÈVE -->
    <div style="margin-bottom:6px;">
        Élève : <strong>{{ $inscription?->eleve->fullName }}</strong>
    </div>
    <div>
        {{ $inscription?->classe?->niveau?->label() }} – {{ $inscription?->classe->parent->nom }}<br>
        Année : {{ $annee->nom }}
    </div>

    <div style="border-top:1px dashed #000; margin:6px 0;"></div>

    <!-- FRAIS -->
    <div style="text-align:center; font-weight:bold; margin-bottom:6px;">{{ $perception->frais->nom }}</div>

    <table style="width:100%; border-collapse:collapse; margin-bottom:6px;">
        <thead>
        <tr>
            <th style="text-align:left; border-bottom:1px solid #000;">Montant dû</th>
            <th style="text-align:right; border-bottom:1px solid #000;">Payé</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>
            <td style="text-align:right;">{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>
        </tr>
        </tbody>
    </table>

    <div style="border-top:1px dashed #000; margin:6px 0;"></div>

    <!-- TOTAUX -->
    <div style="text-align:right; margin-bottom:3px;">
        Cash : <strong>{{ Helpers::currencyFormat($perception->montant) }} {{ $perception->frais->devise }}</strong>
    </div>
    <div style="text-align:right; margin-bottom:3px;">
        Reste : <strong>{{ Helpers::currencyFormat($perception->reste) }} {{ $perception->frais->devise }}</strong>
    </div>
    @if($perception?->paid_by)
        <div style="text-align:right; margin-bottom:3px;">
            Payé par : <strong>{{ $perception->paid_by }}</strong>
        </div>
    @endif

    <div style="border-top:1px dashed #000; margin:6px 0;"></div>

    <!-- PIED DE PAGE -->
    <div style="text-align:center; font-size:12px; margin-top:8px;">
        COLLÈGE ST FRANÇOIS XAVIER - FINANCE
    </div>

</div>

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
