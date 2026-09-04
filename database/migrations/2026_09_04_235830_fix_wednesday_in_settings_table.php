<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("ALTER TABLE settings MODIFY opening_day_from ENUM('sunday','monday','tuesday','wednesday','thursday','friday','saturday') NULL");

        DB::statement("ALTER TABLE settings MODIFY opening_day_to ENUM('sunday','monday','tuesday','wednesday','thursday','friday','saturday') NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE settings MODIFY opening_day_from ENUM('sunday','monday','tuesday','webnesday','thursday','friday','saturday') NULL");

        DB::statement("ALTER TABLE settings MODIFY opening_day_to ENUM('sunday','monday','tuesday','webnesday','thursday','friday','saturday') NULL");
    }
};
