<?php

/* NewsAdminBundle:Default:home.html.twig */
class __TwigTemplate_877d8ec24efdedca7c57558107f0dce40b848cf6ef79ba19a3386296544db843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsAdminBundle::layout.html.twig");

        $this->blocks = array(
            'table' => array($this, 'block_table'),
            'categories' => array($this, 'block_categories'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_table($context, array $blocks = array())
    {
        echo "             
    <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                          Home
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"#\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-table\"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class=\"row\">
                   
           
                 
                    
          
    
                       
                 
                   
                </div>
               
                <!-- /.row -->


                

            </div>
            <!-- /.container-fluid -->

        </div>
      
      
        ";
    }

    // line 51
    public function block_categories($context, array $blocks = array())
    {
        // line 52
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 53
            echo "                              <li>
                                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "titre", array()), "html", null, true);
            echo "</a>
                            </li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 57,  91 => 54,  88 => 53,  83 => 52,  80 => 51,  29 => 4,);
    }
}
