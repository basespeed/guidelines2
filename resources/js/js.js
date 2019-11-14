(function ($) {
    "use strict";

    var WebFontConfig = {
        google: { families: [
            'Open+Sans:400,400italic,600,600italic,700,700italic',
            'Montserrat:400,400italic,500,500italic,600,600italic,700,700italic'
            ] }
    };

    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();

    function ready() {
        $('.sidebar ul li ul li').filter(function () {
            let check = $(this).text();

            if(check !== ''){
                $(this).parent().parent().addClass('haschild');
            }else{
                $(this).parent().parent().removeClass('haschild');
            }
        });

        $('.edit_guide .list_slt .item').on('click', function () {
            var val = $(this).attr('data-id');
           $('.get_menu').val(val);
        });

        function toHexRgb(color) {
            var rgb = color.getRGB();
            return "#" + Math.floor(rgb.r * 255.0).toString(16) + Math.floor(rgb.g * 255.0).toString(16) + Math.floor(rgb.b * 255.0).toString(16);
        }

        $(this).prop('disabled', true);

        $('.cp-full1').colorpicker({
            parts: ['map', 'bar', 'hex', 'rgb', 'cmyk', 'footer'],
            showOn: 'both',
            colorFormat: ['EXACT', 'cp,mp,yp,kp'],
            buttonImageOnly: false,
            buttonColorize: true,
            showNoneButton: true,
            //buttonImage: 'http://vanderlee.github.io/colorpicker/images/ui-colorpicker.png',
            ok: function (event, color) {
                function hexToRgb(hex) {
                    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
                    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                        return r + r + g + g + b + b;
                    });

                    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                    return result ? {
                        r: parseInt(result[1], 16),
                        g: parseInt(result[2], 16),
                        b: parseInt(result[3], 16)
                    } : null;
                }

                //console.log(color);
                var hex = color.colorPicker.color.toHex();
                var v = $(this).val();
                var separator = v.indexOf(',') != -1 ? ',' : ';'; // Use either ',' or ';' as separator
                var cmyk = v.split(separator);

                var c0 = String(Math.round(cmyk[0]));
                var c1 = String(Math.round(cmyk[1]));
                var c2 = String(Math.round(cmyk[2]));
                var c3 = String(Math.round(cmyk[3]));

                $('.cp-full1').attr('enable');

                $('.cp-full1').val('#'+hex);

                $('.list_color:nth-child(1) .info ul li:nth-child(3)').text('HEX CODE: #'+hex);

                $('.list_color:nth-child(1) .info ul li:nth-child(2)').text('CMYK:'+c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                $('.section7_cmyk1').val(c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                let r = hexToRgb(hex).r;
                let g = hexToRgb(hex).g;
                let b = hexToRgb(hex).b;

                $('.list_color:nth-child(1) .info ul li:nth-child(1)').text('RGB:'+r+' '+g+' '+b);

                $('.section7_rgb1').val(r+' '+g+' '+b);

                $('.list_color:nth-child(1) .color_item:nth-child(1)').css('background','rgba('+r+','+g+','+b+',1)');
                $('.list_color:nth-child(1) .color_item:nth-child(2)').css('background','rgba('+r+','+g+','+b+',0.9)');
                $('.list_color:nth-child(1) .color_item:nth-child(3)').css('background','rgba('+r+','+g+','+b+',0.8)');
                $('.list_color:nth-child(1) .color_item:nth-child(4)').css('background','rgba('+r+','+g+','+b+',0.7)');
                $('.list_color:nth-child(1) .color_item:nth-child(5)').css('background','rgba('+r+','+g+','+b+',0.6)');
                $('.list_color:nth-child(1) .color_item:nth-child(6)').css('background','rgba('+r+','+g+','+b+',0.5)');
                $('.list_color:nth-child(1) .color_item:nth-child(7)').css('background','rgba('+r+','+g+','+b+',0.4)');
                $('.list_color:nth-child(1) .color_item:nth-child(8)').css('background','rgba('+r+','+g+','+b+',0.3)');
                $('.list_color:nth-child(1) .color_item:nth-child(9)').css('background','rgba('+r+','+g+','+b+',0.2)');
                $('.list_color:nth-child(1) .color_item:nth-child(10)').css('background','rgba('+r+','+g+','+b+',0.1)');

                //Layout7
                /*color1*/
                var section7_color1 = $('.section7_color1').val();
                var id_color1 = $(this).attr('data-id');
                var id_menu = $(this).attr('data-menu');
                var type_menu = $('.check_type_menu_layout7').val();

                setTimeout(function () {
                    var hex = section7_color1;
                    var rgb = $('.section7_rgb1').val();
                    var cmyk = $('.section7_cmyk1').val();
                    var getUrl = window.location;
                    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
                    var url = baseUrl + '/ajax/create/getLayout7';

                    var id = $('.id_project').val();
                    var slug = $('.slug_project').val();

                    var form_data = new FormData();
                    form_data.append("section7_color1", hex);
                    form_data.append("id", id);
                    form_data.append("slug", slug);
                    form_data.append("rgb", rgb);
                    form_data.append("cmyk", cmyk);
                    form_data.append("id_color1", id_color1);
                    form_data.append("id_menu", id_menu);
                    form_data.append("type_menu", type_menu);
                    form_data.append("baseUrl", baseUrl);

                    $.ajax({
                        type: 'POST',
                        url: url,
                        contentType: false,
                        processData: false,
                        headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                        data: form_data,
                        success: function (data) {
                            
                        }
                    });
                },100);
            },

        });

        $('.cp-full2').colorpicker({
            parts: ['map', 'bar', 'hex', 'rgb', 'cmyk', 'footer'],
            showOn: 'both',
            colorFormat: ['EXACT', 'cp,mp,yp,kp'],
            buttonImageOnly: false,
            buttonColorize: true,
            showNoneButton: true,
            //buttonImage: 'http://vanderlee.github.io/colorpicker/images/ui-colorpicker.png',
            ok: function (event, color) {
                function hexToRgb(hex) {
                    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
                    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                        return r + r + g + g + b + b;
                    });

                    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                    return result ? {
                        r: parseInt(result[1], 16),
                        g: parseInt(result[2], 16),
                        b: parseInt(result[3], 16)
                    } : null;
                }

                //console.log(color);
                var hex = color.colorPicker.color.toHex();
                var v = $(this).val();
                var separator = v.indexOf(',') != -1 ? ',' : ';'; // Use either ',' or ';' as separator
                var cmyk = v.split(separator);

                var c0 = String(Math.round(cmyk[0]));
                var c1 = String(Math.round(cmyk[1]));
                var c2 = String(Math.round(cmyk[2]));
                var c3 = String(Math.round(cmyk[3]));

                $('.cp-full2').attr('enable');

                $('.cp-full2').val('#'+hex);

                $('.list_color2 .info ul li:nth-child(3)').text('HEX CODE: #'+hex);

                $('.list_color2 .info ul li:nth-child(2)').text('CMYK:'+c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                $('.section7_cmyk2').val(c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                let r = hexToRgb(hex).r;
                let g = hexToRgb(hex).g;
                let b = hexToRgb(hex).b;

                $('.list_color2 .info ul li:nth-child(1)').text('RGB:'+r+' '+g+' '+b);

                $('.section7_rgb2').val(r+' '+g+' '+b);

                $('.list_color2 .color_item:nth-child(1)').css('background','rgba('+r+','+g+','+b+',1)');
                $('.list_color2 .color_item:nth-child(2)').css('background','rgba('+r+','+g+','+b+',0.9)');
                $('.list_color2 .color_item:nth-child(3)').css('background','rgba('+r+','+g+','+b+',0.8)');
                $('.list_color2 .color_item:nth-child(4)').css('background','rgba('+r+','+g+','+b+',0.7)');
                $('.list_color2 .color_item:nth-child(5)').css('background','rgba('+r+','+g+','+b+',0.6)');
                $('.list_color2 .color_item:nth-child(6)').css('background','rgba('+r+','+g+','+b+',0.5)');
                $('.list_color2 .color_item:nth-child(7)').css('background','rgba('+r+','+g+','+b+',0.4)');
                $('.list_color2 .color_item:nth-child(8)').css('background','rgba('+r+','+g+','+b+',0.3)');
                $('.list_color2 .color_item:nth-child(9)').css('background','rgba('+r+','+g+','+b+',0.2)');
                $('.list_color2 .color_item:nth-child(10)').css('background','rgba('+r+','+g+','+b+',0.1)');

                //layout7
                var section7_color2 = $('.section7_color2').val();
                var id_color2 = $(this).attr('data-id');
                var id_menu = $(this).attr('data-menu');
                var type_menu = $('.check_type_menu_layout7').val();

                /*color2*/
                setTimeout(function () {
                    var hex = section7_color2;
                    var rgb = $('.section7_rgb2').val();
                    var cmyk = $('.section7_cmyk2').val();

                    var getUrl = window.location;
                    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
                    var url = baseUrl + '/ajax/create/getLayout7';

                    var id = $('.id_project').val();
                    var slug = $('.slug_project').val();

                    var form_data = new FormData();
                    form_data.append("section7_color2", hex);
                    form_data.append("id", id);
                    form_data.append("slug", slug);
                    form_data.append("rgb", rgb);
                    form_data.append("cmyk", cmyk);
                    form_data.append("id_color2", id_color2);
                    form_data.append("id_menu", id_menu);
                    form_data.append("type_menu", type_menu);
                    form_data.append("baseUrl", baseUrl);

                    $.ajax({
                        type: 'POST',
                        url: url,
                        contentType: false,
                        processData: false,
                        headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                        data: form_data,
                        success: function (data) {
                            
                        }
                    });
                },100);
            },

        });

        $('.ga1').colorpicker({
            parts: ['map', 'bar', 'hex', 'rgb', 'cmyk', 'footer'],
            showOn: 'both',
            colorFormat: ['EXACT', 'cp,mp,yp,kp'],
            buttonImageOnly: false,
            buttonColorize: true,
            showNoneButton: true,
            //buttonImage: 'http://vanderlee.github.io/colorpicker/images/ui-colorpicker.png',
            ok: function (event, color) {
                function hexToRgb(hex) {
                    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
                    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                        return r + r + g + g + b + b;
                    });

                    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                    return result ? {
                        r: parseInt(result[1], 16),
                        g: parseInt(result[2], 16),
                        b: parseInt(result[3], 16)
                    } : null;
                }

                //console.log(color);
                var hex = color.colorPicker.color.toHex();
                var v = $(this).val();
                var separator = v.indexOf(',') != -1 ? ',' : ';'; // Use either ',' or ';' as separator
                var cmyk = v.split(separator);

                var c0 = String(Math.round(cmyk[0]));
                var c1 = String(Math.round(cmyk[1]));
                var c2 = String(Math.round(cmyk[2]));
                var c3 = String(Math.round(cmyk[3]));

                $('.ga1').attr('enable');

                $('.ga1').val('#'+hex);

                $('.section8 .list_color:nth-child(1) .info ul.ul1 li:nth-child(3)').text('HEX CODE: #'+hex);

                $('.section8 .list_color:nth-child(1) .info ul.ul1 li:nth-child(2)').text('CMYK:'+c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                $('.section8_cmyk1').val(c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                let r = hexToRgb(hex).r;
                let g = hexToRgb(hex).g;
                let b = hexToRgb(hex).b;

                $('.section8 .list_color:nth-child(1) .info ul.ul1 li:nth-child(1)').text('RGB:'+r+' '+g+' '+b);

                $('.section8_rgb1').val(r+' '+g+' '+b);

                let ga1 = $('.ga1').val();
                let ga2 = $('.ga2').val();

                $('.get_gar1').css('background','linear-gradient(to right, '+ga1+', '+ga2+')');

                /*layout8*/
                var section8_ga1 = $('.section8_ga1').val();
                var id_color1 = $(this).attr('data-id');
                var id_menu = $(this).attr('data-menu');
                var type_menu = $('.check_type_menu_layout8').val();

                setTimeout(function () {
                    var hex = section8_ga1;
                    var rgb = $('.section8_rgb1').val();
                    var cmyk = $('.section8_cmyk1').val();

                    var getUrl = window.location;
                    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
                    var url = baseUrl + '/ajax/create/getLayout8';

                    var id = $('.id_project').val();
                    var slug = $('.slug_project').val();

                    var form_data = new FormData();
                    form_data.append("section8_ga1", hex);
                    form_data.append("id", id);
                    form_data.append("slug", slug);
                    form_data.append("rgb", rgb);
                    form_data.append("cmyk", cmyk);
                    form_data.append("id_color1", id_color1);
                    form_data.append("id_menu", id_menu);
                    form_data.append("type_menu", type_menu);
                    form_data.append("baseUrl", baseUrl);

                    $.ajax({
                        type: 'POST',
                        url: url,
                        contentType: false,
                        processData: false,
                        headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                        data: form_data,
                        success: function (data) {
                            
                        }
                    });
                },100);
            },

        });

        $('.ga2').colorpicker({
            parts: ['map', 'bar', 'hex', 'rgb', 'cmyk', 'footer'],
            showOn: 'both',
            colorFormat: ['EXACT', 'cp,mp,yp,kp'],
            buttonImageOnly: false,
            buttonColorize: true,
            showNoneButton: true,
            //buttonImage: 'http://vanderlee.github.io/colorpicker/images/ui-colorpicker.png',
            ok: function (event, color) {
                function hexToRgb(hex) {
                    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
                    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                        return r + r + g + g + b + b;
                    });

                    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                    return result ? {
                        r: parseInt(result[1], 16),
                        g: parseInt(result[2], 16),
                        b: parseInt(result[3], 16)
                    } : null;
                }

                //console.log(color);
                var hex = color.colorPicker.color.toHex();
                var v = $(this).val();
                var separator = v.indexOf(',') != -1 ? ',' : ';'; // Use either ',' or ';' as separator
                var cmyk = v.split(separator);

                var c0 = String(Math.round(cmyk[0]));
                var c1 = String(Math.round(cmyk[1]));
                var c2 = String(Math.round(cmyk[2]));
                var c3 = String(Math.round(cmyk[3]));

                $('.ga2').attr('enable');

                $('.ga2').val('#'+hex);

                $('.section8 .list_color:nth-child(1) .info ul.ul2 li:nth-child(3)').text('HEX CODE: #'+hex);

                $('.section8 .list_color:nth-child(1) .info ul.ul2 li:nth-child(2)').text('CMYK:'+c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                $('.section8_cmyk2').val(c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                let r = hexToRgb(hex).r;
                let g = hexToRgb(hex).g;
                let b = hexToRgb(hex).b;

                $('.section8 .list_color:nth-child(1) .info ul.ul2 li:nth-child(1)').text('RGB:'+r+' '+g+' '+b);

                $('.section8_rgb2').val(r+' '+g+' '+b);

                let ga1 = $('.ga1').val();
                let ga2 = $('.ga2').val();

                $('.get_gar1').css('background','linear-gradient(to right, '+ga1+', '+ga2+')');

                //Layout8
                var section8_ga2 = $('.ga2').val();
                var id_color1 = $(this).attr('data-id');
                var id_menu = $(this).attr('data-menu');
                var type_menu = $('.check_type_menu_layout8').val();

                setTimeout(function () {
                    var hex = section8_ga2;
                    var rgb = $('.section8_rgb2').val();
                    var cmyk = $('.section8_cmyk2').val();

                    var getUrl = window.location;
                    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
                    var url = baseUrl + '/ajax/create/getLayout8';

                    var id = $('.id_project').val();
                    var slug = $('.slug_project').val();

                    var form_data = new FormData();
                    form_data.append("section8_ga2", hex);
                    form_data.append("id", id);
                    form_data.append("slug", slug);
                    form_data.append("rgb", rgb);
                    form_data.append("cmyk", cmyk);
                    form_data.append("id_color1", id_color1);
                    form_data.append("id_menu", id_menu);
                    form_data.append("type_menu", type_menu);
                    form_data.append("baseUrl", baseUrl);

                    $.ajax({
                        type: 'POST',
                        url: url,
                        contentType: false,
                        processData: false,
                        headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                        data: form_data,
                        success: function (data) {
                            
                        }
                    });
                },100);
            },

        });

        $('.ga3').colorpicker({
            parts: ['map', 'bar', 'hex', 'rgb', 'cmyk', 'footer'],
            showOn: 'both',
            colorFormat: ['EXACT', 'cp,mp,yp,kp'],
            buttonImageOnly: false,
            buttonColorize: true,
            showNoneButton: true,
            //buttonImage: 'http://vanderlee.github.io/colorpicker/images/ui-colorpicker.png',
            ok: function (event, color) {
                function hexToRgb(hex) {
                    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
                    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                        return r + r + g + g + b + b;
                    });

                    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                    return result ? {
                        r: parseInt(result[1], 16),
                        g: parseInt(result[2], 16),
                        b: parseInt(result[3], 16)
                    } : null;
                }

                //console.log(color);
                var hex = color.colorPicker.color.toHex();
                var v = $(this).val();
                var separator = v.indexOf(',') != -1 ? ',' : ';'; // Use either ',' or ';' as separator
                var cmyk = v.split(separator);

                var c0 = String(Math.round(cmyk[0]));
                var c1 = String(Math.round(cmyk[1]));
                var c2 = String(Math.round(cmyk[2]));
                var c3 = String(Math.round(cmyk[3]));

                $('.ga3').attr('enable');

                $('.ga3').val('#'+hex);

                $('.section8 .content .list_color:nth-child(2) .info ul.ul1 li:nth-child(3)').text('HEX CODE: #'+hex);

                $('.section8 .content .list_color:nth-child(2) .info ul.ul1 li:nth-child(2)').text('CMYK:'+c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                $('.section8_cmyk3').val(c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                let r = hexToRgb(hex).r;
                let g = hexToRgb(hex).g;
                let b = hexToRgb(hex).b;

                $('.section8 .content .list_color:nth-child(2) .info ul.ul1 li:nth-child(1)').text('RGB:'+r+' '+g+' '+b);

                $('.section8_rgb3').val(r+' '+g+' '+b);

                let ga3 = $('.ga3').val();
                let ga4 = $('.ga4').val();

                $('.get_gar2').css('background','linear-gradient(to right, '+ga3+', '+ga4+')');

                //Layout8
                var section8_ga3 = $('.ga3').val();
                var id_color2 = $(this).attr('data-id');
                var id_menu = $(this).attr('data-menu');
                var type_menu = $('.check_type_menu_layout8').val();

                setTimeout(function () {
                    var hex = section8_ga3;
                    var rgb = $('.section8_rgb3').val();
                    var cmyk = $('.section8_cmyk3').val();

                    var getUrl = window.location;
                    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
                    var url = baseUrl + '/ajax/create/getLayout8';

                    var id = $('.id_project').val();
                    var slug = $('.slug_project').val();

                    var form_data = new FormData();
                    form_data.append("section8_ga3", hex);
                    form_data.append("id", id);
                    form_data.append("slug", slug);
                    form_data.append("rgb", rgb);
                    form_data.append("cmyk", cmyk);
                    form_data.append("id_color2", id_color2);
                    form_data.append("id_menu", id_menu);
                    form_data.append("type_menu", type_menu);
                    form_data.append("baseUrl", baseUrl);

                    $.ajax({
                        type: 'POST',
                        url: url,
                        contentType: false,
                        processData: false,
                        headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                        data: form_data,
                        success: function (data) {
                            
                        }
                    });
                },100);
            },

        });

        $('.ga4').colorpicker({
            parts: ['map', 'bar', 'hex', 'rgb', 'cmyk', 'footer'],
            showOn: 'both',
            colorFormat: ['EXACT', 'cp,mp,yp,kp'],
            buttonImageOnly: false,
            buttonColorize: true,
            showNoneButton: true,
            //buttonImage: 'http://vanderlee.github.io/colorpicker/images/ui-colorpicker.png',
            ok: function (event, color) {
                function hexToRgb(hex) {
                    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
                    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                        return r + r + g + g + b + b;
                    });

                    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                    return result ? {
                        r: parseInt(result[1], 16),
                        g: parseInt(result[2], 16),
                        b: parseInt(result[3], 16)
                    } : null;
                }

                //console.log(color);
                var hex = color.colorPicker.color.toHex();
                var v = $(this).val();
                var separator = v.indexOf(',') != -1 ? ',' : ';'; // Use either ',' or ';' as separator
                var cmyk = v.split(separator);

                var c0 = String(Math.round(cmyk[0]));
                var c1 = String(Math.round(cmyk[1]));
                var c2 = String(Math.round(cmyk[2]));
                var c3 = String(Math.round(cmyk[3]));

                $('.ga4').attr('enable');

                $('.ga4').val('#'+hex);

                $('.section8 .content .list_color:nth-child(2) .info ul.ul2 li:nth-child(3)').text('HEX CODE: #'+hex);

                $('.section8 .content .list_color:nth-child(2) .info ul.ul2 li:nth-child(2)').text('CMYK:'+c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                $('.section8_cmyk4').val(c0 + ' ' + c1 + ' ' + c2 + ' ' + c3);

                let r = hexToRgb(hex).r;
                let g = hexToRgb(hex).g;
                let b = hexToRgb(hex).b;

                $('.section8 .content .list_color:nth-child(2) .info ul.ul2 li:nth-child(1)').text('RGB:'+r+' '+g+' '+b);

                $('.section8_rgb4').val(r+' '+g+' '+b);

                let ga3 = $('.ga3').val();
                let ga4 = $('.ga4').val();

                $('.get_gar2').css('background','linear-gradient(to right, '+ga3+', '+ga4+')');

                //Layout8
                var section8_ga4 = $('.ga4').val();
                var id_color2 = $(this).attr('data-id');
                var id_menu = $(this).attr('data-menu');
                var type_menu = $('.check_type_menu_layout8').val();


                setTimeout(function () {
                    var hex = section8_ga4;
                    var rgb = $('.section8_rgb4').val();
                    var cmyk = $('.section8_cmyk4').val();

                    var getUrl = window.location;
                    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
                    var url = baseUrl + '/ajax/create/getLayout8';

                    var id = $('.id_project').val();
                    var slug = $('.slug_project').val();

                    var form_data = new FormData();
                    form_data.append("section8_ga4", hex);
                    form_data.append("id", id);
                    form_data.append("slug", slug);
                    form_data.append("rgb", rgb);
                    form_data.append("cmyk", cmyk);
                    form_data.append("id_color2", id_color2);
                    form_data.append("id_menu", id_menu);
                    form_data.append("type_menu", type_menu);
                    form_data.append("baseUrl", baseUrl);

                    $.ajax({
                        type: 'POST',
                        url: url,
                        contentType: false,
                        processData: false,
                        headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                        data: form_data,
                        success: function (data) {
                            
                        }
                    });
                },100);
            },

        });

    }

    function select() {
        let slt_close_tag = $('.new_guide .insider .invite_user_slt .list_tags .close_tag');
        let slt_close_tag2 = $('.invite_list .insider .invite_user_slt .list_tags .close_tag');

        slt_close_tag.on('click',function () {
            $('.search_keyword_slt').slideUp();
            $(this).parent().find('.search_keyword_slt').slideDown();
        });

        slt_close_tag2.on('click',function () {
            $(this).siblings('.search_keyword_slt').slideToggle();
        });

        $('.new_guide .insider .close_guide').on('click',function () {
            $('.new_guide').removeClass('active');
        });

        $('button.btn_create_item').on('click',function () {
            $('.new_guide').addClass('active');
        });

        $(document).on('click','.new_guide .invite_user_slt_project .item',function () {
            //append item
            $('.new_guide .invite_user_slt_project .list_tags .list .insider span').remove();
            $('.new_guide .invite_user_slt_project .list_tags .list .insider').html('<div class="item" data-id="'+$(this).attr('data-id')+'"><div class="close_item"><img src="images/close.png" alt="close" /></div> '+$(this).text()+'</div>');
            $('.new_guide .get_invite_user_slt_project').val($(this).attr('data-id'));

            //remove item
            $('.new_guide .invite_user_slt_project .list_tags .list .item .close_item').on('click',function () {
                $(this).parent().parent().append('<span>Select users</span>');
                $(this).parent().remove();
                $('.new_guide .get_invite_user_slt_project').val('');
            });
        });

        $(document).on('click','.new_guide .invite_user_slt_user .search_keyword_slt  .item',function (e) {
            e.preventDefault();
            $('.new_guide .get_invite_user_slt_user').val('');

            //append item
            $('.new_guide .invite_user_slt_user .list_tags .list .insider span').remove();
            $('.new_guide .invite_user_slt_user .list_tags .list .insider').append('<div class="item" data-id="'+$(this).attr('data-id')+'"><div class="close_item"><img src="images/close.png" alt="close" /></div> '+$(this).text()+'</div>');

            arr.push($(this).attr('data-id'));
            $('.new_guide .get_invite_user_slt_user').val(arr);


            $(this).remove();
        });

        //remove item
        $(document).on('click','.new_guide .invite_user_slt_user .list_tags .list .item .close_item',function () {
            $(this).parent().remove();

            var val = $(this).parent().attr('data-id');

            var removeItem = val;

            arr.splice( $.inArray(removeItem,arr) ,1 );

            $('.new_guide .get_invite_user_slt_user').val(arr);

        });

        let arr = [];
        $(document).on('click','.new_guide .invite_user_slt_cate .search_keyword_slt  .item',function (e) {
            e.preventDefault();
            $('.new_guide .get_invite_user_slt_cate').val('');

            //append item
            $('.new_guide .invite_user_slt_cate .list_tags .list .insider span').remove();
            $('.new_guide .invite_user_slt_cate .list_tags .list .insider').append('<div class="item" data-id="'+$(this).attr('data-id')+'"><div class="close_item"><img src="images/close.png" alt="close" /></div> '+$(this).text()+'</div>');

            arr.push($(this).attr('data-id'));
            $('.new_guide .get_invite_user_slt_cate').val(arr);

            $(this).remove();
        });

        //remove item
        $(document).on('click','.new_guide .invite_user_slt_cate .list_tags .list .item .close_item',function () {
            $(this).parent().remove();

            var val = $(this).parent().attr('data-id');

            var removeItem = val;

            arr.splice( $.inArray(removeItem,arr) ,1 );

            $('.new_guide .get_invite_user_slt_cate').val(arr);

        });

        //invite
        $(document).on('click','.invite_list .invite_user_slt_user .search_keyword_slt  .item',function (e) {
            e.preventDefault();

            //append item
            $('.invite_list .invite_user_slt_user .list_tags .list .insider span').remove();
            $('.invite_list .invite_user_slt_user .list_tags .list .insider').append('<div class="item" data-id="'+$(this).attr('data-id')+'"><div class="close_item"><img src="images/close.png" alt="close" /></div> '+$(this).text()+'</div>');

            let str = $('.invite_list .get_invite_user_slt_user').val();
            arr = str.split(",");

            arr.push($(this).attr('data-id'));
            $('.invite_list .get_invite_user_slt_user').val(arr);

            let id = $('.invite_list .get_invite_id').val();
            let local = $('.get_invite_url').val();

            $.ajax({
                type:'POST',
                url:local,
                data:{'id':id,'arr':arr},
                success:function(data){

                }
            });

            $(this).remove();
        });

        //remove item
        $(document).on('click','.invite_list .invite_user_slt_user .list_tags .list .item .close_item',function () {
            $(this).parent().remove();
            let id = $('.invite_list .get_invite_id').val();

            let val = $(this).parent().attr('data-id');

            let removeItem = val;

            let str = $('.invite_list .get_invite_user_slt_user').val();
            arr = str.split(",");

            arr.splice( $.inArray(removeItem,arr) ,1 );

            $('.invite_list .get_invite_user_slt_user').val(arr);

            let local = $('.get_invite_url').val();

            $.ajax({
                type:'POST',
                url:local,
                data:{'id':id,'arr':arr},
                success:function(data){

                }
            });

        });

        $('.invite_list .close_guide').on('click',function () {
            $('.invite_list').removeClass('active');
        });

        $(document).on('click','.guidelines_admin .list_guide table tbody span.add',function () {
            $('.invite_list').addClass('active');
            let id = $(this).attr('data-id');
            let local = $(this).attr('data-url');
            $('.invite_list .get_invite_id').val(id);

            $.ajax({
                type:'POST',
                url:local,
                data:{'id':id},
                success:function(data){
                    $('.invite_list .list_tags .list .insider span').remove();
                    $('.invite_list .list_tags .list .insider').html('');

                    $.each(data.success, (index, item) => {
                        $('.invite_list .list_tags .list .insider').append('<div class="item" data-id="'+item.userid+'"><div class="close_item"><img src="images/close.png" alt="close" /></div> '+item.username+'</div>');
                    });

                    $.each(data.users_search, (index, item) => {
                        $('.invite_list .list_slt').append('<div class="item" data-id="'+item.userid+'">'+item.username+'</div>');
                    });

                    $('.invite_list .get_invite_user_slt_user').val(data.list);

                }
            });
        });
    }

    function menu_guidelines() {
        $('.sidebar ul li i').on('click',function () {
           $(this).siblings('ul').slideToggle();
        });
    }

    function scroll_menu_active() {
        var myFullpage = new fullpage('#fullpage', {
            anchors: ['sec1', 'sec2', 'sec3', 'sec4', 'sec5', 'sec6', 'sec7', 'sec8', 'sec9', 'sec10', 'sec11', 'sec12', 'sec13', 'sec14', 'sec15', 'sec16', 'sec17', 'sec18', 'sec19', 'sec20','sec21', 'sec22', 'sec23', 'sec24', 'sec25', 'sec26', 'sec27', 'sec28', 'sec29', 'sec30', 'sec31', 'sec32', 'sec33', 'sec34', 'sec35', 'sec36', 'sec37', 'sec38', 'sec39', 'sec40', 'sec41', 'sec42', 'sec43', 'sec44', 'sec45', 'sec46', 'sec47', 'sec48', 'sec49', 'sec50'],
            menu: '#menu',
            loopTop: true,
            loopBottom: true,
            afterLoad: function(origin, destination, direction){
                $('.sidebar ul li').filter(function () {
                    if($(this).find('ul li').hasClass('active')){
                        $(this).addClass('active');
                        $(this).find('ul').fadeIn();
                    }else{
                        $(this).find('ul').fadeOut();
                    }
                });
            },
        });
    }

    function uploadData() {
        $('.upload_logo').on('change',function (event) {
            let tmppath = URL.createObjectURL(event.target.files[0]);
            $('.menu_admin .logo img').attr('src',tmppath);
            $('.close_logo_admin').addClass('show');
        });

        $(document).on('click','.close_logo_admin',function () {
            $('.menu_admin .logo img').attr('src','images/upload4.png');
            $(this).removeClass('show');
        });

        $('.fullpage_admin section.section1 .upload_background').on('change',function (event) {
            let tmppath2 = URL.createObjectURL(event.target.files[0]);
            let filename = event.target.files[0].name;
            $(this).parent().parent().parent().css('background','url('+tmppath2+') no-repeat');
            $('.fullpage_admin section.section1 button span').text(filename);
        });

        $('.fullpage_admin section.section3 .upload_background').on('change',function (event) {
            let tmppath3 = URL.createObjectURL(event.target.files[0]);
            let filename = event.target.files[0].name;
            $('.fullpage_admin section.section3').css('background','url('+tmppath3+') no-repeat');
            $('.fullpage_admin section.section3 button span').text(filename);
        });

        $('.fullpage_admin section.section4 .btn_ground1').on('change',function (event) {
            let tmppath3 = URL.createObjectURL(event.target.files[0]);
            $(this).css('background','url('+tmppath3+') no-repeat');
            $(this).find('img').hide();
            $(this).addClass('border-hide');
        });

        $('.fullpage_admin section.section4 .btn_ground2').on('change',function (event) {
            let tmppath4 = URL.createObjectURL(event.target.files[0]);
            $(this).css('background','url('+tmppath4+') no-repeat');
            $(this).find('img').hide();
            $(this).addClass('border-hide');
        });

        $('.fullpage_admin section.section4 .btn_ground1 i').on('click', function () {
            $(this).parent().removeClass('border-hide');
            $(this).parent().find('img').show();
            $(this).parent().find('img').attr('src','images/editlogo.png');
            $(this).parent().css('background','none');
        });

        $('.fullpage_admin section.section4 .btn_ground2 i').on('click', function () {
            $(this).parent().removeClass('border-hide');
            $(this).parent().find('img').show();
            $(this).parent().find('img').attr('src','images/editlogo.png');
            $(this).parent().css('background','none');
        });

        $('.file_vector1').on('change', function (event) {
            let filename = event.target.files[0].name;
            $(this).siblings('span').text(filename);
        });

        $('.file_img1').on('change', function (event) {
            let filename = event.target.files[0].name;
            $(this).siblings('span').text(filename);
        });

        $('.file_vector2').on('change', function (event) {
            let filename = event.target.files[0].name;
            $(this).siblings('span').text(filename);
        });

        $('.file_img2').on('change', function (event) {
            let filename = event.target.files[0].name;
            $(this).siblings('span').text(filename);
        });

        $('.fullpage_admin .btn_ground_idea input.upload_background').on('change', function () {
            let tmppath4 = URL.createObjectURL(event.target.files[0]);
            $(this).parent().css('background','url('+tmppath4+') no-repeat');
            $(this).siblings('img').hide();
            $(this).parent().addClass('border-hide');
        });

        $('.fullpage_admin .btn_ground_idea i').on('click', function () {
            $(this).parent().removeClass('border-hide');
            $(this).siblings('img').show();
            $(this).siblings('img').attr('src','images/editlogo.png');
            $(this).parent().css('background','none');
        });

        $('.fullpage_admin .btn_ground_size input.upload_background').on('change', function () {
            let tmppath4 = URL.createObjectURL(event.target.files[0]);
            $(this).parent().css('background','url('+tmppath4+') no-repeat');
            $(this).siblings('img').hide();
            $(this).parent().addClass('border-hide');
        });

        $('.fullpage_admin .btn_ground_size i').on('click', function () {
            $(this).parent().removeClass('border-hide');
            $(this).siblings('img').show();
            $(this).siblings('img').attr('src','images/editlogo.png');
            $(this).parent().css('background','none');
        });

        $('.fullpage_new .btn_ground_logo input').on('change', function () {
            let tmppath4 = URL.createObjectURL(event.target.files[0]);
            $(this).parent().css('background','url('+tmppath4+') no-repeat');
            $(this).parent().addClass('active');
            $(this).siblings('img').hide();
        });

        $('.fullpage_admin .btn_ground_logo i').on('click', function () {
            $(this).siblings('img').show();
            $(this).siblings('img').attr('src','images/editlogo.png');
            $(this).parent().removeClass('active');
            $(this).parent().css('background','none');
        });


        //upload file image
        $('.upload_vector').on('change',function () {
            let tmppath = URL.createObjectURL(event.target.files[0]);
            let filename = $(this).val().split('\\').pop();
            let ext = filename.split('.')[1];

            $(this).siblings('span').text(filename);
        });
        $('.upload_img').on('change',function () {
            let tmppath = URL.createObjectURL(event.target.files[0]);
            let filename = $(this).val().split('\\').pop();
            let ext = filename.split('.')[1];

            $(this).siblings('span').text(filename);
            $(this).parent().parent().siblings('.logo').find('img').attr('src',tmppath);
        });
    }


    function login_admin() {
        $('.login .insider ul li:nth-child(1)').on('click', function () {
            $('.login .insider ul li').removeClass('current');
            $(this).addClass('current');
            $('#tab-1').show();
            $('#tab-2').hide();
        });
        $('.login .insider ul li:nth-child(2)').on('click', function () {
            $('.login .insider ul li').removeClass('current');
            $(this).addClass('current');
            $('#tab-1').hide();
            $('#tab-2').show();
        });
    }

    function ajaxSearchProject() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(event) {
            $("input.get_slt_keyword1").keyup(function(e){
                e.preventDefault();
                let keyword = $(this).val();
                let db = 'dm_project';
                let col = 'project_name';
                let local = $(location).attr('href');
                if(keyword !== ""){
                    $.ajax({
                        type:'POST',
                        url:local,
                        data:{'keyword':keyword,'db':db,'col':col},
                        success:function(data){
                            $('.search_keyword_slt .list_slt1').empty();

                            $.each(data.success, (index, item) => {
                                $('.search_keyword_slt .list_slt1').append('<div class="item" data-id="'+item.project_id+'">'+ item.project_name +'</div>');
                            });
                        }
                    });
                }else{
                    $('.search_keyword_slt .list_slt1').empty();
                    $('.search_keyword_slt .list_slt1').append('<div class="item" style="color: red;">Vui lòng nhập thông tin cần tìm kiếm !</div>');
                }
            });

            $("input.get_slt_keyword2").keyup(function(e){
                e.preventDefault();
                let keyword = $(this).val();
                let db = 'dm_user';
                let col = 'username';
                let local = $(location).attr('href');
                if(keyword !== ""){
                    $.ajax({
                        type:'POST',
                        url:local,
                        data:{'keyword':keyword,'db':db,'col':col},
                        success:function(data){
                            $('.search_keyword_slt .list_slt2').empty();

                            let myarray = [];

                            $('.invite_user_slt_user .item').each(function(){
                                let val = $(this).text();
                                    val = val.replace(" ", "");
                                    myarray.push(val);
                            });

                            $.each(data.success, (index, item) => {
                                if(jQuery.inArray(item.username, myarray) < 0) {
                                    $('.search_keyword_slt .list_slt2').append('<div class="item" data-id="'+item.userid+'">'+ item.username +'</div>');
                                }
                            });
                        }
                    });
                }else{
                    $('.search_keyword_slt .list_slt2').empty();
                    $('.search_keyword_slt .list_slt2').append('<div class="item" style="color: red;">Vui lòng nhập thông tin cần tìm kiếm !</div>');
                }
            });

            $("input.get_slt_keyword3").keyup(function(e){
                e.preventDefault();
                let keyword = $(this).val();
                let db = 'dm_category';
                let col = 'category_name';
                let local = $(location).attr('href');
                if(keyword !== ""){
                    $.ajax({
                        type:'POST',
                        url:local,
                        data:{'keyword':keyword,'db':db,'col':col},
                        success:function(data){
                            $('.search_keyword_slt .list_slt3').empty();

                            let myarray = [];

                            $('.invite_user_slt_cate .item').each(function(){
                                let val = $(this).text();
                                val = val.replace(" ", "");
                                myarray.push(val);
                            });

                            $.each(data.success, (index, item) => {
                                if(jQuery.inArray(item.category_name, myarray) < 0) {
                                    $('.search_keyword_slt .list_slt3').append('<div class="item" data-id="'+item.category_id+'">'+ item.category_name +'</div>');
                                }
                            });
                        }
                    });
                }else{
                    $('.search_keyword_slt .list_slt3').empty();
                    $('.search_keyword_slt .list_slt3').append('<div class="item" style="color: red;">Vui lòng nhập thông tin cần tìm kiếm !</div>');
                }
            });
        });

    }

    function menuEditGuidelines() {
        let url = window.location.href;
        let id = url.substring(url.lastIndexOf('#') + 1);

        $('.fullpage_admin_edit .section').filter(function () {
            let data_anchor = $(this).attr('data-anchor');

            if(data_anchor == id){
                $(this).fadeIn();
            }
        });

        $('.menu_admin ul.nav li').filter(function () {
            let data_menuanchor = $(this).attr('data-menuanchor');

            if(data_menuanchor == id){
                $('.menu_admin ul.nav li').removeClass('active');
                $(this).addClass('active');
            }
        });

        $('.edit_guide').parent().addClass('body_active');

        $('.menu_admin ul.nav li a').on('click',function () {
            let val = $(this).parent().attr('data-id');
            if(val == ""){
                $('.menu_admin ul.nav li').removeClass('active');
                $(this).parent().addClass('active');
                $('.fullpage_admin_edit .section').hide();
                $('.fullpage_admin_edit .section:nth-child('+val+')').fadeIn();
            }

        });

        $('.btn_send_menu_admin').on('click',function () {
            $('.edit_guide').addClass('active');
        });

        $('.edit_guide .insider .close_guide').on('click',function () {
            $('.edit_guide').removeClass('active');
        });
    }

    function create_menu_layout() {
        $('.create_guide_new').on('click', function () {
            let menu_name = $('.get_name_menu').val();
            let menu_id = $('.get_menu').val();
            let id = parseInt($('.menu_admin ul.nav li ul li:last-child').attr('data-id'));
            let id_add = id + 1;
            let move_layout = $('.sidebar ul li:last-child').attr('data-menuanchor');
            move_layout = parseInt(move_layout);
            if(menu_name !==""){
                $('.new_guide').removeClass('active');
                $('.slt_layout').addClass('active');
                $('.btn_send_menu_admin').fadeOut();
                $('.get_menu_name').val(menu_name);
                $('.get_menu_parent').val($('.invite_user_slt_project .item').attr('data-id'));

                $('.get_menu_parent').val($('.invite_user_slt_menu_parent .insider1 .item').attr('data-id'));

                $('.get_id_menu_parent').val($('.sidebar ul li:nth-child(3)').attr('data-id'));

                $('.move_layout').val(move_layout+1);

                /*$('.sidebar ul li ul').append('<li data-id="'+id_add+'" data-menuanchor="sec'+id_add+'"><a href="'+$('.menu_admin ul.nav').attr('data-url')+'">'+menu_name+'</a></li>');*/
            }else{
                $('.alert-danger').text('Vui lòng nhập tên menu !');
            }
        });

        $('.slt_layout .insider .item').on('click',function () {
            let val_layout = $(this).attr('data-id');
            $('.get_layout').val(val_layout);
        });

        let arr = [];
        $(document).on('click','.invite_user_slt_menu_parent .search_keyword_slt  .item',function (e) {
            e.preventDefault();

            //append item
            $('.invite_user_slt_menu_parent .list_tags .list .insider span').remove();
            $('.invite_user_slt_menu_parent .list_tags .list .insider').html('<div class="item" data-id="'+$(this).attr('data-id')+'"><div class="close_item"><img src="images/close.png" alt="close" /></div> '+$(this).text()+'</div>');



        });

        $('.slt_layout .insider .item').on('click',function () {
            $('.slt_layout .insider .item').removeClass('active');
            $(this).addClass('active');
        });
    }

    function loadmoreAdmin() {
        $('.guidelines_admin .loadmore').on('click',function () {
            let length = $('.guidelines_admin .list_guide table tbody tr').length;
            let local = $(location).attr('href');
            var getUrl = window.location;
            var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url_item = $('.guidelines_admin .main_content .search form input').attr('data-invite');
            $('.guidelines_admin .loadmore i').addClass('active');
            $.ajax({
                type:'POST',
                url:local,
                data:{'length':length},
                success:function(data){
                    let length_success = data.success.length;
                    
                    if(length_success > 0){
                        var html;
                        $.each(data.success, (index, item) => {
                            if(item.status == 1){
                                html = "<span class=\"process\">Process</span>";
                            }else if(item.status == 2){
                                html = "<span class=\"done\">done</span>";
                            }

                            if(item.security == 1){
                                $('.guidelines_admin .list_guide table tbody').append('<tr><td><a class="active" href="'+baseUrl+'/guidelines/'+item.id+'"><strong>'+item.project_name+' <i class="fa fa-lock" aria-hidden="true"></i></a></strong></td><td>'+html+'</td><td>'+item.created_at+'</td><td>'+item.name_create+'</td><td><span class="add" data-id="'+item.id+'" data-url="'+url_item+'"><i class="fa fa-user-plus" aria-hidden="true"></i></span><a href="'+baseUrl+'/guidelines/'+item.id+'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td></tr>');
                            }else{
                                $('.guidelines_admin .list_guide table tbody').append('<tr><td><a href="'+baseUrl+'/guidelines/'+item.id+'"><strong>'+item.project_name+'</strong></a></td><td>'+html+'</td><td>'+item.created_at+'</td><td>'+item.name_create+'</td><td><span class="add" data-id="'+item.id+'" data-url="'+url_item+'">1<i class="fa fa-user-plus" aria-hidden="true"></i></span><a href="'+baseUrl+'/guidelines/'+item.id+'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td></tr>');
                            }
                        });
                        $('.guidelines_admin .loadmore i').removeClass('active');
                    }else{
                        $('.guidelines_admin .loadmore').fadeOut();
                    }
                }
            });
        });
    }

    function upload_font() {
        $('.upload_font_th').on('change',function () {
            let tmppath = URL.createObjectURL(event.target.files[0]);
            let filename = $(this).val().split('\\').pop();
            let ext = filename.split('.')[1];

            $(this).siblings('span').text(filename);
        });
        $('.upload_font_bt').on('change',function () {
            let tmppath = URL.createObjectURL(event.target.files[0]);
            let filename = $(this).val().split('\\').pop();
            let ext = filename.split('.')[1];

            $(this).siblings('span').text(filename);
        });
        $('.upload_font_vb').on('change',function () {
            let tmppath = URL.createObjectURL(event.target.files[0]);
            let filename = $(this).val().split('\\').pop();
            let ext = filename.split('.')[1];

            $(this).siblings('span').text(filename);
        });
    }

    function searchProject() {
        $('.guidelines_admin .main_content .search form input').on('keyup',function () {
            let local = $(this).attr('data-url');
            let invite = $(this).attr('data-invite');
            let keyword = $(this).val();
            var getUrl = window.location;
            var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url_item = $('.guidelines_admin .main_content .search form input').attr('data-invite');
            $.ajax({
                type:'POST',
                url:local,
                data:{'keyword':keyword},
                success:function(data){
                    $('.guidelines_admin .list_guide table tbody').html('');
                    $.each(data.success, (index, item) => {
                        var html;
                        if(item.status == 1){
                            html = "<span class=\"process\">Process</span>";
                        }else if(item.status == 2){
                            html = "<span class=\"done\">done</span>";
                        }

                        if(item.security == 1){
                            $('.guidelines_admin .list_guide table tbody').append('<tr><td><a class="active" href="'+baseUrl+'/guidelines/'+item.id+'"><strong>'+item.project_name+' <i class="fa fa-lock" aria-hidden="true"></i></a></strong></td><td>'+html+'</td><td>'+item.created_at+'</td><td>'+item.name_create+'</td><td><span class="add" data-id="'+item.id+'" data-url="'+invite+'"><i class="fa fa-user-plus" aria-hidden="true"></i></span><a href="'+baseUrl+'/guidelines/'+item.id+'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td></tr>');
                        }else{
                            $('.guidelines_admin .list_guide table tbody').append('<tr><td><a href="'+baseUrl+'/guidelines/'+item.id+'"><strong>'+item.project_name+'</strong></a></td><td>'+html+'</td><td>'+item.created_at+'</td><td>'+item.name_create+'</td><td><span class="add" data-id="'+item.id+'" data-url="'+invite+'"><i class="fa fa-user-plus" aria-hidden="true"></i></span><a href="'+baseUrl+'/guidelines/'+item.id+'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td></tr>');
                        }
                    });
                }
            });
        });
    }

    function ajaxCreateGuideline() {
        //logo
        $(document).on('change','.menu_admin .logo .upload_logo',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl+'/ajax/create/logo';

            var id = $('.id_project').val();
            var slug = $('.slug_project').val();

            var id_logo = $(this).attr('data-id');

            var form_data = new FormData();
            var attachment_data= $(this)[0].files[0];
            form_data.append("file", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type:'POST',
                url:url,
                contentType: false,
                processData: false,
                headers: { "X-CSRF-Token": $("meta[name='csrf-token']").attr("content") },
                data:form_data,
                success:function(data){

                }
            });
        });

        //Layout1
        $(document).on('change','.section1_upload_background',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout1';

            var id = $('.id_project').val();
            var id_back = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');

            var type_menu = $('.check_type_menu_layout1').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("file", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_back", id_back);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //Layout3
        $(document).on('change','.section3_upload_background',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout3';
            var id_menu = $(this).attr('data-menu');

            var id = $('.id_project').val();
            var id_back = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout3').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("file", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_back", id_back);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //Layout4
        /*logo1*/
        $(document).on('change','.section4_upload_background1',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout4';
            var id_menu = $(this).attr('data-menu');

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout4').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section4_upload_background1", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        /*vector1*/
        $(document).on('change','.section4_file_vector1',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout4';

            var id = $('.id_project').val();
            var id_vector1 = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout4').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section4_file_vector1", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_vector1", id_vector1);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        /*image zip1*/
        $(document).on('change','.section4_file_img1',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout4';

            var id = $('.id_project').val();
            var id_zip_image1 = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout4').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section4_file_img1", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_zip_image1", id_zip_image1);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        /*image2*/
        $(document).on('change','.section4_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout4';

            var id = $('.id_project').val();
            var id_logo2 = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout4').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section4_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo2", id_logo2);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        /*vector2*/
        $(document).on('change','.section4_file_vector2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout4';

            var id = $('.id_project').val();
            var id_vector2 = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout4').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section4_file_vector2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_vector2", id_vector2);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        /*image zip2*/
        $(document).on('change','.section4_file_img2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout4';

            var id = $('.id_project').val();
            var id_image_zip2 = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout4').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section4_file_img2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_image_zip2", id_image_zip2);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });


        //Layout5
        $(document).on('change','.section5_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout5';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout5').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section5_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','textarea.text_idea.section5_text',function () {
            var val = $(this).val();
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout5';

            var id = $('.id_project').val();
            var id_txt = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout5').val();

            var form_data = new FormData();
            form_data.append("section5_text", val);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("id_txt", id_txt);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //Layout6
        $(document).on('change','.section6_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout6';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout6').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section6_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });


        //Layout9
        $(document).on('change','.section9_upload_font_th',function (event) {
            var file_data = $(this).prop('files')[0];
            var tmppath = URL.createObjectURL(event.target.files[0]);
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout9';

            var id = $('.id_project').val();
            var id_font = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout9').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section9_upload_font_th", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_font", id_font);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $("#font_face").html('<style type="text/css">@font-face{font-family: myfont_change1;src: url('+tmppath+');}</style>');
            $('.section9 .item .content .list1 p').css('font-family','myfont_change1');

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        $(document).on('change','.section9_upload_font_bt',function (event) {
            var file_data = $(this).prop('files')[0];
            var tmppath = URL.createObjectURL(event.target.files[0]);
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout9';

            var id = $('.id_project').val();
            var id_font = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout9').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section9_upload_font_bt", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_font", id_font);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $("#font_face2").html('<style type="text/css">@font-face{font-family: myfont_change2;src: url('+tmppath+');}</style>');
            $('.section9 .item .content .list2 p').css('font-family','myfont_change2');

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        $(document).on('change','.section9_upload_font_vb',function (event) {
            var file_data = $(this).prop('files')[0];
            var tmppath = URL.createObjectURL(event.target.files[0]);
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout9';

            var id = $('.id_project').val();
            var id_font = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout9').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section9_upload_font_bt", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_font", id_font);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $("#font_face3").html('<style type="text/css">@font-face{font-family: myfont_change3;src: url('+tmppath+');}</style>');
            $('.section9 .item .content .list3 p').css('font-family','myfont_change3');

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout10
        $(document).on('change','.section10_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout10';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout10').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section10_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout11
        $(document).on('change','.section11_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout11';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout11').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section11_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section11_upload_background22',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout11';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout11').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section11_upload_background22", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout12
        $(document).on('change','.section12_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout12';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout12').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section12_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section12_upload_background22',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout12';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout12').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section12_upload_background22", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout13
        /*l1*/
        $(document).on('change','.section13_upload_vector',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout13';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout13').val();
            var slug = $('.slug_project').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section13_upload_vector", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section13_upload_img',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout13';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout13').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section13_upload_img", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        /*l2*/
        $(document).on('change','.section13_upload_vector2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout13';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout13').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section13_upload_vector2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section13_upload_img2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout13';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout13').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section13_upload_img2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        /*l3*/
        $(document).on('change','.section13_upload_vector3',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout13';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout13').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section13_upload_vector3", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section13_upload_img3',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout13';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout13').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section13_upload_img3", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        /*L4*/
        $(document).on('change','.section13_upload_vector4',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout13';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout13').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section13_upload_vector4", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section13_upload_img4',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout13';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var slug = $('.slug_project').val();
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout13').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section13_upload_img4", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout14
        $(document).on('change','.section14_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout14';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout14').val();
            var slug = $('.slug_project').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section14_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout15
        $(document).on('change','.section15_upload_background1',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout15';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout15').val();
            var slug = $('.slug_project').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section15_upload_background1", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section15_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout15';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var type_menu = $('.check_type_menu_layout15').val();
            var slug = $('.slug_project').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section15_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section15_upload_background3',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout15';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout15').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section15_upload_background3", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout16
        $(document).on('change','.section16_upload_background1',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout16';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout16').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section16_upload_background1", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout17
        $(document).on('change','.section17_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout17';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout17').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section17_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });

        //layout18
        $(document).on('change','.section18_upload_img',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout18';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout18').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section18_upload_img", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section18_upload_background1',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout18';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout18').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section18_upload_background1", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section18_upload_background2',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout18';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout18').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section18_upload_background2", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section18_upload_background3',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout18';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout18').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section18_upload_background3", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
        $(document).on('change','.section18_upload_background4',function () {
            var file_data = $(this).prop('files')[0];
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/create/getLayout18';

            var id = $('.id_project').val();
            var id_logo = $(this).attr('data-id');
            var id_menu = $(this).attr('data-menu');
            var slug = $('.slug_project').val();
            var type_menu = $('.check_type_menu_layout18').val();

            var form_data = new FormData();
            var attachment_data = $(this)[0].files[0];
            form_data.append("section18_upload_background4", attachment_data);
            form_data.append("id", id);
            form_data.append("slug", slug);
            form_data.append("id_logo", id_logo);
            form_data.append("id_menu", id_menu);
            form_data.append("type_menu", type_menu);
            form_data.append("baseUrl", baseUrl);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });
    }

    function DeleteGuideline() {
        /*$('.close_logo_admin').on('click', function () {
           var id = $(this).attr('data-id');

            var form_data = new FormData();
            form_data.append("id", id);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    
                }
            });
        });*/
    }
    
    function DelMenuLayout() {
        $('.list_edit .del').on('click', function(){
           let id_menu = $(this).attr('data-id');
           let check_menu = $(this).attr('data-parent');
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var url = baseUrl + '/ajax/del/delMenuLayout';
            var form_data = new FormData();
            form_data.append("id_menu", id_menu);
            form_data.append("check_menu", check_menu);

            $.ajax({
                type: 'POST',
                url: url,
                contentType: false,
                processData: false,
                headers: {"X-CSRF-Token": $("meta[name='csrf-token']").attr("content")},
                data: form_data,
                success: function (data) {
                    location.reload();
                }
            });

           return false;
        });
    }

    function __init() {
        ready();
        login_admin();
        select();
        menu_guidelines();
        scroll_menu_active();
        uploadData();
        ajaxSearchProject();
        menuEditGuidelines();
        create_menu_layout();
        loadmoreAdmin();
        upload_font();
        searchProject();
        ajaxCreateGuideline();
        DelMenuLayout();
    }

    __init();
})(jQuery);

