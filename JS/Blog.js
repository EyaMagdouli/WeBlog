$(document).ready(function(){
    $(".dropdown-toggle").click(function() {
        $(this).next().slideToggle(500);
        });
});