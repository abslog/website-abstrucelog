
var abslog = {};

abslog.tabmanager = (function(){
    
    function init() {
        handlePageInit();
        $('#index-tabs a').click(handleTabClick);
    }
    
    function handleTabClick() {
        $(this).tab('show');
    }
    
    function handlePageInit() {
        $('#index-tabs a[href="' + location.hash + '"]').tab('show');
    }
    
    return {
        init : init
    }
    
}());

$(document).ready(function(){
   abslog.tabmanager.init();
});

