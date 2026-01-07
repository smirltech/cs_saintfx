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


@php use App\Helpers\Helpers; use Carbon\Carbon; @endphp
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reçu de paiement</title>
    <style>
        @media print {
            @page {
                size: 80mm auto;
                margin: 0;
                padding: 0;
            }
            body * {
                visibility: hidden;
            }
            #factPrint, #factPrint * {
                visibility: visible;
            }
            #factPrint {
                position: absolute;
                left: 0;
                top: 0;
                width: 76mm;
                margin: 0;
                padding: 0;
            }
        }

        body {
            font-family: 'Courier New', monospace;
            font-size: 11px;
            line-height: 1.2;
            width: 76mm;
            margin: 0 auto;
            padding: 2mm;
            background: white;
        }

        .receipt {
            width: 100%;
            max-width: 76mm;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .bold {
            font-weight: bold;
        }

        .logo {
            width: 50px;
            height: 50px;
            margin: 0 auto 3px;
            display: block;
        }

        .institution {
            font-size: 12px;
            font-weight: bold;
            margin: 2px 0;
            text-transform: uppercase;
        }

        .address {
            font-size: 9px;
            margin: 1px 0;
            line-height: 1.1;
        }

        .receipt-title {
            font-size: 11px;
            font-weight: bold;
            margin: 5px 0;
            border-top: 1px dashed #000;
            border-bottom: 1px dashed #000;
            padding: 3px 0;
        }

        .receipt-number {
            font-size: 10px;
            margin: 3px 0;
        }

        .date {
            font-size: 10px;
            margin: 3px 0 5px 0;
        }

        .divider {
            border-top: 1px dashed #000;
            margin: 5px 0;
        }

        .section {
            margin: 4px 0;
            padding: 2px 0;
        }

        .student-name {
            font-weight: bold;
            font-size: 12px;
            margin: 2px 0;
        }

        .student-details {
            font-size: 10px;
            margin: 2px 0;
        }

        .fee-name {
            background: #f0f0f0;
            padding: 3px;
            margin: 4px 0;
            font-weight: bold;
            text-align: center;
            border-radius: 2px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 5px 0;
        }

        .table th {
            border-bottom: 1px solid #000;
            padding: 3px 0;
            font-weight: bold;
            text-align: left;
        }

        .table td {
            padding: 3px 0;
        }

        .table .amount {
            text-align: right;
            font-family: 'Courier New', monospace;
        }

        .totals {
            margin-top: 8px;
            padding-top: 5px;
            border-top: 2px solid #000;
        }

        .total-line {
            display: flex;
            justify-content: space-between;
            margin: 2px 0;
        }

        .amount-paid {
            font-weight: bold;
        }

        .amount-due {
            color: #d00;
            font-weight: bold;
        }

        .paid-by {
            background: #e8f5e9;
            padding: 2px 4px;
            border-radius: 2px;
            margin: 3px 0;
            font-size: 10px;
        }

        .footer {
            margin-top: 10px;
            padding-top: 5px;
            border-top: 1px dashed #000;
            text-align: center;
            font-size: 9px;
            color: #666;
        }

        .motto {
            font-style: italic;
            margin: 4px 0;
            padding: 2px;
            font-size: 9px;
            line-height: 1.1;
        }

        .signature {
            font-size: 9px;
            margin-top: 5px;
            padding-top: 5px;
            border-top: 1px dashed #666;
        }

        .currency {
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body>
<div id="factPrint" class="receipt">
    <!-- En-tête -->
    <div class="text-center">
        <img src="{{ url('/images/csfx/img.png') }}" alt="Logo" class="logo">
        <div class="institution">COLLÈGE ST FRANÇOIS XAVIER</div>
        <div class="address">AV. Kilenge coin Wamba</div>
        <div class="address">Q/Bel-Air C/Kampembe</div>
        <div class="address">Lubumbashi – RDC</div>
    </div>

    <div class="divider"></div>

    <!-- Titre du reçu -->
    <div class="receipt-title text-center">REÇU DE PAIEMENT</div>
    <div class="receipt-number text-center">N° {{ $perception?->reference }}</div>
    <div class="date text-center">{{ Carbon::now()->format('d/m/Y H:i') }}</div>

    <div class="divider"></div>

    <!-- Informations élève -->
    <div class="section">
        <div class="student-name">{{ $inscription?->eleve->fullName }}</div>
        <div class="student-details">
            {{ $inscription?->classe?->niveau?->label() }} – {{ $inscription?->classe->parent->nom }}<br>
            Année scolaire: {{ $annee->nom }}
        </div>
    </div>

    <div class="divider"></div>

    <!-- Détails du frais -->
    <div class="fee-name">{{ $perception->frais->nom }}</div>

    <table class="table">
        <thead>
        <tr>
            <th>MONTANT DÛ</th>
            <th class="amount">MONTANT PAYÉ</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>
            <td class="amount">{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>
        </tr>
        </tbody>
    </table>

    <!-- Totaux -->
    <div class="totals">
        <div class="total-line">
            <span>Total à payer:</span>
            <span class="currency">{{ Helpers::currencyFormat($montant) }} {{ $perception->frais->devise }}</span>
        </div>
        <div class="total-line">
            <span>Payé:</span>
            <span class="currency amount-paid">{{ Helpers::currencyFormat($perception?->montant) }} {{ $perception->frais->devise }}</span>
        </div>
        <div class="total-line">
            <span>Reste à payer:</span>
            <span class="currency amount-due">{{ Helpers::currencyFormat($perception?->reste) }} {{ $perception->frais->devise }}</span>
        </div>

        @if($perception?->paid_by)
            <div class="paid-by">
                <strong>Payé par:</strong> {{ $perception->paid_by }}
            </div>
        @endif
    </div>

    <!-- Pied de page -->
    <div class="footer">
        <div class="motto">
            "Si les prémices sont Saintes, la masse l'est aussi;<br>
            Si la racine est sainte, les branches le sont aussi"
        </div>
        <div class="signature">
            COLLÈGE ST FRANÇOIS XAVIER<br>
            SERVICE FINANCE
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        // Impression automatique
        setTimeout(function() {
            window.print();
        }, 100);
    };

    window.onafterprint = function() {
        // Retour à la page précédente après impression
        setTimeout(function() {
            window.location.href = "{{ URL::previous() }}";
        }, 500);
    };

    // Fallback: retour automatique après 5 secondes si pas d'impression
    setTimeout(function() {
        if (!document.hidden) {
            window.location.href = "{{ URL::previous() }}";
        }
    }, 5000);
</script>
</body>
</html>

