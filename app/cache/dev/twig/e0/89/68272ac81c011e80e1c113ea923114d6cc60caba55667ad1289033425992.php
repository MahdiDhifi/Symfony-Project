<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e08968272ac81c011e80e1c113ea923114d6cc60caba55667ad1289033425992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!--       **************************************************************************************   -->
<!DOCTYPE html>
<html >
  <head>
    <meta charset=\"UTF-8\">
    <title>Login</title>

        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("login/css/style.css"), "html", null, true);
        echo "\">

  </head>

  <body>
   

     

        <div>
            <span href=\"#\" class=\"button\" id=\"toggle-login\">Log in</span>

<div id=\"login\">
  <div id=\"triangle\"></div>
  <h1><img width=\"173\" height=\"53\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></h1>
  
  ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "  
   
 
</div> 
        </div>
   
    <script src='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "'></script>

        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("login/js/index.js"), "html", null, true);
        echo "\"></script>

    
    
    
  </body>
</html>
";
    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 27
        echo "     
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  80 => 26,  68 => 37,  63 => 35,  55 => 29,  53 => 26,  48 => 24,  31 => 10,  20 => 1,);
    }
}
