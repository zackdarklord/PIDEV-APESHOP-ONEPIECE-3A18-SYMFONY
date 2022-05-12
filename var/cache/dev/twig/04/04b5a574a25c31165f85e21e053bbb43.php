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

/* Back/assets/vendor/echarts/extension/bmap.min.js */
class __TwigTemplate_178e3fe83ae0ef3721886dacc1db91ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/echarts/extension/bmap.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/echarts/extension/bmap.min.js"));

        // line 1
        echo "
/*
* Licensed to the Apache Software Foundation (ASF) under one
* or more contributor license agreements.  See the NOTICE file
* distributed with this work for additional information
* regarding copyright ownership.  The ASF licenses this file
* to you under the Apache License, Version 2.0 (the
* \"License\"); you may not use this file except in compliance
* with the License.  You may obtain a copy of the License at
*
*   http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing,
* software distributed under the License is distributed on an
* \"AS IS\" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
* KIND, either express or implied.  See the License for the
* specific language governing permissions and limitations
* under the License.
*/


!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports,require(\"echarts\")):\"function\"==typeof define&&define.amd?define([\"exports\",\"echarts\"],t):t((e=e||self).bmap={},e.echarts)}(this,function(e,d){\"use strict\";function l(e,t){this._bmap=e,this.dimensions=[\"lng\",\"lat\"],this._mapOffset=[0,0],this._api=t,this._projection=new BMap.MercatorProjection}function t(a,r){return r=r||[0,0],d.util.map([0,1],function(e){var t=r[e],o=a[e]/2,n=[],i=[];return n[e]=t-o,i[e]=t+o,n[1-e]=i[1-e]=r[1-e],Math.abs(this.dataToPoint(n)[e]-this.dataToPoint(i)[e])},this)}var c;function f(e){for(var t in e)if(e.hasOwnProperty(t))return;return 1}l.prototype.dimensions=[\"lng\",\"lat\"],l.prototype.setZoom=function(e){this._zoom=e},l.prototype.setCenter=function(e){this._center=this._projection.lngLatToPoint(new BMap.Point(e[0],e[1]))},l.prototype.setMapOffset=function(e){this._mapOffset=e},l.prototype.getBMap=function(){return this._bmap},l.prototype.dataToPoint=function(e){var t=new BMap.Point(e[0],e[1]),e=this._bmap.pointToOverlayPixel(t),t=this._mapOffset;return[e.x-t[0],e.y-t[1]]},l.prototype.pointToData=function(e){var t=this._mapOffset;return[(e=this._bmap.overlayPixelToPoint({x:e[0]+t[0],y:e[1]+t[1]})).lng,e.lat]},l.prototype.getViewRect=function(){var e=this._api;return new d.graphic.BoundingRect(0,0,e.getWidth(),e.getHeight())},l.prototype.getRoamTransform=function(){return d.matrix.create()},l.prototype.prepareCustoms=function(){var e=this.getViewRect();return{coordSys:{type:\"bmap\",x:e.x,y:e.y,width:e.width,height:e.height},api:{coord:d.util.bind(this.dataToPoint,this),size:d.util.bind(t,this)}}},l.dimensions=l.prototype.dimensions,l.create=function(e,p){var s,m=p.getDom();e.eachComponent(\"bmap\",function(e){var t,o=p.getZr().painter,n=o.getViewportRoot();if(\"undefined\"==typeof BMap)throw new Error(\"BMap api is not loaded\");function i(e){this._root=e}if(c=c||((i.prototype=new BMap.Overlay).initialize=function(e){return e.getPanes().labelPane.appendChild(this._root),this._root},i.prototype.draw=function(){},i),s)throw new Error(\"Only one bmap component can exist\");e.__bmap||((a=m.querySelector(\".ec-extension-bmap\"))&&(n.style.left=\"0px\",n.style.top=\"0px\",m.removeChild(a)),(a=document.createElement(\"div\")).className=\"ec-extension-bmap\",a.style.cssText=\"position:absolute;width:100%;height:100%\",m.appendChild(a),(r=e.get(\"mapOptions\"))&&delete(r=d.util.clone(r)).mapType,t=e.__bmap=new BMap.Map(a,r),a=new c(n),t.addOverlay(a),o.getViewportRootOffset=function(){return{offsetLeft:0,offsetTop:0}}),t=e.__bmap;var a,r=e.get(\"center\"),n=e.get(\"zoom\");r&&n&&(a=t.getCenter(),o=t.getZoom(),e.centerOrZoomChanged([a.lng,a.lat],o)&&(o=new BMap.Point(r[0],r[1]),t.centerAndZoom(o,n))),(s=new l(t,p)).setMapOffset(e.__mapOffset||[0,0]),s.setZoom(n),s.setCenter(r),e.coordinateSystem=s}),e.eachSeries(function(e){\"bmap\"===e.get(\"coordinateSystem\")&&(e.coordinateSystem=s)})},d.extendComponentModel({type:\"bmap\",getBMap:function(){return this.__bmap},setCenterAndZoom:function(e,t){this.option.center=e,this.option.zoom=t},centerOrZoomChanged:function(e,t){var o,n=this.option;return o=e,e=n.center,!(o&&e&&o[0]===e[0]&&o[1]===e[1]&&t===n.zoom)},defaultOption:{center:[104.114129,37.550339],zoom:5,mapStyle:{},mapStyleV2:{},mapOptions:{},roam:!1}}),d.extendComponentView({type:\"bmap\",render:function(r,e,p){var s=!0,t=r.getBMap(),m=p.getZr().painter.getViewportRoot(),l=r.coordinateSystem,o=function(e,t){var o,n,i,a;s||(a=m.parentNode.parentNode.parentNode,o=[-parseInt(a.style.left,10)||0,-parseInt(a.style.top,10)||0],n=m.style,i=o[0]+\"px\",a=o[1]+\"px\",n.left!==i&&(n.left=i),n.top!==a&&(n.top=a),l.setMapOffset(o),r.__mapOffset=o,p.dispatchAction({type:\"bmapRoam\",animation:{duration:0}}))};function n(){s||p.dispatchAction({type:\"bmapRoam\",animation:{duration:0}})}t.removeEventListener(\"moving\",this._oldMoveHandler),t.removeEventListener(\"moveend\",this._oldMoveHandler),t.removeEventListener(\"zoomend\",this._oldZoomEndHandler),t.addEventListener(\"moving\",o),t.addEventListener(\"moveend\",o),t.addEventListener(\"zoomend\",n),this._oldMoveHandler=o,this._oldZoomEndHandler=n;var i=r.get(\"roam\");i&&\"scale\"!==i?t.enableDragging():t.disableDragging(),i&&\"move\"!==i?(t.enableScrollWheelZoom(),t.enableDoubleClickZoom(),t.enablePinchToZoom()):(t.disableScrollWheelZoom(),t.disableDoubleClickZoom(),t.disablePinchToZoom());var a=r.__mapStyle,o=r.get(\"mapStyle\")||{},i=JSON.stringify(o);JSON.stringify(a)!==i&&(f(o)||t.setMapStyle(d.util.clone(o)),r.__mapStyle=JSON.parse(i));a=r.__mapStyle2,o=r.get(\"mapStyleV2\")||{},i=JSON.stringify(o);JSON.stringify(a)!==i&&(f(o)||t.setMapStyleV2(d.util.clone(o)),r.__mapStyle2=JSON.parse(i)),s=!1}}),d.registerCoordinateSystem(\"bmap\",l),d.registerAction({type:\"bmapRoam\",event:\"bmapRoam\",update:\"updateLayout\"},function(e,t){t.eachComponent(\"bmap\",function(e){var t=e.getBMap(),o=t.getCenter();e.setCenterAndZoom([o.lng,o.lat],t.getZoom())})});e.version=\"1.0.0\",Object.defineProperty(e,\"__esModule\",{value:!0})});";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/echarts/extension/bmap.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
/*
* Licensed to the Apache Software Foundation (ASF) under one
* or more contributor license agreements.  See the NOTICE file
* distributed with this work for additional information
* regarding copyright ownership.  The ASF licenses this file
* to you under the Apache License, Version 2.0 (the
* \"License\"); you may not use this file except in compliance
* with the License.  You may obtain a copy of the License at
*
*   http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing,
* software distributed under the License is distributed on an
* \"AS IS\" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
* KIND, either express or implied.  See the License for the
* specific language governing permissions and limitations
* under the License.
*/


!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports,require(\"echarts\")):\"function\"==typeof define&&define.amd?define([\"exports\",\"echarts\"],t):t((e=e||self).bmap={},e.echarts)}(this,function(e,d){\"use strict\";function l(e,t){this._bmap=e,this.dimensions=[\"lng\",\"lat\"],this._mapOffset=[0,0],this._api=t,this._projection=new BMap.MercatorProjection}function t(a,r){return r=r||[0,0],d.util.map([0,1],function(e){var t=r[e],o=a[e]/2,n=[],i=[];return n[e]=t-o,i[e]=t+o,n[1-e]=i[1-e]=r[1-e],Math.abs(this.dataToPoint(n)[e]-this.dataToPoint(i)[e])},this)}var c;function f(e){for(var t in e)if(e.hasOwnProperty(t))return;return 1}l.prototype.dimensions=[\"lng\",\"lat\"],l.prototype.setZoom=function(e){this._zoom=e},l.prototype.setCenter=function(e){this._center=this._projection.lngLatToPoint(new BMap.Point(e[0],e[1]))},l.prototype.setMapOffset=function(e){this._mapOffset=e},l.prototype.getBMap=function(){return this._bmap},l.prototype.dataToPoint=function(e){var t=new BMap.Point(e[0],e[1]),e=this._bmap.pointToOverlayPixel(t),t=this._mapOffset;return[e.x-t[0],e.y-t[1]]},l.prototype.pointToData=function(e){var t=this._mapOffset;return[(e=this._bmap.overlayPixelToPoint({x:e[0]+t[0],y:e[1]+t[1]})).lng,e.lat]},l.prototype.getViewRect=function(){var e=this._api;return new d.graphic.BoundingRect(0,0,e.getWidth(),e.getHeight())},l.prototype.getRoamTransform=function(){return d.matrix.create()},l.prototype.prepareCustoms=function(){var e=this.getViewRect();return{coordSys:{type:\"bmap\",x:e.x,y:e.y,width:e.width,height:e.height},api:{coord:d.util.bind(this.dataToPoint,this),size:d.util.bind(t,this)}}},l.dimensions=l.prototype.dimensions,l.create=function(e,p){var s,m=p.getDom();e.eachComponent(\"bmap\",function(e){var t,o=p.getZr().painter,n=o.getViewportRoot();if(\"undefined\"==typeof BMap)throw new Error(\"BMap api is not loaded\");function i(e){this._root=e}if(c=c||((i.prototype=new BMap.Overlay).initialize=function(e){return e.getPanes().labelPane.appendChild(this._root),this._root},i.prototype.draw=function(){},i),s)throw new Error(\"Only one bmap component can exist\");e.__bmap||((a=m.querySelector(\".ec-extension-bmap\"))&&(n.style.left=\"0px\",n.style.top=\"0px\",m.removeChild(a)),(a=document.createElement(\"div\")).className=\"ec-extension-bmap\",a.style.cssText=\"position:absolute;width:100%;height:100%\",m.appendChild(a),(r=e.get(\"mapOptions\"))&&delete(r=d.util.clone(r)).mapType,t=e.__bmap=new BMap.Map(a,r),a=new c(n),t.addOverlay(a),o.getViewportRootOffset=function(){return{offsetLeft:0,offsetTop:0}}),t=e.__bmap;var a,r=e.get(\"center\"),n=e.get(\"zoom\");r&&n&&(a=t.getCenter(),o=t.getZoom(),e.centerOrZoomChanged([a.lng,a.lat],o)&&(o=new BMap.Point(r[0],r[1]),t.centerAndZoom(o,n))),(s=new l(t,p)).setMapOffset(e.__mapOffset||[0,0]),s.setZoom(n),s.setCenter(r),e.coordinateSystem=s}),e.eachSeries(function(e){\"bmap\"===e.get(\"coordinateSystem\")&&(e.coordinateSystem=s)})},d.extendComponentModel({type:\"bmap\",getBMap:function(){return this.__bmap},setCenterAndZoom:function(e,t){this.option.center=e,this.option.zoom=t},centerOrZoomChanged:function(e,t){var o,n=this.option;return o=e,e=n.center,!(o&&e&&o[0]===e[0]&&o[1]===e[1]&&t===n.zoom)},defaultOption:{center:[104.114129,37.550339],zoom:5,mapStyle:{},mapStyleV2:{},mapOptions:{},roam:!1}}),d.extendComponentView({type:\"bmap\",render:function(r,e,p){var s=!0,t=r.getBMap(),m=p.getZr().painter.getViewportRoot(),l=r.coordinateSystem,o=function(e,t){var o,n,i,a;s||(a=m.parentNode.parentNode.parentNode,o=[-parseInt(a.style.left,10)||0,-parseInt(a.style.top,10)||0],n=m.style,i=o[0]+\"px\",a=o[1]+\"px\",n.left!==i&&(n.left=i),n.top!==a&&(n.top=a),l.setMapOffset(o),r.__mapOffset=o,p.dispatchAction({type:\"bmapRoam\",animation:{duration:0}}))};function n(){s||p.dispatchAction({type:\"bmapRoam\",animation:{duration:0}})}t.removeEventListener(\"moving\",this._oldMoveHandler),t.removeEventListener(\"moveend\",this._oldMoveHandler),t.removeEventListener(\"zoomend\",this._oldZoomEndHandler),t.addEventListener(\"moving\",o),t.addEventListener(\"moveend\",o),t.addEventListener(\"zoomend\",n),this._oldMoveHandler=o,this._oldZoomEndHandler=n;var i=r.get(\"roam\");i&&\"scale\"!==i?t.enableDragging():t.disableDragging(),i&&\"move\"!==i?(t.enableScrollWheelZoom(),t.enableDoubleClickZoom(),t.enablePinchToZoom()):(t.disableScrollWheelZoom(),t.disableDoubleClickZoom(),t.disablePinchToZoom());var a=r.__mapStyle,o=r.get(\"mapStyle\")||{},i=JSON.stringify(o);JSON.stringify(a)!==i&&(f(o)||t.setMapStyle(d.util.clone(o)),r.__mapStyle=JSON.parse(i));a=r.__mapStyle2,o=r.get(\"mapStyleV2\")||{},i=JSON.stringify(o);JSON.stringify(a)!==i&&(f(o)||t.setMapStyleV2(d.util.clone(o)),r.__mapStyle2=JSON.parse(i)),s=!1}}),d.registerCoordinateSystem(\"bmap\",l),d.registerAction({type:\"bmapRoam\",event:\"bmapRoam\",update:\"updateLayout\"},function(e,t){t.eachComponent(\"bmap\",function(e){var t=e.getBMap(),o=t.getCenter();e.setCenterAndZoom([o.lng,o.lat],t.getZoom())})});e.version=\"1.0.0\",Object.defineProperty(e,\"__esModule\",{value:!0})});", "Back/assets/vendor/echarts/extension/bmap.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\echarts\\extension\\bmap.min.js");
    }
}
