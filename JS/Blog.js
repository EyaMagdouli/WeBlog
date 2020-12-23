$(document).ready(function(){
    // dropdown function cause with bootstrap 4 itt's not cool so we make it cool haha :D
    $(".dropdown-toggle").click(function() {
        $(this).next().slideToggle(500);
        });
});