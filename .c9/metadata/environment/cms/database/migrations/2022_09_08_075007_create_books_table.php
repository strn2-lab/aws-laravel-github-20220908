{"filter":false,"title":"2022_09_08_075007_create_books_table.php","tooltip":"/cms/database/migrations/2022_09_08_075007_create_books_table.php","undoManager":{"mark":28,"position":28,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;","","class CreateBooksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('books', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('books');","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":37,"column":1},"action":"insert","lines":["<?php","","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;","","class CreateBooksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('books', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->bigInteger('user_id'); //Add:user_id","            $table->date('item_date');","            $table->string('item_file');     //Add:item_file","            $table->time('item_number');","            $table->time('item_number2');","            $table->time('item_number3');","            $table->time('item_number4');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('books');","    }","}"]}],[{"start":{"row":19,"column":60},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]},{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"insert","lines":["$"]}],[{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"insert","lines":["i"],"id":4},{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"insert","lines":["t"]},{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"insert","lines":["e"]},{"start":{"row":20,"column":16},"end":{"row":20,"column":17},"action":"insert","lines":["m"]}],[{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"insert","lines":["_"],"id":5},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"insert","lines":["i"]},{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"insert","lines":["c"]},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["o"]}],[{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["m"],"id":6}],[{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"remove","lines":["m"],"id":7},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"remove","lines":["o"]},{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"remove","lines":["c"]},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"remove","lines":["i"]},{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"remove","lines":["_"]},{"start":{"row":20,"column":16},"end":{"row":20,"column":17},"action":"remove","lines":["m"]},{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"remove","lines":["e"]},{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"remove","lines":["t"]},{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"remove","lines":["i"]}],[{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"insert","lines":["t"],"id":8},{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"insert","lines":["a"]},{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"insert","lines":["b"]},{"start":{"row":20,"column":16},"end":{"row":20,"column":17},"action":"insert","lines":["l"]},{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"insert","lines":["e"]},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"insert","lines":["-"]}],[{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"insert","lines":[">"],"id":9}],[{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["s"],"id":10},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["t"]},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"insert","lines":["r"]},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":["i"]},{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"insert","lines":["n"]},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":26},"end":{"row":20,"column":28},"action":"insert","lines":["()"],"id":11}],[{"start":{"row":20,"column":27},"end":{"row":20,"column":29},"action":"insert","lines":["''"],"id":12}],[{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"insert","lines":["i"],"id":13},{"start":{"row":20,"column":29},"end":{"row":20,"column":30},"action":"insert","lines":["t"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"insert","lines":["e"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"insert","lines":["m"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"insert","lines":["_"]},{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"insert","lines":["f"]}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["i"],"id":14},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["l"]},{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"insert","lines":[";"],"id":15}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":[";"],"id":16},{"start":{"row":20,"column":39},"end":{"row":21,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":[";"],"id":17}],[{"start":{"row":20,"column":52},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":20,"column":42},"end":{"row":20,"column":43},"action":"insert","lines":[" "],"id":19},{"start":{"row":20,"column":43},"end":{"row":20,"column":44},"action":"insert","lines":[" "]},{"start":{"row":20,"column":44},"end":{"row":20,"column":45},"action":"insert","lines":[" "]}],[{"start":{"row":20,"column":45},"end":{"row":20,"column":46},"action":"insert","lines":["/"],"id":20},{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"insert","lines":["/"]},{"start":{"row":20,"column":47},"end":{"row":20,"column":48},"action":"insert","lines":["A"]},{"start":{"row":20,"column":48},"end":{"row":20,"column":49},"action":"insert","lines":["d"]},{"start":{"row":20,"column":49},"end":{"row":20,"column":50},"action":"insert","lines":["d"]}],[{"start":{"row":20,"column":50},"end":{"row":20,"column":51},"action":"insert","lines":[":"],"id":21}],[{"start":{"row":20,"column":51},"end":{"row":20,"column":52},"action":"insert","lines":["i"],"id":22},{"start":{"row":20,"column":52},"end":{"row":20,"column":53},"action":"insert","lines":["t"]},{"start":{"row":20,"column":53},"end":{"row":20,"column":54},"action":"insert","lines":["e"]},{"start":{"row":20,"column":54},"end":{"row":20,"column":55},"action":"insert","lines":["m"]},{"start":{"row":20,"column":55},"end":{"row":20,"column":56},"action":"insert","lines":["_"]}],[{"start":{"row":20,"column":56},"end":{"row":20,"column":57},"action":"insert","lines":["i"],"id":23},{"start":{"row":20,"column":57},"end":{"row":20,"column":58},"action":"insert","lines":["c"]},{"start":{"row":20,"column":58},"end":{"row":20,"column":59},"action":"insert","lines":["o"]},{"start":{"row":20,"column":59},"end":{"row":20,"column":60},"action":"insert","lines":["m"]}],[{"start":{"row":20,"column":59},"end":{"row":20,"column":60},"action":"remove","lines":["m"],"id":24}],[{"start":{"row":20,"column":59},"end":{"row":20,"column":60},"action":"insert","lines":["n"],"id":25}],[{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"remove","lines":["e"],"id":26},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"remove","lines":["l"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["i"]},{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"remove","lines":["f"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"insert","lines":["i"],"id":27},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["s"]}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["s"],"id":28}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["c"],"id":29},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["o"]},{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"insert","lines":["n"]}],[{"start":{"row":20,"column":1},"end":{"row":20,"column":61},"action":"remove","lines":["           $table->string('item_icon');     //Add:item_icon "],"id":30},{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":[" "]},{"start":{"row":19,"column":60},"end":{"row":20,"column":9},"action":"remove","lines":["","         "]}]]},"ace":{"folds":[],"scrolltop":108,"scrollleft":0,"selection":{"start":{"row":19,"column":56},"end":{"row":19,"column":56},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":69,"mode":"ace/mode/php"}},"timestamp":1663317652023,"hash":"8b217e56861b677c1b444309122b38be96b8eb47"}