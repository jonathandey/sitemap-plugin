<?php namespace RainLab\Sitemap\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDefinitionsTable extends Migration
{
    public function up()
    {
        Schema::table('rainlab_sitemap_definitions', function(Blueprint $table)
        {
            $table->timestamp('expires_at');
        });
    }

    public function down()
    {
        Schema::table('rainlab_sitemap_definitions', function(Blueprint $table)
        {
            $table->dropColumn('expires_at');
        });
    }
}
