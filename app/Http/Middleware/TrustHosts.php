<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts()
=======
    public function hosts(): array
>>>>>>> 642f8cc91bec36fb7e37d9772e66be30943d6ffd
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
