<?php


namespace App\Http\Api\Controllers\Activations;

use App\Http\Api\Requests\Activations\UpdateCurrentVersionRequest;
use App\Models\Activation;

class UpdateCurrentVersionController
{
    public function __invoke(Activation $activation, UpdateCurrentVersionRequest $request)
    {
        $activation->update([
           'current_version' => $request->current_version,
            'arch' => $request->arch,
            'platform' => $request->platform,
            'os_version' => $request->os_version,
        ]);

        return response()->noContent();
    }
}
