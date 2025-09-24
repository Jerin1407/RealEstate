$(document).ready(function () {


    $("#admin-left-menu").menu();

    $("#user-left-menu").menu();
    $("body").on("mouseenter", "table.datatable tbody tr", function () {
        $(this).css("background", "#DAFF91");
    });
    $("body").on("mouseout", "table.datatable tbody tr", function () {
        $(this).css("background", "none");
    });

    $(window).on('hashchange', function () {
        if (typeof window.location.hash != "undefined" && window.location.hash != "#" && window.location.hash != "") {
            loadPage(window.location.hash);
        }
    });

    if (typeof window.location.hash != "undefined" && window.location.hash != "#" && window.location.hash != "") {
        loadPage(window.location.hash);
    }

});

function otp() {
    
   }

function showAjaxLoader(callBack) {
    $("#loader").css("left", ((window.innerWidth - 200) / 2)) + "px";
    $("#loader").css("top", ((window.innerHeight - 200) / 2)) + "px";
    $("#overlay").show();
    $("#loader").show();
}

function hideAjaxLoader(callBack) {
    $("#loader").hide();
    $("#overlay").hide();
}

function loadPage(url) {
    if (typeof url != 'undefined' && url != "#") {
        url = url.substr(0, 0) + '' + url.substr(0 + 1);
        params = url.split('/');
        if (typeof params != 'undefined') {
            $("#inner-content").hide();
            if (typeof params[1] == 'undefined') {
                params[1] = "index";
            }
            var qString = "&";
            if (params.length > 2) {
                for (i = 2; i < params.length; i++) {
                    qString += params[i];
                }
            }
            showAjaxLoader();
            $.ajax({
                url: params[0] + ".php?mode=" + params[1] + qString
            }).done(function (resp, respStatus, xhr) {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    $("#inner-content").html(resp);
                    hideAjaxLoader();
                    $("#inner-content").fadeIn(500);
                    if ($("#growl").text().trim() != "") {
                        showGrowl();
                    }
                    $('#ads_type').on('change', function () {
                        var type = $('#ads_type').val();
                        if (type == "Projects") {
                            $('#url').hide();
                            $('#add-project').show();


                        } else {
                            $('#url').show();
                            $('#add-project').hide();
                            $('#uploader_pdf').hide();
                            $(".project-radio").removeAttr("checked");
                        }

                        $('.project-radio').on('click', function () {
                            var projecturl = $('.project-radio:checked').val();
                            if (projecturl == "url") {
                                $('#url').show();
                                $('#uploader_pdf').hide();
                            } else if (projecturl == "pdf") {
                                $('#url').hide();
                                $('#pfd').show();
                                $('#uploader_pdf').show();
                            }
                        });
                    });
                }
            });
            //window.location.hash = params[0] + "/" + params[1];
        }
    } else {
        window.location.hash = "";
    }
}


//------------------Start Property Scripts-------------------------//
function initPropertyList() {
    initView();
    $(".datatable tbody tr").click(function () {
        //$(this).parents("table").find("tr.selected").removeClass("selected");
        if ($(this).find("input:checkbox").is(":checked")) {
            $(this).removeClass("selected");
            $(this).find("input:checkbox").removeAttr("checked");
        } else {
            $(this).addClass("selected");
            $(this).find("input:checkbox").prop("checked", "checked");
        }
    });
    $(".selectedproperty").click(function () {
        //$(this).parents("table").find("tr.selected").removeClass("selected");
        if ($(this).is(":checked")) {
            $(this).parents("tr").removeClass("selected");
            $(this).removeAttr("checked");
        } else {
            $(this).parents("tr").addClass("selected");
            $(this).prop("checked", "checked");
        }
    });
    $(".datatable tfoot td.paginator a").each(function () {
        if (typeof $(this).attr("disabled") != "undefined") {
            $(this).button("disable");
            if ($(this).hasClass("active")) {
                $(this).addClass("ui-state-active");
                $(this).removeClass("ui-state-disabled");
            }
        }
    });

}

function searchProperty() {
    window.location.hash = "#properties/search/qString=" + encodeURIComponent($("#search").val());
}

function viewProperty() {
    var selected = $("#list input:checked");
    if (selected.length == 1) {
        window.location.hash = "#properties/view&propertyid=" + selected.eq(0).val();
    } else {
        if (selected.length > 1) {
            showGrowl("error", "Could not view multiple properties.");
        } else {
            showGrowl("error", "Please select a row.");
        }
    }
}
function editProperty() {
    var selected = $("#list input:checked");
    if (selected.length == 1) {
        window.location.hash = "#properties/editproperty&propertyid=" + selected.eq(0).val();
    } else {
        if (selected.length > 1) {
            showGrowl("error", "Could not view multiple properties.");
        } else {
            showGrowl("error", "Please select a row.");
        }
    }
}

function deleteproperty() {
    if ($("#list input:checked").length > 0) {
        var properties = Array();
        $("#list input:checked").each(function () {
            properties.push($(this).val());
        });
        showAjaxLoader();
        $.post("properties.php?mode=deleteproperty", {"items": properties}).done(function (msg) {
            hideAjaxLoader();
            if (msg == "Success") {
                setGrowl("Property deleted successfully");
                loadPage("#properties/index");
            }
        });
    } else {
        showGrowl("error", "please select a row");
    }
}

