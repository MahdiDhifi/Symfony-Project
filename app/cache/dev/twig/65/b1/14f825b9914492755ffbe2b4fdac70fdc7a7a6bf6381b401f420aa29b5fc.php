<?php

/* NewsAdminBundle:Contacts:read.html.twig */
class __TwigTemplate_65b114f825b9914492755ffbe2b4fdac70fdc7a7a6bf6381b401f420aa29b5fc extends Twig_Template
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

    // line 3
    public function block_table($context, array $blocks = array())
    {
        echo "             
    <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                           Article details
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"#\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-table\"></i> Mail
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class=\"row\">
                   
       <h2>  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array()), "html", null, true);
        echo "</h2>              
    <p align=\"right\">
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                    <button  type=\"button\" class=\"btn btn-lg btn-primary\">Delete this mail</button>
                </a>
                
    </p>
                
                      
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                               
                                    <tr><td>First Name</td>  <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "first", array()), "html", null, true);
        echo "</td> </tr>
                                    <tr><td>Last Name</td><td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "last", array()), "html", null, true);
        echo "</td></tr>
                                     <tr><td>Adress mail</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mail", array()), "html", null, true);
        echo "</td></tr>
                                    <tr><td>Subject</td><td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array()), "html", null, true);
        echo "</td></tr>
                                     <tr> <td>Content</td>  <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenue", array()), "html", null, true);
        echo "</td></tr>
                                   
                    
                     <tbody>
 
  
                                    

                                </tbody>
                            </table>
                        </div>
                   
                </div>
               
                <!-- /.row -->


                

            </div>
            <!-- /.container-fluid -->

        </div>
      
      
        ";
    }

    // line 69
    public function block_categories($context, array $blocks = array())
    {
        // line 70
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 71
            echo "                              <li>
                                <a href=\"";
            // line 72
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
        // line 75
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Contacts:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 75,  132 => 72,  129 => 71,  124 => 70,  121 => 69,  91 => 43,  87 => 42,  83 => 41,  79 => 40,  75 => 39,  62 => 29,  57 => 27,  29 => 3,);
    }
}
