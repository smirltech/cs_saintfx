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
<div id="factPrint" class="text-center" style="text-align:center">
    <div style="text-align:center" class="text-center">
        <img width="80px" src="{{url('/images/csfx/img.png')}}" alt="cs francois xavier logo">
    </div>
    <strong>College St Francois Xavier</strong>
    <div class="text-center"  style="margin-bottom: 10px">AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe Lubumbashi, RDC</div>
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

    <div class="w3-small text-center">College St Francois Xavier - FINANCE</div>
</div>

<!-- Copie du reçu (avec mention "COPIE") -->
<div id="factPrintCopy" style="display: none; position: relative;">
    <div class="text-center" style="text-align:center">
        <!-- Texte "COPIE" en filigrane -->
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-45deg); font-size: 100px; opacity: 0.2; color: gray; z-index: 1; pointer-events: none;">
            COPIE
        </div>

        <div style="position: relative; z-index: 2;">
            <div style="text-align:center" class="text-center">
                <img width="80px" src="{{url('/images/csfx/img.png')}}" alt="cs francois xavier logo">
            </div>
            <strong>College St Francois Xavier</strong>
            <div class="text-center" style="margin-bottom: 10px">AV. Kilenge coin Wamba, Q/Bel-Air C/Kampembe Lubumbashi, RDC</div>

            <div style="text-align:center; color: #666;" class="text-center">COPIE - REÇU N°{{$perception?->reference}}</div>
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
            <div class="d-flex justify-content-evenly">
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
                    <tr>
                        <td>
                            {{number_format($perception->frais_montant)}} {{ $perception->frais->devise }}
                        </td>
                        <td>
                            {{number_format($perception->montant)}} {{ $perception->frais->devise }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div style="text-align:right" class="text-right">Cash :
                <strong>{{Helpers::currencyFormat($perception?->montant)}} {{ $perception->frais->devise }}</strong>
            </div>
            <div style="text-align:right" class="text-right">Reste :
                <strong>{{Helpers::currencyFormat($perception?->reste)}}
                    {{ $perception->frais->devise }} </strong>
            </div>
            @if($perception?->paid_by != null)
                <div style="text-align:right" class="text-right">Payé par :
                    <strong>{{$perception?->paid_by}}</strong></div>
            @endif
            <br>
            <div class="w3-small text-center" style="color: #666;">College St Francois Xavier - FINANCE (COPIE)</div>
        </div>
    </div>
</div>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
    // Fonction pour imprimer les deux copies
    function printBothCopies() {
        let printCount = 0;
        const maxPrints = 2;

        function printNext() {
            if (printCount >= maxPrints) {
                redirectBack();
                return;
            }

            let printableId = 'factPrint';
            let style = "text-align:center";

            // Pour la deuxième impression, utiliser la copie
            if (printCount === 1) {
                printableId = 'factPrintCopy';
                // Afficher temporairement la copie pour l'impression
                document.getElementById('factPrintCopy').style.display = 'block';
            }

            printJS({
                printable: printableId,
                type: 'html',
                targetStyles: ['*'],
                maxWidth: 300,
                style: style,
                onPrintDialogClose: function() {
                    // Masquer la copie après impression
                    if (printCount === 1) {
                        document.getElementById('factPrintCopy').style.display = 'none';
                    }

                    printCount++;
                    // Petite pause avant l'impression suivante
                    setTimeout(printNext, 500);
                }
            });
        }

        printNext();
    }

    // Fonction alternative: imprimer les deux sur des pages séparées
    function printSeparatePages() {
        // Créer un document combiné pour impression
        const originalContent = document.getElementById('factPrint').innerHTML;
        const copyContent = document.getElementById('factPrintCopy').innerHTML;

        const combinedContent = `
            <div style="page-break-after: always;">
                ${originalContent}
            </div>
            <div>
                ${copyContent}
            </div>
        `;

        // Créer un élément temporaire pour l'impression
        const printWindow = window.open('', '_blank', 'width=800,height=600');
        printWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Reçu N°{{$perception?->reference}}</title>
                <style>
                    @media print {
                        .page-break { page-break-before: always; }
                        body { margin: 0; padding: 20px; }
                    }
                </style>
            </head>
            <body>
                ${combinedContent}
                <script>
                    window.onload = function() {
                        window.print();
                        setTimeout(function() {
                            window.close();
                            location.replace("{{URL::previous()}}");
                        }, 1000);
                    };
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }

    // Démarrage automatique de l'impression
    window.onload = function() {
        // Choix entre les deux méthodes:
        // printBothCopies(); // Imprime deux boîtes de dialogue séparées
        printSeparatePages(); // Imprime les deux copies en une seule fois
    };

    function redirectBack() {
        location.replace("{{URL::previous()}}");
    }
</script>

