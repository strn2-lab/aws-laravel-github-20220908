{"filter":false,"title":"2022_09_27_071502_add_column_to_users_table.php","tooltip":"/cms/database/migrations/2022_09_27_071502_add_column_to_users_table.php","undoManager":{"mark":24,"position":24,"stack":[[{"start":{"row":14,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":["{","        Schema::table('users', function (Blueprint $table) {","            //","        });","    }"],"id":2},{"start":{"row":14,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["{","        Schema::table('users', function (Blueprint $table) {","            $table->string('profile_image')->default('default.png');","        });","    }"]}],[{"start":{"row":26,"column":4},"end":{"row":30,"column":5},"action":"remove","lines":["{","        Schema::table('users', function (Blueprint $table) {","            //","        });","    }"],"id":3},{"start":{"row":26,"column":4},"end":{"row":30,"column":5},"action":"insert","lines":["{","        Schema::table('users', function (Blueprint $table) {","            $table->dropColumn('profile_image');","        });","    }"]}],[{"start":{"row":16,"column":68},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":68},"action":"insert","lines":["$table->string('profile_image')->default('default.png');"],"id":6}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":41},"action":"remove","lines":["profile_image"],"id":7}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":29},"action":"insert","lines":["w"],"id":8},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["o"]},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["r"]},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["k"]},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["_"]}],[{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["s"],"id":9},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["t"]},{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["a"]},{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["t"]},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["u"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["s"]}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":63},"action":"remove","lines":["default.png"],"id":10},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["0"]}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["0"],"id":11}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":54},"action":"insert","lines":["退勤"],"id":12},{"start":{"row":17,"column":54},"end":{"row":17,"column":56},"action":"insert","lines":["ちゅ"]}],[{"start":{"row":17,"column":55},"end":{"row":17,"column":56},"action":"remove","lines":["ゅ"],"id":13},{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"remove","lines":["ち"]}],[{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"insert","lines":["中"],"id":14}],[{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"remove","lines":["g"],"id":15},{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"remove","lines":["n"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["i"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"remove","lines":["r"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"remove","lines":["t"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["s"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["t"],"id":16},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["e"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["x"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["t"]}],[{"start":{"row":29,"column":48},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":30,"column":0},"end":{"row":30,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":30,"column":12},"end":{"row":31,"column":11},"action":"insert","lines":["$table->text('work_status')->default('退勤中');","        });"],"id":18}],[{"start":{"row":30,"column":40},"end":{"row":30,"column":55},"action":"remove","lines":[">default('退勤中')"],"id":19},{"start":{"row":30,"column":39},"end":{"row":30,"column":40},"action":"remove","lines":["-"]}],[{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"remove","lines":[";"],"id":20},{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"remove","lines":[")"]},{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"remove","lines":["}"]},{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"remove","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"remove","lines":["    "]},{"start":{"row":30,"column":40},"end":{"row":31,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":30,"column":21},"end":{"row":30,"column":24},"action":"remove","lines":["ext"],"id":21}],[{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"remove","lines":["t"],"id":22}],[{"start":{"row":30,"column":20},"end":{"row":30,"column":30},"action":"insert","lines":["dropColumn"],"id":23}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["t"],"id":26},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"remove","lines":["x"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"remove","lines":["e"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["t"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["s"],"id":27},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["t"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["r"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["i"]},{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["n"]},{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["g"]}],[{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"remove","lines":["中"],"id":28},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"remove","lines":["勤"]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["退"]}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["0"],"id":29}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":56},"end":{"row":17,"column":56},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1664964647489,"hash":"8681dc77f15718e13e70c67301914e3106718a97"}