{{--@php use App\Helpers\Helpers;use Carbon\Carbon; @endphp--}}
{{--<div id="factPrint" class="text-center" style="text-align:center">--}}
{{--    <div style="text-align:center" class="text-center">--}}
{{--        <img width="80px" src="{{url('/images/csfx/img.png')}}" alt="cs francois xavier logo">--}}
{{--    </div>--}}
{{--    <strong>College St Francois Xavier</strong>--}}
{{--    <div class="text-center"  style="margin-bottom: 10px">AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe Lubumbashi, RDC</div>--}}
{{--    <div  class="text-center" style="margin-bottom: 10px"><span>Telephone:000</span>--}}
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
{{--    <div class="text-right">Total :--}}
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
    <style>
        @media print {
            @page {
                size: 80mm auto;
                margin: 2mm;
            }

            body {
                width: 76mm;
                margin: 0 auto;
                font-family: 'Arial', sans-serif;
                font-size: 9px;
                line-height: 1.2;
            }

            * {
                max-width: 76mm !important;
                word-wrap: break-word;
            }
        }

        .receipt-container {
            width: 76mm;
            margin: 0 auto;
            padding: 3mm;
            font-family: 'Arial', sans-serif;
            font-size: 9px;
            line-height: 1.2;
            border: 1px dashed #ccc;
        }

        .header {
            text-align: center;
            border-bottom: 1px solid #333;
            padding-bottom: 4px;
            margin-bottom: 6px;
        }

        .logo {
            width: 50px;
            margin: 0 auto 3px;
        }

        .institution-name {
            font-weight: bold;
            font-size: 10px;
            margin: 2px 0;
        }

        .address {
            font-size: 8px;
            color: #666;
            margin: 2px 0;
        }

        .receipt-title {
            font-weight: bold;
            margin: 6px 0;
            font-size: 10px;
        }

        .receipt-number {
            background: #f0f0f0;
            padding: 3px;
            border-radius: 3px;
            margin: 4px 0;
        }

        .date {
            color: #666;
            margin: 3px 0;
        }

        .divider {
            border-top: 1px dashed #333;
            margin: 6px 0;
        }

        .section {
            margin: 5px 0;
            padding: 3px 0;
        }

        .student-info {
            background: #f8f8f8;
            padding: 4px;
            border-radius: 3px;
            margin: 5px 0;
        }

        .student-name {
            font-weight: bold;
            color: #2c3e50;
        }

        .fee-details {
            margin: 6px 0;
        }

        .fee-name {
            background: #e3f2fd;
            padding: 4px;
            border-radius: 3px;
            font-weight: bold;
            text-align: center;
            margin: 5px 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 6px 0;
        }

        .table th {
            background: #2c3e50;
            color: white;
            padding: 4px;
            text-align: center;
            font-size: 8px;
        }

        .table td {
            padding: 4px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .amount-row {
            font-weight: bold;
        }

        .total-section {
            margin-top: 8px;
            padding-top: 6px;
            border-top: 2px solid #333;
        }

        .total-line {
            display: flex;
            justify-content: space-between;
            margin: 2px 0;
        }

        .total-label {
            font-weight: normal;
        }

        .total-value {
            font-weight: bold;
        }

        .rest-due {
            color: #e74c3c;
        }

        .footer {
            margin-top: 10px;
            padding-top: 6px;
            border-top: 1px solid #ddd;
            text-align: center;
            font-size: 8px;
            color: #666;
        }

        .verse {
            font-style: italic;
            color: #7f8c8d;
            margin: 4px 0;
            padding: 3px;
            background: #f9f9f9;
            border-radius: 2px;
        }

        .paid-by {
            background: #e8f5e9;
            padding: 3px;
            border-radius: 3px;
            margin: 4px 0;
            font-size: 8px;
        }

        .signature {
            margin-top: 15px;
            padding-top: 10px;
            border-top: 1px dashed #333;
            text-align: center;
            font-size: 8px;
        }

        .currency {
            font-family: monospace;
        }
    </style>
</head>
<body>
<div class="receipt-container">
    <!-- En-tête -->
    <div class="header">
        <img class="logo" src="{{ url('/images/csfx/img.png') }}" alt="Logo">
        <div class="institution-name">Collège St François Xavier</div>
        <div class="address">AV. Kilenge coin Wamba, Q/Bel-Air<br>C/Kampembe Lubumbashi, RDC</div>
        <div class="address">Téléphone: 000 • Email: email</div>
    </div>

    <!-- Titre du reçu -->
    <div class="receipt-title">REÇU DE PAIEMENT</div>
    <div class="receipt-number">N° {{ $perception?->reference }}</div>
    <div class="date">{{ Carbon::now()->format('d/m/Y à H:i') }}</div>

    <div class="divider"></div>

    <!-- Informations élève -->
    <div class="section">
        <div class="student-info">
            <div><strong>Élève :</strong> <span class="student-name">{{ $inscription?->eleve->fullName }}</span></div>
            <div><strong>Classe :</strong> {{ $inscription?->classe?->niveau?->label() }} {{ $inscription?->classe->parent->nom }}</div>
            <div><strong>Année :</strong> {{ $annee->nom }}</div>
        </div>
    </div>

    <!-- Détails du frais -->
    <div class="fee-details">
        <div class="fee-name">{{ $perception->frais->nom }}</div>

        <table class="table">
            <thead>
            <tr>
                <th>MONTANT DÛ</th>
                <th>MONTANT PAYÉ</th>
            </tr>
            </thead>
            <tbody>
            <tr class="amount-row">
                <td class="currency">{{ number_format($perception->frais_montant) }} {{ $perception->frais->devise }}</td>
                <td class="currency">{{ number_format($perception->montant) }} {{ $perception->frais->devise }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <!-- Totaux -->
    <div class="total-section">
        <div class="total-line">
            <span class="total-label">Total :</span>
            <span class="total-value currency">{{ Helpers::currencyFormat($montant) }} {{ $perception->frais->devise }}</span>
        </div>
        <div class="total-line">
            <span class="total-label">Payé :</span>
            <span class="total-value currency">{{ Helpers::currencyFormat($perception?->montant) }} {{ $perception->frais->devise }}</span>
        </div>
        <div class="total-line rest-due">
            <span class="total-label">Reste à payer :</span>
            <span class="total-value currency">{{ Helpers::currencyFormat($perception?->reste) }} {{ $perception->frais->devise }}</span>
        </div>

        @if($perception?->paid_by != null)
            <div class="paid-by">
                <strong>Payé par :</strong> {{ $perception?->paid_by }}
            </div>
        @endif
    </div>

    <!-- Verse et signature -->
    <div class="footer">
        <div class="verse">
            « Si les prémices sont Saintes, la masse l'est aussi ;<br>
            Si la racine est sainte, les branches le sont aussi »
        </div>
        <div class="signature">
            Collège St François Xavier<br>
            SERVICE FINANCE
        </div>
    </div>
</div>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
    // Impression automatique
    printJS({
        printable: 'receipt-container',
        type: 'html',
        style: `
                @page { size: 80mm auto; margin: 2mm; }
                body {
                    width: 76mm;
                    margin: 0 auto;
                    font-family: Arial, sans-serif;
                    font-size: 9px;
                    line-height: 1.2;
                }
                * { max-width: 76mm !important; }
            `,
        onPrintDialogClose: function() {
            // Retour à la page précédente
            setTimeout(function() {
                window.history.back();
            }, 500);
        }
    });

    // Retour automatique si l'impression est annulée
    setTimeout(function() {
        if (!document.hidden) {
            window.history.back();
        }
    }, 3000);
</script>
</body>
</html>
