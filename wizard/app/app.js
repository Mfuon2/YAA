var activateFinish = function (yes) {
    var state = '';
    state = yes;
    console.log("========= " +state);

    if(state === 'yes'){
        el('stepOne').action = "step/stepTwoPosting.php";
        swal("Good job!","Thank You for Step One Exercise, Please SAVE the Survey at The Bottom before Proceeding", "success");
        this.enableButton('finish');
        this.changeButtonValue('finish','Proceed To Step Two');

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

var checkPassword = function(parentId,childId){
    var elementValue = el(parentId).value;
    var len = elementValue.length;
    if(len < 5){
        console.log("here");
        el(childId).hidden=false;
        el(childId).required = true;
        el(childId).style.color='red';
        el(childId).innerHTML="PASSWORD MUST BE MORE THAN 5 CHARACTERS";
    }else if(len > 5 && len < 8){
        el(childId).hidden=false;
        el(childId).style.color='orange';
        el(childId).innerHTML="Weak Password";
    }else if(len > 7){
        el(childId).hidden=false;
        el(childId).style.color='green';
        el(childId).innerHTML="<i>Good Password</i>";
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