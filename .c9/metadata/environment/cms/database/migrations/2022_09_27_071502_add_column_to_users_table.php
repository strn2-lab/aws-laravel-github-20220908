{"filter":false,"title":"2022_09_27_071502_add_column_to_users_table.php","tooltip":"/cms/database/migrations/2022_09_27_071502_add_column_to_users_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":14,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":["{","        Schema::table('users', function (Blueprint $table) {","            //","        });","    }"],"id":2},{"start":{"row":14,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["{","        Schema::table('users', function (Blueprint $table) {","            $table->string('profile_image')->default('default.png');","        });","    }"]}],[{"start":{"row":26,"column":4},"end":{"row":30,"column":5},"action":"remove","lines":["{","        Schema::table('users', function (Blueprint $table) {","            //","        });","    }"],"id":3},{"start":{"row":26,"column":4},"end":{"row":30,"column":5},"action":"insert","lines":["{","        Schema::table('users', function (Blueprint $table) {","            $table->dropColumn('profile_image');","        });","    }"]}],[{"start":{"row":16,"column":43},"end":{"row":16,"column":66},"action":"remove","lines":["->default('default.png'"],"id":4},{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"remove","lines":[")"]}]]},"ace":{"folds":[],"scrolltop":102,"scrollleft":0,"selection":{"start":{"row":19,"column":0},"end":{"row":19,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":26,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1664263842935,"hash":"16c757ad0c79cefb02237fa31a2a0d8d033ab926"}