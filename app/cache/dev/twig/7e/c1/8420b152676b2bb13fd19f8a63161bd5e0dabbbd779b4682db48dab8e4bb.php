<?php

/* NewsFrontBundle::layout.html.twig */
class __TwigTemplate_7ec18420b152676b2bb13fd19f8a63161bd5e0dabbbd779b4682db48dab8e4bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'slider' => array($this, 'block_slider'),
            'left' => array($this, 'block_left'),
            'content' => array($this, 'block_content'),
            'right' => array($this, 'block_right'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Groovy Visions</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- for fontawesome icon css file -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- for content animate css file -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\">
    <!-- google fonts  -->
    <link href='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Arvo"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>   
   <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Allerta"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
     <!-- slick slider css file -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/css/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">     
    <!-- <link href=\"css/theme-red.css\" rel=\"stylesheet\">    -->
     <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- main site css file -->    
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/ico\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/img/page.ico"), "html", null, true);
        echo "\" />
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
<body>

  <div id=\"preloader\">
    <div id=\"status\">&nbsp;</div>
  </div>
  <!-- End Preloader -->
   
  <a class=\"scrollToTop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
  <!-- start header -->
  <header id=\"header\">
    <!-- Static navbar -->
    ";
        // line 45
        $this->displayBlock('navbar', $context, $blocks);
        // line 48
        echo "  </header>
  <!-- End header --> 
  
  <!-- start content section -->
  <section id=\"content\">
  
  
  
  ";
        // line 56
        $this->displayBlock('slider', $context, $blocks);
        // line 59
        echo "    <div class=\"container\">\t  
      <div class=\"row\">
       ";
        // line 61
        $this->displayBlock('left', $context, $blocks);
        // line 63
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "          ";
        $this->displayBlock('right', $context, $blocks);
        // line 67
        echo "       
      </div>
    </div>
  </section><!-- End content section -->
  <!-- start footer area -->
";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "  <!-- End footer area -->
  

  <!-- jQuery google CDN Library -->
  <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), "html", null, true);
        echo "\"></script> 
  <!-- For content animatin  -->
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/js/wow.min.js"), "html", null, true);
        echo "\"></script>
  <!-- bootstrap js file -->
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
  <!-- slick slider js file -->
  <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/js/slick.min.js"), "html", null, true);
        echo "\"></script> 
  
    <!-- custom js file include -->
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script> 


      
  </body>
</html>";
    }

    // line 45
    public function block_navbar($context, array $blocks = array())
    {
        // line 46
        echo "   
        ";
    }

    // line 56
    public function block_slider($context, array $blocks = array())
    {
        // line 57
        echo "      
      ";
    }

    // line 61
    public function block_left($context, array $blocks = array())
    {
        // line 62
        echo "           ";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        // line 64
        echo "           ";
    }

    // line 65
    public function block_right($context, array $blocks = array())
    {
        // line 66
        echo "               ";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "               ";
    }

    public function getTemplateName()
    {
        return "NewsFrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 73,  207 => 72,  203 => 66,  200 => 65,  196 => 64,  193 => 63,  189 => 62,  186 => 61,  181 => 57,  178 => 56,  173 => 46,  170 => 45,  160 => 87,  154 => 84,  149 => 82,  144 => 80,  139 => 78,  133 => 74,  131 => 72,  124 => 67,  121 => 65,  118 => 63,  116 => 61,  112 => 59,  110 => 56,  100 => 48,  98 => 45,  74 => 24,  70 => 23,  65 => 21,  60 => 19,  55 => 17,  51 => 16,  46 => 14,  41 => 12,  36 => 10,  25 => 1,);
    }
}
