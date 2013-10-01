
//global namespace for the website
var abslog = {};

//manage the tab swithing for the applicaiton
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

//initialization should happen here
$(document).ready(function(){
   abslog.tabmanager.init();
});

