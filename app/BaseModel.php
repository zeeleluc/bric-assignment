<?php

namespace App;

use App\ModelTraits\TokenTrait;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    use TokenTrait;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            /** @var self $model */
            $model->generateToken();
        });
    }

    /**
     * Get the route key for all models.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'token';
    }

    /**
     * @param array $values
     * @return $this|bool
     */
    public function updateModel(array $values)
    {
        if ($this->update($values)) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function remove()
    {
        if ($this->delete()) {
            return true;
        }

        return false;
    }
}
