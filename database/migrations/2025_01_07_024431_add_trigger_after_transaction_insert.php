<?php

// use Illuminate\Container\Attributes\DB;
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
        DB::unprepared('
            CREATE TRIGGER after_transaction_insert
            AFTER INSERT ON transaction
            FOR EACH ROW
            BEGIN
                IF (SELECT quantity FROM products WHERE id_product = NEW.id_product) < NEW.count THEN
                    SIGNAL SQLSTATE "45000" 
                    SET MESSAGE_TEXT = "Not enough quantity";
                ELSE
                    UPDATE products
                    SET quantity = quantity - NEW.count
                    WHERE id_product = NEW.id_product;
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_transaction_insert');
    }
};
