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

/* Back/assets/vendor/tinymce/plugins/preview/plugin.js */
class __TwigTemplate_d26276c2bfc68fb427051c3b9da808ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/preview/plugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/preview/plugin.js"));

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

    var global\$2 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global\$1 = tinymce.util.Tools.resolve('tinymce.Env');

    var global = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getContentStyle = function (editor) {
      return editor.getParam('content_style', '', 'string');
    };
    var shouldUseContentCssCors = function (editor) {
      return editor.getParam('content_css_cors', false, 'boolean');
    };
    var getBodyClassByHash = function (editor) {
      var bodyClass = editor.getParam('body_class', '', 'hash');
      return bodyClass[editor.id] || '';
    };
    var getBodyClass = function (editor) {
      var bodyClass = editor.getParam('body_class', '', 'string');
      if (bodyClass.indexOf('=') === -1) {
        return bodyClass;
      } else {
        return getBodyClassByHash(editor);
      }
    };
    var getBodyIdByHash = function (editor) {
      var bodyId = editor.getParam('body_id', '', 'hash');
      return bodyId[editor.id] || bodyId;
    };
    var getBodyId = function (editor) {
      var bodyId = editor.getParam('body_id', 'tinymce', 'string');
      if (bodyId.indexOf('=') === -1) {
        return bodyId;
      } else {
        return getBodyIdByHash(editor);
      }
    };

    var getPreviewHtml = function (editor) {
      var headHtml = '';
      var encode = editor.dom.encode;
      var contentStyle = getContentStyle(editor);
      headHtml += '<base href=\"' + encode(editor.documentBaseURI.getURI()) + '\">';
      var cors = shouldUseContentCssCors(editor) ? ' crossorigin=\"anonymous\"' : '';
      global.each(editor.contentCSS, function (url) {
        headHtml += '<link type=\"text/css\" rel=\"stylesheet\" href=\"' + encode(editor.documentBaseURI.toAbsolute(url)) + '\"' + cors + '>';
      });
      if (contentStyle) {
        headHtml += '<style type=\"text/css\">' + contentStyle + '</style>';
      }
      var bodyId = getBodyId(editor);
      var bodyClass = getBodyClass(editor);
      var isMetaKeyPressed = global\$1.mac ? 'e.metaKey' : 'e.ctrlKey && !e.altKey';
      var preventClicksOnLinksScript = '<script>' + 'document.addEventListener && document.addEventListener(\"click\", function(e) {' + 'for (var elm = e.target; elm; elm = elm.parentNode) {' + 'if (elm.nodeName === \"A\" && !(' + isMetaKeyPressed + ')) {' + 'e.preventDefault();' + '}' + '}' + '}, false);' + '</script> ';
      var directionality = editor.getBody().dir;
      var dirAttr = directionality ? ' dir=\"' + encode(directionality) + '\"' : '';
      var previewHtml = '<!DOCTYPE html>' + '<html>' + '<head>' + headHtml + '</head>' + '<body id=\"' + encode(bodyId) + '\" class=\"mce-content-body ' + encode(bodyClass) + '\"' + dirAttr + '>' + editor.getContent() + preventClicksOnLinksScript + '</body>' + '</html>';
      return previewHtml;
    };

    var open = function (editor) {
      var content = getPreviewHtml(editor);
      var dataApi = editor.windowManager.open({
        title: 'Preview',
        size: 'large',
        body: {
          type: 'panel',
          items: [{
              name: 'preview',
              type: 'iframe',
              sandboxed: true
            }]
        },
        buttons: [{
            type: 'cancel',
            name: 'close',
            text: 'Close',
            primary: true
          }],
        initialData: { preview: content }
      });
      dataApi.focus('close');
    };

    var register\$1 = function (editor) {
      editor.addCommand('mcePreview', function () {
        open(editor);
      });
    };

    var register = function (editor) {
      var onAction = function () {
        return editor.execCommand('mcePreview');
      };
      editor.ui.registry.addButton('preview', {
        icon: 'preview',
        tooltip: 'Preview',
        onAction: onAction
      });
      editor.ui.registry.addMenuItem('preview', {
        icon: 'preview',
        text: 'Preview',
        onAction: onAction
      });
    };

    function Plugin () {
      global\$2.add('preview', function (editor) {
        register\$1(editor);
        register(editor);
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
        return "Back/assets/vendor/tinymce/plugins/preview/plugin.js";
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

    var global\$2 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global\$1 = tinymce.util.Tools.resolve('tinymce.Env');

    var global = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getContentStyle = function (editor) {
      return editor.getParam('content_style', '', 'string');
    };
    var shouldUseContentCssCors = function (editor) {
      return editor.getParam('content_css_cors', false, 'boolean');
    };
    var getBodyClassByHash = function (editor) {
      var bodyClass = editor.getParam('body_class', '', 'hash');
      return bodyClass[editor.id] || '';
    };
    var getBodyClass = function (editor) {
      var bodyClass = editor.getParam('body_class', '', 'string');
      if (bodyClass.indexOf('=') === -1) {
        return bodyClass;
      } else {
        return getBodyClassByHash(editor);
      }
    };
    var getBodyIdByHash = function (editor) {
      var bodyId = editor.getParam('body_id', '', 'hash');
      return bodyId[editor.id] || bodyId;
    };
    var getBodyId = function (editor) {
      var bodyId = editor.getParam('body_id', 'tinymce', 'string');
      if (bodyId.indexOf('=') === -1) {
        return bodyId;
      } else {
        return getBodyIdByHash(editor);
      }
    };

    var getPreviewHtml = function (editor) {
      var headHtml = '';
      var encode = editor.dom.encode;
      var contentStyle = getContentStyle(editor);
      headHtml += '<base href=\"' + encode(editor.documentBaseURI.getURI()) + '\">';
      var cors = shouldUseContentCssCors(editor) ? ' crossorigin=\"anonymous\"' : '';
      global.each(editor.contentCSS, function (url) {
        headHtml += '<link type=\"text/css\" rel=\"stylesheet\" href=\"' + encode(editor.documentBaseURI.toAbsolute(url)) + '\"' + cors + '>';
      });
      if (contentStyle) {
        headHtml += '<style type=\"text/css\">' + contentStyle + '</style>';
      }
      var bodyId = getBodyId(editor);
      var bodyClass = getBodyClass(editor);
      var isMetaKeyPressed = global\$1.mac ? 'e.metaKey' : 'e.ctrlKey && !e.altKey';
      var preventClicksOnLinksScript = '<script>' + 'document.addEventListener && document.addEventListener(\"click\", function(e) {' + 'for (var elm = e.target; elm; elm = elm.parentNode) {' + 'if (elm.nodeName === \"A\" && !(' + isMetaKeyPressed + ')) {' + 'e.preventDefault();' + '}' + '}' + '}, false);' + '</script> ';
      var directionality = editor.getBody().dir;
      var dirAttr = directionality ? ' dir=\"' + encode(directionality) + '\"' : '';
      var previewHtml = '<!DOCTYPE html>' + '<html>' + '<head>' + headHtml + '</head>' + '<body id=\"' + encode(bodyId) + '\" class=\"mce-content-body ' + encode(bodyClass) + '\"' + dirAttr + '>' + editor.getContent() + preventClicksOnLinksScript + '</body>' + '</html>';
      return previewHtml;
    };

    var open = function (editor) {
      var content = getPreviewHtml(editor);
      var dataApi = editor.windowManager.open({
        title: 'Preview',
        size: 'large',
        body: {
          type: 'panel',
          items: [{
              name: 'preview',
              type: 'iframe',
              sandboxed: true
            }]
        },
        buttons: [{
            type: 'cancel',
            name: 'close',
            text: 'Close',
            primary: true
          }],
        initialData: { preview: content }
      });
      dataApi.focus('close');
    };

    var register\$1 = function (editor) {
      editor.addCommand('mcePreview', function () {
        open(editor);
      });
    };

    var register = function (editor) {
      var onAction = function () {
        return editor.execCommand('mcePreview');
      };
      editor.ui.registry.addButton('preview', {
        icon: 'preview',
        tooltip: 'Preview',
        onAction: onAction
      });
      editor.ui.registry.addMenuItem('preview', {
        icon: 'preview',
        text: 'Preview',
        onAction: onAction
      });
    };

    function Plugin () {
      global\$2.add('preview', function (editor) {
        register\$1(editor);
        register(editor);
      });
    }

    Plugin();

}());
", "Back/assets/vendor/tinymce/plugins/preview/plugin.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\preview\\plugin.js");
    }
}
