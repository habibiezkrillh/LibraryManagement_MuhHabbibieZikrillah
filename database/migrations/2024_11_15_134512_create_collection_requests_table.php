<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('collection_requests', function (Blueprint $table) {
            $table->id();
            $table->string('book_title');
            $table->string('requestor_name');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('collection_requests');
    }
}
