"use strict";
$(function() {
    $("#nav-top .nt-nav li").click(function(n) {
        var e = $(this).index();
        $(this).addClass("ntn-active").siblings("li").removeClass("ntn-active"), $("#nav-left .nl-con").eq(e).addClass("nl-show").siblings(".nl-con").removeClass("nl-show"), $("#nav-left .nl-con").eq(e).find("dd").eq(0).click();
        var i = $("#nav-left .nl-con").eq(e).find("a").attr("href");
        $("#content-iframe").attr("src", i)
    }), $("#nav-left .nl-con dd").click(function(n) {
        $(".nl-checked").hide(), $(this).find(".nl-checked").show()
    })
});