<?php

namespace App;

use App\Events\DummyUpdatedEvent;
use App\Interfaces\ModelInterface;
use App\Notifications\DummyUpdated;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

/**
 * App\Dummy
 *
 * @property int $id
 * @property string $token
 * @property string|null $lorem
 * @property string|null $ipsum
 * @property int|null $mail_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy whereIpsum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy whereLorem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy whereMailCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dummy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Dummy extends BaseModel implements ModelInterface
{

    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dummy';

    /**
     * @var string[]
     */
    protected $fillable = [
        'lorem',
        'ipsum',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            /** @var self $model */
            $model->generateToken();
        });

        static::updated(function ($model) {
            /** @var self $model */
            event(new DummyUpdatedEvent($model));
        });
    }

    /**
     * @param array $values
     * @return Dummy
     */
    public static function make(array $values)
    {
        $dummy = new self;
        $dummy->lorem = \Arr::get($values, 'lorem');
        $dummy->ipsum = \Arr::get($values, 'ipsum');
        $dummy->save();

        return $dummy;
    }

}
