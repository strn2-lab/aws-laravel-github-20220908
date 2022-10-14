{"filter":false,"title":"2022_09_21_094557_add_column_soft_deletes_users_table.php","tooltip":"/cms/database/migrations/2022_09_21_094557_add_column_soft_deletes_users_table.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":6,"column":0},"end":{"row":31,"column":1},"action":"remove","lines":["class AddColumnSoftDeletesUsersTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::table('users', function (Blueprint $table) {","            //","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::table('users', function (Blueprint $table) {","            //","        });","    }","}"],"id":2},{"start":{"row":6,"column":0},"end":{"row":34,"column":5},"action":"insert","lines":["class AddColumnSoftDeletesUsersTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::table('users', function (Blueprint $table) {","            $table->softDeletes()","            $table->dropUnique('users_email_unique');","            $table->unique(['email','deleted_at'],'users_email_unique');;","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::table('users', function (Blueprint $table) {","            $table->dropColumn('deleted_at')","            $table->dropUnique('users_email_unique');","            $table->unique('email','users_email_unique')            ","        });","    }"]}],[{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"insert","lines":[";"],"id":3}],[{"start":{"row":18,"column":72},"end":{"row":18,"column":73},"action":"remove","lines":[";"],"id":4}],[{"start":{"row":30,"column":44},"end":{"row":30,"column":45},"action":"insert","lines":[";"],"id":5}],[{"start":{"row":32,"column":64},"end":{"row":32,"column":65},"action":"insert","lines":[";"],"id":6}],[{"start":{"row":32,"column":64},"end":{"row":32,"column":65},"action":"remove","lines":[";"],"id":7}],[{"start":{"row":32,"column":56},"end":{"row":32,"column":57},"action":"insert","lines":[";"],"id":8}],[{"start":{"row":34,"column":5},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":34,"column":5},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":4},"end":{"row":35,"column":5},"action":"insert","lines":["}"]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"remove","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":170.70000000000002,"scrollleft":0,"selection":{"start":{"row":33,"column":11},"end":{"row":33,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1663753616767,"hash":"c1cafbed07fe3a66312ca69a0e19d96624206c0e"}