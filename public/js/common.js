function handleResponse(response, form) {
    if(typeof response.location != "undefined") {
        if(response.location.type == "hash") {
            if(typeof response.location.message != "undefined") {
                $("#growl").html('<p><span style="float: left; margin-right: .3em;" class="ui-icon ui-icon-info"></span>'+response.location.message+'</p>');
            }
            window.location.hash = response.location.url;
        } else {
            window.location.href = response.location.url;
        }
    } else {
        if(typeof response.validations != "undefined") {
            if(typeof form != "undefined" && $(form).find(".errors").size() == 1) {
                if(!response.validations.IsValid) {
                    showErrors(response.validations.Errors, form);
                } else {
                    $(form).find(".errors").fadeOut(500);
                    $(form).find(".errors").html("");
                }
            }
        }
    }
}

function showErrors(errors, form) {
    $(form).find(".errors").html("");
    $(form).find(".reqval").removeClass("reqval");
    $(form).find(".ui-icon-alert").remove();
    $(form).find(".errors").append("<div class='ui-state-error ui-corner-all'>")
    $.each(errors, function(idx, value){
        if(typeof value.field != "undefined" && value.field.trim() != "") {
            $(form).find("#" + value.field).addClass("reqval");
            $(form).find("#" + value.field).after('<span class="ui-icon ui-icon-alert" title="'+value.error+'"></span>');
        }
        $(form).find(".ui-state-error").append("<label for='"+value.field+"'><span class='ui-icon ui-icon-alert'></span>"+value.error+"</label>");
    });
    $(form).find(".errors").fadeIn(500);
}

function refreshCaptcha() {
    var img = document.images['captchaimg'];     
    img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
}
function refreshCaptchas() {
    var img = document.images['captchaimgs'];
    img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
}

function removeImg(type, idx, file, thumbId) {
    if (type == "temp") {
        $.ajax({
            url: 'upload-file.php?mode=remove&file=' + file
        }).done(function() {
            $("#thumb-" + idx).remove();
            $("#thumb-item-" + idx).remove();
            if ($("#image_count").val() != "-1") {
                $("#rem_img").text((parseInt($("#image_count").val()) - $("#property_thumb").children().length));
            }
        });
    } else {
        $("#property_thumb_removed").append('<input class="property_thumb_removed" type="hidden" name="property_thumb_removed[]" value="' + thumbId + '"/>');
        $("#thumb-item-" + idx).remove();
        if ($("#image_count").val() != "-1") {
            $("#rem_img").text((parseInt($("#image_count").val()) - $("#property_thumb").children().length));
        }
    }
}

function getUrlVars() {
    var vars = [], hash;
    if (window.location.href.indexOf('?') != -1) {
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
    }
    return vars;
}

function getUrlWithParam(url, params) {
    url += "?";
    $.each(params, function(idx, val) {
        url += idx > 0 ? '&' : '';
        url += val + '=' + params[val];
    });
    return url;
}

function setGrowl(msg) {
    $("#growl").html('<p><span style="float: left; margin-right: .3em;" class="ui-icon ui-icon-info"></span>' + msg + '</p>');
}

function showGrowl(type, msg) {
    if (typeof type == "undefined") {
        type = "info";
    }
    if (typeof msg != "undefined") {
        setGrowl(msg);
    }
    if (type == "info") {
        $("#growl").removeClass("ui-state-error");
    } else {
        $("#growl").addClass("ui-state-error");
    }
    $("#growl").slideDown(500).delay(3000).slideUp(500, function() {
        $("#growl").html("");
    });
}

function showStaticGrowl(messages) {
    $(messages).each(function() {
        var styleClass = this.styleClass;
        var iconClass = this.iconClass;
        var message = this.message;
        var html = '<div style="padding: 0 .7em;" class="' + styleClass + ' ui-corner-all"><p><span style="float: left; margin-right: .3em;" class="ui-icon ' + iconClass + '"></span>' + message + '<a href="javascript:void(0)" onclick="removeGrowlItem($(this));"><span class="ui-icon ui-icon-close"></span></a></p></div>';
        $("#staticgrowl").append(html);
    });
    $("#staticgrowl").slideDown(500);
}

function hideStaticGrowl() {
    $('#staticgrowl').slideUp(500, function() {
        $("#staticgrowl").find('div').remove();
    });
}

function removeGrowlItem(elem) {
    $(elem).parent().parent().slideUp(500, function() {
        $(elem).parent().parent().remove();
    });
}

function initView() {
    $(".iconbtn").each(function() {
        var btn = $(this);
        btn.button({
            icons: {
                primary: btn.attr("icon")
            },
            text: false
        });
    });
    $(".txticobtn").each(function() {
        var btn = $(this);
        btn.button({
            icons: {
                primary: btn.attr("icon")
            }
        });
    });
    $(".btn").button();
    $(".ui-button").each(function() {
        if (typeof $(this).attr("disabled") != "undefined") {
            $(this).button("disable")
        }
    });
}

function initPriceDDL() {
    var price = parseInt($("#property_price").val());
    var crore = parseInt(price / 10000000);
    var lakh = parseInt((price - (crore * 10000000)) / 100000);
    var thousand = parseInt(((price - (crore * 10000000)) - (lakh * 100000)) / 1000);
    if (lakh > 0) {
        $("#property_lakh").show();
        $("#property_lakh").val(lakh);
        $("#property_lakh_exact").text(lakh + " Lakh");
    }
    if (crore > 0) {
        $("#property_crore").show();
        $("#property_crore").val(crore);
        $("#property_crore_exact").text(crore + " Crore");
    }
    $("#property_thousand").val(thousand);
    $("#property_thousand_exact").text(thousand + " Thousand")
}
$(document).ready(function() {
    
    $('.select-chosen').chosen().change(function() {
        var b = [];
        if ($(this).attr('id') == 'category') {
            b = $(this).val();
            if (b !== null) {
                $.each(b, function(value) {
                    if (value == 1 || value == 2) {
                        $('.bhk').show();
                    } else {
                        $('.bhk').hide();
                    }
                });
            }

        }

    });

    $('.bhk').hide();
    $('#category').on('change', function() {
        var a = $('#category').val();
        if (a == 1 || a == 2) {
            $('.bhk').show();
            $('#searchbtn').css({'margin-left': '42px'});
        } else {
            $('.bhk').hide();
        }
    });
$('#dropClose').click(function(){
   $('#drop-overlay').hide();
});

});