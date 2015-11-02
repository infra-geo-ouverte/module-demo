define([], function() {
    function OutilDemo(){
        this.init();
    }

    OutilDemo.prototype.init = function(){
        console.log('OutilDemo init');
    };

    
    return OutilDemo;

});
