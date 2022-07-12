<?php

namespace App\Models;

use DateTime;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function shifts()
    {
        return $this->hasMany(Shift::class);
    }
    public function currentShift()
    {
        return $this->hasOne(Shift::class)->ofMany([], fn ($q) => $q->where('date', date('Y-m-01')));
    }

    protected function isOnShift() : Attribute
    {
        return Attribute::get(function ($value, $attributes) {
            $shift = $this->currentShift;
            $shiftValues = $shift?->shift_values;

            if ($shiftValues) :
                $shifts = array_filter($shiftValues, fn ($values) => $values['start'] < date(now()) && $values['end'] > date(now()));
                if (count($shifts)) :
                    return true;
                endif;
            endif;

            return false;
        });
    }
    protected function name() : Attribute
    {
        return Attribute::get(function ($value, $attributes) {
            $lastName = $attributes['last_name'];
            $firstName = $attributes['first_name'];
            $firstLetter = substr($firstName, 0, 1);

            return $lastName . " " . $firstLetter . ".";
        });
    }
}
