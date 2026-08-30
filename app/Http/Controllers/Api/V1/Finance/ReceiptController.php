<?php

namespace App\Http\Controllers\Api\V1\Finance;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Finance\ReceiptResource;
use App\Models\Perception;
use Illuminate\Http\JsonResponse;

class ReceiptController extends Controller
{
    public function index(): JsonResponse
    {
        $receipts = Perception::latest('paid_at')->paginate(20);

        return response()->json([
            'summary' => [
                'USD' => Perception::where('devise', 'USD')
                    ->sum('frais_montant'),

                'CDF' => Perception::where('devise', 'CDF')
                    ->sum('frais_montant'),
            ],

            'data' => ReceiptResource::collection($receipts),

            'pagination' => [
                'current_page' => $receipts->currentPage(),
                'per_page' => $receipts->perPage(),
                'total' => $receipts->total(),
                'last_page' => $receipts->lastPage(),
            ],
        ]);

    }
}
