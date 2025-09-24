$(document).ready(function () {
    "use strict";
    var xOffset = 10;
    var yOffset = 20;

    

    $("#contact-form").ajaxForm({
        dataType: 'json',
        success: function (response, status, xhr, $form) {
            handleResponse(response, $form);
            if (typeof response.validations != "undefined") {
                if (response.validations.IsValid) {
                    alert("Successfully submited.");
                }
            }
        },
        error: function () {
            console.log(arguments);
        }
    });


    $("#dlg_submit_requirement").dialog({
        autoOpen: false,
        height: 500,
        width: 450,
        modal: true,
        open: function () {
            $("#dlg_submit_requirement").dialog("widget").find(".ui-dialog-buttonpane").show();
            $("#dlg_submit_requirement").load("contact.php?mode=requestform");
        },
        buttons: {
            "Submit": function () {
                $("#requirement-submit").submit();
            },
            Cancel: function () {
                $(this).dialog("close");
            }
        }
    });
    $("#one_header").click(function () {
        $('html, body').animate({
            scrollTop: $("#header").offset().top
        }, 300);
    });
    $("#two_content").click(function () {
        $('html, body').animate({
            scrollTop: $("#content").offset().top
        }, 300);
    });
    $("#three_footer").click(function () {
        $('html, body').animate({
            scrollTop: $("#footer").offset().top
        }, 300);
    });
    $('#newsticker').bxSlider({
        auto: true,
        speed: 1000

    });
    $("#enentermsg")
            .focus(function () {
                if (this.value === this.defaultValue) {
                    this.value = '';
                }
            })
            .blur(function () {
                if (this.value === '') {
                    this.value = this.defaultValue;
                }
            });
    if (window.location.pathname !== "/" && window.location.pathname.indexOf('index.php') === -1) {
        $('html, body').animate({
            scrollTop: $("#content").offset().top
        }, 500);
    }
    
    // Loading the tooltips using jquery - start
    $("a.tooltip").hover(function (e) {
        this.t = this.title;
        this.title = "";
        $(this).parent().parent().append("<p id='tooltip'>" + this.t + "</p>");
        $("#tooltip").css("top", (e.pageY - xOffset) + "px").css("left", (e.pageX + yOffset) + "px").fadeIn("slow");
    },
            function () {
                this.title = this.t;
                $("p#tooltip").remove();
            });
    $("a.tooltip").mousemove(function (e) {
        $("p#tooltip").css("top", (e.pageY - xOffset) + "px").css("left", (e.pageX + yOffset) + "px");
    });

    $(".menuList").find("a[href='" + window.location.pathname.replace('/', '') + "']").parent().addClass("active");
    $('.chosen-select').chosen();



});
