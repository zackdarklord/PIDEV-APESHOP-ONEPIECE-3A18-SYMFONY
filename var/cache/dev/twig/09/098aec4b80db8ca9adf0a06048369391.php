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

/* Back/assets/vendor/chart.js/helpers.esm.js */
class __TwigTemplate_1b15b9e98e0a51f858f80e0bfb472793 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/chart.js/helpers.esm.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/chart.js/helpers.esm.js"));

        // line 1
        echo "/*!
 * Chart.js v3.7.0
 * https://www.chartjs.org
 * (c) 2021 Chart.js Contributors
 * Released under the MIT License
 */
export { H as HALF_PI, aX as INFINITY, P as PI, aW as PITAU, aZ as QUARTER_PI, aY as RAD_PER_DEG, T as TAU, a_ as TWO_THIRDS_PI, Q as _addGrace, V as _alignPixel, a0 as _alignStartEnd, p as _angleBetween, a\$ as _angleDiff, _ as _arrayUnique, a6 as _attachContext, aq as _bezierCurveTo, an as _bezierInterpolation, av as _boundSegment, al as _boundSegments, a3 as _capitalize, ak as _computeSegments, a7 as _createResolver, aH as _decimalPlaces, aP as _deprecated, a8 as _descriptors, af as _elementsEqual, M as _factorize, aJ as _filterBetween, F as _getParentNode, U as _int16Range, ah as _isBetween, ag as _isClickEvent, K as _isDomSupported, z as _isPointInArea, w as _limitValue, aI as _longestText, aK as _lookup, x as _lookupByKey, S as _measureText, aN as _merger, aO as _mergerIf, aw as _normalizeAngle, ao as _pointInLine, ai as _readValueToProps, A as _rlookupByKey, aD as _setMinAndMaxByKey, am as _steppedInterpolation, ap as _steppedLineTo, az as _textX, \$ as _toLeftRightCenter, aj as _updateBezierControlPoints, as as addRoundedRectPath, aG as almostEquals, aF as almostWhole, O as callback, ad as clearCanvas, W as clipArea, aM as clone, c as color, h as createContext, ab as debounce, j as defined, aC as distanceBetweenPoints, ar as drawPoint, D as each, e as easingEffects, N as finiteOrDefault, aU as fontString, o as formatNumber, B as getAngleFromPoint, aL as getHoverColor, E as getMaximumSize, y as getRelativePosition, ax as getRtlAdapter, aT as getStyle, b as isArray, g as isFinite, a5 as isFunction, k as isNullOrUndef, q as isNumber, i as isObject, l as listenArrayEvents, L as log10, a2 as merge, a9 as mergeIf, aE as niceNum, aB as noop, ay as overrideTextDirection, G as readUsedSize, X as renderText, r as requestAnimFrame, a as resolve, f as resolveObjectKey, aA as restoreTextDirection, ac as retinaScale, ae as setsEqual, s as sign, aR as splineCurve, aS as splineCurveMonotone, J as supportsEventListenerOptions, I as throttled, R as toDegrees, n as toDimension, Z as toFont, aQ as toFontString, aV as toLineHeight, C as toPadding, m as toPercentage, t as toRadians, at as toTRBL, au as toTRBLCorners, aa as uid, Y as unclipArea, u as unlistenArrayEvents, v as valueOrDefault } from './chunks/helpers.segment.js';
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/chart.js/helpers.esm.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*!
 * Chart.js v3.7.0
 * https://www.chartjs.org
 * (c) 2021 Chart.js Contributors
 * Released under the MIT License
 */
export { H as HALF_PI, aX as INFINITY, P as PI, aW as PITAU, aZ as QUARTER_PI, aY as RAD_PER_DEG, T as TAU, a_ as TWO_THIRDS_PI, Q as _addGrace, V as _alignPixel, a0 as _alignStartEnd, p as _angleBetween, a\$ as _angleDiff, _ as _arrayUnique, a6 as _attachContext, aq as _bezierCurveTo, an as _bezierInterpolation, av as _boundSegment, al as _boundSegments, a3 as _capitalize, ak as _computeSegments, a7 as _createResolver, aH as _decimalPlaces, aP as _deprecated, a8 as _descriptors, af as _elementsEqual, M as _factorize, aJ as _filterBetween, F as _getParentNode, U as _int16Range, ah as _isBetween, ag as _isClickEvent, K as _isDomSupported, z as _isPointInArea, w as _limitValue, aI as _longestText, aK as _lookup, x as _lookupByKey, S as _measureText, aN as _merger, aO as _mergerIf, aw as _normalizeAngle, ao as _pointInLine, ai as _readValueToProps, A as _rlookupByKey, aD as _setMinAndMaxByKey, am as _steppedInterpolation, ap as _steppedLineTo, az as _textX, \$ as _toLeftRightCenter, aj as _updateBezierControlPoints, as as addRoundedRectPath, aG as almostEquals, aF as almostWhole, O as callback, ad as clearCanvas, W as clipArea, aM as clone, c as color, h as createContext, ab as debounce, j as defined, aC as distanceBetweenPoints, ar as drawPoint, D as each, e as easingEffects, N as finiteOrDefault, aU as fontString, o as formatNumber, B as getAngleFromPoint, aL as getHoverColor, E as getMaximumSize, y as getRelativePosition, ax as getRtlAdapter, aT as getStyle, b as isArray, g as isFinite, a5 as isFunction, k as isNullOrUndef, q as isNumber, i as isObject, l as listenArrayEvents, L as log10, a2 as merge, a9 as mergeIf, aE as niceNum, aB as noop, ay as overrideTextDirection, G as readUsedSize, X as renderText, r as requestAnimFrame, a as resolve, f as resolveObjectKey, aA as restoreTextDirection, ac as retinaScale, ae as setsEqual, s as sign, aR as splineCurve, aS as splineCurveMonotone, J as supportsEventListenerOptions, I as throttled, R as toDegrees, n as toDimension, Z as toFont, aQ as toFontString, aV as toLineHeight, C as toPadding, m as toPercentage, t as toRadians, at as toTRBL, au as toTRBLCorners, aa as uid, Y as unclipArea, u as unlistenArrayEvents, v as valueOrDefault } from './chunks/helpers.segment.js';
", "Back/assets/vendor/chart.js/helpers.esm.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\chart.js\\helpers.esm.js");
    }
}
