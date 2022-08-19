(() => {
    var __webpack_modules__ = {
        732: function(module) {
            !function(n, t) {
                true ? module.exports = t() : 0;
            }(0, (function() {
                "use strict";
                function n() {
                    return n = Object.assign || function(n) {
                        for (var t = 1; t < arguments.length; t++) {
                            var e = arguments[t];
                            for (var i in e) Object.prototype.hasOwnProperty.call(e, i) && (n[i] = e[i]);
                        }
                        return n;
                    }, n.apply(this, arguments);
                }
                var t = "undefined" != typeof window, e = t && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent), i = t && "IntersectionObserver" in window, o = t && "classList" in document.createElement("p"), a = t && window.devicePixelRatio > 1, r = {
                    elements_selector: ".lazy",
                    container: e || t ? document : null,
                    threshold: 300,
                    thresholds: null,
                    data_src: "src",
                    data_srcset: "srcset",
                    data_sizes: "sizes",
                    data_bg: "bg",
                    data_bg_hidpi: "bg-hidpi",
                    data_bg_multi: "bg-multi",
                    data_bg_multi_hidpi: "bg-multi-hidpi",
                    data_poster: "poster",
                    class_applied: "applied",
                    class_loading: "loading",
                    class_loaded: "loaded",
                    class_error: "error",
                    class_entered: "entered",
                    class_exited: "exited",
                    unobserve_completed: !0,
                    unobserve_entered: !1,
                    cancel_on_exit: !0,
                    callback_enter: null,
                    callback_exit: null,
                    callback_applied: null,
                    callback_loading: null,
                    callback_loaded: null,
                    callback_error: null,
                    callback_finish: null,
                    callback_cancel: null,
                    use_native: !1
                }, c = function(t) {
                    return n({}, r, t);
                }, u = function(n, t) {
                    var e, i = "LazyLoad::Initialized", o = new n(t);
                    try {
                        e = new CustomEvent(i, {
                            detail: {
                                instance: o
                            }
                        });
                    } catch (n) {
                        (e = document.createEvent("CustomEvent")).initCustomEvent(i, !1, !1, {
                            instance: o
                        });
                    }
                    window.dispatchEvent(e);
                }, l = "src", s = "srcset", f = "sizes", d = "poster", _ = "llOriginalAttrs", g = "data", v = "loading", b = "loaded", p = "applied", h = "error", m = "native", E = "data-", I = "ll-status", y = function(n, t) {
                    return n.getAttribute(E + t);
                }, A = function(n) {
                    return y(n, I);
                }, k = function(n, t) {
                    return function(n, t, e) {
                        var i = "data-ll-status";
                        null !== e ? n.setAttribute(i, e) : n.removeAttribute(i);
                    }(n, 0, t);
                }, L = function(n) {
                    return k(n, null);
                }, w = function(n) {
                    return null === A(n);
                }, O = function(n) {
                    return A(n) === m;
                }, x = [ v, b, p, h ], C = function(n, t, e, i) {
                    n && (void 0 === i ? void 0 === e ? n(t) : n(t, e) : n(t, e, i));
                }, N = function(n, t) {
                    o ? n.classList.add(t) : n.className += (n.className ? " " : "") + t;
                }, M = function(n, t) {
                    o ? n.classList.remove(t) : n.className = n.className.replace(new RegExp("(^|\\s+)" + t + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "");
                }, z = function(n) {
                    return n.llTempImage;
                }, T = function(n, t) {
                    if (t) {
                        var e = t._observer;
                        e && e.unobserve(n);
                    }
                }, R = function(n, t) {
                    n && (n.loadingCount += t);
                }, G = function(n, t) {
                    n && (n.toLoadCount = t);
                }, D = function(n) {
                    for (var t, e = [], i = 0; t = n.children[i]; i += 1) "SOURCE" === t.tagName && e.push(t);
                    return e;
                }, V = function(n, t) {
                    var e = n.parentNode;
                    e && "PICTURE" === e.tagName && D(e).forEach(t);
                }, F = function(n, t) {
                    D(n).forEach(t);
                }, j = [ l ], B = [ l, d ], J = [ l, s, f ], P = [ g ], S = function(n) {
                    return !!n[_];
                }, U = function(n) {
                    return n[_];
                }, $ = function(n) {
                    return delete n[_];
                }, q = function(n, t) {
                    if (!S(n)) {
                        var e = {};
                        t.forEach((function(t) {
                            e[t] = n.getAttribute(t);
                        })), n[_] = e;
                    }
                }, H = function(n, t) {
                    if (S(n)) {
                        var e = U(n);
                        t.forEach((function(t) {
                            !function(n, t, e) {
                                e ? n.setAttribute(t, e) : n.removeAttribute(t);
                            }(n, t, e[t]);
                        }));
                    }
                }, K = function(n, t, e) {
                    N(n, t.class_loading), k(n, v), e && (R(e, 1), C(t.callback_loading, n, e));
                }, Q = function(n, t, e) {
                    e && n.setAttribute(t, e);
                }, W = function(n, t) {
                    Q(n, f, y(n, t.data_sizes)), Q(n, s, y(n, t.data_srcset)), Q(n, l, y(n, t.data_src));
                }, X = {
                    IMG: function(n, t) {
                        V(n, (function(n) {
                            q(n, J), W(n, t);
                        })), q(n, J), W(n, t);
                    },
                    IFRAME: function(n, t) {
                        q(n, j), Q(n, l, y(n, t.data_src));
                    },
                    VIDEO: function(n, t) {
                        F(n, (function(n) {
                            q(n, j), Q(n, l, y(n, t.data_src));
                        })), q(n, B), Q(n, d, y(n, t.data_poster)), Q(n, l, y(n, t.data_src)), n.load();
                    },
                    OBJECT: function(n, t) {
                        q(n, P), Q(n, g, y(n, t.data_src));
                    }
                }, Y = [ "IMG", "IFRAME", "VIDEO", "OBJECT" ], Z = function(n, t) {
                    !t || function(n) {
                        return n.loadingCount > 0;
                    }(t) || function(n) {
                        return n.toLoadCount > 0;
                    }(t) || C(n.callback_finish, t);
                }, nn = function(n, t, e) {
                    n.addEventListener(t, e), n.llEvLisnrs[t] = e;
                }, tn = function(n, t, e) {
                    n.removeEventListener(t, e);
                }, en = function(n) {
                    return !!n.llEvLisnrs;
                }, on = function(n) {
                    if (en(n)) {
                        var t = n.llEvLisnrs;
                        for (var e in t) {
                            var i = t[e];
                            tn(n, e, i);
                        }
                        delete n.llEvLisnrs;
                    }
                }, an = function(n, t, e) {
                    !function(n) {
                        delete n.llTempImage;
                    }(n), R(e, -1), function(n) {
                        n && (n.toLoadCount -= 1);
                    }(e), M(n, t.class_loading), t.unobserve_completed && T(n, e);
                }, rn = function(n, t, e) {
                    var i = z(n) || n;
                    en(i) || function(n, t, e) {
                        en(n) || (n.llEvLisnrs = {});
                        var i = "VIDEO" === n.tagName ? "loadeddata" : "load";
                        nn(n, i, t), nn(n, "error", e);
                    }(i, (function(o) {
                        !function(n, t, e, i) {
                            var o = O(t);
                            an(t, e, i), N(t, e.class_loaded), k(t, b), C(e.callback_loaded, t, i), o || Z(e, i);
                        }(0, n, t, e), on(i);
                    }), (function(o) {
                        !function(n, t, e, i) {
                            var o = O(t);
                            an(t, e, i), N(t, e.class_error), k(t, h), C(e.callback_error, t, i), o || Z(e, i);
                        }(0, n, t, e), on(i);
                    }));
                }, cn = function(n, t, e) {
                    !function(n) {
                        n.llTempImage = document.createElement("IMG");
                    }(n), rn(n, t, e), function(n) {
                        S(n) || (n[_] = {
                            backgroundImage: n.style.backgroundImage
                        });
                    }(n), function(n, t, e) {
                        var i = y(n, t.data_bg), o = y(n, t.data_bg_hidpi), r = a && o ? o : i;
                        r && (n.style.backgroundImage = 'url("'.concat(r, '")'), z(n).setAttribute(l, r), 
                        K(n, t, e));
                    }(n, t, e), function(n, t, e) {
                        var i = y(n, t.data_bg_multi), o = y(n, t.data_bg_multi_hidpi), r = a && o ? o : i;
                        r && (n.style.backgroundImage = r, function(n, t, e) {
                            N(n, t.class_applied), k(n, p), e && (t.unobserve_completed && T(n, t), C(t.callback_applied, n, e));
                        }(n, t, e));
                    }(n, t, e);
                }, un = function(n, t, e) {
                    !function(n) {
                        return Y.indexOf(n.tagName) > -1;
                    }(n) ? cn(n, t, e) : function(n, t, e) {
                        rn(n, t, e), function(n, t, e) {
                            var i = X[n.tagName];
                            i && (i(n, t), K(n, t, e));
                        }(n, t, e);
                    }(n, t, e);
                }, ln = function(n) {
                    n.removeAttribute(l), n.removeAttribute(s), n.removeAttribute(f);
                }, sn = function(n) {
                    V(n, (function(n) {
                        H(n, J);
                    })), H(n, J);
                }, fn = {
                    IMG: sn,
                    IFRAME: function(n) {
                        H(n, j);
                    },
                    VIDEO: function(n) {
                        F(n, (function(n) {
                            H(n, j);
                        })), H(n, B), n.load();
                    },
                    OBJECT: function(n) {
                        H(n, P);
                    }
                }, dn = function(n, t) {
                    (function(n) {
                        var t = fn[n.tagName];
                        t ? t(n) : function(n) {
                            if (S(n)) {
                                var t = U(n);
                                n.style.backgroundImage = t.backgroundImage;
                            }
                        }(n);
                    })(n), function(n, t) {
                        w(n) || O(n) || (M(n, t.class_entered), M(n, t.class_exited), M(n, t.class_applied), 
                        M(n, t.class_loading), M(n, t.class_loaded), M(n, t.class_error));
                    }(n, t), L(n), $(n);
                }, _n = [ "IMG", "IFRAME", "VIDEO" ], gn = function(n) {
                    return n.use_native && "loading" in HTMLImageElement.prototype;
                }, vn = function(n, t, e) {
                    n.forEach((function(n) {
                        return function(n) {
                            return n.isIntersecting || n.intersectionRatio > 0;
                        }(n) ? function(n, t, e, i) {
                            var o = function(n) {
                                return x.indexOf(A(n)) >= 0;
                            }(n);
                            k(n, "entered"), N(n, e.class_entered), M(n, e.class_exited), function(n, t, e) {
                                t.unobserve_entered && T(n, e);
                            }(n, e, i), C(e.callback_enter, n, t, i), o || un(n, e, i);
                        }(n.target, n, t, e) : function(n, t, e, i) {
                            w(n) || (N(n, e.class_exited), function(n, t, e, i) {
                                e.cancel_on_exit && function(n) {
                                    return A(n) === v;
                                }(n) && "IMG" === n.tagName && (on(n), function(n) {
                                    V(n, (function(n) {
                                        ln(n);
                                    })), ln(n);
                                }(n), sn(n), M(n, e.class_loading), R(i, -1), L(n), C(e.callback_cancel, n, t, i));
                            }(n, t, e, i), C(e.callback_exit, n, t, i));
                        }(n.target, n, t, e);
                    }));
                }, bn = function(n) {
                    return Array.prototype.slice.call(n);
                }, pn = function(n) {
                    return n.container.querySelectorAll(n.elements_selector);
                }, hn = function(n) {
                    return function(n) {
                        return A(n) === h;
                    }(n);
                }, mn = function(n, t) {
                    return function(n) {
                        return bn(n).filter(w);
                    }(n || pn(t));
                }, En = function(n, e) {
                    var o = c(n);
                    this._settings = o, this.loadingCount = 0, function(n, t) {
                        i && !gn(n) && (t._observer = new IntersectionObserver((function(e) {
                            vn(e, n, t);
                        }), function(n) {
                            return {
                                root: n.container === document ? null : n.container,
                                rootMargin: n.thresholds || n.threshold + "px"
                            };
                        }(n)));
                    }(o, this), function(n, e) {
                        t && window.addEventListener("online", (function() {
                            !function(n, t) {
                                var e;
                                (e = pn(n), bn(e).filter(hn)).forEach((function(t) {
                                    M(t, n.class_error), L(t);
                                })), t.update();
                            }(n, e);
                        }));
                    }(o, this), this.update(e);
                };
                return En.prototype = {
                    update: function(n) {
                        var t, o, a = this._settings, r = mn(n, a);
                        G(this, r.length), !e && i ? gn(a) ? function(n, t, e) {
                            n.forEach((function(n) {
                                -1 !== _n.indexOf(n.tagName) && function(n, t, e) {
                                    n.setAttribute("loading", "lazy"), rn(n, t, e), function(n, t) {
                                        var e = X[n.tagName];
                                        e && e(n, t);
                                    }(n, t), k(n, m);
                                }(n, t, e);
                            })), G(e, 0);
                        }(r, a, this) : (o = r, function(n) {
                            n.disconnect();
                        }(t = this._observer), function(n, t) {
                            t.forEach((function(t) {
                                n.observe(t);
                            }));
                        }(t, o)) : this.loadAll(r);
                    },
                    destroy: function() {
                        this._observer && this._observer.disconnect(), pn(this._settings).forEach((function(n) {
                            $(n);
                        })), delete this._observer, delete this._settings, delete this.loadingCount, delete this.toLoadCount;
                    },
                    loadAll: function(n) {
                        var t = this, e = this._settings;
                        mn(n, e).forEach((function(n) {
                            T(n, t), un(n, e, t);
                        }));
                    },
                    restoreAll: function() {
                        var n = this._settings;
                        pn(n).forEach((function(t) {
                            dn(t, n);
                        }));
                    }
                }, En.load = function(n, t) {
                    var e = c(t);
                    un(n, e);
                }, En.resetStatus = function(n) {
                    L(n);
                }, t && function(n, t) {
                    if (t) if (t.length) for (var e, i = 0; e = t[i]; i += 1) u(n, e); else u(n, t);
                }(En, window.lazyLoadOptions), En;
            }));
        },
        832: module => {
            (function webpackUniversalModuleDefinition(root, factory) {
                if (true) module.exports = factory();
            })(window, (function() {
                return function(modules) {
                    var installedModules = {};
                    function __nested_webpack_require_543__(moduleId) {
                        if (installedModules[moduleId]) return installedModules[moduleId].exports;
                        var module = installedModules[moduleId] = {
                            i: moduleId,
                            l: false,
                            exports: {}
                        };
                        modules[moduleId].call(module.exports, module, module.exports, __nested_webpack_require_543__);
                        module.l = true;
                        return module.exports;
                    }
                    __nested_webpack_require_543__.m = modules;
                    __nested_webpack_require_543__.c = installedModules;
                    __nested_webpack_require_543__.d = function(exports, name, getter) {
                        if (!__nested_webpack_require_543__.o(exports, name)) Object.defineProperty(exports, name, {
                            enumerable: true,
                            get: getter
                        });
                    };
                    __nested_webpack_require_543__.r = function(exports) {
                        if ("undefined" !== typeof Symbol && Symbol.toStringTag) Object.defineProperty(exports, Symbol.toStringTag, {
                            value: "Module"
                        });
                        Object.defineProperty(exports, "__esModule", {
                            value: true
                        });
                    };
                    __nested_webpack_require_543__.t = function(value, mode) {
                        if (1 & mode) value = __nested_webpack_require_543__(value);
                        if (8 & mode) return value;
                        if (4 & mode && "object" === typeof value && value && value.__esModule) return value;
                        var ns = Object.create(null);
                        __nested_webpack_require_543__.r(ns);
                        Object.defineProperty(ns, "default", {
                            enumerable: true,
                            value
                        });
                        if (2 & mode && "string" != typeof value) for (var key in value) __nested_webpack_require_543__.d(ns, key, function(key) {
                            return value[key];
                        }.bind(null, key));
                        return ns;
                    };
                    __nested_webpack_require_543__.n = function(module) {
                        var getter = module && module.__esModule ? function getDefault() {
                            return module["default"];
                        } : function getModuleExports() {
                            return module;
                        };
                        __nested_webpack_require_543__.d(getter, "a", getter);
                        return getter;
                    };
                    __nested_webpack_require_543__.o = function(object, property) {
                        return Object.prototype.hasOwnProperty.call(object, property);
                    };
                    __nested_webpack_require_543__.p = "";
                    return __nested_webpack_require_543__(__nested_webpack_require_543__.s = 0);
                }([ function(module, exports, __nested_webpack_require_4007__) {
                    module.exports = __nested_webpack_require_4007__(1).default;
                }, function(module, __webpack_exports__, __nested_webpack_require_4145__) {
                    "use strict";
                    __nested_webpack_require_4145__.r(__webpack_exports__);
                    var style_image_namespaceObject = {};
                    __nested_webpack_require_4145__.r(style_image_namespaceObject);
                    __nested_webpack_require_4145__.d(style_image_namespaceObject, "atPos", (function() {
                        return atPos;
                    }));
                    __nested_webpack_require_4145__.d(style_image_namespaceObject, "lowerRight", (function() {
                        return lowerRight;
                    }));
                    __nested_webpack_require_4145__.d(style_image_namespaceObject, "upperRight", (function() {
                        return upperRight;
                    }));
                    __nested_webpack_require_4145__.d(style_image_namespaceObject, "lowerLeft", (function() {
                        return lowerLeft;
                    }));
                    __nested_webpack_require_4145__.d(style_image_namespaceObject, "upperLeft", (function() {
                        return upperLeft;
                    }));
                    __nested_webpack_require_4145__.d(style_image_namespaceObject, "center", (function() {
                        return center;
                    }));
                    var text_namespaceObject = {};
                    __nested_webpack_require_4145__.r(text_namespaceObject);
                    __nested_webpack_require_4145__.d(text_namespaceObject, "atPos", (function() {
                        return text_atPos;
                    }));
                    __nested_webpack_require_4145__.d(text_namespaceObject, "lowerRight", (function() {
                        return text_lowerRight;
                    }));
                    __nested_webpack_require_4145__.d(text_namespaceObject, "lowerLeft", (function() {
                        return text_lowerLeft;
                    }));
                    __nested_webpack_require_4145__.d(text_namespaceObject, "upperRight", (function() {
                        return text_upperRight;
                    }));
                    __nested_webpack_require_4145__.d(text_namespaceObject, "upperLeft", (function() {
                        return text_upperLeft;
                    }));
                    __nested_webpack_require_4145__.d(text_namespaceObject, "center", (function() {
                        return text_center;
                    }));
                    function sequence() {
                        for (var _len = arguments.length, funcs = new Array(_len), _key = 0; _key < _len; _key++) funcs[_key] = arguments[_key];
                        return function(value) {
                            return funcs.reduce((function(val, fn) {
                                return fn.call(null, val);
                            }), value);
                        };
                    }
                    function identity(x) {
                        return x;
                    }
                    function _typeof(obj) {
                        if ("function" === typeof Symbol && "symbol" === typeof Symbol.iterator) _typeof = function _typeof(obj) {
                            return typeof obj;
                        }; else _typeof = function _typeof(obj) {
                            return obj && "function" === typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
                        };
                        return _typeof(obj);
                    }
                    function setAndResolve(img, src, resolve) {
                        img.onload = function() {
                            return resolve(img);
                        };
                        img.src = src;
                    }
                    function getLoader(resource) {
                        var type = _typeof(resource);
                        if ("string" === type) return loadUrl;
                        if (resource instanceof Image) return identity;
                        return loadFile;
                    }
                    function image_load(resources, init) {
                        var promises = [];
                        for (var i = 0; i < resources.length; i++) {
                            var resource = resources[i];
                            var loader = getLoader(resource);
                            var promise = loader(resource, init);
                            promises.push(promise);
                        }
                        return Promise.all(promises);
                    }
                    function loadUrl(url, init) {
                        var img = new Image;
                        "function" === typeof init && init(img);
                        return new Promise((function(resolve) {
                            img.onload = function() {
                                return resolve(img);
                            };
                            img.src = url;
                        }));
                    }
                    function loadFile(file) {
                        var reader = new FileReader;
                        return new Promise((function(resolve) {
                            var img = new Image;
                            reader.onloadend = function() {
                                return setAndResolve(img, reader.result, resolve);
                            };
                            reader.readAsDataURL(file);
                        }));
                    }
                    function createImage(url, onload) {
                        var img = new Image;
                        if ("function" === typeof onload) img.onload = onload;
                        img.src = url;
                        return img;
                    }
                    function drawImage(img, canvas) {
                        var ctx = canvas.getContext("2d");
                        canvas.width = img.width;
                        canvas.height = img.height;
                        ctx.drawImage(img, 0, 0);
                        return canvas;
                    }
                    function imageToCanvas(img, pool) {
                        var canvas = pool.pop();
                        return drawImage(img, canvas);
                    }
                    function mapToCanvas(images, pool) {
                        return images.map((function(img) {
                            return imageToCanvas(img, pool);
                        }));
                    }
                    function canvas_dataUrl(canvas) {
                        var parameters = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {
                            type: "image/png",
                            encoderOptions: .92
                        };
                        return canvas.toDataURL(parameters.type, parameters.encoderOptions);
                    }
                    var url = /^data:([^;]+);base64,(.*)$/;
                    function split(dataUrl) {
                        return url.exec(dataUrl).slice(1);
                    }
                    function decode(base64) {
                        return window.atob(base64);
                    }
                    function uint8(data) {
                        var length = data.length;
                        var uints = new Uint8Array(length);
                        for (var i = 0; i < length; i++) uints[i] = data.charCodeAt(i);
                        return uints;
                    }
                    var blob_blob = sequence(split, (function(parts) {
                        return [ decode(parts[1]), parts[0] ];
                    }), (function(blob) {
                        return new Blob([ uint8(blob[0]) ], {
                            type: blob[1]
                        });
                    }));
                    function atPos(xFn, yFn, alpha) {
                        alpha || (alpha = 1);
                        return function(target, watermark) {
                            var context = target.getContext("2d");
                            context.save();
                            context.globalAlpha = alpha;
                            context.drawImage(watermark, xFn(target, watermark), yFn(target, watermark));
                            context.restore();
                            return target;
                        };
                    }
                    function lowerRight(alpha) {
                        return atPos((function(target, mark) {
                            return target.width - (mark.width + 10);
                        }), (function(target, mark) {
                            return target.height - (mark.height + 10);
                        }), alpha);
                    }
                    function upperRight(alpha) {
                        return atPos((function(target, mark) {
                            return target.width - (mark.width + 10);
                        }), (function(target, mark) {
                            return 10;
                        }), alpha);
                    }
                    function lowerLeft(alpha) {
                        return atPos((function(target, mark) {
                            return 10;
                        }), (function(target, mark) {
                            return target.height - (mark.height + 10);
                        }), alpha);
                    }
                    function upperLeft(alpha) {
                        return atPos((function(target, mark) {
                            return 10;
                        }), (function(target, mark) {
                            return 10;
                        }), alpha);
                    }
                    function center(alpha) {
                        return atPos((function(target, mark) {
                            return (target.width - mark.width) / 2;
                        }), (function(target, mark) {
                            return (target.height - mark.height) / 2;
                        }), alpha);
                    }
                    function text_atPos(xFn, yFn, text, font, fillStyle, alpha) {
                        alpha || (alpha = 1);
                        return function(target) {
                            var context = target.getContext("2d");
                            context.save();
                            context.globalAlpha = alpha;
                            context.fillStyle = fillStyle;
                            context.font = font;
                            var metrics = context.measureText(text);
                            context.fillText(text, xFn(target, metrics, context), yFn(target, metrics, context));
                            context.restore();
                            return target;
                        };
                    }
                    function text_lowerRight(text, font, fillStyle, alpha, y) {
                        return text_atPos((function(target, metrics) {
                            return target.width - (metrics.width + 10);
                        }), (function(target) {
                            return y || target.height - 10;
                        }), text, font, fillStyle, alpha);
                    }
                    function text_lowerLeft(text, font, fillStyle, alpha, y) {
                        return text_atPos((function() {
                            return 10;
                        }), (function(target) {
                            return y || target.height - 10;
                        }), text, font, fillStyle, alpha);
                    }
                    function text_upperRight(text, font, fillStyle, alpha, y) {
                        return text_atPos((function(target, metrics) {
                            return target.width - (metrics.width + 10);
                        }), (function() {
                            return y || 20;
                        }), text, font, fillStyle, alpha);
                    }
                    function text_upperLeft(text, font, fillStyle, alpha, y) {
                        return text_atPos((function() {
                            return 10;
                        }), (function() {
                            return y || 20;
                        }), text, font, fillStyle, alpha);
                    }
                    function text_center(text, font, fillStyle, alpha, y) {
                        return text_atPos((function(target, metrics, ctx) {
                            ctx.textAlign = "center";
                            return target.width / 2;
                        }), (function(target, metrics, ctx) {
                            ctx.textBaseline = "middle";
                            return target.height / 2;
                        }), text, font, fillStyle, alpha);
                    }
                    var style_image = style_image_namespaceObject;
                    var style_text = text_namespaceObject;
                    function style_result(draw, sources) {
                        var canvas = draw.apply(null, sources);
                        return {
                            canvas,
                            sources
                        };
                    }
                    function extend(first, second) {
                        var secondKeys = Object.keys(second);
                        secondKeys.forEach((function(key) {
                            return first[key] = second[key];
                        }));
                        return first;
                    }
                    function clone(obj) {
                        return extend({}, obj);
                    }
                    function CanvasPool() {
                        var canvases = [];
                        return {
                            pop: function pop() {
                                if (0 === this.length) canvases.push(document.createElement("canvas"));
                                return canvases.pop();
                            },
                            get length() {
                                return canvases.length;
                            },
                            release: function release(canvas) {
                                var context = canvas.getContext("2d");
                                context.clearRect(0, 0, canvas.width, canvas.height);
                                canvases.push(canvas);
                            },
                            clear: function clear() {
                                canvases.splice(0, canvases.length);
                            },
                            get elements() {
                                return canvases;
                            }
                        };
                    }
                    var shared = CanvasPool();
                    var canvas_pool = shared;
                    __nested_webpack_require_4145__.d(__webpack_exports__, "default", (function() {
                        return watermark;
                    }));
                    var defaults = {
                        init: function init() {},
                        type: "image/png",
                        encoderOptions: .92
                    };
                    function mergeOptions(options) {
                        return extend(clone(defaults), options);
                    }
                    function release(result, pool, parameters) {
                        var canvas = result.canvas, sources = result.sources;
                        var dataURL = canvas_dataUrl(canvas, parameters);
                        sources.forEach(pool.release);
                        return dataURL;
                    }
                    function watermark(resources) {
                        var options = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                        var promise = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
                        var opts = mergeOptions(options);
                        promise || (promise = image_load(resources, opts.init));
                        return {
                            dataUrl: function dataUrl(draw) {
                                var promise = this.then((function(images) {
                                    return mapToCanvas(images, canvas_pool);
                                })).then((function(canvases) {
                                    return style_result(draw, canvases);
                                })).then((function(result) {
                                    return release(result, canvas_pool, {
                                        type: opts.type,
                                        encoderOptions: opts.encoderOptions
                                    });
                                }));
                                return watermark(resources, opts, promise);
                            },
                            load: function load(resources, init) {
                                var promise = this.then((function(resource) {
                                    return image_load([ resource ].concat(resources), init);
                                }));
                                return watermark(resources, opts, promise);
                            },
                            render: function render() {
                                var promise = this.then((function(resource) {
                                    return image_load([ resource ]);
                                }));
                                return watermark(resources, opts, promise);
                            },
                            blob: function blob(draw) {
                                var promise = this.dataUrl(draw).then(blob_blob);
                                return watermark(resources, opts, promise);
                            },
                            image: function image(draw) {
                                var promise = this.dataUrl(draw).then(createImage);
                                return watermark(resources, opts, promise);
                            },
                            then: function then() {
                                for (var _len = arguments.length, funcs = new Array(_len), _key = 0; _key < _len; _key++) funcs[_key] = arguments[_key];
                                return promise.then.apply(promise, funcs);
                            }
                        };
                    }
                    watermark.image = style_image;
                    watermark.text = style_text;
                    watermark.destroy = function() {
                        return canvas_pool.clear();
                    };
                } ]);
            }));
        }
    };
    var __webpack_module_cache__ = {};
    function __webpack_require__(moduleId) {
        var cachedModule = __webpack_module_cache__[moduleId];
        if (void 0 !== cachedModule) return cachedModule.exports;
        var module = __webpack_module_cache__[moduleId] = {
            exports: {}
        };
        __webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
        return module.exports;
    }
    (() => {
        "use strict";
        var watermark = __webpack_require__(832);
        const modules_flsModules = {};
        function isWebp() {
            function testWebP(callback) {
                let webP = new Image;
                webP.onload = webP.onerror = function() {
                    callback(2 == webP.height);
                };
                webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
            }
            testWebP((function(support) {
                let className = true === support ? "webp" : "no-webp";
                document.documentElement.classList.add(className);
            }));
        }
        let isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
            }
        };
        function addLoadedClass() {
            window.addEventListener("load", (function() {
                setTimeout((function() {
                    document.documentElement.classList.add("loaded");
                }), 0);
            }));
        }
        function functions_getHash() {
            if (location.hash) return location.hash.replace("#", "");
        }
        function setHash(hash) {
            hash = hash ? `#${hash}` : window.location.href.split("#")[0];
            history.pushState("", "", hash);
        }
        function fullVHfix() {
            const fullScreens = document.querySelectorAll("[data-fullscreen]");
            if (fullScreens.length && isMobile.any()) {
                window.addEventListener("resize", fixHeight);
                function fixHeight() {
                    let vh = .01 * window.innerHeight;
                    document.documentElement.style.setProperty("--vh", `${vh}px`);
                }
                fixHeight();
            }
        }
        let _slideUp = (target, duration = 500, showmore = 0) => {
            if (!target.classList.contains("_slide")) {
                target.classList.add("_slide");
                target.style.transitionProperty = "height, margin, padding";
                target.style.transitionDuration = duration + "ms";
                target.style.height = `${target.offsetHeight}px`;
                target.offsetHeight;
                target.style.overflow = "hidden";
                target.style.height = showmore ? `${showmore}px` : `0px`;
                target.style.paddingTop = 0;
                target.style.paddingBottom = 0;
                target.style.marginTop = 0;
                target.style.marginBottom = 0;
                window.setTimeout((() => {
                    target.hidden = !showmore ? true : false;
                    !showmore ? target.style.removeProperty("height") : null;
                    target.style.removeProperty("padding-top");
                    target.style.removeProperty("padding-bottom");
                    target.style.removeProperty("margin-top");
                    target.style.removeProperty("margin-bottom");
                    !showmore ? target.style.removeProperty("overflow") : null;
                    target.style.removeProperty("transition-duration");
                    target.style.removeProperty("transition-property");
                    target.classList.remove("_slide");
                    document.dispatchEvent(new CustomEvent("slideUpDone", {
                        detail: {
                            target
                        }
                    }));
                }), duration);
            }
        };
        let _slideDown = (target, duration = 500, showmore = 0) => {
            if (!target.classList.contains("_slide")) {
                target.classList.add("_slide");
                target.hidden = target.hidden ? false : null;
                showmore ? target.style.removeProperty("height") : null;
                let height = target.offsetHeight;
                target.style.overflow = "hidden";
                target.style.height = showmore ? `${showmore}px` : `0px`;
                target.style.paddingTop = 0;
                target.style.paddingBottom = 0;
                target.style.marginTop = 0;
                target.style.marginBottom = 0;
                target.offsetHeight;
                target.style.transitionProperty = "height, margin, padding";
                target.style.transitionDuration = duration + "ms";
                target.style.height = height + "px";
                target.style.removeProperty("padding-top");
                target.style.removeProperty("padding-bottom");
                target.style.removeProperty("margin-top");
                target.style.removeProperty("margin-bottom");
                window.setTimeout((() => {
                    target.style.removeProperty("height");
                    target.style.removeProperty("overflow");
                    target.style.removeProperty("transition-duration");
                    target.style.removeProperty("transition-property");
                    target.classList.remove("_slide");
                    document.dispatchEvent(new CustomEvent("slideDownDone", {
                        detail: {
                            target
                        }
                    }));
                }), duration);
            }
        };
        let _slideToggle = (target, duration = 500) => {
            if (target.hidden) return _slideDown(target, duration); else return _slideUp(target, duration);
        };
        let bodyLockStatus = true;
        let bodyUnlock = (delay = 500) => {
            let body = document.querySelector("body");
            if (bodyLockStatus) {
                let lock_padding = document.querySelectorAll("[data-lp]");
                setTimeout((() => {
                    for (let index = 0; index < lock_padding.length; index++) {
                        const el = lock_padding[index];
                        el.style.paddingRight = "0px";
                    }
                    body.style.paddingRight = "0px";
                    document.documentElement.classList.remove("lock");
                }), delay);
                bodyLockStatus = false;
                setTimeout((function() {
                    bodyLockStatus = true;
                }), delay);
            }
        };
        let bodyLock = (delay = 500) => {
            let body = document.querySelector("body");
            if (bodyLockStatus) {
                let lock_padding = document.querySelectorAll("[data-lp]");
                for (let index = 0; index < lock_padding.length; index++) {
                    const el = lock_padding[index];
                    el.style.paddingRight = window.innerWidth - document.querySelector(".wrapper").offsetWidth + "px";
                }
                body.style.paddingRight = window.innerWidth - document.querySelector(".wrapper").offsetWidth + "px";
                document.documentElement.classList.add("lock");
                bodyLockStatus = false;
                setTimeout((function() {
                    bodyLockStatus = true;
                }), delay);
            }
        };
        function spollers() {
            const spollersArray = document.querySelectorAll("[data-spollers]");
            if (spollersArray.length > 0) {
                const spollersRegular = Array.from(spollersArray).filter((function(item, index, self) {
                    return !item.dataset.spollers.split(",")[0];
                }));
                if (spollersRegular.length) initSpollers(spollersRegular);
                let mdQueriesArray = dataMediaQueries(spollersArray, "spollers");
                if (mdQueriesArray && mdQueriesArray.length) mdQueriesArray.forEach((mdQueriesItem => {
                    mdQueriesItem.matchMedia.addEventListener("change", (function() {
                        initSpollers(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
                    }));
                    initSpollers(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
                }));
                function initSpollers(spollersArray, matchMedia = false) {
                    spollersArray.forEach((spollersBlock => {
                        spollersBlock = matchMedia ? spollersBlock.item : spollersBlock;
                        if (matchMedia.matches || !matchMedia) {
                            spollersBlock.classList.add("_spoller-init");
                            initSpollerBody(spollersBlock);
                            spollersBlock.addEventListener("click", setSpollerAction);
                        } else {
                            spollersBlock.classList.remove("_spoller-init");
                            initSpollerBody(spollersBlock, false);
                            spollersBlock.removeEventListener("click", setSpollerAction);
                        }
                    }));
                }
                function initSpollerBody(spollersBlock, hideSpollerBody = true) {
                    let spollerTitles = spollersBlock.querySelectorAll("[data-spoller]");
                    if (spollerTitles.length) {
                        spollerTitles = Array.from(spollerTitles).filter((item => item.closest("[data-spollers]") === spollersBlock));
                        spollerTitles.forEach((spollerTitle => {
                            if (hideSpollerBody) {
                                spollerTitle.removeAttribute("tabindex");
                                if (!spollerTitle.classList.contains("_spoller-active")) spollerTitle.nextElementSibling.hidden = true;
                            } else {
                                spollerTitle.setAttribute("tabindex", "-1");
                                spollerTitle.nextElementSibling.hidden = false;
                            }
                        }));
                    }
                }
                function setSpollerAction(e) {
                    const el = e.target;
                    if (el.closest("[data-spoller]")) {
                        const spollerTitle = el.closest("[data-spoller]");
                        const spollersBlock = spollerTitle.closest("[data-spollers]");
                        const oneSpoller = spollersBlock.hasAttribute("data-one-spoller");
                        const spollerSpeed = spollersBlock.dataset.spollersSpeed ? parseInt(spollersBlock.dataset.spollersSpeed) : 500;
                        if (!spollersBlock.querySelectorAll("._slide").length) {
                            if (oneSpoller && !spollerTitle.classList.contains("_spoller-active")) hideSpollersBody(spollersBlock);
                            spollerTitle.classList.toggle("_spoller-active");
                            _slideToggle(spollerTitle.nextElementSibling, spollerSpeed);
                        }
                        e.preventDefault();
                    }
                }
                function hideSpollersBody(spollersBlock) {
                    const spollerActiveTitle = spollersBlock.querySelector("[data-spoller]._spoller-active");
                    const spollerSpeed = spollersBlock.dataset.spollersSpeed ? parseInt(spollersBlock.dataset.spollersSpeed) : 500;
                    if (spollerActiveTitle && !spollersBlock.querySelectorAll("._slide").length) {
                        spollerActiveTitle.classList.remove("_spoller-active");
                        _slideUp(spollerActiveTitle.nextElementSibling, spollerSpeed);
                    }
                }
                const spollersClose = document.querySelectorAll("[data-spoller-close]");
                if (spollersClose.length) document.addEventListener("click", (function(e) {
                    const el = e.target;
                    if (!el.closest("[data-spollers]")) spollersClose.forEach((spollerClose => {
                        const spollersBlock = spollerClose.closest("[data-spollers]");
                        const spollerSpeed = spollersBlock.dataset.spollersSpeed ? parseInt(spollersBlock.dataset.spollersSpeed) : 500;
                        spollerClose.classList.remove("_spoller-active");
                        _slideUp(spollerClose.nextElementSibling, spollerSpeed);
                    }));
                }));
            }
        }
        function tabs() {
            const tabs = document.querySelectorAll("[data-tabs]");
            let tabsActiveHash = [];
            if (tabs.length > 0) {
                const hash = functions_getHash();
                if (hash && hash.startsWith("tab-")) tabsActiveHash = hash.replace("tab-", "").split("-");
                tabs.forEach(((tabsBlock, index) => {
                    tabsBlock.classList.add("_tab-init");
                    tabsBlock.setAttribute("data-tabs-index", index);
                    tabsBlock.addEventListener("click", setTabsAction);
                    initTabs(tabsBlock);
                }));
                let mdQueriesArray = dataMediaQueries(tabs, "tabs");
                if (mdQueriesArray && mdQueriesArray.length) mdQueriesArray.forEach((mdQueriesItem => {
                    mdQueriesItem.matchMedia.addEventListener("change", (function() {
                        setTitlePosition(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
                    }));
                    setTitlePosition(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
                }));
            }
            function setTitlePosition(tabsMediaArray, matchMedia) {
                tabsMediaArray.forEach((tabsMediaItem => {
                    tabsMediaItem = tabsMediaItem.item;
                    let tabsTitles = tabsMediaItem.querySelector("[data-tabs-titles]");
                    let tabsTitleItems = tabsMediaItem.querySelectorAll("[data-tabs-title]");
                    let tabsContent = tabsMediaItem.querySelector("[data-tabs-body]");
                    let tabsContentItems = tabsMediaItem.querySelectorAll("[data-tabs-item]");
                    tabsTitleItems = Array.from(tabsTitleItems).filter((item => item.closest("[data-tabs]") === tabsMediaItem));
                    tabsContentItems = Array.from(tabsContentItems).filter((item => item.closest("[data-tabs]") === tabsMediaItem));
                    tabsContentItems.forEach(((tabsContentItem, index) => {
                        if (matchMedia.matches) {
                            tabsContent.append(tabsTitleItems[index]);
                            tabsContent.append(tabsContentItem);
                            tabsMediaItem.classList.add("_tab-spoller");
                        } else {
                            tabsTitles.append(tabsTitleItems[index]);
                            tabsMediaItem.classList.remove("_tab-spoller");
                        }
                    }));
                }));
            }
            function initTabs(tabsBlock) {
                let tabsTitles = tabsBlock.querySelectorAll("[data-tabs-titles]>*");
                let tabsContent = tabsBlock.querySelectorAll("[data-tabs-body]>*");
                const tabsBlockIndex = tabsBlock.dataset.tabsIndex;
                const tabsActiveHashBlock = tabsActiveHash[0] == tabsBlockIndex;
                if (tabsActiveHashBlock) {
                    const tabsActiveTitle = tabsBlock.querySelector("[data-tabs-titles]>._tab-active");
                    tabsActiveTitle ? tabsActiveTitle.classList.remove("_tab-active") : null;
                }
                if (tabsContent.length) {
                    tabsContent = Array.from(tabsContent).filter((item => item.closest("[data-tabs]") === tabsBlock));
                    tabsTitles = Array.from(tabsTitles).filter((item => item.closest("[data-tabs]") === tabsBlock));
                    tabsContent.forEach(((tabsContentItem, index) => {
                        tabsTitles[index].setAttribute("data-tabs-title", "");
                        tabsContentItem.setAttribute("data-tabs-item", "");
                        if (tabsActiveHashBlock && index == tabsActiveHash[1]) tabsTitles[index].classList.add("_tab-active");
                        tabsContentItem.hidden = !tabsTitles[index].classList.contains("_tab-active");
                    }));
                }
            }
            function setTabsStatus(tabsBlock) {
                let tabsTitles = tabsBlock.querySelectorAll("[data-tabs-title]");
                let tabsContent = tabsBlock.querySelectorAll("[data-tabs-item]");
                const tabsBlockIndex = tabsBlock.dataset.tabsIndex;
                function isTabsAnamate(tabsBlock) {
                    if (tabsBlock.hasAttribute("data-tabs-animate")) return tabsBlock.dataset.tabsAnimate > 0 ? Number(tabsBlock.dataset.tabsAnimate) : 500;
                }
                const tabsBlockAnimate = isTabsAnamate(tabsBlock);
                if (tabsContent.length > 0) {
                    const isHash = tabsBlock.hasAttribute("data-tabs-hash");
                    tabsContent = Array.from(tabsContent).filter((item => item.closest("[data-tabs]") === tabsBlock));
                    tabsTitles = Array.from(tabsTitles).filter((item => item.closest("[data-tabs]") === tabsBlock));
                    tabsContent.forEach(((tabsContentItem, index) => {
                        if (tabsTitles[index].classList.contains("_tab-active")) {
                            if (tabsBlockAnimate) _slideDown(tabsContentItem, tabsBlockAnimate); else tabsContentItem.hidden = false;
                            if (isHash && !tabsContentItem.closest(".popup")) setHash(`tab-${tabsBlockIndex}-${index}`);
                        } else if (tabsBlockAnimate) _slideUp(tabsContentItem, tabsBlockAnimate); else tabsContentItem.hidden = true;
                    }));
                }
            }
            function setTabsAction(e) {
                const el = e.target;
                if (el.closest("[data-tabs-title]")) {
                    const tabTitle = el.closest("[data-tabs-title]");
                    const tabsBlock = tabTitle.closest("[data-tabs]");
                    if (!tabTitle.classList.contains("_tab-active") && !tabsBlock.querySelector("._slide")) {
                        let tabActiveTitle = tabsBlock.querySelectorAll("[data-tabs-title]._tab-active");
                        tabActiveTitle.length ? tabActiveTitle = Array.from(tabActiveTitle).filter((item => item.closest("[data-tabs]") === tabsBlock)) : null;
                        tabActiveTitle.length ? tabActiveTitle[0].classList.remove("_tab-active") : null;
                        tabTitle.classList.add("_tab-active");
                        setTabsStatus(tabsBlock);
                    }
                    e.preventDefault();
                }
            }
        }
        function functions_FLS(message) {
            setTimeout((() => {
                if (window.FLS) console.log(message);
            }), 0);
        }
        function removeClasses(array, className) {
            for (var i = 0; i < array.length; i++) array[i].classList.remove(className);
        }
        function uniqArray(array) {
            return array.filter((function(item, index, self) {
                return self.indexOf(item) === index;
            }));
        }
        function dataMediaQueries(array, dataSetValue) {
            const media = Array.from(array).filter((function(item, index, self) {
                if (item.dataset[dataSetValue]) return item.dataset[dataSetValue].split(",")[0];
            }));
            if (media.length) {
                const breakpointsArray = [];
                media.forEach((item => {
                    const params = item.dataset[dataSetValue];
                    const breakpoint = {};
                    const paramsArray = params.split(",");
                    breakpoint.value = paramsArray[0];
                    breakpoint.type = paramsArray[1] ? paramsArray[1].trim() : "max";
                    breakpoint.item = item;
                    breakpointsArray.push(breakpoint);
                }));
                let mdQueries = breakpointsArray.map((function(item) {
                    return "(" + item.type + "-width: " + item.value + "px)," + item.value + "," + item.type;
                }));
                mdQueries = uniqArray(mdQueries);
                const mdQueriesArray = [];
                if (mdQueries.length) {
                    mdQueries.forEach((breakpoint => {
                        const paramsArray = breakpoint.split(",");
                        const mediaBreakpoint = paramsArray[1];
                        const mediaType = paramsArray[2];
                        const matchMedia = window.matchMedia(paramsArray[0]);
                        const itemsArray = breakpointsArray.filter((function(item) {
                            if (item.value === mediaBreakpoint && item.type === mediaType) return true;
                        }));
                        mdQueriesArray.push({
                            itemsArray,
                            matchMedia
                        });
                    }));
                    return mdQueriesArray;
                }
            }
        }
        function upload(selector, options = {}) {
            let files = [];
            const input = document.querySelector(selector);
            const iconDelete = document.createElement("button");
            const wrapperPreview = document.createElement("div");
            const previewActions = document.createElement("div");
            previewActions.className = "preview-actions";
            wrapperPreview.className = "wrapper-preview";
            const openButton = document.createElement("button");
            openButton.setAttribute("type", "button");
            openButton.className = "form-admin-popup-content-item-actions__link";
            openButton.textContent = "Drag and Drop or Browse";
            if (options.multi) input.setAttribute("multiple", true);
            if (options.accept && Array.isArray(options.accept)) input.setAttribute("accept", options.accept.join(","));
            if (!options.deleteIcon) {
                iconDelete.innerHTML = "&times;";
                iconDelete.className = "delete-icon";
                iconDelete.setAttribute("type", "button");
                previewActions.appendChild(iconDelete);
            }
            input.insertAdjacentElement("beforebegin", previewActions);
            input.insertAdjacentElement("afterend", wrapperPreview);
            input.insertAdjacentElement("afterend", openButton);
            const inputTrigger = () => input.click();
            const changeTrigger = event => {
                if (!event.target.files.length) return;
                files = Array.from(event.target.files);
                files.length > 0 ? previewActions.classList.add("is-trash") : null;
                files.length > 0 ? wrapperPreview.classList.add("_has-data") : null;
                files.forEach(((file, index) => {
                    if (!file.type.match("image")) return;
                    const reader = new FileReader;
                    reader.onload = ev => {
                        const src = ev.target.result;
                        watermark([ src, "./img/watermark.png" ]).image(watermark.image.lowerRight(1)).then((img => {
                            const imagePreview = `\n                            <div class="wrapper-preview__image">\n                                <div class="wrapper-preview__remove" data-name="${file.name}">&times;</div>\n                                <img src="${img.src}" alt="${file.name}" class="wrapper-preview__source" />\n                            </div>\n                        `;
                            wrapperPreview.insertAdjacentHTML("afterbegin", imagePreview);
                        }));
                    };
                    reader.readAsDataURL(file);
                }));
            };
            function removeAllImages(event) {
                const targetItem = event.target;
                const rootElement = targetItem.closest(".form-admin-popup-content-item-actions");
                if (!files.length > 0) return;
                files.splice(0, -1);
                previewActions.classList.remove("is-trash");
                wrapperPreview.classList.remove("_has-data");
                rootElement.querySelectorAll(".wrapper-preview__image").forEach((item => {
                    item.classList.add("_removing");
                    const inteerval = setInterval((function() {
                        item.remove();
                        clearInterval(inteerval);
                    }), 300);
                }));
            }
            function removeImage(event) {
                const tergetItem = event.target;
                if (!tergetItem.dataset.name) return;
                files.length <= 1 ? previewActions.classList.remove("is-trash") : null;
                files.length <= 1 ? wrapperPreview.classList.remove("_has-data") : null;
                const name = tergetItem.dataset.name;
                files = files.filter((file => file.name !== name));
                const block = wrapperPreview.querySelector(`[data-name="${name}"]`).closest(".wrapper-preview__image");
                block.classList.add("_removing");
                const inteerval = setInterval((function() {
                    block.remove();
                    clearInterval(inteerval);
                }), 300);
            }
            wrapperPreview.addEventListener("click", removeImage);
            openButton.addEventListener("click", inputTrigger);
            iconDelete.addEventListener("click", removeAllImages);
            input.addEventListener("change", changeTrigger);
        }
        class Popup {
            constructor(options) {
                let config = {
                    logging: true,
                    init: true,
                    attributeOpenButton: "data-popup",
                    attributeCloseButton: "data-close",
                    fixElementSelector: "[data-lp]",
                    youtubeAttribute: "data-popup-youtube",
                    youtubePlaceAttribute: "data-popup-youtube-place",
                    setAutoplayYoutube: true,
                    classes: {
                        popup: "popup",
                        popupContent: "popup__content",
                        popupActive: "popup_show",
                        bodyActive: "popup-show"
                    },
                    focusCatch: true,
                    closeEsc: true,
                    bodyLock: true,
                    hashSettings: {
                        location: true,
                        goHash: true
                    },
                    on: {
                        beforeOpen: function() {},
                        afterOpen: function() {},
                        beforeClose: function() {},
                        afterClose: function() {}
                    }
                };
                this.youTubeCode;
                this.isOpen = false;
                this.targetOpen = {
                    selector: false,
                    element: false
                };
                this.previousOpen = {
                    selector: false,
                    element: false
                };
                this.lastClosed = {
                    selector: false,
                    element: false
                };
                this._dataValue = false;
                this.hash = false;
                this._reopen = false;
                this._selectorOpen = false;
                this.lastFocusEl = false;
                this._focusEl = [ "a[href]", 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', "button:not([disabled]):not([aria-hidden])", "select:not([disabled]):not([aria-hidden])", "textarea:not([disabled]):not([aria-hidden])", "area[href]", "iframe", "object", "embed", "[contenteditable]", '[tabindex]:not([tabindex^="-"])' ];
                this.options = {
                    ...config,
                    ...options,
                    classes: {
                        ...config.classes,
                        ...options?.classes
                    },
                    hashSettings: {
                        ...config.hashSettings,
                        ...options?.hashSettings
                    },
                    on: {
                        ...config.on,
                        ...options?.on
                    }
                };
                this.bodyLock = false;
                this.options.init ? this.initPopups() : null;
            }
            initPopups() {
                this.popupLogging(`Проснулся`);
                this.eventsPopup();
            }
            eventsPopup() {
                document.addEventListener("click", function(e) {
                    const buttonOpen = e.target.closest(`[${this.options.attributeOpenButton}]`);
                    if (buttonOpen) {
                        e.preventDefault();
                        this._dataValue = buttonOpen.getAttribute(this.options.attributeOpenButton) ? buttonOpen.getAttribute(this.options.attributeOpenButton) : "error";
                        this.youTubeCode = buttonOpen.getAttribute(this.options.youtubeAttribute) ? buttonOpen.getAttribute(this.options.youtubeAttribute) : null;
                        if ("error" !== this._dataValue) {
                            if (!this.isOpen) this.lastFocusEl = buttonOpen;
                            this.targetOpen.selector = `${this._dataValue}`;
                            this._selectorOpen = true;
                            this.open();
                            return;
                        } else this.popupLogging(`Ой ой, не заполнен атрибут у ${buttonOpen.classList}`);
                        return;
                    }
                    const buttonClose = e.target.closest(`[${this.options.attributeCloseButton}]`);
                    if (buttonClose || !e.target.closest(`.${this.options.classes.popupContent}`) && this.isOpen) {
                        e.preventDefault();
                        this.close();
                        return;
                    }
                }.bind(this));
                document.addEventListener("keydown", function(e) {
                    if (this.options.closeEsc && 27 == e.which && "Escape" === e.code && this.isOpen) {
                        e.preventDefault();
                        this.close();
                        return;
                    }
                    if (this.options.focusCatch && 9 == e.which && this.isOpen) {
                        this._focusCatch(e);
                        return;
                    }
                }.bind(this));
                if (this.options.hashSettings.goHash) {
                    window.addEventListener("hashchange", function() {
                        if (window.location.hash) this._openToHash(); else this.close(this.targetOpen.selector);
                    }.bind(this));
                    window.addEventListener("load", function() {
                        if (window.location.hash) this._openToHash();
                    }.bind(this));
                }
            }
            open(selectorValue) {
                if (bodyLockStatus) {
                    this.bodyLock = document.documentElement.classList.contains("lock") ? true : false;
                    if (selectorValue && "string" === typeof selectorValue && "" !== selectorValue.trim()) {
                        this.targetOpen.selector = selectorValue;
                        this._selectorOpen = true;
                    }
                    if (this.isOpen) {
                        this._reopen = true;
                        this.close();
                    }
                    if (!this._selectorOpen) this.targetOpen.selector = this.lastClosed.selector;
                    if (!this._reopen) this.previousActiveElement = document.activeElement;
                    this.targetOpen.element = document.querySelector(this.targetOpen.selector);
                    if (this.targetOpen.element) {
                        if (this.youTubeCode) {
                            const codeVideo = this.youTubeCode;
                            const urlVideo = `https://www.youtube.com/embed/${codeVideo}?rel=0&showinfo=0&autoplay=1`;
                            const iframe = document.createElement("iframe");
                            iframe.setAttribute("allowfullscreen", "");
                            const autoplay = this.options.setAutoplayYoutube ? "autoplay;" : "";
                            iframe.setAttribute("allow", `${autoplay}; encrypted-media`);
                            iframe.setAttribute("src", urlVideo);
                            if (!this.targetOpen.element.querySelector(`[${this.options.youtubePlaceAttribute}]`)) {
                                this.targetOpen.element.querySelector(".popup__text").setAttribute(`${this.options.youtubePlaceAttribute}`, "");
                            }
                            this.targetOpen.element.querySelector(`[${this.options.youtubePlaceAttribute}]`).appendChild(iframe);
                        }
                        if (this.options.hashSettings.location) {
                            this._getHash();
                            this._setHash();
                        }
                        this.options.on.beforeOpen(this);
                        document.dispatchEvent(new CustomEvent("beforePopupOpen", {
                            detail: {
                                popup: this
                            }
                        }));
                        this.targetOpen.element.classList.add(this.options.classes.popupActive);
                        document.documentElement.classList.add(this.options.classes.bodyActive);
                        if (!this._reopen) !this.bodyLock ? bodyLock() : null; else this._reopen = false;
                        this.targetOpen.element.setAttribute("aria-hidden", "false");
                        this.previousOpen.selector = this.targetOpen.selector;
                        this.previousOpen.element = this.targetOpen.element;
                        this._selectorOpen = false;
                        this.isOpen = true;
                        setTimeout((() => {
                            this._focusTrap();
                        }), 50);
                        this.options.on.afterOpen(this);
                        document.dispatchEvent(new CustomEvent("afterPopupOpen", {
                            detail: {
                                popup: this
                            }
                        }));
                        this.popupLogging(`Открыл попап`);
                    } else this.popupLogging(`Ой ой, такого попапа нет.Проверьте корректность ввода. `);
                }
            }
            close(selectorValue) {
                if (selectorValue && "string" === typeof selectorValue && "" !== selectorValue.trim()) this.previousOpen.selector = selectorValue;
                if (!this.isOpen || !bodyLockStatus) return;
                this.options.on.beforeClose(this);
                document.dispatchEvent(new CustomEvent("beforePopupClose", {
                    detail: {
                        popup: this
                    }
                }));
                if (this.youTubeCode) if (this.targetOpen.element.querySelector(`[${this.options.youtubePlaceAttribute}]`)) this.targetOpen.element.querySelector(`[${this.options.youtubePlaceAttribute}]`).innerHTML = "";
                this.previousOpen.element.classList.remove(this.options.classes.popupActive);
                this.previousOpen.element.setAttribute("aria-hidden", "true");
                if (!this._reopen) {
                    document.documentElement.classList.remove(this.options.classes.bodyActive);
                    !this.bodyLock ? bodyUnlock() : null;
                    this.isOpen = false;
                }
                this._removeHash();
                if (this._selectorOpen) {
                    this.lastClosed.selector = this.previousOpen.selector;
                    this.lastClosed.element = this.previousOpen.element;
                }
                this.options.on.afterClose(this);
                document.dispatchEvent(new CustomEvent("afterPopupClose", {
                    detail: {
                        popup: this
                    }
                }));
                setTimeout((() => {
                    this._focusTrap();
                }), 50);
                this.popupLogging(`Закрыл попап`);
            }
            _getHash() {
                if (this.options.hashSettings.location) this.hash = this.targetOpen.selector.includes("#") ? this.targetOpen.selector : this.targetOpen.selector.replace(".", "#");
            }
            _openToHash() {
                let classInHash = document.querySelector(`.${window.location.hash.replace("#", "")}`) ? `.${window.location.hash.replace("#", "")}` : document.querySelector(`${window.location.hash}`) ? `${window.location.hash}` : null;
                const buttons = document.querySelector(`[${this.options.attributeOpenButton} = "${classInHash}"]`) ? document.querySelector(`[${this.options.attributeOpenButton} = "${classInHash}"]`) : document.querySelector(`[${this.options.attributeOpenButton} = "${classInHash.replace(".", "#")}"]`);
                if (buttons && classInHash) this.open(classInHash);
            }
            _setHash() {
                history.pushState("", "", this.hash);
            }
            _removeHash() {
                history.pushState("", "", window.location.href.split("#")[0]);
            }
            _focusCatch(e) {
                const focusable = this.targetOpen.element.querySelectorAll(this._focusEl);
                const focusArray = Array.prototype.slice.call(focusable);
                const focusedIndex = focusArray.indexOf(document.activeElement);
                if (e.shiftKey && 0 === focusedIndex) {
                    focusArray[focusArray.length - 1].focus();
                    e.preventDefault();
                }
                if (!e.shiftKey && focusedIndex === focusArray.length - 1) {
                    focusArray[0].focus();
                    e.preventDefault();
                }
            }
            _focusTrap() {
                const focusable = this.previousOpen.element.querySelectorAll(this._focusEl);
                if (!this.isOpen && this.lastFocusEl) this.lastFocusEl.focus(); else focusable[0].focus();
            }
            popupLogging(message) {
                this.options.logging ? functions_FLS(`[Попапос]: ${message}`) : null;
            }
        }
        modules_flsModules.popup = new Popup({});
        function formFieldsInit(options = {
            viewPass: false
        }) {
            const formFields = document.querySelectorAll("input[placeholder],textarea[placeholder]");
            if (formFields.length) formFields.forEach((formField => {
                if (!formField.hasAttribute("data-placeholder-nohide")) formField.dataset.placeholder = formField.placeholder;
            }));
            document.body.addEventListener("focusin", (function(e) {
                const targetElement = e.target;
                if ("INPUT" === targetElement.tagName || "TEXTAREA" === targetElement.tagName) {
                    if (targetElement.dataset.placeholder) targetElement.placeholder = "";
                    if (!targetElement.hasAttribute("data-no-focus-classes")) {
                        targetElement.classList.add("_form-focus");
                        targetElement.parentElement.classList.add("_form-focus");
                    }
                    formValidate.removeError(targetElement);
                }
            }));
            document.body.addEventListener("focusout", (function(e) {
                const targetElement = e.target;
                if ("INPUT" === targetElement.tagName || "TEXTAREA" === targetElement.tagName) {
                    if (targetElement.dataset.placeholder) targetElement.placeholder = targetElement.dataset.placeholder;
                    if (!targetElement.hasAttribute("data-no-focus-classes")) {
                        targetElement.classList.remove("_form-focus");
                        targetElement.parentElement.classList.remove("_form-focus");
                    }
                    if (targetElement.hasAttribute("data-validate")) formValidate.validateInput(targetElement);
                }
            }));
            if (options.viewPass) document.addEventListener("click", (function(e) {
                let targetElement = e.target;
                if (targetElement.closest('[class*="__viewpass"]')) {
                    let inputType = targetElement.classList.contains("_viewpass-active") ? "password" : "text";
                    targetElement.parentElement.querySelector("input").setAttribute("type", inputType);
                    targetElement.classList.toggle("_viewpass-active");
                }
            }));
        }
        let formValidate = {
            getErrors(form) {
                let error = 0;
                let formRequiredItems = form.querySelectorAll("*[data-required]");
                if (formRequiredItems.length) formRequiredItems.forEach((formRequiredItem => {
                    if ((null !== formRequiredItem.offsetParent || "SELECT" === formRequiredItem.tagName) && !formRequiredItem.disabled) error += this.validateInput(formRequiredItem);
                }));
                return error;
            },
            validateInput(formRequiredItem) {
                let error = 0;
                if ("email" === formRequiredItem.dataset.required) {
                    formRequiredItem.value = formRequiredItem.value.replace(" ", "");
                    if (this.emailTest(formRequiredItem)) {
                        this.addError(formRequiredItem);
                        error++;
                    } else this.removeError(formRequiredItem);
                } else if ("checkbox" === formRequiredItem.type && !formRequiredItem.checked) {
                    this.addError(formRequiredItem);
                    error++;
                } else if (!formRequiredItem.value) {
                    this.addError(formRequiredItem);
                    error++;
                } else this.removeError(formRequiredItem);
                return error;
            },
            addError(formRequiredItem) {
                formRequiredItem.classList.add("_form-error");
                formRequiredItem.parentElement.classList.add("_form-error");
                let inputError = formRequiredItem.parentElement.querySelector(".form__error");
                if (inputError) formRequiredItem.parentElement.removeChild(inputError);
                if (formRequiredItem.dataset.error) formRequiredItem.parentElement.insertAdjacentHTML("beforeend", `<div class="form__error">${formRequiredItem.dataset.error}</div>`);
            },
            removeError(formRequiredItem) {
                formRequiredItem.classList.remove("_form-error");
                formRequiredItem.parentElement.classList.remove("_form-error");
                if (formRequiredItem.parentElement.querySelector(".form__error")) formRequiredItem.parentElement.removeChild(formRequiredItem.parentElement.querySelector(".form__error"));
            },
            formClean(form) {
                form.reset();
                setTimeout((() => {
                    let inputs = form.querySelectorAll("input,textarea");
                    for (let index = 0; index < inputs.length; index++) {
                        const el = inputs[index];
                        el.parentElement.classList.remove("_form-focus");
                        el.classList.remove("_form-focus");
                        formValidate.removeError(el);
                    }
                    let checkboxes = form.querySelectorAll(".checkbox__input");
                    if (checkboxes.length > 0) for (let index = 0; index < checkboxes.length; index++) {
                        const checkbox = checkboxes[index];
                        checkbox.checked = false;
                    }
                    if (modules_flsModules.select) {
                        let selects = form.querySelectorAll(".select");
                        if (selects.length) for (let index = 0; index < selects.length; index++) {
                            const select = selects[index].querySelector("select");
                            modules_flsModules.select.selectBuild(select);
                        }
                    }
                }), 0);
            },
            emailTest(formRequiredItem) {
                return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(formRequiredItem.value);
            }
        };
        class SelectConstructor {
            constructor(props, data = null) {
                let defaultConfig = {
                    init: true,
                    logging: true
                };
                this.config = Object.assign(defaultConfig, props);
                this.selectClasses = {
                    classSelect: "select",
                    classSelectBody: "select__body",
                    classSelectTitle: "select__title",
                    classSelectValue: "select__value",
                    classSelectLabel: "select__label",
                    classSelectInput: "select__input",
                    classSelectText: "select__text",
                    classSelectLink: "select__link",
                    classSelectOptions: "select__options",
                    classSelectOptionsScroll: "select__scroll",
                    classSelectOption: "select__option",
                    classSelectContent: "select__content",
                    classSelectRow: "select__row",
                    classSelectData: "select__asset",
                    classSelectDisabled: "_select-disabled",
                    classSelectTag: "_select-tag",
                    classSelectOpen: "_select-open",
                    classSelectActive: "_select-active",
                    classSelectFocus: "_select-focus",
                    classSelectMultiple: "_select-multiple",
                    classSelectCheckBox: "_select-checkbox",
                    classSelectOptionSelected: "_select-selected",
                    classSelectPseudoLabel: "_select-pseudo-label"
                };
                this._this = this;
                if (this.config.init) {
                    const selectItems = data ? document.querySelectorAll(data) : document.querySelectorAll("select");
                    if (selectItems.length) {
                        this.selectsInit(selectItems);
                        this.setLogging(`Проснулся, построил селектов: (${selectItems.length})`);
                    } else this.setLogging("Сплю, нет ни одного select zzZZZzZZz");
                }
            }
            getSelectClass(className) {
                return `.${className}`;
            }
            getSelectElement(selectItem, className) {
                return {
                    originalSelect: selectItem.querySelector("select"),
                    selectElement: selectItem.querySelector(this.getSelectClass(className))
                };
            }
            selectsInit(selectItems) {
                selectItems.forEach(((originalSelect, index) => {
                    this.selectInit(originalSelect, index + 1);
                }));
                document.addEventListener("click", function(e) {
                    this.selectsActions(e);
                }.bind(this));
                document.addEventListener("keydown", function(e) {
                    this.selectsActions(e);
                }.bind(this));
                document.addEventListener("focusin", function(e) {
                    this.selectsActions(e);
                }.bind(this));
                document.addEventListener("focusout", function(e) {
                    this.selectsActions(e);
                }.bind(this));
            }
            selectInit(originalSelect, index) {
                const _this = this;
                let selectItem = document.createElement("div");
                selectItem.classList.add(this.selectClasses.classSelect);
                originalSelect.parentNode.insertBefore(selectItem, originalSelect);
                selectItem.appendChild(originalSelect);
                originalSelect.hidden = true;
                index ? originalSelect.dataset.id = index : null;
                if (this.getSelectPlaceholder(originalSelect)) {
                    originalSelect.dataset.placeholder = this.getSelectPlaceholder(originalSelect).value;
                    if (this.getSelectPlaceholder(originalSelect).label.show) {
                        const selectItemTitle = this.getSelectElement(selectItem, this.selectClasses.classSelectTitle).selectElement;
                        selectItemTitle.insertAdjacentHTML("afterbegin", `<span class="${this.selectClasses.classSelectLabel}">${this.getSelectPlaceholder(originalSelect).label.text ? this.getSelectPlaceholder(originalSelect).label.text : this.getSelectPlaceholder(originalSelect).value}</span>`);
                    }
                }
                selectItem.insertAdjacentHTML("beforeend", `<div class="${this.selectClasses.classSelectBody}"><div hidden class="${this.selectClasses.classSelectOptions}"></div></div>`);
                this.selectBuild(originalSelect);
                originalSelect.dataset.speed = originalSelect.dataset.speed ? originalSelect.dataset.speed : "150";
                originalSelect.addEventListener("change", (function(e) {
                    _this.selectChange(e);
                }));
            }
            selectBuild(originalSelect) {
                const selectItem = originalSelect.parentElement;
                selectItem.dataset.id = originalSelect.dataset.id;
                selectItem.classList.add(originalSelect.getAttribute("class") ? `select_${originalSelect.getAttribute("class")}` : "");
                originalSelect.multiple ? selectItem.classList.add(this.selectClasses.classSelectMultiple) : selectItem.classList.remove(this.selectClasses.classSelectMultiple);
                originalSelect.hasAttribute("data-checkbox") && originalSelect.multiple ? selectItem.classList.add(this.selectClasses.classSelectCheckBox) : selectItem.classList.remove(this.selectClasses.classSelectCheckBox);
                this.setSelectTitleValue(selectItem, originalSelect);
                this.setOptions(selectItem, originalSelect);
                originalSelect.hasAttribute("data-search") ? this.searchActions(selectItem) : null;
                originalSelect.hasAttribute("data-open") ? this.selectAction(selectItem) : null;
                this.selectDisabled(selectItem, originalSelect);
            }
            selectsActions(e) {
                const targetElement = e.target;
                const targetType = e.type;
                if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelect)) || targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTag))) {
                    const selectItem = targetElement.closest(".select") ? targetElement.closest(".select") : document.querySelector(`.${this.selectClasses.classSelect}[data-id="${targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTag)).dataset.selectId}"]`);
                    const originalSelect = this.getSelectElement(selectItem).originalSelect;
                    if ("click" === targetType) {
                        if (!originalSelect.disabled) if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTag))) {
                            const targetTag = targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTag));
                            const optionItem = document.querySelector(`.${this.selectClasses.classSelect}[data-id="${targetTag.dataset.selectId}"] .select__option[data-value="${targetTag.dataset.value}"]`);
                            this.optionAction(selectItem, originalSelect, optionItem);
                        } else if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTitle))) this.selectAction(selectItem); else if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelectOption))) {
                            const optionItem = targetElement.closest(this.getSelectClass(this.selectClasses.classSelectOption));
                            this.optionAction(selectItem, originalSelect, optionItem);
                        }
                    } else if ("focusin" === targetType || "focusout" === targetType) {
                        if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelect))) "focusin" === targetType ? selectItem.classList.add(this.selectClasses.classSelectFocus) : selectItem.classList.remove(this.selectClasses.classSelectFocus);
                    } else if ("keydown" === targetType && "Escape" === e.code) this.selectsСlose();
                } else this.selectsСlose();
            }
            selectsСlose(selectOneGroup) {
                const selectsGroup = selectOneGroup ? selectOneGroup : document;
                const selectActiveItems = selectsGroup.querySelectorAll(`${this.getSelectClass(this.selectClasses.classSelect)}${this.getSelectClass(this.selectClasses.classSelectOpen)}`);
                if (selectActiveItems.length) selectActiveItems.forEach((selectActiveItem => {
                    this.selectСlose(selectActiveItem);
                }));
            }
            selectСlose(selectItem) {
                const originalSelect = this.getSelectElement(selectItem).originalSelect;
                const selectOptions = this.getSelectElement(selectItem, this.selectClasses.classSelectOptions).selectElement;
                if (!selectOptions.classList.contains("_slide")) {
                    selectItem.classList.remove(this.selectClasses.classSelectOpen);
                    _slideUp(selectOptions, originalSelect.dataset.speed);
                }
            }
            selectAction(selectItem) {
                const originalSelect = this.getSelectElement(selectItem).originalSelect;
                const selectOptions = this.getSelectElement(selectItem, this.selectClasses.classSelectOptions).selectElement;
                if (originalSelect.closest("[data-one-select]")) {
                    const selectOneGroup = originalSelect.closest("[data-one-select]");
                    this.selectsСlose(selectOneGroup);
                }
                if (!selectOptions.classList.contains("_slide")) {
                    selectItem.classList.toggle(this.selectClasses.classSelectOpen);
                    _slideToggle(selectOptions, originalSelect.dataset.speed);
                }
            }
            setSelectTitleValue(selectItem, originalSelect) {
                const selectItemBody = this.getSelectElement(selectItem, this.selectClasses.classSelectBody).selectElement;
                const selectItemTitle = this.getSelectElement(selectItem, this.selectClasses.classSelectTitle).selectElement;
                if (selectItemTitle) selectItemTitle.remove();
                selectItemBody.insertAdjacentHTML("afterbegin", this.getSelectTitleValue(selectItem, originalSelect));
            }
            getSelectTitleValue(selectItem, originalSelect) {
                let selectTitleValue = this.getSelectedOptionsData(originalSelect, 2).html;
                if (originalSelect.multiple && originalSelect.hasAttribute("data-tags")) {
                    selectTitleValue = this.getSelectedOptionsData(originalSelect).elements.map((option => `<span role="button" data-select-id="${selectItem.dataset.id}" data-value="${option.value}" class="_select-tag">${this.getSelectElementContent(option)}</span>`)).join("");
                    if (originalSelect.dataset.tags && document.querySelector(originalSelect.dataset.tags)) {
                        document.querySelector(originalSelect.dataset.tags).innerHTML = selectTitleValue;
                        if (originalSelect.hasAttribute("data-search")) selectTitleValue = false;
                    }
                }
                selectTitleValue = selectTitleValue.length ? selectTitleValue : originalSelect.dataset.placeholder ? originalSelect.dataset.placeholder : "";
                let pseudoAttribute = "";
                let pseudoAttributeClass = "";
                if (originalSelect.hasAttribute("data-pseudo-label")) {
                    pseudoAttribute = originalSelect.dataset.pseudoLabel ? ` data-pseudo-label="${originalSelect.dataset.pseudoLabel}"` : ` data-pseudo-label="Заполните атрибут"`;
                    pseudoAttributeClass = ` ${this.selectClasses.classSelectPseudoLabel}`;
                }
                this.getSelectedOptionsData(originalSelect).values.length ? selectItem.classList.add(this.selectClasses.classSelectActive) : selectItem.classList.remove(this.selectClasses.classSelectActive);
                if (originalSelect.hasAttribute("data-search")) return `<div class="${this.selectClasses.classSelectTitle}"><span${pseudoAttribute} class="${this.selectClasses.classSelectValue}"><input autocomplete="off" type="text" placeholder="${selectTitleValue}" data-placeholder="${selectTitleValue}" class="${this.selectClasses.classSelectInput}"></span></div>`; else {
                    const customClass = this.getSelectedOptionsData(originalSelect).elements.length && this.getSelectedOptionsData(originalSelect).elements[0].dataset.class ? ` ${this.getSelectedOptionsData(originalSelect).elements[0].dataset.class}` : "";
                    return `<button type="button" class="${this.selectClasses.classSelectTitle}"><span${pseudoAttribute} class="${this.selectClasses.classSelectValue}${pseudoAttributeClass}"><span class="${this.selectClasses.classSelectContent}${customClass}">${selectTitleValue}</span></span></button>`;
                }
            }
            getSelectElementContent(selectOption) {
                const selectOptionData = selectOption.dataset.asset ? `${selectOption.dataset.asset}` : "";
                const selectOptionDataHTML = selectOptionData.indexOf("img") >= 0 ? `<img src="${selectOptionData}" alt="">` : selectOptionData;
                let selectOptionContentHTML = ``;
                selectOptionContentHTML += selectOptionData ? `<span class="${this.selectClasses.classSelectRow}">` : "";
                selectOptionContentHTML += selectOptionData ? `<span class="${this.selectClasses.classSelectData}">` : "";
                selectOptionContentHTML += selectOptionData ? selectOptionDataHTML : "";
                selectOptionContentHTML += selectOptionData ? `</span>` : "";
                selectOptionContentHTML += selectOptionData ? `<span class="${this.selectClasses.classSelectText}">` : "";
                selectOptionContentHTML += selectOption.textContent;
                selectOptionContentHTML += selectOptionData ? `</span>` : "";
                selectOptionContentHTML += selectOptionData ? `</span>` : "";
                return selectOptionContentHTML;
            }
            getSelectPlaceholder(originalSelect) {
                const selectPlaceholder = Array.from(originalSelect.options).find((option => !option.value));
                if (selectPlaceholder) return {
                    value: selectPlaceholder.textContent,
                    show: selectPlaceholder.hasAttribute("data-show"),
                    label: {
                        show: selectPlaceholder.hasAttribute("data-label"),
                        text: selectPlaceholder.dataset.label
                    }
                };
            }
            getSelectedOptionsData(originalSelect, type) {
                let selectedOptions = [];
                if (originalSelect.multiple) selectedOptions = Array.from(originalSelect.options).filter((option => option.value)).filter((option => option.selected)); else selectedOptions.push(originalSelect.options[originalSelect.selectedIndex]);
                return {
                    elements: selectedOptions.map((option => option)),
                    values: selectedOptions.filter((option => option.value)).map((option => option.value)),
                    html: selectedOptions.map((option => this.getSelectElementContent(option)))
                };
            }
            getOptions(originalSelect) {
                let selectOptionsScroll = originalSelect.hasAttribute("data-scroll") ? `data-simplebar` : "";
                let selectOptionsScrollHeight = originalSelect.dataset.scroll ? `style="max-height:${originalSelect.dataset.scroll}px"` : "";
                let selectOptions = Array.from(originalSelect.options);
                if (selectOptions.length > 0) {
                    let selectOptionsHTML = ``;
                    if (this.getSelectPlaceholder(originalSelect) && !this.getSelectPlaceholder(originalSelect).show || originalSelect.multiple) selectOptions = selectOptions.filter((option => option.value));
                    selectOptionsHTML += selectOptionsScroll ? `<div ${selectOptionsScroll} ${selectOptionsScrollHeight} class="${this.selectClasses.classSelectOptionsScroll}">` : "";
                    selectOptions.forEach((selectOption => {
                        selectOptionsHTML += this.getOption(selectOption, originalSelect);
                    }));
                    selectOptionsHTML += selectOptionsScroll ? `</div>` : "";
                    return selectOptionsHTML;
                }
            }
            getOption(selectOption, originalSelect) {
                const selectOptionSelected = selectOption.selected && originalSelect.multiple ? ` ${this.selectClasses.classSelectOptionSelected}` : "";
                const selectOptionHide = selectOption.selected && !originalSelect.hasAttribute("data-show-selected") && !originalSelect.multiple ? `hidden` : ``;
                const selectOptionClass = selectOption.dataset.class ? ` ${selectOption.dataset.class}` : "";
                const selectOptionLink = selectOption.dataset.href ? selectOption.dataset.href : false;
                const selectOptionLinkTarget = selectOption.hasAttribute("data-href-blank") ? `target="_blank"` : "";
                let selectOptionHTML = ``;
                selectOptionHTML += selectOptionLink ? `<a ${selectOptionLinkTarget} ${selectOptionHide} href="${selectOptionLink}" data-value="${selectOption.value}" class="${this.selectClasses.classSelectOption}${selectOptionClass}${selectOptionSelected}">` : `<button ${selectOptionHide} class="${this.selectClasses.classSelectOption}${selectOptionClass}${selectOptionSelected}" data-value="${selectOption.value}" type="button">`;
                selectOptionHTML += this.getSelectElementContent(selectOption);
                selectOptionHTML += selectOptionLink ? `</a>` : `</button>`;
                return selectOptionHTML;
            }
            setOptions(selectItem, originalSelect) {
                const selectItemOptions = this.getSelectElement(selectItem, this.selectClasses.classSelectOptions).selectElement;
                selectItemOptions.innerHTML = this.getOptions(originalSelect);
            }
            optionAction(selectItem, originalSelect, optionItem) {
                if (originalSelect.multiple) {
                    optionItem.classList.toggle(this.selectClasses.classSelectOptionSelected);
                    const originalSelectSelectedItems = this.getSelectedOptionsData(originalSelect).elements;
                    originalSelectSelectedItems.forEach((originalSelectSelectedItem => {
                        originalSelectSelectedItem.removeAttribute("selected");
                    }));
                    const selectSelectedItems = selectItem.querySelectorAll(this.getSelectClass(this.selectClasses.classSelectOptionSelected));
                    selectSelectedItems.forEach((selectSelectedItems => {
                        originalSelect.querySelector(`option[value="${selectSelectedItems.dataset.value}"]`).setAttribute("selected", "selected");
                    }));
                } else {
                    if (!originalSelect.hasAttribute("data-show-selected")) {
                        if (selectItem.querySelector(`${this.getSelectClass(this.selectClasses.classSelectOption)}[hidden]`)) selectItem.querySelector(`${this.getSelectClass(this.selectClasses.classSelectOption)}[hidden]`).hidden = false;
                        optionItem.hidden = true;
                    }
                    originalSelect.value = optionItem.hasAttribute("data-value") ? optionItem.dataset.value : optionItem.textContent;
                    this.selectAction(selectItem);
                }
                this.setSelectTitleValue(selectItem, originalSelect);
                this.setSelectChange(originalSelect);
            }
            selectChange(e) {
                const originalSelect = e.target;
                this.selectBuild(originalSelect);
                this.setSelectChange(originalSelect);
            }
            setSelectChange(originalSelect) {
                if (originalSelect.hasAttribute("data-validate")) formValidate.validateInput(originalSelect);
                if (originalSelect.hasAttribute("data-submit") && originalSelect.value) {
                    let tempButton = document.createElement("button");
                    tempButton.type = "submit";
                    originalSelect.closest("form").append(tempButton);
                    tempButton.click();
                    tempButton.remove();
                }
                const selectItem = originalSelect.parentElement;
                this.selectCallback(selectItem, originalSelect);
            }
            selectDisabled(selectItem, originalSelect) {
                if (originalSelect.disabled) {
                    selectItem.classList.add(this.selectClasses.classSelectDisabled);
                    this.getSelectElement(selectItem, this.selectClasses.classSelectTitle).selectElement.disabled = true;
                } else {
                    selectItem.classList.remove(this.selectClasses.classSelectDisabled);
                    this.getSelectElement(selectItem, this.selectClasses.classSelectTitle).selectElement.disabled = false;
                }
            }
            searchActions(selectItem) {
                this.getSelectElement(selectItem).originalSelect;
                const selectInput = this.getSelectElement(selectItem, this.selectClasses.classSelectInput).selectElement;
                const selectOptions = this.getSelectElement(selectItem, this.selectClasses.classSelectOptions).selectElement;
                const selectOptionsItems = selectOptions.querySelectorAll(`.${this.selectClasses.classSelectOption}`);
                const _this = this;
                selectInput.addEventListener("input", (function() {
                    selectOptionsItems.forEach((selectOptionsItem => {
                        if (selectOptionsItem.textContent.toUpperCase().indexOf(selectInput.value.toUpperCase()) >= 0) selectOptionsItem.hidden = false; else selectOptionsItem.hidden = true;
                    }));
                    true === selectOptions.hidden ? _this.selectAction(selectItem) : null;
                }));
            }
            selectCallback(selectItem, originalSelect) {
                document.dispatchEvent(new CustomEvent("selectCallback", {
                    detail: {
                        select: originalSelect
                    }
                }));
            }
            setLogging(message) {
                this.config.logging ? functions_FLS(`[select]: ${message}`) : null;
            }
        }
        modules_flsModules.select = new SelectConstructor({});
        var lazyload_min = __webpack_require__(732);
        new lazyload_min({
            elements_selector: "[data-src],[data-srcset]",
            class_loaded: "_lazy-loaded",
            use_native: true
        });
        let addWindowScrollEvent = false;
        setTimeout((() => {
            if (addWindowScrollEvent) {
                let windowScroll = new Event("windowScroll");
                window.addEventListener("scroll", (function(e) {
                    document.dispatchEvent(windowScroll);
                }));
            }
        }), 0);
        function DynamicAdapt(type) {
            this.type = type;
        }
        DynamicAdapt.prototype.init = function() {
            const _this = this;
            this.оbjects = [];
            this.daClassname = "_dynamic_adapt_";
            this.nodes = document.querySelectorAll("[data-da]");
            for (let i = 0; i < this.nodes.length; i++) {
                const node = this.nodes[i];
                const data = node.dataset.da.trim();
                const dataArray = data.split(",");
                const оbject = {};
                оbject.element = node;
                оbject.parent = node.parentNode;
                оbject.destination = document.querySelector(dataArray[0].trim());
                оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : "767";
                оbject.place = dataArray[2] ? dataArray[2].trim() : "last";
                оbject.index = this.indexInParent(оbject.parent, оbject.element);
                this.оbjects.push(оbject);
            }
            this.arraySort(this.оbjects);
            this.mediaQueries = Array.prototype.map.call(this.оbjects, (function(item) {
                return "(" + this.type + "-width: " + item.breakpoint + "px)," + item.breakpoint;
            }), this);
            this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, (function(item, index, self) {
                return Array.prototype.indexOf.call(self, item) === index;
            }));
            for (let i = 0; i < this.mediaQueries.length; i++) {
                const media = this.mediaQueries[i];
                const mediaSplit = String.prototype.split.call(media, ",");
                const matchMedia = window.matchMedia(mediaSplit[0]);
                const mediaBreakpoint = mediaSplit[1];
                const оbjectsFilter = Array.prototype.filter.call(this.оbjects, (function(item) {
                    return item.breakpoint === mediaBreakpoint;
                }));
                matchMedia.addListener((function() {
                    _this.mediaHandler(matchMedia, оbjectsFilter);
                }));
                this.mediaHandler(matchMedia, оbjectsFilter);
            }
        };
        DynamicAdapt.prototype.mediaHandler = function(matchMedia, оbjects) {
            if (matchMedia.matches) for (let i = 0; i < оbjects.length; i++) {
                const оbject = оbjects[i];
                оbject.index = this.indexInParent(оbject.parent, оbject.element);
                this.moveTo(оbject.place, оbject.element, оbject.destination);
            } else for (let i = оbjects.length - 1; i >= 0; i--) {
                const оbject = оbjects[i];
                if (оbject.element.classList.contains(this.daClassname)) this.moveBack(оbject.parent, оbject.element, оbject.index);
            }
        };
        DynamicAdapt.prototype.moveTo = function(place, element, destination) {
            element.classList.add(this.daClassname);
            if ("last" === place || place >= destination.children.length) {
                destination.insertAdjacentElement("beforeend", element);
                return;
            }
            if ("first" === place) {
                destination.insertAdjacentElement("afterbegin", element);
                return;
            }
            destination.children[place].insertAdjacentElement("beforebegin", element);
        };
        DynamicAdapt.prototype.moveBack = function(parent, element, index) {
            element.classList.remove(this.daClassname);
            if (void 0 !== parent.children[index]) parent.children[index].insertAdjacentElement("beforebegin", element); else parent.insertAdjacentElement("beforeend", element);
        };
        DynamicAdapt.prototype.indexInParent = function(parent, element) {
            const array = Array.prototype.slice.call(parent.children);
            return Array.prototype.indexOf.call(array, element);
        };
        DynamicAdapt.prototype.arraySort = function(arr) {
            if ("min" === this.type) Array.prototype.sort.call(arr, (function(a, b) {
                if (a.breakpoint === b.breakpoint) {
                    if (a.place === b.place) return 0;
                    if ("first" === a.place || "last" === b.place) return -1;
                    if ("last" === a.place || "first" === b.place) return 1;
                    return a.place - b.place;
                }
                return a.breakpoint - b.breakpoint;
            })); else {
                Array.prototype.sort.call(arr, (function(a, b) {
                    if (a.breakpoint === b.breakpoint) {
                        if (a.place === b.place) return 0;
                        if ("first" === a.place || "last" === b.place) return 1;
                        if ("last" === a.place || "first" === b.place) return -1;
                        return b.place - a.place;
                    }
                    return b.breakpoint - a.breakpoint;
                }));
                return;
            }
        };
        const da = new DynamicAdapt("max");
        da.init();
        !function(e, t) {
            "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.datepicker = t() : e.datepicker = t();
        }(window, (function() {
            return function(e) {
                var t = {};
                function n(a) {
                    if (t[a]) return t[a].exports;
                    var r = t[a] = {
                        i: a,
                        l: !1,
                        exports: {}
                    };
                    return e[a].call(r.exports, r, r.exports, n), r.l = !0, r.exports;
                }
                return n.m = e, n.c = t, n.d = function(e, t, a) {
                    n.o(e, t) || Object.defineProperty(e, t, {
                        enumerable: !0,
                        get: a
                    });
                }, n.r = function(e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                        value: "Module"
                    }), Object.defineProperty(e, "__esModule", {
                        value: !0
                    });
                }, n.t = function(e, t) {
                    if (1 & t && (e = n(e)), 8 & t) return e;
                    if (4 & t && "object" == typeof e && e && e.__esModule) return e;
                    var a = Object.create(null);
                    if (n.r(a), Object.defineProperty(a, "default", {
                        enumerable: !0,
                        value: e
                    }), 2 & t && "string" != typeof e) for (var r in e) n.d(a, r, function(t) {
                        return e[t];
                    }.bind(null, r));
                    return a;
                }, n.n = function(e) {
                    var t = e && e.__esModule ? function() {
                        return e.default;
                    } : function() {
                        return e;
                    };
                    return n.d(t, "a", t), t;
                }, n.o = function(e, t) {
                    return Object.prototype.hasOwnProperty.call(e, t);
                }, n.p = "", n(n.s = 0);
            }([ function(e, t, n) {
                n(1);
                var a = [], r = [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ], i = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ], s = {
                    t: "top",
                    r: "right",
                    b: "bottom",
                    l: "left",
                    c: "centered"
                };
                function o() {}
                var l = [ "click", "focusin", "keydown", "input" ];
                function c(e) {
                    return Array.isArray(e) ? e.map(c) : "[object Object]" === {}.toString.call(e) ? Object.keys(e).reduce((function(t, n) {
                        return t[n] = c(e[n]), t;
                    }), {}) : e;
                }
                function d(e, t) {
                    var n = e.calendar.querySelector(".qs-overlay"), a = n && !n.classList.contains("qs-hidden");
                    t = t || new Date(e.currentYear, e.currentMonth), e.calendar.innerHTML = [ u(t, e, a), h(t, e, a), f(e, a) ].join(""), 
                    a && setTimeout((function() {
                        w(!0, e);
                    }), 10);
                }
                function u(e, t, n) {
                    return [ '<div class="qs-controls' + (n ? " qs-blur" : "") + '">', '<div class="qs-arrow qs-left"></div>', '<div class="qs-month-year">', '<span class="qs-month">' + t.months[e.getMonth()] + "</span>", '<span class="qs-year">' + e.getFullYear() + "</span>", "</div>", '<div class="qs-arrow qs-right"></div>', "</div>" ].join("");
                }
                function h(e, t, n) {
                    var a = t.currentMonth, r = t.currentYear, i = t.dateSelected, s = t.maxDate, o = t.minDate, l = t.showAllDates, c = t.days, d = t.disabledDates, u = t.disabler, h = t.noWeekends, f = t.startDay, v = t.weekendIndices, m = t.events, y = t.getRange ? t.getRange() : {}, p = +y.start, b = +y.end, D = new Date, q = r === D.getFullYear() && a === D.getMonth(), S = g(new Date(e).setDate(1)), w = S.getDay() - f, M = w < 0 ? 7 : 0;
                    S.setMonth(S.getMonth() + 1), S.setDate(0);
                    var x = S.getDate(), L = [], C = M + 7 * ((w + x) / 7 | 0);
                    C += (w + x) % 7 ? 7 : 0, 0 !== f && 0 === w && (C += 7);
                    for (var P = 1; P <= C; P++) {
                        var j = (P - 1) % 7, k = c[j], Y = P - (w >= 0 ? w : 7 + w), O = new Date(r, a, Y), N = m[+O], E = "qs-num", I = '<span class="qs-num">' + O.getDate() + "</span>", A = p && b && +O >= p && +O <= b;
                        Y < 1 || Y > x ? (E = "qs-empty qs-outside-current-month", l ? (N && (E += " qs-event"), 
                        E += " qs-disabled") : I = "") : ((o && O < o || s && O > s || u(O) || d.some((function(e) {
                            return e === +O;
                        })) || h && v.some((function(e) {
                            return e === j;
                        }))) && (E = "qs-disabled"), N && (E += " qs-event"), q && Y === D.getDate() && (E += " qs-current"), 
                        +O == +i && (E += " qs-active"), A && (E += " qs-range-date-" + j, p !== b && (E += +O === p ? " qs-range-date-start qs-active" : +O === b ? " qs-range-date-end qs-active" : " qs-range-date-middle"))), 
                        L.push('<div class="qs-square ' + E + " " + k + '">' + I + "</div>");
                    }
                    var F = c.map((function(e) {
                        return '<div class="qs-square qs-day">' + e + "</div>";
                    })).concat(L);
                    if (F.length % 7 != 0) throw "Calendar not constructed properly. The # of squares should be a multiple of 7.";
                    return F.unshift('<div class="qs-squares' + (n ? " qs-blur" : "") + '">'), F.push("</div>"), 
                    F.join("");
                }
                function f(e, t) {
                    var n = e.overlayPlaceholder, a = e.overlayButton;
                    return [ '<div class="qs-overlay' + (t ? "" : " qs-hidden") + '">', "<div>", '<input class="qs-overlay-year" placeholder="' + n + '" />', '<div class="qs-close">&#10005;</div>', "</div>", '<div class="qs-overlay-month-container">' + e.overlayMonths.map((function(e, t) {
                        return [ '<div class="qs-overlay-month" data-month-num="' + t + '">', '<span data-month-num="' + t + '">' + e + "</span>", "</div>" ].join("");
                    })).join("") + "</div>", '<div class="qs-submit qs-disabled">' + a + "</div>", "</div>" ].join("");
                }
                function v(e, t, n) {
                    var a = t.el, r = t.calendar.querySelector(".qs-active"), i = e.textContent, s = t.sibling;
                    (a.disabled || a.readOnly) && t.respectDisabledReadOnly || (t.dateSelected = n ? void 0 : new Date(t.currentYear, t.currentMonth, i), 
                    r && r.classList.remove("qs-active"), n || e.classList.add("qs-active"), y(a, t, n), 
                    n || q(t), s && (m({
                        instance: t,
                        deselect: n
                    }), t.first && !s.dateSelected && (s.currentYear = t.currentYear, s.currentMonth = t.currentMonth, 
                    s.currentMonthName = t.currentMonthName), d(t), d(s)), t.onSelect(t, n ? void 0 : new Date(t.dateSelected)));
                }
                function m(e) {
                    var t = e.instance.first ? e.instance : e.instance.sibling, n = t.sibling;
                    t === e.instance ? e.deselect ? (t.minDate = t.originalMinDate, n.minDate = n.originalMinDate) : n.minDate = t.dateSelected : e.deselect ? (n.maxDate = n.originalMaxDate, 
                    t.maxDate = t.originalMaxDate) : t.maxDate = n.dateSelected;
                }
                function y(e, t, n) {
                    if (!t.nonInput) return n ? e.value = "" : t.formatter !== o ? t.formatter(e, t.dateSelected, t) : void (e.value = t.dateSelected.toDateString());
                }
                function p(e, t, n, a) {
                    n || a ? (n && (t.currentYear = +n), a && (t.currentMonth = +a)) : (t.currentMonth += e.contains("qs-right") ? 1 : -1, 
                    12 === t.currentMonth ? (t.currentMonth = 0, t.currentYear++) : -1 === t.currentMonth && (t.currentMonth = 11, 
                    t.currentYear--)), t.currentMonthName = t.months[t.currentMonth], d(t), t.onMonthChange(t);
                }
                function b(e) {
                    if (!e.noPosition) {
                        var t = e.position.top, n = e.position.right;
                        if (e.position.centered) return e.calendarContainer.classList.add("qs-centered");
                        var a = [ e.parent, e.el, e.calendarContainer ].map((function(e) {
                            return e.getBoundingClientRect();
                        })), r = a[0], i = a[1], s = a[2], o = i.top - r.top + e.parent.scrollTop - (t ? s.height : -1 * i.height) + "px", l = i.left - r.left + (n ? i.width - s.width : 0) + "px";
                        e.calendarContainer.style.setProperty("top", o), e.calendarContainer.style.setProperty("left", l);
                    }
                }
                function D(e) {
                    return "[object Date]" === {}.toString.call(e) && "Invalid Date" !== e.toString();
                }
                function g(e) {
                    if (D(e) || "number" == typeof e && !isNaN(e)) {
                        var t = new Date(+e);
                        return new Date(t.getFullYear(), t.getMonth(), t.getDate());
                    }
                }
                function q(e) {
                    e.disabled || !e.calendarContainer.classList.contains("qs-hidden") && !e.alwaysShow && (w(!0, e), 
                    e.calendarContainer.classList.add("qs-hidden"), e.onHide(e));
                }
                function S(e) {
                    e.disabled || (e.calendarContainer.classList.remove("qs-hidden"), b(e), e.onShow(e));
                }
                function w(e, t) {
                    var n = t.calendar;
                    if (n) {
                        var a = n.querySelector(".qs-overlay"), r = a.querySelector(".qs-overlay-year"), i = n.querySelector(".qs-controls"), s = n.querySelector(".qs-squares");
                        e ? (a.classList.add("qs-hidden"), i.classList.remove("qs-blur"), s.classList.remove("qs-blur"), 
                        r.value = "") : (a.classList.remove("qs-hidden"), i.classList.add("qs-blur"), s.classList.add("qs-blur"), 
                        r.focus());
                    }
                }
                function M(e, t, n, a) {
                    var r = isNaN(+(new Date).setFullYear(t.value || void 0)), i = r ? null : t.value;
                    if (13 === (e.which || e.keyCode) || "click" === e.type) a ? p(null, n, i, a) : r || t.classList.contains("qs-disabled") || p(null, n, i, a); else if (n.calendar.contains(t)) n.calendar.querySelector(".qs-submit").classList[r ? "add" : "remove"]("qs-disabled");
                }
                function x(e) {
                    var t = e.type, n = e.target, r = n.classList, i = a.filter((function(e) {
                        return e.calendar.contains(n) || e.el === n;
                    }))[0], s = i && i.calendar.contains(n);
                    if (!(i && i.isMobile && i.disableMobile)) if ("click" === t) {
                        if (!i) return a.forEach(q);
                        if (i.disabled) return;
                        var o = i.calendar, l = i.calendarContainer, c = i.disableYearOverlay, d = i.nonInput, u = o.querySelector(".qs-overlay-year"), h = !!o.querySelector(".qs-hidden"), f = o.querySelector(".qs-month-year").contains(n), m = n.dataset.monthNum;
                        if (i.noPosition && !s) (l.classList.contains("qs-hidden") ? S : q)(i); else if (r.contains("qs-arrow")) p(r, i); else if (f || r.contains("qs-close")) c || w(!h, i); else if (m) M(e, u, i, m); else {
                            if (r.contains("qs-num")) {
                                var y = "SPAN" === n.nodeName ? n.parentNode : n;
                                return void (y.classList.contains("qs-active") ? v(y, i, !0) : y.classList.contains("qs-disabled") || v(y, i));
                            }
                            r.contains("qs-submit") && !r.contains("qs-disabled") ? M(e, u, i) : d && n === i.el && S(i);
                        }
                    } else if ("focusin" === t && i) S(i), a.forEach((function(e) {
                        e !== i && q(e);
                    })); else if ("keydown" === t && i && !i.disabled) {
                        var b = !i.calendar.querySelector(".qs-overlay").classList.contains("qs-hidden");
                        13 === (e.which || e.keyCode) && b && s ? M(e, n, i) : 27 === (e.which || e.keyCode) && b && s && w(!0, i);
                    } else if ("input" === t) {
                        if (!i || !i.calendar.contains(n)) return;
                        var D = i.calendar.querySelector(".qs-submit"), g = n.value.split("").reduce((function(e, t) {
                            return e || "0" !== t ? e + (t.match(/[0-9]/) ? t : "") : "";
                        }), "").slice(0, 4);
                        n.value = g, D.classList[4 === g.length ? "remove" : "add"]("qs-disabled");
                    }
                }
                function L() {
                    S(this);
                }
                function C() {
                    q(this);
                }
                function P(e, t) {
                    var n = g(e), a = this.currentYear, r = this.currentMonth, i = this.sibling;
                    if (null == e) return this.dateSelected = void 0, y(this.el, this, !0), i && (m({
                        instance: this,
                        deselect: !0
                    }), d(i)), d(this), this;
                    if (!D(e)) throw "`setDate` needs a JavaScript Date object.";
                    if (this.disabledDates.some((function(e) {
                        return +e == +n;
                    })) || n < this.minDate || n > this.maxDate) throw "You can't manually set a date that's disabled.";
                    return this.dateSelected = n, t && (this.currentYear = n.getFullYear(), this.currentMonth = n.getMonth(), 
                    this.currentMonthName = this.months[n.getMonth()]), y(this.el, this), i && (m({
                        instance: this
                    }), d(i)), (a === n.getFullYear() && r === n.getMonth() || t) && d(this, n), this;
                }
                function j(e) {
                    return Y(this, e, !0);
                }
                function k(e) {
                    return Y(this, e);
                }
                function Y(e, t, n) {
                    var a = e.dateSelected, r = e.first, i = e.sibling, s = e.minDate, o = e.maxDate, l = g(t), c = n ? "Min" : "Max";
                    function u() {
                        return "original" + c + "Date";
                    }
                    function h() {
                        return c.toLowerCase() + "Date";
                    }
                    function f() {
                        return "set" + c;
                    }
                    function v() {
                        throw "Out-of-range date passed to " + f();
                    }
                    if (null == t) e[u()] = void 0, i ? (i[u()] = void 0, n ? (r && !a || !r && !i.dateSelected) && (e.minDate = void 0, 
                    i.minDate = void 0) : (r && !i.dateSelected || !r && !a) && (e.maxDate = void 0, 
                    i.maxDate = void 0)) : e[h()] = void 0; else {
                        if (!D(t)) throw "Invalid date passed to " + f();
                        i ? ((r && n && l > (a || o) || r && !n && l < (i.dateSelected || s) || !r && n && l > (i.dateSelected || o) || !r && !n && l < (a || s)) && v(), 
                        e[u()] = l, i[u()] = l, (n && (r && !a || !r && !i.dateSelected) || !n && (r && !i.dateSelected || !r && !a)) && (e[h()] = l, 
                        i[h()] = l)) : ((n && l > (a || o) || !n && l < (a || s)) && v(), e[h()] = l);
                    }
                    return i && d(i), d(e), e;
                }
                function O() {
                    var e = this.first ? this : this.sibling, t = e.sibling;
                    return {
                        start: e.dateSelected,
                        end: t.dateSelected
                    };
                }
                function N() {
                    var e = this.inlinePosition, t = this.parent, n = this.calendarContainer, r = this.el, i = this.sibling, s = this;
                    e && (a.some((function(e) {
                        return e !== s && e.parent === t;
                    })) || t.style.setProperty("position", null));
                    for (var o in n.remove(), a = a.filter((function(e) {
                        return e.el !== r;
                    })), i && delete i.sibling, this) delete this[o];
                    a.length || l.forEach((function(e) {
                        document.removeEventListener(e, x);
                    }));
                }
                e.exports = function(e, t) {
                    a.length || l.forEach((function(e) {
                        document.addEventListener(e, x);
                    }));
                    var n = function(e, t) {
                        var n = e;
                        "string" == typeof n && (n = "#" === n[0] ? document.getElementById(n.slice(1)) : document.querySelector(n));
                        if (!n) throw "No selector / element found.";
                        var l = function(e, t) {
                            if (a.some((function(e) {
                                return e.el === t;
                            }))) throw "A datepicker already exists on that element.";
                            var n = c(e);
                            n.events && (n.events = n.events.reduce((function(e, t) {
                                if (!D(t)) throw '"options.events" must only contain valid JavaScript Date objects.';
                                return e[+g(t)] = !0, e;
                            }), {}));
                            [ "startDate", "dateSelected", "minDate", "maxDate" ].forEach((function(e) {
                                var t = n[e];
                                if (t && !D(t)) throw '"options.' + e + '" needs to be a valid JavaScript Date object.';
                                n[e] = g(t);
                            }));
                            var i = n.position, l = n.maxDate, d = n.minDate, u = n.dateSelected, h = n.overlayPlaceholder, f = n.overlayButton, v = n.startDay, m = n.id;
                            if (n.startDate = g(n.startDate || u || new Date), n.disabledDates = (n.disabledDates || []).map((function(e) {
                                var t = +g(e);
                                if (!D(e)) throw 'You supplied an invalid date to "options.disabledDates".';
                                if (t === +g(u)) throw '"disabledDates" cannot contain the same date as "dateSelected".';
                                return t;
                            })), n.hasOwnProperty("id") && null == m) throw "Id cannot be `null` or `undefined`";
                            if (null != m) {
                                var y = a.filter((function(e) {
                                    return e.id === m;
                                }));
                                if (y.length > 1) throw "Only two datepickers can share an id.";
                                y.length ? (n.second = !0, n.sibling = y[0]) : n.first = !0;
                            }
                            var p = [ "tr", "tl", "br", "bl", "c" ].some((function(e) {
                                return i === e;
                            }));
                            if (i && !p) throw '"options.position" must be one of the following: tl, tr, bl, br, or c.';
                            if (n.position = function(e) {
                                var t = e[0], n = e[1], a = {};
                                a[s[t]] = 1, n && (a[s[n]] = 1);
                                return a;
                            }(i || "bl"), l < d) throw '"maxDate" in options is less than "minDate".';
                            if (u) {
                                function b(e) {
                                    throw '"dateSelected" in options is ' + (e ? "less" : "greater") + ' than "' + (e || "max") + 'Date".';
                                }
                                d > u && b("min"), l < u && b();
                            }
                            if ([ "onSelect", "onShow", "onHide", "onMonthChange", "formatter", "disabler" ].forEach((function(e) {
                                "function" != typeof n[e] && (n[e] = o);
                            })), [ "customDays", "customMonths", "customOverlayMonths" ].forEach((function(e, t) {
                                var a = n[e], r = t ? 12 : 7;
                                if (a) {
                                    if (!Array.isArray(a) || a.length !== r || a.some((function(e) {
                                        return "string" != typeof e;
                                    }))) throw '"' + e + '" must be an array with ${num} strings.';
                                    n[t ? t < 2 ? "months" : "overlayMonths" : "days"] = a;
                                }
                            })), v && v > 0 && v < 7) {
                                var q = (n.customDays || r).slice(), S = q.splice(0, v);
                                n.customDays = q.concat(S), n.startDay = +v, n.weekendIndices = [ q.length - 1, q.length ];
                            } else n.startDay = 0, n.weekendIndices = [ 6, 0 ];
                            "string" != typeof h && delete n.overlayPlaceholder;
                            "string" != typeof f && delete n.overlayButton;
                            return n;
                        }(t || {
                            startDate: g(new Date),
                            position: "bl"
                        }, n), d = n === document.body, u = d ? document.body : n.parentElement, h = document.createElement("div"), f = document.createElement("div");
                        h.className = "qs-datepicker-container qs-hidden", f.className = "qs-datepicker";
                        var v = {
                            el: n,
                            parent: u,
                            nonInput: "INPUT" !== n.nodeName,
                            noPosition: d,
                            position: !d && l.position,
                            startDate: l.startDate,
                            dateSelected: l.dateSelected,
                            disabledDates: l.disabledDates,
                            minDate: l.minDate,
                            maxDate: l.maxDate,
                            noWeekends: !!l.noWeekends,
                            weekendIndices: l.weekendIndices,
                            calendarContainer: h,
                            calendar: f,
                            currentMonth: (l.startDate || l.dateSelected).getMonth(),
                            currentMonthName: (l.months || i)[(l.startDate || l.dateSelected).getMonth()],
                            currentYear: (l.startDate || l.dateSelected).getFullYear(),
                            events: l.events || {},
                            setDate: P,
                            remove: N,
                            setMin: j,
                            setMax: k,
                            show: L,
                            hide: C,
                            onSelect: l.onSelect,
                            onShow: l.onShow,
                            onHide: l.onHide,
                            onMonthChange: l.onMonthChange,
                            formatter: l.formatter,
                            disabler: l.disabler,
                            months: l.months || i,
                            days: l.customDays || r,
                            startDay: l.startDay,
                            overlayMonths: l.overlayMonths || (l.months || i).map((function(e) {
                                return e.slice(0, 3);
                            })),
                            overlayPlaceholder: l.overlayPlaceholder || "4-digit year",
                            overlayButton: l.overlayButton || "Submit",
                            disableYearOverlay: !!l.disableYearOverlay,
                            disableMobile: !!l.disableMobile,
                            isMobile: "ontouchstart" in window,
                            alwaysShow: !!l.alwaysShow,
                            id: l.id,
                            showAllDates: !!l.showAllDates,
                            respectDisabledReadOnly: !!l.respectDisabledReadOnly,
                            first: l.first,
                            second: l.second
                        };
                        if (l.sibling) {
                            var m = l.sibling, p = v, b = m.minDate || p.minDate, q = m.maxDate || p.maxDate;
                            p.sibling = m, m.sibling = p, m.minDate = b, m.maxDate = q, p.minDate = b, p.maxDate = q, 
                            m.originalMinDate = b, m.originalMaxDate = q, p.originalMinDate = b, p.originalMaxDate = q, 
                            m.getRange = O, p.getRange = O;
                        }
                        l.dateSelected && y(n, v);
                        var w = getComputedStyle(u).position;
                        d || w && "static" !== w || (v.inlinePosition = !0, u.style.setProperty("position", "relative"));
                        v.inlinePosition && a.forEach((function(e) {
                            e.parent === v.parent && (e.inlinePosition = !0);
                        }));
                        a.push(v), h.appendChild(f), u.appendChild(h), v.alwaysShow && S(v);
                        return v;
                    }(e, t);
                    if (n.second) {
                        var u = n.sibling;
                        m({
                            instance: n,
                            deselect: !n.dateSelected
                        }), m({
                            instance: u,
                            deselect: !u.dateSelected
                        }), d(u);
                    }
                    return d(n, n.startDate || n.dateSelected), n.alwaysShow && b(n), n;
                };
            }, function(e, t, n) {} ]);
        }));
        window.onload = function() {
            document.addEventListener("selectCallback", (function(e) {
                const currentSelectColumn = e.detail.select.closest(".form-admin-popup-content-item__column");
                currentSelectColumn.classList.add("_selected");
            }));
            const inputs = document.querySelectorAll("[data-type]");
            Array.prototype.forEach.call(inputs, (function(input) {
                const inputColumn = input.closest(".form-admin-popup-content-item__column");
                input.addEventListener("change", (function(e) {
                    const getAttributeType = this.dataset.type;
                    console.log(this, getAttributeType);
                    inputColumn.classList.remove("_has-data");
                    if ("text" === getAttributeType && this.value) inputColumn.classList.add("_has-data"); else if ("file" === getAttributeType || this.files && this.files.length > 1) {
                        inputColumn.classList.add("_has-data");
                        this.nextElementSibling.textContent = this.value;
                    }
                }));
            }));
            if (document.querySelector("#photo")) upload("#photo", {
                multi: true,
                accept: [ ".png", ".jpg", ".jpeg", ".gif", ".webp" ]
            });
            if (document.querySelector("#floor-plans")) upload("#floor-plans", {
                multi: true,
                accept: [ ".png", ".jpg", ".jpeg", ".gif", ".webp" ]
            });
            if (document.querySelector("#video")) upload("#video", {
                multi: true,
                accept: [ ".png", ".jpg", ".jpeg", ".gif", ".webp" ]
            });
            if (document.querySelector("#prop-documents")) upload("#prop-documents", {
                multi: true,
                accept: [ ".png", ".jpg", ".jpeg", ".gif", ".webp" ]
            });
            if (document.querySelector("#calendar")) {
                new datepicker("#calendar", {});
            }
        };
        document.addEventListener("click", documentActions);
        function documentActions(event) {
            const targetItem = event.target;
            if (targetItem.closest(".form-admin-popup-content-item__form-actions")) {
                targetItem.closest(".form-admin-popup-content-item__form-actions").querySelector(".form-actions__input");
                if (!targetItem.closest(".form-actions__actions-title")) {
                    targetItem.closest(".form-admin-popup-content-item__form-actions").classList.toggle("_open");
                    return;
                }
                targetItem.closest(".form-admin-popup-content-item__form-actions").classList.add("_open");
            }
            if (targetItem.classList.contains("form-admin-popup-add-inputs__info-text") || targetItem.closest("[data-input-action]")) {
                targetItem.closest("[data-input-action]").classList.add("_adding-data");
                const input = targetItem.closest("[data-input-action]").querySelector("input");
                input.focus();
            }
            if (!targetItem.closest("[data-input-action]") && document.querySelectorAll("[data-input-action]._adding-data").length > 0 || targetItem.closest(".form-admin-popup-add-inputs__minus")) removeClasses(document.querySelectorAll("[data-input-action]._adding-data"), "_adding-data");
            console.log();
        }
        window["FLS"] = true;
        isWebp();
        addLoadedClass();
        fullVHfix();
        spollers();
        tabs();
        formFieldsInit({
            viewPass: false
        });
    })();
})();