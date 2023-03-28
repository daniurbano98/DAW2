<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name',
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

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function create_user($name,$email,$password){
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
    }

    public function view_user($id){
        $user = User::find($id);
    }

    public function update_user($id){
        //TODO Validar si no existe
        $user = User::find($id);

        $user->update([
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    public function delete_user($id){
        //TODO Validar si no existe
        $user = User::find($id);

        $user->delete();
    }
}
