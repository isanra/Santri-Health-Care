<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Obat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class ObatApiTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function user_can_register_and_login(): void
    {
        $response = $this->postJson('/auth/register', [
            'name' => 'Santri',
            'email' => 'santri@example.com',
            'password' => '123411',
            'password_confirmation' => '123411'
        ]);
        $response->assertStatus(201);

        $login = $this->postJson('/auth/login', [
            'email' => 'santri@example.com',
            'password' => '123411'
        ]);
        $login->assertStatus(200)->assertJsonStructure(['token']);
    }

    #[Test]
    public function authenticated_user_can_crud_obat(): void
    {
        $user = User::factory()->create();
        $token = $user->createToken('test')->plainTextToken;

        // payload lengkap (sesuaikan kalau rules() beda)
        $payload = [
            'nama_obat' => 'Paracetamol',
            'kategori' => 'Analgesik',
            'stok' => 50,
            'satuan' => 'tablet',
            'harga' => 5000,
            'tanggal_kedaluwarsa' => now()->addYear()->toDateString(), // "YYYY-MM-DD"
        ];

        // CREATE
        $create = $this->withHeader('Authorization', 'Bearer ' . $token)
                       ->postJson('/obats', $payload);

        $create->assertStatus(201, $create->getContent()); // tambahin response body di assertion failure

        // READ
        $index = $this->getJson('/obats');
        $index->assertStatus(200);

        // UPDATE
        $obat = Obat::first();
        $update = $this->withHeader('Authorization', 'Bearer ' . $token)
               ->putJson("/obats/{$obat->id}", [
                   'nama_obat' => 'Paracetamol',
                   'jenis_obat' => 'Tablet',
                   'stok' => 45,
                   'harga' => 5000
               ]);

        $update->assertStatus(200);

        // DELETE
        $delete = $this->withHeader('Authorization', 'Bearer ' . $token)
                       ->deleteJson("/obats/{$obat->id}");
        $delete->assertStatus(200);
    }
}
