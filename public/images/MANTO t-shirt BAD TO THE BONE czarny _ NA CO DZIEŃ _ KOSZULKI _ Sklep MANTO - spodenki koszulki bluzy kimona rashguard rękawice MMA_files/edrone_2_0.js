/*
 * This file contains common library functions that are used by JS scripts
 * on e-commerce sites. 
 * 
 * Whenever new field is added to the Tracking API this script the functions 
 * below need to be updated. DO NOT remove any fields as 
 * historical modules may still be using them.
 * - init
 * - send
 */


/*
 * Global object containing trace data to be sent to Edrone
 */


window._edrone = window._edrone || {};

!function () {
    /* 
     * Generates unique identifier that is 38 hex characters long (128 bits).
     */

    var start_time;

    window.edLog = function (code, msg) {
        if (typeof (console) === "undefined")
            return;
        switch (code) {
            case 0 :
                console.log(msg);
                break;
            case 1 :
                console.info(msg);
                break;
            case 2 :
                console.error(msg);
                break;
        }
    }

    function generateUUID() {
        var d = new Date().getTime();
        var uuid = 'xxxxxxxxxxxxxx4xxxxyxxxxxxxxxxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = (d + Math.random() * 16) % 16 | 0;

            d = Math.floor(d / 16);
            return (c == 'x' ? r : (r & 0x7 | 0x8)).toString(16);
        });
        return uuid;
    }

    /*
     * Get the current url
     */
    function getURL() {
        return window.location.href;
    }

    /*
     * Get current datetime in UTC
     */
    function getUtcNow() {
        var utcNow = new Date();
        var yyyy = utcNow.getUTCFullYear();
        var mm = utcNow.getUTCMonth() + 1;
        var dd = utcNow.getUTCDate();
        var hh = utcNow.getUTCHours();
        var ii = utcNow.getUTCMinutes();
        var ss = utcNow.getUTCSeconds();

        if (mm < 10) {
            mm = '0' + mm;
        }

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (hh < 10) {
            hh = '0' + hh;
        }

        if (ii < 10) {
            ii = '0' + ii;
        }

        if (ss < 10) {
            ss = '0' + ss;
        }

        utcNow = yyyy + '-' + mm + '-' + dd + 'T' + hh + ':' + ii + ':' + ss + 'Z';
        return utcNow;
    }
    /*
     * Updates all data kept in local storage.
     */
    function updateLocalStorage() {
        cId();
        cFirstSeen();
        cLastSeen();
    }

    /*
     * Generates unique cId if it does not exist and stores it in local storage
     */
    function cId() {
        var name = generateUUID();
        if (!localStorage.getItem('cId')) {
            localStorage.setItem("cId", name);
        }
    }

    /*
     * Generates first seen timestamp if it does not exist and stores it in local storage.
     */
    function cFirstSeen() {
        var utcNow = getUtcNow();
        if (!localStorage.getItem('cFirstSeen')) {
            localStorage.setItem('cFirstSeen', utcNow);
        }
    }

    /*
     * Generates last seen timestamp and stores it in local storage.
     */
    function cLastSeen() {
        var utcNow = getUtcNow();
        localStorage.setItem('cLastSeen', utcNow);
    }

    /*
     * Collects all the data, forms a request and POSTs it to the server.
     */
    function send(values, trace_url, async) {
        var cId = localStorage.getItem('cId');
        var cFirstSeen = localStorage.getItem('cFirstSeen');
        var cLastSeen = localStorage.getItem('cLastSeen');
        var resolution = screen.width + 'x' + screen.height;
        var cookieEnabled = (navigator.cookieEnabled) ? 1 : 0;
        _edrone.async = async;
        //console.log("send:" + _edrone.send_status);
        var edroneData =
                'version=' + values['version'] +
                '&app_id=' + values['app_id'] +
                '&c_id=' + cId +
                '&c_first_seen=' + cFirstSeen +
                '&c_last_seen=' + cLastSeen +
                '&email=' + values['email'] +
                '&first_name=' + values['first_name'] +
                '&last_name=' + values['last_name'] +
                '&product_skus=' + values['product_skus'] +
                '&product_ids=' + values['product_ids'] +
                '&product_titles=' + values['product_titles'] +
                '&product_images=' + values['product_images'] +
                '&product_urls=' + values['product_urls'] +
                '&product_category_ids=' + values['product_category_ids'] +
                '&product_category_names=' + values['product_category_names'] +
                '&order_id=' + values['order_id'] +
                '&order_payment_value=' + values['order_payment_value'] +
                '&base_payment_value=' + values['base_payment_value'] +
                '&order_details=' + values['order_details'] +
                '&base_currency=' + values['base_currency'] +
                '&order_currency=' + values['order_currency'] +
                '&action_type=' + values['action_type'] +
                '&country=' + values['country'] +
                '&city=' + values['city'] +
                '&phone=' + values['phone'] +
                '&coupon=' + values['coupon'] +
                '&customer_tags=' + values['customer_tags'] +
                '&platform_version=' + values['platform_version'] +
                '&platform=' + values['platform'] +
                '&is_logged_in=' + values['is_logged_in'] +
                '&cookie_enabled=' + cookieEnabled +
                '&subversion=' + values['subversion'] +
                '&resolution=' + resolution +
                '&subscriber_status=' + values['subscriber_status'] +
                '&utc_time=' + values['utc_time'];

        httpPost(edroneData, trace_url, async);
    }

    /*
     * Sends POST request to the server. 
     */
    function httpPost(edroneData, trace_url, async) {
        var http;
        var d = new Date();
        var start = d.getTime();
        if (window.XMLHttpRequest) {
            http = new XMLHttpRequest();
            http.open("POST", trace_url, async);
            http.withCredentials = true;
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(edroneData);
            http.onreadystatechange = function () {
                if (http.readyState == 4 && http.status == 200) {
                    d = new Date();
                    if (typeof (window._edrone_report_time) !== "undefined") {
                        window._edrone_report_time(d.getTime() - start);
                    }
                }
            };
        }
        else {
            http = new ActiveXObject("Microsoft.XMLHTTP");
            http.open("POST", trace_url, async);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(edroneData);
        }
        _edrone.send_status = 1;
        //console.log("httpost:" + _edrone.send_status);
    }

    /*
     * Main entry point:
     * - updates local storage
     * - prepares data to be sent
     * - sends the data
     */
    _edrone.first_run = true;
    _edrone.handler_injected = false;
    _edrone.prep = function () {
        if ((!_edrone.handler_injected) && (typeof (window._edrone_send_handler) !== 'undefined')) {
            _edrone.handler_injected = true;
            window._edrone_send_handler();

        }
        if (_edrone.first_run) {
            _edrone.first_run = false;
            _edrone.send_status = 0;
            _edrone.init();
        }
    }
    _edrone.init = function (async) {
        updateLocalStorage();
        if (typeof (async) === "undefined")
            async = true;
        var data = {
            app_id: _edrone.app_id,
            version: (_edrone.version != undefined) ? _edrone.version : '',
            email: (_edrone.email != undefined) ? _edrone.email : '',
            first_name: (_edrone.first_name != undefined) ? _edrone.first_name : '',
            last_name: (_edrone.last_name != undefined) ? _edrone.last_name : '',
            product_skus: (_edrone.product_skus != undefined) ? _edrone.product_skus : '',
            product_ids: (_edrone.product_ids != undefined) ? _edrone.product_ids : '',
            product_titles: (_edrone.product_titles != undefined) ? _edrone.product_titles : '',
            product_images: (_edrone.product_images != undefined) ? _edrone.product_images : '',
            product_urls: (_edrone.product_urls != undefined) ? _edrone.product_urls : '',
            product_category_ids: (_edrone.product_category_ids != undefined) ? _edrone.product_category_ids : '',
            product_category_names: (_edrone.product_category_names != undefined) ? _edrone.product_category_names : '',
            order_id: (_edrone.order_id != undefined) ? _edrone.order_id : '',
            order_payment_value: (_edrone.order_payment_value != undefined) ? _edrone.order_payment_value : '',
            base_payment_value: (_edrone.base_payment_value != undefined) ? _edrone.base_payment_value : '',
            order_details: (_edrone.order_details != undefined) ? _edrone.order_details : '',
            base_currency: (_edrone.base_currency != undefined) ? _edrone.base_currency : '',
            order_currency: (_edrone.order_currency != undefined) ? _edrone.order_currency : '',
            action_type: (_edrone.action_type != undefined) ? _edrone.action_type : '',
            country: (_edrone.country != undefined) ? _edrone.country : '',
            city: (_edrone.city != undefined) ? _edrone.city : '',
            phone: (_edrone.phone != undefined) ? _edrone.phone : '',
            coupon: (_edrone.coupon != undefined) ? _edrone.coupon : '',
            customer_tags: (_edrone.customer_tags != undefined) ? _edrone.customer_tags : '',
            platform_version: (_edrone.platform_version != undefined) ? _edrone.platform_version : '',
            platform: (_edrone.platform != undefined) ? _edrone.platform : '',
            is_logged_in: (_edrone.is_logged_in != undefined) ? _edrone.is_logged_in : '',
            subscriber_status: (_edrone.subscriber_status != undefined) ? _edrone.subscriber_status : '',
            subversion: (_edrone.subversion != undefined) ? _edrone.subversion : '',
            utc_time: (_edrone.utc_time != undefined) ? _edrone.utc_time : '',
        };
        send(data, _edrone.trace_url, async);
    }
}();




EdOnload = function () {
    _edrone.prep();
    
};
addEvent(window,'load',function(){ EdOnload(); });
function addEvent(element, eventName, fn) {
    if (element.addEventListener)
        element.addEventListener(eventName, fn, false);
    else if (element.attachEvent)
        element.attachEvent('on' + eventName, fn);
}