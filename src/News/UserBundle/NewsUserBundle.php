<?php

namespace News\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NewsUserBundle extends Bundle
{
    
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
