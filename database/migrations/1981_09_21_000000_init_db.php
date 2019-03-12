<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * add init db scripts like Postgres extension activation
 * added some sample
 *
 * Class InitDb
 */
class InitDb extends Migration
{
    protected $requiredExtensions = ['ltree', 'hstore'];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*$enabledExtensions = [];

        $allExtensions = DB::select('SELECT extname FROM pg_extension');

        foreach ($allExtensions as $ex) {
            $enabledExtensions [] = $ex->extname;
        }

        $installableExtensions = array_diff($this->requiredExtensions, $enabledExtensions);

        foreach ($installableExtensions as $ex) {
            DB::connection()->getPdo()->exec(sprintf("CREATE EXTENSION %s;", $ex));
        }*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // remove installed extension

        /*foreach ($this->requiredExtensions as $ex) {
            DB::connection()->getPdo()->exec(sprintf("DROP EXTENSION %s;", $ex));
        }*/
    }
}
