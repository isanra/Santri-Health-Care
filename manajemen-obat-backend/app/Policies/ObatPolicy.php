<?php

namespace App\Policies;

use App\Models\Obat;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ObatPolicy
{
    use HandlesAuthorization;

    public function viewAny(?User $user)
    {
        return true; // publik
    }

    public function view(?User $user, Obat $obat)
    {
        return true; // publik
    }

    public function create(User $user)
    {
        // jika mau role di masa depan, ganti di sini. Sekarang: siapa pun yg login boleh.
        return $user !== null;
    }

    public function update(User $user, Obat $obat)
    {
        // jika mau cek ownership/role, ubah aturan di sini.
        return $user !== null;
    }

    public function delete(User $user, Obat $obat)
    {
        return $user !== null;
    }
}
