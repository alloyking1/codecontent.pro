<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('author_id')
                ->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });

        $now = now();

        $defaultAuthorId = DB::table('authors')
            ->where('slug', 'moses')
            ->value('id');

        if (! $defaultAuthorId) {
            $defaultAuthorId = DB::table('authors')->insertGetId([
                'name' => 'Moses',
                'slug' => 'moses',
                'description' => 'Software Developer, Technical Content Engineer, and Developer Educator helping teams improve developer adoption.',
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        DB::table('posts')
            ->whereNull('author_id')
            ->update(['author_id' => $defaultAuthorId]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropConstrainedForeignId('author_id');
        });
    }
};
