<?php

namespace Vape;

use Illuminate\Database\Eloquent\Model;

/**
 * Vape\Battle
 *
 * @property integer $id
 * @property integer $celeb1
 * @property integer $celeb2
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Vape\Battle whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Battle whereCeleb1($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Battle whereCeleb2($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Battle whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Battle whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property integer $winner
 * @property-read \Vape\Celeb $firstCeleb
 * @property-read \Vape\Celeb $secondCeleb
 * @method static \Illuminate\Database\Query\Builder|\Vape\Battle whereWinner($value)
 */
class Battle extends Model
{
    protected $guarded = ['id'];

    public function firstCeleb()
    {
        return $this->belongsTo(Celeb::class,'celeb1');
    }

    public function secondCeleb()
    {
        return $this->belongsTo(Celeb::class,'celeb2');
    }
}
