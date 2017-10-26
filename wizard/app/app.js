var activateFinish = function (yes) {
    var state = '';
    state = yes;
    console.log("========= " +state);

    if(state === 'yes'){
        this.enableButton('finish');
        this.changeButtonValue('finish','Proceed To Step 2');
    }else
        return el('finish').disabled=false;
};
var el = function element(id) {
    return document.getElementById(id)
};

var enableButton = function(id){
    return el(id).disabled=false;
};

var changeButtonValue = function(id,msg){
    return el(id).value=msg;
};

(function disable(){
    return el('finish').disabled=true;
})();