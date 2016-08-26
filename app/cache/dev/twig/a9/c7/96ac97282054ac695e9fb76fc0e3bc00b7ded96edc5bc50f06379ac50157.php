<?php

/* NewsAdminBundle:Contacts:list.html.twig */
class __TwigTemplate_a9c796ac97282054ac695e9fb76fc0e3bc00b7ded96edc5bc50f06379ac50157 extends Twig_Template
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
                           Articles
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"#\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-table\"></i> All mails
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class=\"row\">
                   
           
                 
                    
          ";
        // line 31
        if (((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")) != null)) {
            // line 32
            echo "                        <h2> Mails</h2>
                        ";
        }
        // line 33
        echo "  
 
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                  <th>N°</th>
                  <th>State</th>
                 <th>Date</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Adress mail</th>
                <th>Subject</th>
                <th>Content</th>     
                
                <th>Actions</th>
                   </tr>
                    </thead>
                     <tbody>
                         
                                  ";
        // line 53
        $context["i"] = 0;
        // line 54
        echo "
                      ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 56
            echo "                             ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "  
            <tr>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            if ($this->getAttribute($context["entity"], "lu", array())) {
                // line 60
                echo "                    read
                ";
            } else {
                // line 62
                echo "                    <b> <font size=\"3\" color=\"red\"> New!</font></b>
                    ";
            }
            // line 64
            echo "                </td> 
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "first", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "last", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mail", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subject", array()), "html", null, true);
            echo "</td>  
                
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["entity"], "contenue", array()), 0, 17), "html", null, true);
            echo "...</td>

                <td>
                   
                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                    
                                                <button title=\"Read\" type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-list-alt\"></i>
                                                </button>
                                            </a>
                                        
                                            <button title=\"Delete\" type=\"button\" class=\"btn btn-danger btn-circle\" data-toggle=\"modal\" data-target=\"";
            // line 81
            echo twig_escape_filter($this->env, ("#myModal" . $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class=\"modal fade\" id=\"";
            // line 84
            echo twig_escape_filter($this->env, ("myModal" . $this->getAttribute($context["entity"], "id", array())), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                            <h4 class=\"modal-title\" id=\"myModalLabel\">Delete mail ?</h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                              Are you sure you want to delete this mail? 
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                                            <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 108
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

    // line 128
    public function block_categories($context, array $blocks = array())
    {
        // line 129
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 130
            echo "                              <li>
                                <a href=\"";
            // line 131
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
        // line 134
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Contacts:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 134,  230 => 131,  227 => 130,  222 => 129,  219 => 128,  196 => 108,  178 => 96,  163 => 84,  157 => 81,  148 => 75,  141 => 71,  136 => 69,  132 => 68,  128 => 67,  124 => 66,  120 => 65,  117 => 64,  113 => 62,  109 => 60,  107 => 59,  103 => 58,  97 => 56,  93 => 55,  90 => 54,  88 => 53,  66 => 33,  62 => 32,  60 => 31,  29 => 4,);
    }
}
