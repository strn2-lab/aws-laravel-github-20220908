{"filter":false,"title":"RegisterController.php","tooltip":"/cms/app/Http/Controllers/Auth/RegisterController.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":53,"column":12},"end":{"row":53,"column":82},"action":"remove","lines":["'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],"],"id":2},{"start":{"row":53,"column":12},"end":{"row":53,"column":98},"action":"insert","lines":["'email' => 'required|string|email|max:255|unique:users,email,NULL,id,deleted_at,NULL',"]}]]},"ace":{"folds":[],"scrolltop":670.5,"scrollleft":0,"selection":{"start":{"row":54,"column":71},"end":{"row":54,"column":71},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1663743593944,"hash":"38c88d2917e2b761f9d8bb98df47cb7d313f020c"}