<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Annee;
use App\Models\School;
use Illuminate\Http\JsonResponse;

class ContextController extends Controller
{
    public function index(): JsonResponse
    {
        $school = School::first();

        return response()->json([
            'data' => [
                'school' => $school ? [
                    'id' => $school->id,
                    'name' => $school->name,
                    'code' => $school->code,
                    'logo' => $school->logo,
                    'address' => $school->address,
                    'phone' => $school->phone,
                    'email' => $school->email,
                    'website' => $school->website,
                    'settings' => $school->settings,
                ] : null,

                'academic_year' => $this->getCurrentAcademicYear(),

                'currencies' => [
                    'USD',
                    'CDF',
                ],
            ],
        ]);
    }

    private function getCurrentAcademicYear(): ?array
    {
        /*
         * Connect this to the existing Annee model
         * and its existing "current academic year" logic.
         *
         * We intentionally don't assume field names here.
         */

        return Annee::encours()->toArray();
    }
}
