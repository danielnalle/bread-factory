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
        // Buat tabel log_products
        Schema::create('log_breads', function (Blueprint $table) {
            $table->id();
            $table->string('user')->nullable();
            $table->unsignedBigInteger('bread_id');
            $table->enum('action', ['Insert', 'Update', 'Delete']);
            $table->text('changes')->nullable();
            $table->timestamps();
        });

        // Trigger untuk INSERT
        DB::unprepared('
            CREATE TRIGGER tg_insert_bread
            AFTER INSERT ON breads
            FOR EACH ROW
            BEGIN
                INSERT INTO log_breads (user, bread_id, action, changes, created_at)
                VALUES (CURRENT_USER(), NEW.id, "Insert", NULL, NOW());
            END;
        ');

        // Trigger untuk UPDATE
        DB::unprepared('
            CREATE TRIGGER tg_update_bread
            AFTER UPDATE ON breads
            FOR EACH ROW
            BEGIN
                INSERT INTO log_breads (user, bread_id, action, changes, created_at)
                VALUES (NEW.id, "UPDATE", CONCAT_WS(", ", 
                    CONCAT("Updated by: ", CURRENT_USER()),
                    CONCAT("name: ", OLD.name, " -> ", NEW.name),
                    CONCAT("desc: ", OLD.description, " -> ", NEW.description),
                    CONCAT("bread_type: ", OLD.bread_type_id, " -> ", NEW.bread_type_id),
                    CONCAT("quantity: ", OLD.quantity, " -> ", NEW.quantity),
                    CONCAT("min_order: ", OLD.min_order, " -> ", NEW.min_order),
                    CONCAT("price: ", OLD.price, " -> ", NEW.price)
                ), NOW());
            END;
        ');

        // // Trigger untuk DELETE
        DB::unprepared('
            CREATE TRIGGER log_delete_bread
            AFTER DELETE ON breads
            FOR EACH ROW
            BEGIN
                INSERT INTO log_breads (user, bread_id, action, changes, created_at)
                VALUES (CURRENT_USER(), OLD.id, "DELETE", NULL, NOW());
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS tg_insert_bread');
        DB::unprepared('DROP TRIGGER IF EXISTS tg_update_bread');

        // Hapus tabel log_products
        Schema::dropIfExists('log_breads');
    }
};
