<?php

namespace matbrgz\digitalkingstheme;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        
        ->css(__DIR__.'/less/forum.less'),
    
    (new Extend\Locales(__DIR__.'/locale')),
];
