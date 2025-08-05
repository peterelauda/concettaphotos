<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('concettalk_comment_replies', function (Blueprint $table) {
            $table->id();

            $table->foreignId('concettalk_comment_id')->constrained('concettalk_comments');
            $table->foreignId('user_id')->constrained('users');
            $table->text('reply_text');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concettalk_comment_replies');
    }
};
