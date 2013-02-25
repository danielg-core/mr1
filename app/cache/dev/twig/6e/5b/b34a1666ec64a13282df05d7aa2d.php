<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_6e5bb34a1666ec64a13282df05d7aa2d extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  46 => 14,  42 => 12,  30 => 5,  24 => 2,  105 => 34,  98 => 32,  89 => 28,  76 => 23,  70 => 22,  66 => 21,  62 => 19,  57 => 18,  48 => 11,  26 => 3,  19 => 1,  176 => 52,  171 => 47,  168 => 46,  163 => 42,  158 => 39,  150 => 34,  142 => 33,  134 => 26,  130 => 25,  126 => 24,  122 => 22,  119 => 21,  113 => 12,  109 => 10,  106 => 9,  100 => 5,  95 => 53,  93 => 52,  88 => 49,  86 => 46,  81 => 25,  79 => 42,  75 => 40,  73 => 39,  65 => 34,  61 => 33,  56 => 30,  54 => 21,  43 => 14,  34 => 5,  50 => 15,  41 => 9,  32 => 6,  29 => 4,  92 => 25,  83 => 21,  77 => 20,  71 => 19,  64 => 15,  60 => 14,  55 => 12,  47 => 10,  40 => 7,  37 => 6,  31 => 7,  28 => 1,);
    }
}
