<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_9da562588e546655819b85594db1295e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  73 => 11,  57 => 8,  40 => 4,  22 => 3,  19 => 2,  78 => 25,  76 => 24,  72 => 22,  70 => 21,  60 => 14,  53 => 12,  48 => 6,  42 => 9,  38 => 7,  35 => 6,  29 => 4,);
    }
}