function approveProperty(propId) {
    showAjaxLoader();
    $.ajax({
        url: "properties.php?mode=approveproperty&propertyid=" + propId
    }).done(function (msg) {
        hideAjaxLoader();
        if (msg == "Success") {
            setGrowl("Property approved successfully.");
            window.location.hash = "#properties/view&propertyid=" + propId + "&approved=true";
        }
    });
}

//------------------End Property scripts------------------------//

//---------------Start Hot Property scripts---------------------//

function initHotPropertyList() {
    initView();
    $(".datatable tbody tr").click(function () {
        $(this).parents("table").find("tr.selected").removeClass("selected");
        if ($(this).find("input:radio").is(":checked")) {
            $(this).removeClass("selected");
            $(this).find("input:radio").removeAttr("checked");
        } else {
            $(this).addClass("selected");
            $(this).find("input:radio").prop("checked", "checked");
        }
    });
    $(".selectedproperty").click(function () {
        $(this).parents("table").find("tr.selected").removeClass("selected");
        if ($(this).is(":checked")) {
            $(this).parents("tr").removeClass("selected");
            $(this).removeAttr("checked");
        } else {
            $(this).parents("tr").addClass("selected");
            $(this).prop("checked", "checked");
        }
    });
    $(".datatable tfoot td.paginator a").each(function () {
        if (typeof $(this).attr("disabled") != "undefined") {
            $(this).button("disable");
            if ($(this).hasClass("active")) {
                $(this).addClass("ui-state-active");
                $(this).removeClass("ui-state-disabled");
            }
        }
    });
}

function edithotProperty() {
    var selected = $("#hotdetails input:checked").val();
    if (typeof selected != "undefined") {
        window.location.hash = "#ads/edithotproperty&id=" + selected;
    } else {
        showGrowl("error", "please select a row");
    }
}

function deletehotproperty() {
    var selected = $("#hotdetails input:checked").val();
    showAjaxLoader();
    $.ajax({
        url: "ads.php?mode=deletehotproperty&id=" + selected
    }).done(function (msg) {
        hideAjaxLoader();
        if (msg == "Success") {
            setGrowl("Property deleted successfully.");
            loadPage("#ads/index");
        }
    });
}

//----------------End Hot Property scripts----------------------//

//-------------------Start Users Scripts------------------------//

function initUsersList() {
    initView();
    $(".datatable tbody tr").click(function () {
        //$(this).parents("table").find("tr.selected").removeClass("selected");
        if ($(this).find("input:checkbox").is(":checked")) {
            $(this).removeClass("selected");
            $(this).find("input:checkbox").removeAttr("checked");
        } else {
            $(this).addClass("selected");
            $(this).find("input:checkbox").prop("checked", "checked");
        }
    });
    $(".selecteduser").click(function () {
        //$(this).parents("table").find("tr.selected").removeClass("selected");
        if ($(this).is(":checked")) {
            $(this).parents("tr").removeClass("selected");
            $(this).removeAttr("checked");
        } else {
            $(this).parents("tr").addClass("selected");
            $(this).prop("checked", "checked");
        }
    });
    $(".datatable tfoot td.paginator a").each(function () {
        if (typeof $(this).attr("disabled") != "undefined") {
            $(this).button("disable");
            if ($(this).hasClass("active")) {
                $(this).addClass("ui-state-active");
                $(this).removeClass("ui-state-disabled");
            }
        }
    });
}

function searchUsers() {
    window.location.hash = "#user/search/qString=" + encodeURIComponent($("#search").val());
}

function viewUser() {
    var selected = $("#list input:checked");
    if (selected.length === 1) {
        window.location.hash = "#user/user_detail_view&userid=" + selected.eq(0).val();
    } else {
        if (selected.length > 1) {
            showGrowl("error", "Could not view multiple Users.");
        } else {
            showGrowl("error", "Please select a row.");
        }
    }
}

function deleteUser() {
    if ($("#list input:checked").length > 0) {
        var users = Array();
        $("#list input:checked").each(function () {
            users.push($(this).val());
        });
        showAjaxLoader();
        $.ajax({
            url: "user.php?mode=deleteuser",
            type: "POST",
            data: {"items": users},
            dataType: "json"
        }).done(function (response) {
            hideAjaxLoader();
            showStaticGrowl(response);
            loadPage("#user/listview");
        });
    } else {
        showGrowl("error", "please select a row");
    }
}

function approveUser(userId) {
    showAjaxLoader();
    $.ajax({
        url: "user.php?mode=approveuser&userid=" + userId
    }).done(function (msg) {
        hideAjaxLoader();
        if (msg == "Success") {
            setGrowl("User approved successfully.");
            window.location.hash = "#properties/view&userid=" + userId + "&approved=true";
        }
    });
}

//--------------------End Users Scripts-------------------------//

function paginate(offset) {
    var hash = window.location.hash;
    var offString = "offset=" + offset;
    if (hash.indexOf("offset=") == -1) {
        hash += "&" + offString;
    } else {
        hash = hash.replace(/\offset\=[0-9\(\)]+/, offString);
    }
    window.location.hash = hash;
}

    

