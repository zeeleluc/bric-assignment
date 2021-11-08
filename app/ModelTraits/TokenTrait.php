<?php

namespace App\ModelTraits;

use Illuminate\Support\Str;

/**
 * Create a unique token.
 *
 * Trait TokenTrait
 *
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait TokenTrait
{
    private int $length = 8;

    public function generateToken($overwrite = false)
    {
        if ($overwrite || !$this->getAttributeValue('token')) {
            // generate token
            $token = Str::random($this->length);

            // check if it is unique, if not retry
            if (self::query()->withoutGlobalScopes()->where($this->table . '.token', $token)->exists()) {
                return $this->generateToken();
            }

            $this->setAttribute('token', $token);
        }
    }
}
