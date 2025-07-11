<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Bank;
use App\Models\CardType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Bank::class)->constrained();
            $table->string('business');
            $table->text("title");
            $table->string("benefit", 500);
            $table->string("image")->nullable;
            $table->string("logo")->nullable();
            $table->string("restriction", 600)->nullable();
            $table->string("category");
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
