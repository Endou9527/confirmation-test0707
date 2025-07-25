<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーを1人だけ作って $user に代入
        $user = User::factory()->create();

        // そのユーザーの ID を明示的に割り当てる
        WeightLog::factory(35)->create([
            'user_id' => $user->id,
        ]);

        WeightTarget::factory()->create([
            'user_id' => $user->id,
        ]);
    }
}
