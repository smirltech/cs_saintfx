<?php

namespace App\Http\Resources\Api\V1\Finance;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReceiptResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,

            'reference' => $this->reference,

            'amount_due' => (float) $this->montant,

            'amount_paid' => (float) $this->frais_montant,

            'currency' => $this->devise,

            'date' => $this->paid_at?->toIso8601String(),

            'due_date' => $this->due_date?->toDateString(),

            'paid_by' => $this->paid_by,

            'custom_property' => $this->custom_property,
        ];
    }
}
