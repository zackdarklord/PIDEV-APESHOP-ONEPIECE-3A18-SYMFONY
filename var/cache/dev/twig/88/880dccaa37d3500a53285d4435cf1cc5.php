<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Back/assets/vendor/tinymce/plugins/tabfocus/plugin.js */
class __TwigTemplate_19958799006837cf1dece2e496eb4861 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/tabfocus/plugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/tabfocus/plugin.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
(function () {
    'use strict';

    var global\$6 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global\$5 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var global\$4 = tinymce.util.Tools.resolve('tinymce.EditorManager');

    var global\$3 = tinymce.util.Tools.resolve('tinymce.Env');

    var global\$2 = tinymce.util.Tools.resolve('tinymce.util.Delay');

    var global\$1 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var global = tinymce.util.Tools.resolve('tinymce.util.VK');

    var getTabFocusElements = function (editor) {
      return editor.getParam('tabfocus_elements', ':prev,:next');
    };
    var getTabFocus = function (editor) {
      return editor.getParam('tab_focus', getTabFocusElements(editor));
    };

    var DOM = global\$5.DOM;
    var tabCancel = function (e) {
      if (e.keyCode === global.TAB && !e.ctrlKey && !e.altKey && !e.metaKey) {
        e.preventDefault();
      }
    };
    var setup = function (editor) {
      var tabHandler = function (e) {
        var x;
        if (e.keyCode !== global.TAB || e.ctrlKey || e.altKey || e.metaKey || e.isDefaultPrevented()) {
          return;
        }
        var find = function (direction) {
          var el = DOM.select(':input:enabled,*[tabindex]:not(iframe)');
          var canSelectRecursive = function (e) {
            var castElem = e;
            return e.nodeName === 'BODY' || castElem.type !== 'hidden' && castElem.style.display !== 'none' && castElem.style.visibility !== 'hidden' && canSelectRecursive(e.parentNode);
          };
          var canSelect = function (el) {
            return /INPUT|TEXTAREA|BUTTON/.test(el.tagName) && global\$4.get(e.id) && el.tabIndex !== -1 && canSelectRecursive(el);
          };
          global\$1.each(el, function (e, i) {
            if (e.id === editor.id) {
              x = i;
              return false;
            }
          });
          if (direction > 0) {
            for (var i = x + 1; i < el.length; i++) {
              if (canSelect(el[i])) {
                return el[i];
              }
            }
          } else {
            for (var i = x - 1; i >= 0; i--) {
              if (canSelect(el[i])) {
                return el[i];
              }
            }
          }
          return null;
        };
        var v = global\$1.explode(getTabFocus(editor));
        if (v.length === 1) {
          v[1] = v[0];
          v[0] = ':prev';
        }
        var el;
        if (e.shiftKey) {
          if (v[0] === ':prev') {
            el = find(-1);
          } else {
            el = DOM.get(v[0]);
          }
        } else {
          if (v[1] === ':next') {
            el = find(1);
          } else {
            el = DOM.get(v[1]);
          }
        }
        if (el) {
          var focusEditor = global\$4.get(el.id || el.name);
          if (el.id && focusEditor) {
            focusEditor.focus();
          } else {
            global\$2.setTimeout(function () {
              if (!global\$3.webkit) {
                window.focus();
              }
              el.focus();
            }, 10);
          }
          e.preventDefault();
        }
      };
      editor.on('init', function () {
        if (editor.inline) {
          DOM.setAttrib(editor.getBody(), 'tabIndex', null);
        }
        editor.on('keyup', tabCancel);
        if (global\$3.gecko) {
          editor.on('keypress keydown', tabHandler);
        } else {
          editor.on('keydown', tabHandler);
        }
      });
    };

    function Plugin () {
      global\$6.add('tabfocus', function (editor) {
        setup(editor);
      });
    }

    Plugin();

}());
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/tabfocus/plugin.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
(function () {
    'use strict';

    var global\$6 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global\$5 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var global\$4 = tinymce.util.Tools.resolve('tinymce.EditorManager');

    var global\$3 = tinymce.util.Tools.resolve('tinymce.Env');

    var global\$2 = tinymce.util.Tools.resolve('tinymce.util.Delay');

    var global\$1 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var global = tinymce.util.Tools.resolve('tinymce.util.VK');

    var getTabFocusElements = function (editor) {
      return editor.getParam('tabfocus_elements', ':prev,:next');
    };
    var getTabFocus = function (editor) {
      return editor.getParam('tab_focus', getTabFocusElements(editor));
    };

    var DOM = global\$5.DOM;
    var tabCancel = function (e) {
      if (e.keyCode === global.TAB && !e.ctrlKey && !e.altKey && !e.metaKey) {
        e.preventDefault();
      }
    };
    var setup = function (editor) {
      var tabHandler = function (e) {
        var x;
        if (e.keyCode !== global.TAB || e.ctrlKey || e.altKey || e.metaKey || e.isDefaultPrevented()) {
          return;
        }
        var find = function (direction) {
          var el = DOM.select(':input:enabled,*[tabindex]:not(iframe)');
          var canSelectRecursive = function (e) {
            var castElem = e;
            return e.nodeName === 'BODY' || castElem.type !== 'hidden' && castElem.style.display !== 'none' && castElem.style.visibility !== 'hidden' && canSelectRecursive(e.parentNode);
          };
          var canSelect = function (el) {
            return /INPUT|TEXTAREA|BUTTON/.test(el.tagName) && global\$4.get(e.id) && el.tabIndex !== -1 && canSelectRecursive(el);
          };
          global\$1.each(el, function (e, i) {
            if (e.id === editor.id) {
              x = i;
              return false;
            }
          });
          if (direction > 0) {
            for (var i = x + 1; i < el.length; i++) {
              if (canSelect(el[i])) {
                return el[i];
              }
            }
          } else {
            for (var i = x - 1; i >= 0; i--) {
              if (canSelect(el[i])) {
                return el[i];
              }
            }
          }
          return null;
        };
        var v = global\$1.explode(getTabFocus(editor));
        if (v.length === 1) {
          v[1] = v[0];
          v[0] = ':prev';
        }
        var el;
        if (e.shiftKey) {
          if (v[0] === ':prev') {
            el = find(-1);
          } else {
            el = DOM.get(v[0]);
          }
        } else {
          if (v[1] === ':next') {
            el = find(1);
          } else {
            el = DOM.get(v[1]);
          }
        }
        if (el) {
          var focusEditor = global\$4.get(el.id || el.name);
          if (el.id && focusEditor) {
            focusEditor.focus();
          } else {
            global\$2.setTimeout(function () {
              if (!global\$3.webkit) {
                window.focus();
              }
              el.focus();
            }, 10);
          }
          e.preventDefault();
        }
      };
      editor.on('init', function () {
        if (editor.inline) {
          DOM.setAttrib(editor.getBody(), 'tabIndex', null);
        }
        editor.on('keyup', tabCancel);
        if (global\$3.gecko) {
          editor.on('keypress keydown', tabHandler);
        } else {
          editor.on('keydown', tabHandler);
        }
      });
    };

    function Plugin () {
      global\$6.add('tabfocus', function (editor) {
        setup(editor);
      });
    }

    Plugin();

}());
", "Back/assets/vendor/tinymce/plugins/tabfocus/plugin.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\tabfocus\\plugin.js");
    }
}
