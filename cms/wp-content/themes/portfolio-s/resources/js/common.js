!function(e){function t(t){for(var o,a,c=t[0],l=t[1],s=t[2],d=0,f=[];d<c.length;d++)a=c[d],Object.prototype.hasOwnProperty.call(r,a)&&r[a]&&f.push(r[a][0]),r[a]=0;for(o in l)Object.prototype.hasOwnProperty.call(l,o)&&(e[o]=l[o]);for(u&&u(t);f.length;)f.shift()();return i.push.apply(i,s||[]),n()}function n(){for(var e,t=0;t<i.length;t++){for(var n=i[t],o=!0,c=1;c<n.length;c++){var l=n[c];0!==r[l]&&(o=!1)}o&&(i.splice(t--,1),e=a(a.s=n[0]))}return e}var o={},r={common:0},i=[];function a(t){if(o[t])return o[t].exports;var n=o[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,a),n.l=!0,n.exports}a.m=e,a.c=o,a.d=function(e,t,n){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(a.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)a.d(n,o,function(t){return e[t]}.bind(null,o));return n},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="";var c=window.webpackJsonp=window.webpackJsonp||[],l=c.push.bind(c);c.push=t,c=c.slice();for(var s=0;s<c.length;s++)t(c[s]);var u=l;i.push(["./js/common.js","vendor"]),n()}({"./js/common.js":
/*!**********************!*\
  !*** ./js/common.js ***!
  \**********************/
/*! no exports provided */function(e,t,n){"use strict";n.r(t),function(e){var t,o,r,i,a,c,l=n(/*! object-fit-images */"./node_modules/object-fit-images/dist/ofi.common-js.js"),s=n.n(l),u=n(/*! stickyfilljs */"./node_modules/stickyfilljs/dist/stickyfill.js"),d=n.n(u),f=n(/*! util */"./js/util.js");console.log(screen.availWidth),/ipad|iphone|android|macintosh/.test(f.ua)&&screen.availWidth<=1024&&e('meta[name="viewport"').attr("content","width=1110"),function(){if(/msie|trident\/7/.test(f.ua)){var e=document.createElement("link");e.rel="stylesheet",e.href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap",document.head.appendChild(e),document.documentElement.classList.add("is-msie")}}(),t=document.querySelectorAll(".u-sticky"),d.a.add(t),s()(),o=e(".l-gnav"),r=location.protocol,i=location.host,a=location.pathname,c=/^\/$/.test(Object(f.normalizeURL)(a)),o.find("a").filter(".is-active").removeClass("is-active"),c||o.find("a").each((function(){var t=e(this),n=Object(f.normalizeURL)(t.attr("href"));n.match(/^\//)?a.match(n)&&t.addClass("is-active"):n&&(n=n.replace(r+"//","").replace(i,""),a.match(n)&&t.addClass("is-active"))}))}.call(this,n(/*! jquery */"./node_modules/jquery/dist/jquery.js"))},"./js/util.js":
/*!********************!*\
  !*** ./js/util.js ***!
  \********************/
/*! exports provided: ua, normalizeURL, scroller */function(e,t,n){"use strict";n.r(t),n.d(t,"ua",(function(){return o})),n.d(t,"normalizeURL",(function(){return r})),n.d(t,"scroller",(function(){return i}));var o=navigator.userAgent.toLowerCase(),r=function(e){if(void 0!==e)return-1!==e.indexOf(location.host)?e.replace(location.protocol+"//","").replace(location.host,"").replace(":"+location.port,"").replace(/index\.(html|php)/,""):e.replace(/index\.(html|php)/,"")},i="scrollingElement"in document?document.scrollingElement:-1!=navigator.userAgent.toLowerCase().indexOf("webkit")?document.body:document.documentElement}});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vanMvY29tbW9uLmpzIiwid2VicGFjazovLy8uL2pzL3V0aWwuanMiXSwibmFtZXMiOlsid2VicGFja0pzb25wQ2FsbGJhY2siLCJkYXRhIiwibW9kdWxlSWQiLCJjaHVua0lkIiwiY2h1bmtJZHMiLCJtb3JlTW9kdWxlcyIsImV4ZWN1dGVNb2R1bGVzIiwiaSIsInJlc29sdmVzIiwibGVuZ3RoIiwiT2JqZWN0IiwicHJvdG90eXBlIiwiaGFzT3duUHJvcGVydHkiLCJjYWxsIiwiaW5zdGFsbGVkQ2h1bmtzIiwicHVzaCIsIm1vZHVsZXMiLCJwYXJlbnRKc29ucEZ1bmN0aW9uIiwic2hpZnQiLCJkZWZlcnJlZE1vZHVsZXMiLCJhcHBseSIsImNoZWNrRGVmZXJyZWRNb2R1bGVzIiwicmVzdWx0IiwiZGVmZXJyZWRNb2R1bGUiLCJmdWxmaWxsZWQiLCJqIiwiZGVwSWQiLCJzcGxpY2UiLCJfX3dlYnBhY2tfcmVxdWlyZV9fIiwicyIsImluc3RhbGxlZE1vZHVsZXMiLCJleHBvcnRzIiwibW9kdWxlIiwibCIsIm0iLCJjIiwiZCIsIm5hbWUiLCJnZXR0ZXIiLCJvIiwiZGVmaW5lUHJvcGVydHkiLCJlbnVtZXJhYmxlIiwiZ2V0IiwiciIsIlN5bWJvbCIsInRvU3RyaW5nVGFnIiwidmFsdWUiLCJ0IiwibW9kZSIsIl9fZXNNb2R1bGUiLCJucyIsImNyZWF0ZSIsImtleSIsImJpbmQiLCJuIiwib2JqZWN0IiwicHJvcGVydHkiLCJwIiwianNvbnBBcnJheSIsIndpbmRvdyIsIm9sZEpzb25wRnVuY3Rpb24iLCJzbGljZSIsInRhcmdldCIsIiR0YXJnZXQiLCJwcm90b2NvbCIsImhvc3QiLCJjdXJyZW50VXJsIiwiaXNIb21lIiwiY29uc29sZSIsImxvZyIsInNjcmVlbiIsImF2YWlsV2lkdGgiLCJ0ZXN0IiwidWEiLCIkIiwiYXR0ciIsImxpbmsiLCJkb2N1bWVudCIsImNyZWF0ZUVsZW1lbnQiLCJyZWwiLCJocmVmIiwiaGVhZCIsImFwcGVuZENoaWxkIiwiZG9jdW1lbnRFbGVtZW50IiwiY2xhc3NMaXN0IiwiYWRkIiwidWFmaXgiLCJxdWVyeVNlbGVjdG9yQWxsIiwiU3RpY2t5ZmlsbCIsIm9iamVjdEZpdEltYWdlcyIsImxvY2F0aW9uIiwicGF0aG5hbWUiLCJub3JtYWxpemVVUkwiLCJmaW5kIiwiZmlsdGVyIiwicmVtb3ZlQ2xhc3MiLCJlYWNoIiwiJHRoaXMiLCJ0aGlzIiwidXJsIiwibWF0Y2giLCJhZGRDbGFzcyIsInJlcGxhY2UiLCJuYXZpZ2F0b3IiLCJ1c2VyQWdlbnQiLCJ0b0xvd2VyQ2FzZSIsImluZGV4T2YiLCJwb3J0Iiwic2Nyb2xsZXIiLCJzY3JvbGxpbmdFbGVtZW50IiwiYm9keSJdLCJtYXBwaW5ncyI6ImFBQ0UsU0FBU0EsRUFBcUJDLEdBUTdCLElBUEEsSUFNSUMsRUFBVUMsRUFOVkMsRUFBV0gsRUFBSyxHQUNoQkksRUFBY0osRUFBSyxHQUNuQkssRUFBaUJMLEVBQUssR0FJSE0sRUFBSSxFQUFHQyxFQUFXLEdBQ3BDRCxFQUFJSCxFQUFTSyxPQUFRRixJQUN6QkosRUFBVUMsRUFBU0csR0FDaEJHLE9BQU9DLFVBQVVDLGVBQWVDLEtBQUtDLEVBQWlCWCxJQUFZVyxFQUFnQlgsSUFDcEZLLEVBQVNPLEtBQUtELEVBQWdCWCxHQUFTLElBRXhDVyxFQUFnQlgsR0FBVyxFQUU1QixJQUFJRCxLQUFZRyxFQUNaSyxPQUFPQyxVQUFVQyxlQUFlQyxLQUFLUixFQUFhSCxLQUNwRGMsRUFBUWQsR0FBWUcsRUFBWUgsSUFLbEMsSUFGR2UsR0FBcUJBLEVBQW9CaEIsR0FFdENPLEVBQVNDLFFBQ2RELEVBQVNVLE9BQVRWLEdBT0QsT0FIQVcsRUFBZ0JKLEtBQUtLLE1BQU1ELEVBQWlCYixHQUFrQixJQUd2RGUsSUFFUixTQUFTQSxJQUVSLElBREEsSUFBSUMsRUFDSWYsRUFBSSxFQUFHQSxFQUFJWSxFQUFnQlYsT0FBUUYsSUFBSyxDQUcvQyxJQUZBLElBQUlnQixF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Qi9CLFNBQWlCQSxTQUFTZ0Msa0JBQ1EsR0FBeEROLFVBQVVDLFVBQVVDLGNBQWNDLFFBQVEsVUFBd0I3QixTQUFTaUMsS0FDeEVqQyxTQUFTTSIsImZpbGUiOiJjb21tb24uanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBpbnN0YWxsIGEgSlNPTlAgY2FsbGJhY2sgZm9yIGNodW5rIGxvYWRpbmdcbiBcdGZ1bmN0aW9uIHdlYnBhY2tKc29ucENhbGxiYWNrKGRhdGEpIHtcbiBcdFx0dmFyIGNodW5rSWRzID0gZGF0YVswXTtcbiBcdFx0dmFyIG1vcmVNb2R1bGVzID0gZGF0YVsxXTtcbiBcdFx0dmFyIGV4ZWN1dGVNb2R1bGVzID0gZGF0YVsyXTtcblxuIFx0XHQvLyBhZGQgXCJtb3JlTW9kdWxlc1wiIHRvIHRoZSBtb2R1bGVzIG9iamVjdCxcbiBcdFx0Ly8gdGhlbiBmbGFnIGFsbCBcImNodW5rSWRzXCIgYXMgbG9hZGVkIGFuZCBmaXJlIGNhbGxiYWNrXG4gXHRcdHZhciBtb2R1bGVJZCwgY2h1bmtJZCwgaSA9IDAsIHJlc29sdmVzID0gW107XG4gXHRcdGZvcig7aSA8IGNodW5rSWRzLmxlbmd0aDsgaSsrKSB7XG4gXHRcdFx0Y2h1bmtJZCA9IGNodW5rSWRzW2ldO1xuIFx0XHRcdGlmKE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChpbnN0YWxsZWRDaHVua3MsIGNodW5rSWQpICYmIGluc3RhbGxlZENodW5rc1tjaHVua0lkXSkge1xuIFx0XHRcdFx0cmVzb2x2ZXMucHVzaChpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF1bMF0pO1xuIFx0XHRcdH1cbiBcdFx0XHRpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF0gPSAwO1xuIFx0XHR9XG4gXHRcdGZvcihtb2R1bGVJZCBpbiBtb3JlTW9kdWxlcykge1xuIFx0XHRcdGlmKE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChtb3JlTW9kdWxlcywgbW9kdWxlSWQpKSB7XG4gXHRcdFx0XHRtb2R1bGVzW21vZHVsZUlkXSA9IG1vcmVNb2R1bGVzW21vZHVsZUlkXTtcbiBcdFx0XHR9XG4gXHRcdH1cbiBcdFx0aWYocGFyZW50SnNvbnBGdW5jdGlvbikgcGFyZW50SnNvbnBGdW5jdGlvbihkYXRhKTtcblxuIFx0XHR3aGlsZShyZXNvbHZlcy5sZW5ndGgpIHtcbiBcdFx0XHRyZXNvbHZlcy5zaGlmdCgpKCk7XG4gXHRcdH1cblxuIFx0XHQvLyBhZGQgZW50cnkgbW9kdWxlcyBmcm9tIGxvYWRlZCBjaHVuayB0byBkZWZlcnJlZCBsaXN0XG4gXHRcdGRlZmVycmVkTW9kdWxlcy5wdXNoLmFwcGx5KGRlZmVycmVkTW9kdWxlcywgZXhlY3V0ZU1vZHVsZXMgfHwgW10pO1xuXG4gXHRcdC8vIHJ1biBkZWZlcnJlZCBtb2R1bGVzIHdoZW4gYWxsIGNodW5rcyByZWFkeVxuIFx0XHRyZXR1cm4gY2hlY2tEZWZlcnJlZE1vZHVsZXMoKTtcbiBcdH07XG4gXHRmdW5jdGlvbiBjaGVja0RlZmVycmVkTW9kdWxlcygpIHtcbiBcdFx0dmFyIHJlc3VsdDtcbiBcdFx0Zm9yKHZhciBpID0gMDsgaSA8IGRlZmVycmVkTW9kdWxlcy5sZW5ndGg7IGkrKykge1xuIFx0XHRcdHZhciBkZWZlcnJlZE1vZHVsZSA9IGRlZmVycmVkTW9kdWxlc1tpXTtcbiBcdFx0XHR2YXIgZnVsZmlsbGVkID0gdHJ1ZTtcbiBcdFx0XHRmb3IodmFyIGogPSAxOyBqIDwgZGVmZXJyZWRNb2R1bGUubGVuZ3RoOyBqKyspIHtcbiBcdFx0XHRcdHZhciBkZXBJZCA9IGRlZmVycmVkTW9kdWxlW2pdO1xuIFx0XHRcdFx0aWYoaW5zdGFsbGVkQ2h1bmtzW2RlcElkXSAhPT0gMCkgZnVsZmlsbGVkID0gZmFsc2U7XG4gXHRcdFx0fVxuIFx0XHRcdGlmKGZ1bGZpbGxlZCkge1xuIFx0XHRcdFx0ZGVmZXJyZWRNb2R1bGVzLnNwbGljZShpLS0sIDEpO1xuIFx0XHRcdFx0cmVzdWx0ID0gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSBkZWZlcnJlZE1vZHVsZVswXSk7XG4gXHRcdFx0fVxuIFx0XHR9XG5cbiBcdFx0cmV0dXJuIHJlc3VsdDtcbiBcdH1cblxuIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gb2JqZWN0IHRvIHN0b3JlIGxvYWRlZCBhbmQgbG9hZGluZyBjaHVua3NcbiBcdC8vIHVuZGVmaW5lZCA9IGNodW5rIG5vdCBsb2FkZWQsIG51bGwgPSBjaHVuayBwcmVsb2FkZWQvcHJlZmV0Y2hlZFxuIFx0Ly8gUHJvbWlzZSA9IGNodW5rIGxvYWRpbmcsIDAgPSBjaHVuayBsb2FkZWRcbiBcdHZhciBpbnN0YWxsZWRDaHVua3MgPSB7XG4gXHRcdFwiY29tbW9uXCI6IDBcbiBcdH07XG5cbiBcdHZhciBkZWZlcnJlZE1vZHVsZXMgPSBbXTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuIFx0dmFyIGpzb25wQXJyYXkgPSB3aW5kb3dbXCJ3ZWJwYWNrSnNvbnBcIl0gPSB3aW5kb3dbXCJ3ZWJwYWNrSnNvbnBcIl0gfHwgW107XG4gXHR2YXIgb2xkSnNvbnBGdW5jdGlvbiA9IGpzb25wQXJyYXkucHVzaC5iaW5kKGpzb25wQXJyYXkpO1xuIFx0anNvbnBBcnJheS5wdXNoID0gd2VicGFja0pzb25wQ2FsbGJhY2s7XG4gXHRqc29ucEFycmF5ID0ganNvbnBBcnJheS5zbGljZSgpO1xuIFx0Zm9yKHZhciBpID0gMDsgaSA8IGpzb25wQXJyYXkubGVuZ3RoOyBpKyspIHdlYnBhY2tKc29ucENhbGxiYWNrKGpzb25wQXJyYXlbaV0pO1xuIFx0dmFyIHBhcmVudEpzb25wRnVuY3Rpb24gPSBvbGRKc29ucEZ1bmN0aW9uO1xuXG5cbiBcdC8vIGFkZCBlbnRyeSBtb2R1bGUgdG8gZGVmZXJyZWQgbGlzdFxuIFx0ZGVmZXJyZWRNb2R1bGVzLnB1c2goW1wiLi9qcy9jb21tb24uanNcIixcInZlbmRvclwiXSk7XG4gXHQvLyBydW4gZGVmZXJyZWQgbW9kdWxlcyB3aGVuIHJlYWR5XG4gXHRyZXR1cm4gY2hlY2tEZWZlcnJlZE1vZHVsZXMoKTtcbiIsIid1c2Ugc3RyaWN0JztcblxuaW1wb3J0IG9iamVjdEZpdEltYWdlcyBmcm9tICdvYmplY3QtZml0LWltYWdlcydcbmltcG9ydCBTdGlja3lmaWxsIGZyb20gJ3N0aWNreWZpbGxqcydcbmltcG9ydCB7IHVhLCBub3JtYWxpemVVUkwsIHNjcm9sbGVyIH0gZnJvbSAndXRpbCdcblxuOyhmdW5jdGlvbigpe1xuXG5cdC8vIHZpZXdwb3J0IGZpeFxuXHRjb25zdCB2aWV3cG9ydGZpeCA9IGZ1bmN0aW9uKCl7XG5cdFx0Y29uc29sZS5sb2coc2NyZWVuLmF2YWlsV2lkdGgpXG5cdFx0aWYgKC9pcGFkfGlwaG9uZXxhbmRyb2lkfG1hY2ludG9zaC8udGVzdCh1YSkgJiYgc2NyZWVuLmF2YWlsV2lkdGggPD0gMTAyNCkge1xuXHRcdFx0JCgnbWV0YVtuYW1lPVwidmlld3BvcnRcIicpLmF0dHIoJ2NvbnRlbnQnLCAnd2lkdGg9MTExMCcpO1xuXHRcdH0gXG5cdH1cblxuXHQvLyBVQSBmaXhcblx0Y29uc3QgdWFmaXggPSBmdW5jdGlvbigpIHtcblx0XHRpZiAoL21zaWV8dHJpZGVudFxcLzcvLnRlc3QodWEpKSB7XG5cdFx0XHRsZXQgbGluayA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2xpbmsnKTtcblx0XHRcdGxpbmsucmVsID0gJ3N0eWxlc2hlZXQnO1xuXHRcdFx0bGluay5ocmVmID0gJy8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzMj9mYW1pbHk9Tm90bytTYW5zK0pQOndnaHRANDAwOzUwMDs3MDAmZGlzcGxheT1zd2FwJztcblx0XHRcdGRvY3VtZW50LmhlYWQuYXBwZW5kQ2hpbGQobGluayk7XG5cdFx0XHRkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuY2xhc3NMaXN0LmFkZCgnaXMtbXNpZScpO1xuXHRcdH1cblx0fVxuXG5cdC8vIGZpeCBmb3Igc3R5bGVcblx0Y29uc3Qgc3R5bGVmaXggPSBmdW5jdGlvbigpe1xuXHRcdC8vIHN0aWNreSBwb3NpdGlvblxuXHRcdGxldCB0YXJnZXQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcudS1zdGlja3knKTtcblx0XHRTdGlja3lmaWxsLmFkZCh0YXJnZXQpO1xuXHRcdC8vIG9iamVjdC1maXRcblx0XHRvYmplY3RGaXRJbWFnZXMoKTtcblx0fVxuXG5cdC8vIGFjdGl2YXRlIGdsb2JhbCBuYXZpZ2F0aW9uXG5cdGNvbnN0IGFjdGl2YXRlR25hdiA9IGZ1bmN0aW9uKCl7XG5cdFx0Y29uc3QgJHRhcmdldCA9ICQoJy5sLWduYXYnKTtcblx0XHRjb25zdCBwcm90b2NvbCA9IGxvY2F0aW9uLnByb3RvY29sO1xuXHRcdGNvbnN0IGhvc3QgPSBsb2NhdGlvbi5ob3N0O1xuXHRcdGNvbnN0IGN1cnJlbnRVcmwgPSBsb2NhdGlvbi5wYXRobmFtZTtcblx0XHRjb25zdCBpc0hvbWUgPSAvXlxcLyQvLnRlc3Qobm9ybWFsaXplVVJMKGN1cnJlbnRVcmwpKTtcblx0XHQkdGFyZ2V0LmZpbmQoJ2EnKS5maWx0ZXIoJy5pcy1hY3RpdmUnKS5yZW1vdmVDbGFzcygnaXMtYWN0aXZlJyk7XG5cdFx0aWYgKCFpc0hvbWUpIHtcblx0XHRcdCR0YXJnZXQuZmluZCgnYScpLmVhY2goZnVuY3Rpb24gKCkge1xuXHRcdFx0XHR2YXIgJHRoaXMgPSAkKHRoaXMpO1xuXHRcdFx0XHR2YXIgdXJsID0gbm9ybWFsaXplVVJMKCR0aGlzLmF0dHIoJ2hyZWYnKSk7XG5cdFx0XHRcdGlmICh1cmwubWF0Y2goL15cXC8vKSkge1xuXHRcdFx0XHRcdGlmIChjdXJyZW50VXJsLm1hdGNoKHVybCkpICR0aGlzLmFkZENsYXNzKCdpcy1hY3RpdmUnKTtcblx0XHRcdFx0fSBlbHNlIGlmICh1cmwpIHtcblx0XHRcdFx0XHR1cmwgPSB1cmwucmVwbGFjZShwcm90b2NvbCArICcvLycsICcnKS5yZXBsYWNlKGhvc3QsICcnKTtcblx0XHRcdFx0XHRpZiAoY3VycmVudFVybC5tYXRjaCh1cmwpKSAkdGhpcy5hZGRDbGFzcygnaXMtYWN0aXZlJyk7XG5cdFx0XHRcdH1cblx0XHRcdH0pO1xuXHRcdH1cblx0fVxuXG5cdHZpZXdwb3J0Zml4KCk7XG5cdHVhZml4KCk7XG5cdHN0eWxlZml4KCk7XG5cdGFjdGl2YXRlR25hdigpO1xufSkoKTsiLCIndXNlIHN0cmljdCc7XG5cbmNvbnN0IHVhID0gbmF2aWdhdG9yLnVzZXJBZ2VudC50b0xvd2VyQ2FzZSgpXG5cbmNvbnN0IG5vcm1hbGl6ZVVSTCA9IGZ1bmN0aW9uICh1cmwpIHtcblx0aWYgKHVybCA9PT0gdm9pZCAwKSByZXR1cm47XG5cdGlmICh1cmwuaW5kZXhPZihsb2NhdGlvbi5ob3N0KSAhPT0gLTEpIHtcblx0XHRyZXR1cm4gdXJsLnJlcGxhY2UobG9jYXRpb24ucHJvdG9jb2wgKyAnLy8nLCAnJykucmVwbGFjZShsb2NhdGlvbi5ob3N0LCAnJykucmVwbGFjZSgnOicgKyBsb2NhdGlvbi5wb3J0LCAnJykucmVwbGFjZSgvaW5kZXhcXC4oaHRtbHxwaHApLywgJycpO1xuXHR9IGVsc2Uge1xuXHRcdHJldHVybiB1cmwucmVwbGFjZSgvaW5kZXhcXC4oaHRtbHxwaHApLywgJycpO1xuXHR9XG59XG5cbmNvbnN0IHNjcm9sbGVyID0gKGZ1bmN0aW9uICgpIHtcblx0aWYgKCdzY3JvbGxpbmdFbGVtZW50JyBpbiBkb2N1bWVudCkgcmV0dXJuIGRvY3VtZW50LnNjcm9sbGluZ0VsZW1lbnQ7XG5cdGlmIChuYXZpZ2F0b3IudXNlckFnZW50LnRvTG93ZXJDYXNlKCkuaW5kZXhPZignd2Via2l0JykgIT0gLTEpIHJldHVybiBkb2N1bWVudC5ib2R5O1xuXHRyZXR1cm4gZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50O1xufSkoKVxuXG5leHBvcnQgeyB1YSwgbm9ybWFsaXplVVJMLCBzY3JvbGxlciB9Il0sInNvdXJjZVJvb3QiOiIifQ==