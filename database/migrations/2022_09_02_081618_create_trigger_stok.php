<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerStok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
                CREATE TRIGGER kurangi_stok after INSERT ON sales
                FOR EACH ROW BEGIN
                UPDATE products
                SET stok = stok - NEW.jumlah
                WHERE
                id = NEW.produk_id;
                END
            ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_stok');
    }
}
