<?php

namespace Vape;

use Illuminate\Database\Eloquent\Model;

/**
 * Vape\Celeb
 *
 * @property integer $id
 * @property string $name
 * @property integer $score
 * @property integer $elo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb whereScore($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb whereElo($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb whereDeletedAt($value)
 * @mixin \Eloquent
 * @property string $img
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb whereImg($value)
 * @method static \Illuminate\Database\Query\Builder|\Vape\Celeb random()
 */
class Celeb extends Model
{

    protected $guarded = ['id'];
}
