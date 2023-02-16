/*!
 * WPMU DEV Forminator UI
 * Copyright 2019 Incsub (https://incsub.com)
 * Licensed under GPL v3 (http://www.gnu.org/licenses/gpl-3.0.html)
 */
function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _createForOfIteratorHelper(t){if("undefined"==typeof Symbol||null==t[Symbol.iterator]){if(Array.isArray(t)||(t=_unsupportedIterableToArray(t))){var o=0,e=function(){};return{s:e,n:function(){return o>=t.length?{done:!0}:{done:!1,value:t[o++]}},e:function(t){throw t},f:e}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var r,n,i=!0,a=!1;return{s:function(){r=t[Symbol.iterator]()},n:function(){var t=r.next();return i=t.done,t},e:function(t){a=!0,n=t},f:function(){try{i||null==r.return||r.return()}finally{if(a)throw n}}}}function _unsupportedIterableToArray(t,o){if(t){if("string"==typeof t)return _arrayLikeToArray(t,o);var e=Object.prototype.toString.call(t).slice(8,-1);return"Object"===e&&t.constructor&&(e=t.constructor.name),"Map"===e||"Set"===e?Array.from(e):"Arguments"===e||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e)?_arrayLikeToArray(t,o):void 0}}function _arrayLikeToArray(t,o){(null==o||o>t.length)&&(o=t.length);for(var e=0,r=new Array(o);e<o;e++)r[e]=t[e];return r}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.formLoad=function(o){var e,r,n,i,a,s,l=t(o),f=l.find(".forminator-response-message");if(l.is(".forminator-ui")||l.is(".forminator-custom-form"))return f.removeClass("forminator-show"),f.removeClass("forminator-accessible"),f.attr("aria-hidden","true"),e=l.attr("data-id"),r=l.data("id"),e.length&&""!==e&&l.addClass("forminator-form-"+r),n=l.attr("data-design"),i=l.data("design"),n&&""!==n?l.addClass("forminator-design--"+i):l.addClass("forminator-design--none"),a=l.attr("data-grid"),s=l.data("grid"),l.removeClass("forminator-custom"),l.removeClass("forminator-enclosed"),a&&""!==a&&"open"!==a&&l.addClass("forminator-"+s),this}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.formSimulation=function(o){var e=t(o),r=e.closest("form"),n=r.find(".forminator-response-message"),i="";if(r.is(".forminator-ui")||r.is(".forminator-custom-form"))return e.click(function(t){return a(),t.preventDefault(),t.stopPropagation(),!1}),this;function a(){var o=r.find(".forminator-input"),e=o.closest(".forminator-field"),a=o.closest(".forminator-field.forminator-is_required"),s=a.find(".forminator-input").filter(function(){return!!this.value}),l=r.find(".forminator-textarea"),f=l.closest(".forminator-field"),c=l.closest(".forminator-field.forminator-is_required").find(".forminator-textarea").val(),d=r.find(".forminator-field-radio"),u=r.find(".forminator-field-radio.forminator-is_required").find("input:checked"),m=r.find(".forminator-multiselect"),p=m.closest(".forminator-field"),y=m.closest(".forminator-field.forminator-is_required").find("input:checked");i="",n.html(i),n.removeClass("forminator-show"),n.removeClass("forminator-accessible"),n.removeClass("forminator-error"),n.removeClass("forminator-success"),n.attr("aria-hidden","true"),n.removeAttr("tabindex"),r.find(".forminator-field").removeClass("forminator-has_error"),e.hasClass("forminator-is_required")&&s.length!==a.length||f.hasClass("forminator-is_required")&&""===c.length||d.hasClass("forminator-is_required")&&0===u.length||p.hasClass("forminator-is_required")&&0===y.length?(r.find(".forminator-input").each(function(){var o=t(this),e=o.closest(".forminator-field"),r=e.find(".forminator-label");e.hasClass("forminator-is_required")&&""===o.val()&&(e.addClass("forminator-has_error"),r.length?i+="<li>"+r.text()+" needs to be filled.</li>":i+="<li>"+o.attr("id")+" needs to be filled.</li>")}),n.html(i),r.find(".forminator-textarea").each(function(){var o=t(this),e=o.closest(".forminator-field"),r=e.find(".forminator-label");e.hasClass("forminator-is_required")&&""===o.val()&&(e.addClass("forminator-has_error"),r.length?i+="<li>"+r.text()+" needs to be filled.</li>":i+="<li>"+o.attr("id")+" needs to be filled.</li>")}),n.html(i),r.find(".forminator-field-radio").each(function(){var o=t(this),e=o.find(".forminator-label"),r=o.find(".forminator-radio"),n=r.find("input").map(function(){return this.id}).get();o.hasClass("forminator-is_required")&&0===r.find("input:checked").length&&(o.addClass("forminator-has_error"),e.length?i+="<li>"+e.text()+" needs at least one option selected.</li>":i+="<li>You must select at lease one of these options: "+n.join(",")+"</li>")}),n.html(i),r.find(".forminator-multiselect").each(function(){var o=t(this),e=o.closest(".forminator-field"),r=e.find(".forminator-label"),n=o.find(".forminator-option"),a=n.find("input").map(function(){return this.id}).get();e.hasClass("forminator-is_required")&&0===n.find("input:checked").length&&(e.addClass("forminator-has_error"),r.length?i+="<li>"+r.text()+" needs at least one option selected.</li>":i+="<li>You must select at lease one of these options: "+a.join(",")+"</li>")}),n.html(i),n.addClass("forminator-accessible"),n.removeAttr("aria-hidden"),n.attr("tabindex","-1"),n.focus()):(i="<p>Form was submitted successfully.</p>",n.html(i),n.addClass("forminator-success"),n.addClass("forminator-show"),n.removeAttr("aria-hidden"),n.attr("tabindex","-1"),n.focus())}}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.inputStates=function(o){var e=t(o),r=e.closest("form");if(e.is("input")||r.is(".forminator-poll")&&(r.is(".forminator-ui")||r.is(".forminator-custom-form")))return e.each(function(){var o,e;o=t(this),e=o.closest(".forminator-field"),o.mouseover(function(t){e.addClass("forminator-is_hover"),t.stopPropagation()}).mouseout(function(t){e.removeClass("forminator-is_hover"),t.stopPropagation()}),function(o){var e=t(o),r=e.closest(".forminator-field");e.focus(function(t){r.addClass("forminator-is_active"),t.stopPropagation()}).blur(function(t){r.removeClass("forminator-is_active"),t.stopPropagation()})}(this),function(o){var e=t(o),r=e.closest(".forminator-field");""!==e.val().trim()&&r.addClass("forminator-is_filled"),e.on("change",function(){""!==e.val().trim()?r.addClass("forminator-is_filled"):r.removeClass("forminator-is_filled")})}(this)}),this}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.inputMaterial=function(o){var e=t(o),r=e.closest(".forminator-field"),n=r.find(".forminator-label"),i=e.closest("form");if(e.is("input")||i.is(".forminator-poll")&&(i.is(".forminator-ui")||i.is(".forminator-custom-form")))return e.parent().hasClass("forminator-input--wrap")||e.wrap('<div class="forminator-input--wrap"></div>'),n.length&&(n.addClass("forminator-floating--input"),r.find(".forminator-input-with-icon").length&&n.addClass("forminator-has_icon"),r.find(".forminator-input-with-phone").length&&(n.addClass("forminator-has_phone"),r.find(".intl-tel-input").hasClass("allow-dropdown")&&n.addClass("allow-dropdown"))),this}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.textareaStates=function(o){var e=t(o),r=e.closest("form");if(e.is("textarea")||r.is(".forminator-ui")||r.is(".forminator-custom-form"))return e.each(function(){var o,e;o=t(this),e=o.closest(".forminator-field"),o.mouseover(function(t){e.addClass("forminator-is_hover"),t.stopPropagation()}).mouseout(function(t){e.removeClass("forminator-is_hover"),t.stopPropagation()}),function(o){var e=t(o),r=e.closest(".forminator-field");e.focus(function(t){r.addClass("forminator-is_active"),t.stopPropagation()}).blur(function(t){r.removeClass("forminator-is_active"),t.stopPropagation()})}(this),function(o){var e=t(o),r=e.closest(".forminator-field");e.on("load",function(){""!==e.val().trim()&&r.addClass("forminator-is_filled")}),e.on("change",function(){""!==e.val().trim()?r.addClass("forminator-is_filled"):r.removeClass("forminator-is_filled")})}(this)}),this}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.textareaMaterial=function(o){var e=t(o),r=e.closest(".forminator-field"),n=r.find(".forminator-label"),i=e.closest("form");if((e.is("textarea")||i.is(".forminator-ui")||i.is(".forminator-custom-form"))&&!e.hasClass("wp-editor-area"))return function(){if(e.parent().hasClass("forminator-textarea--wrap")||e.wrap('<div class="forminator-textarea--wrap"></div>'),n.length){var t=n.height()+9;n.addClass("forminator-floating--textarea"),r.css({position:"relative"}),r.hasClass("forminator-is_filled")&&r.hasClass("forminator-is_active")||n.css({"padding-top":t+"px"}),e.css({"padding-top":t+"px"})}}(),this}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.radioStates=function(o){var e=t(o),r=e.find("input");if(e.is("label")&&"radio"===r.attr("type"))return r.each(function(){t(this).on("click",function(){var o=t(this),e=o.parent(),r=e.closest(".forminator-field").find(".forminator-radio");r.find("input").removeAttr("checked"),r.removeClass("forminator-is_checked"),o.attr("checked","checked"),e.addClass("forminator-is_checked")})}),this}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.checkboxStates=function(o){var e=t(o),r=e.find("input");if(e.is("label")&&"checkbox"===r.attr("type"))return r.each(function(){t(this).on("click",function(){var o=t(this).parent();o.is(".forminator-is_checked")?o.removeClass("forminator-is_checked"):o.addClass("forminator-is_checked")})}),this}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.multiSelectStates=function(o){var e=t(o),r=e.find(".forminator-option"),n=r.find("input");if(e.is(".forminator-multiselect")&&0!==r.length)return n.each(function(){t(this).on("click",function(){var o=t(this).parent();o.is(".forminator-is_checked")?o.removeClass("forminator-is_checked"):o.addClass("forminator-is_checked")})}),this}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.select2=function(){t(".forminator-custom-form").each(function(){var o=t(this),e=o.data("form-id"),r=o.find(".forminator-select2");t.each(["bold","flat","default","material","none"],function(n,i){var a,s="en",l=null,f=-1;o.hasClass("forminator-design--"+i)&&r.length&&r.each(function(){var o=t(this),r=o.closest(".sui-dialog-content");a=!0===o.data("rtl-support")?"rtl":"ltr",l=""!==o.data("placeholder")?o.data("placeholder"):null,s=""!==o.data("language")?o.data("language"):"en","true"===o.attr("data-search")&&(f=0),r.length||(r=t(document.body)),o.FUIselect2({dir:a,language:s,placeholder:l,dropdownCssClass:"forminator-custom-form-"+e+" forminator-dropdown--"+i,minimumResultsForSearch:f,dropdownParent:r}).on("select2:opening",function(){o.data("select2").$dropdown.find(":input.select2-search__field").attr("placeholder",l),(o.closest(".hustle-popup").length||o.closest(".hustle-slidein"))&&t(document.body).addClass("forminator-hustle-dropdown-fix")}).on("select2:closing",function(){t(document.body).removeClass("forminator-hustle-dropdown-fix")})})})})}}(jQuery),function(){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={});var t=t||{};t.KeyCode={BACKSPACE:8,TAB:9,RETURN:13,ESC:27,SPACE:32,PAGE_UP:33,PAGE_DOWN:34,END:35,HOME:36,LEFT:37,UP:38,RIGHT:39,DOWN:40,DELETE:46},t.Utils=t.Utils||{},t.Utils.remove=function(t){return t.remove&&"function"==typeof t.remove?t.remove():!(!t.parentNode||!t.parentNode.removeChild||"function"!=typeof t.parentNode.removeChild)&&t.parentNode.removeChild(t)},t.Utils.isFocusable=function(t){if(0<t.tabIndex||0===t.tabIndex&&null!==t.getAttribute("tabIndex"))return!0;if(t.disabled)return!1;switch(t.nodeName){case"A":return!!t.href&&"ignore"!=t.rel;case"INPUT":return"hidden"!=t.type&&"file"!=t.type;case"BUTTON":case"SELECT":case"TEXTAREA":return!0;default:return!1}},t.Utils.simulateClick=function(t){var o=new MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});t.dispatchEvent(o)},t.Utils.IgnoreUtilFocusChanges=!1,t.Utils.dialogOpenClass="forminator-authentication-enabled",t.Utils.focusFirstDescendant=function(o){for(var e=0;e<o.childNodes.length;e++){var r=o.childNodes[e];if(t.Utils.attemptFocus(r)||t.Utils.focusFirstDescendant(r))return!0}return!1},t.Utils.focusLastDescendant=function(o){for(var e=o.childNodes.length-1;0<=e;e--){var r=o.childNodes[e];if(t.Utils.attemptFocus(r)||t.Utils.focusLastDescendant(r))return!0}return!1},t.Utils.attemptFocus=function(o){if(!t.Utils.isFocusable(o))return!1;t.Utils.IgnoreUtilFocusChanges=!0;try{o.focus()}catch(t){}return t.Utils.IgnoreUtilFocusChanges=!1,document.activeElement===o},t.OpenDialogList=t.OpenDialogList||new Array(0),t.getCurrentDialog=function(){if(t.OpenDialogList&&t.OpenDialogList.length)return t.OpenDialogList[t.OpenDialogList.length-1]},t.closeCurrentDialog=function(){var o=t.getCurrentDialog();return!!o&&(o.close(),!0)},t.handleEscape=function(o){(o.which||o.keyCode)===t.Utils.ESC&&t.closeCurrentDialog()&&o.stopPropagation()},document.addEventListener("keyup",t.handleEscape),t.Authentication=function(o,e,r){if(this.dialogNode=document.getElementById(o),null===this.dialogNode)throw new Error('No element found with id="'+o+'".');var n=["dialog","alertdialog"];if(!(this.dialogNode.getAttribute("role")||"").trim().split(/\s+/g).some(function(t){return n.some(function(o){return t===o})}))throw new Error("Dialog() requires a DOM element with ARIA role of dialog or alertdialog.");if(this.dialogNode.parentNode.classList.contains("forminator-authentication")?this.backdropNode=this.dialogNode.parentNode:(this.backdropNode=document.createElement("div"),this.backdropNode.className="forminator-authentication",this.backdropNode.setAttribute("data-markup","new"),this.dialogNode.parentNode.insertBefore(this.backdropNode,this.dialogNodev),this.backdropNode.appendChild(this.dialogNode)),this.backdropNode.classList.add("forminator-active"),document.body.parentNode.classList.add(t.Utils.dialogOpenClass),"string"==typeof e)this.focusAfterClosed=document.getElementById(e);else{if("object"!==_typeof(e))throw new Error("the focusAfterClosed parameter is required for the aria.Authentication constructor.");this.focusAfterClosed=e}"string"==typeof r?this.focusFirst=document.getElementById(r):"object"===_typeof(r)?this.focusFirst=r:this.focusFirst=null;var i=document.createElement("div");this.preNode=this.dialogNode.parentNode.insertBefore(i,this.dialogNode),this.preNode.tabIndex=0;var a=document.createElement("div");this.postNode=this.dialogNode.parentNode.insertBefore(a,this.dialogNode.nextSibling),this.postNode.tabIndex=0,0<t.OpenDialogList.length&&t.getCurrentDialog().removeListeners(),this.addListeners(),t.OpenDialogList.push(this),this.dialogNode.classList.add("forminator-authentication-fade-in"),this.dialogNode.classList.remove("forminator-authentication-fade-out"),this.focusFirst?this.focusFirst.focus():t.Utils.focusFirstDescendant(this.dialogNode),this.lastFocus=document.activeElement},t.Authentication.prototype.close=function(){var o=this;t.OpenDialogList.pop(),this.removeListeners(),this.preNode.parentNode.removeChild(this.preNode),this.postNode.parentNode.removeChild(this.postNode),this.dialogNode.classList.add("forminator-content-fade-out"),this.dialogNode.classList.remove("forminator-content-fade-in"),this.focusAfterClosed.focus(),setTimeout(function(){o.backdropNode.classList.remove("forminator-active")},300),0<t.OpenDialogList.length?t.getCurrentDialog().addListeners():document.body.parentNode.classList.remove(t.Utils.dialogOpenClass)},t.Authentication.prototype.addListeners=function(){document.addEventListener("focus",this.trapFocus,!0)},t.Authentication.prototype.removeListeners=function(){document.removeEventListener("focus",this.trapFocus,!0)},t.Authentication.prototype.trapFocus=function(o){if(!t.Utils.IgnoreUtilFocusChanges){var e=t.getCurrentDialog();e.dialogNode.contains(o.target)?e.lastFocus=o.target:(t.Utils.focusFirstDescendant(e.dialogNode),e.lastFocus==document.activeElement&&t.Utils.focusLastDescendant(e.dialogNode),e.lastFocus=document.activeElement)}},FUI.openAuthentication=function(o,e,r){new t.Authentication(o,e,r)},FUI.closeAuthentication=function(){t.getCurrentDialog().close()}}(),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.pollChart=function(o,e){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"horizontalBar",n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"",i=t(o);if("bar"===r&&(r="horizontalBar"),void 0!==e&&0!==e.length)return function(){var o,s=[],l=[],f=[],c=_createForOfIteratorHelper(e);try{for(c.s();!(o=c.n()).done;){var d=o.value;"pie"===r?s.push(d[0]):s.push(a(d[0],20)),l.push(d[1]),f.push(d[2])}}catch(t){c.e(t)}finally{c.f()}var u={votesLabel:"vote(s)",votesOnPoll:!1,basicColors:["#E5E5E5","#777771","#333333"],tooltipsBasic:["#333333","#FFFFFF"]};""===n&&(n=[u.votesLabel,u.votesOnPoll,u.basicColors,u.tooltipsBasic]);var m={labels:s,datasets:[{data:l,backgroundColor:f,borderWidth:0}]},p={legend:{display:!1},tooltips:{callbacks:{title:function(t,o){var e="";return"pie"!==r&&(e=t[0].yLabel),e},label:function(t,o){var e=o.datasets[t.datasetIndex].label||"";return"pie"===r?(e=o.labels[t.index],!0===n[1]&&(e+=": "+o.datasets[0].data[t.index])):!0===n[1]&&(e+=Math.round(100*t.xLabel)/100),!0===n[1]&&(e+=" "+n[0]),e}},backgroundColor:n[3][0],titleFontColor:n[3][1],titleFontFamily:"'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",titleFontSize:13,titleFontStyle:"bold",titleMarginBottom:10,bodyFontColor:n[3][1],bodyFontFamily:"'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",bodyFontSize:12,bodyFontStyle:"normal"},scales:{xAxes:[{display:"pie"!==r,ticks:{fontColor:n[2][1],beginAtZero:!0},gridLines:{color:n[2][0]}}],yAxes:[{display:"pie"!==r,ticks:{fontColor:n[2][1],beginAtZero:!0},gridLines:{color:n[2][0]}}]},plugins:{datalabels:{display:"pie"!==r&&n[1],align:"end",anchor:"start",textAlign:"center",color:n[2][2],formatter:function(t){return t+" "+n[0]}}}};i.each(function(){i=t(this),new Chart(i,{type:r,data:m,plugins:[ChartDataLabels],options:p}),"pie"===r&&(i.wrap('<div class="forminator-chart-wrapper" aria-hidden="true" />'),i.parent().prepend('<ul class="forminator-chart-legend"></ul>'),e.forEach(function(t){!0===n[1]?i.parent().find(".forminator-chart-legend").append('<li><span class="forminator-chart-legend--color" style="background-color: '+t[2]+'" aria-hidden="true"></span><strong>'+t[0]+":</strong> "+t[1]+" "+n[0]+"</li>"):i.parent().find(".forminator-chart-legend").append('<li><span class="forminator-chart-legend--color" style="background-color: '+t[2]+'" aria-hidden="true"></span><strong>'+t[0]+"</strong></li>")}))})}(),this;function a(t,o){var e=[],r=t.split(" "),n="";return r.forEach(function(t,i){if(0<n.length){var a=n+" "+t;if(!(a.length>o))return i==r.length-1?void e.push(a):void(n=a);e.push(n),n=""}i!=r.length-1&&t.length<o?n=t:e.push(t)}),e}}}(jQuery),function(t){"use strict";"object"!==_typeof(window.FUI)&&(window.FUI={}),FUI.formSubmit=function(o){var e=t(o),r=e.closest(".forminator-custom-form");if(e.is(".forminator-button-submit")&&r[0]&&r.length)return e.addClass("forminator-button-onload"),setTimeout(function(){e.removeClass("forminator-button-onload")},1e3),this}}(jQuery);