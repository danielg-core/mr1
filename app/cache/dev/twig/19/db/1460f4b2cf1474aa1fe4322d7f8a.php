<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_19db1460f4b2cf1474aa1fe4322d7f8a extends Twig_Template
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
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  46 => 14,  42 => 12,  30 => 5,  24 => 2,  105 => 34,  98 => 32,  89 => 28,  76 => 23,  70 => 22,  66 => 21,  62 => 19,  57 => 18,  48 => 11,  26 => 3,  19 => 1,  176 => 52,  171 => 47,  168 => 46,  163 => 42,  158 => 39,  150 => 34,  142 => 33,  134 => 26,  130 => 25,  126 => 24,  122 => 22,  119 => 21,  113 => 12,  109 => 10,  106 => 9,  100 => 5,  95 => 53,  93 => 52,  88 => 49,  86 => 46,  81 => 25,  79 => 42,  75 => 40,  73 => 39,  65 => 34,  61 => 33,  56 => 30,  54 => 21,  43 => 14,  34 => 5,  50 => 15,  41 => 9,  32 => 6,  29 => 4,  92 => 25,  83 => 21,  77 => 20,  71 => 19,  64 => 15,  60 => 14,  55 => 12,  47 => 10,  40 => 7,  37 => 6,  31 => 7,  28 => 1,);
    }
}
