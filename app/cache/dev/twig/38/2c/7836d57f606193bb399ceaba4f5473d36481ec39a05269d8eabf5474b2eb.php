<?php

/* NewsAdminBundle::layout.html.twig */
class __TwigTemplate_382c7836d57f606193bb399ceaba4f5473d36481ec39a05269d8eabf5474b2eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'categories' => array($this, 'block_categories'),
            'table' => array($this, 'block_table'),
            'form' => array($this, 'block_form'),
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
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
 ";
        // line 29
        $this->displayBlock('script', $context, $blocks);
        // line 30
        echo " 
</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
               
             
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Admin <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                     
                       <li>
                            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" target=\"top\"><i class=\"fa fa-fw fa-bank\"></i> Visitor Mode</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Setting</a>
                        </li>
                       
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                 
              <li>
                        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("HomeAdmin");
        echo "\"><i class=\"fa fa-fw fa-home\"></i>Home </a>
                    </li>
                     <li>
                        <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("categories");
        echo "\"><i class=\"fa fa-fw fa-list-alt\"></i>Categories</a>
                    </li>
                        <li>
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-edit\"></i> Articles <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    
                        <ul id=\"demo\" class=\"collapse\">
                            ";
        // line 85
        $this->displayBlock('categories', $context, $blocks);
        // line 88
        echo "                        </ul>
                         <li>
                        <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("categories");
        echo "\"><i class=\"fa fa-fw fa-film\"></i>youtube channel</a>
                    </li>
                    </li>
                   
                       <li>
                        <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("contacts");
        echo "\"><i class=\"fa fa-fw fa-envelope\"></i> Contacts</a>
                    </li>
                  
                  
                  
                    
                   
                  
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

         ";
        // line 109
        $this->displayBlock('table', $context, $blocks);
        // line 111
        echo "                        
                        
     ";
        // line 113
        $this->displayBlock('form', $context, $blocks);
        // line 115
        echo "
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>

";
    }

    // line 29
    public function block_script($context, array $blocks = array())
    {
        echo " 
        ";
    }

    // line 85
    public function block_categories($context, array $blocks = array())
    {
        // line 86
        echo "                            
                            ";
    }

    // line 109
    public function block_table($context, array $blocks = array())
    {
        // line 110
        echo "                        ";
    }

    // line 113
    public function block_form($context, array $blocks = array())
    {
        // line 114
        echo "    ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 114,  218 => 113,  214 => 110,  211 => 109,  206 => 86,  203 => 85,  196 => 29,  185 => 123,  179 => 120,  172 => 115,  170 => 113,  166 => 111,  164 => 109,  147 => 95,  139 => 90,  135 => 88,  133 => 85,  124 => 79,  118 => 76,  105 => 66,  94 => 58,  64 => 30,  62 => 29,  51 => 21,  45 => 18,  39 => 15,  23 => 1,);
    }
}
