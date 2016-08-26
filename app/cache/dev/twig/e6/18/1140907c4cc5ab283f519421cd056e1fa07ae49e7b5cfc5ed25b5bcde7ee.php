<?php

/* NewsAdminBundle:Categories:list.html.twig */
class __TwigTemplate_e6181140907c4cc5ab283f519421cd056e1fa07ae49e7b5cfc5ed25b5bcde7ee extends Twig_Template
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
                           Categories
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"index.html\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-table\"></i> Categories
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class=\"row\">
                   
           
                 
                  <h2> All Categories</h2>   
           
               
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("categories_new");
        echo "\">
                     
                    <button type=\"button\" class=\"btn btn-lg btn-primary\">Add</button>
                </a><br><br>
                
          
      
                       
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                 <th>N°</th>
                <th>Title</th>
                <th>Description</th> 
                <th>Actions</th>
                   </tr>
                    </thead>
                     <tbody>
                     
                                  ";
        // line 53
        $context["i"] = 0;
        // line 54
        echo "                      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 55
            echo "                    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "   
            <tr>
                  <td>";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>          
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                
             
                <td>
                   
           
                                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                <button title=\"Edit\" type=\"button\" class=\"btn btn-primary btn-circle\"><i class=\"fa fa-edit\"></i>
                                                </button>
                                            </a>
                                            <button title=\"Delete\" type=\"button\" class=\"btn btn-danger btn-circle\" data-toggle=\"modal\" data-target=\"";
            // line 69
            echo twig_escape_filter($this->env, ("#myModal" . $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class=\"modal fade\" id=\"";
            // line 72
            echo twig_escape_filter($this->env, ("myModal" . $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                            <h4 class=\"modal-title\" id=\"myModalLabel\">delete Categorie ?</h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            Are you sure you want to delete this categorie? 
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                                            <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"Delete\"><input type=\"submit\" value=\"Delete\" class=\"btn btn-primary\" onclick=\"this.disabled=true;this.value='Deleting, please wait...';this.form.submit();\" /></a>              
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>

                </td>
            </tr>
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                    

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

    // line 116
    public function block_categories($context, array $blocks = array())
    {
        // line 117
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 118
            echo "                              <li>
                                <a href=\"";
            // line 119
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
        // line 122
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Categories:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 122,  195 => 119,  192 => 118,  187 => 117,  184 => 116,  161 => 96,  143 => 84,  128 => 72,  122 => 69,  115 => 65,  106 => 59,  102 => 58,  98 => 57,  92 => 55,  87 => 54,  85 => 53,  62 => 33,  29 => 4,);
    }
}
