var activateFinish = function (yes) {
    var state = '';
    state = yes;
    console.log("========= " +state);

    if(state === 'yes'){
        this.enableButton('finish');
        this.changeButtonValue('finish','Save');

        el('finish').addEventListener("click", function(){
           redirect('stepTow.php');
        });
    }else{
        swal("Good job!", "Thank You for completing The Survey. Please SAVE the Survey Before Exiting", "success");
        return el('finish').disabled=false;
    }

};

var checkRegistrationBody = function(id){
    var value = getSelected(id);

    if(value === 'O'){
        hideField('RegistrationBody');
        showField('OtherBodyLabel');
        showField('OtherBody');
    }
    else{
        hideField('OtherBodyLabel');
        hideField('OtherBody');
    }


};

var clearDiv = function(){

   return  window.location.assign('../../index.php');


};

var success =  function () {
    el('saveLink').style.visibility = 'hidden';
    return swal("Good job!", "Please SAVE the Survey Before Exiting", "success");
};

var successPhp =  function () {
    return swal("Success", "Save Successful", "success");
};


var hideField = function (id){
    return el(id).hidden=true;
};

var showField = function (id){
    return el(id).hidden=false;
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

var redirect = function(url){
    return window.location.assign(url);
};

var getSelected = function(id){
    return el(id).value;
};


(function disable(){
    return el('finish').disabled=true;
})();
(function disable(){
    return el('proceed').disabled=true;
})();

(function disable(){
    return el('SaveStepTwo').style.visibility = 'hidden';
})();