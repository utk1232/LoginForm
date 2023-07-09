$(document).ready(function () {
    $(v1).hide();
    $(v2).hide();
    $(v3).hide();
    $(v4).hide();
    $(v5).hide();
    $(v6).hide();
    $(v7).hide();



    var n_error = true;
    var u_error = true;
    var e_error = true;
    var ph_error = true;
    var p_error = true;
    var c_error = true;

    $('#t1').keyup(function () {
        name_check();
    });

    $('#t2').keyup(function () {
        uname_check();
    });

    $('#t3').keyup(function () {
        email_check();
    });

    $('#t4').keyup(function () {
        phone_check();
    });

    $('#t5').keyup(function () {
        check_pass();
    });

    $('#t6').keyup(function () {
        cnf_pass();
    });

    function name_check() {

        var name_val = $('#t1').val();
        if (name_val.length == '') {
            $("#v1").show();
            $("#v1").html("Please Enter Name");
            $("#v1").focus();
            $("#v1").css("color", "red");
            n_error = "false";
            return false;

        } else {
            $("#v1").hide();
        }
    }




    function uname_check() {
        var uname_val = $('#t2').val();
        if (uname_val.length == '') {
            $("#v2").show();
            $("#v2").html("Please Enter Username");
            $("#v2").focus();
            $("#v2").css("color", "red");
            u_error = "false";
            return false;
        } else {
            $("#v2").hide();
        }
    }

    function email_check() {
        var email_val = $('#t3').val();
        if (email_val.length == '') {
            $("#v3").show();
            $("#v3").html("Please Enter Email");
            $("#v3").focus();
            $("#v3").css("color", "red");
            e_error = "false";
            return false;
        } else {
            $("#v3").hide();
        }
    }

    function phone_check() {
        var phone_val = $('#t4').val();

        if (phone_val.length > 10) {
            $("#v4").show();
            $("#v4").html("Please Enter Correct Number");
            $("#v4").focus();
            $("#v4").css("color", "red");
            ph_error = "false";
            return false;
        } else if (phone_val.length == '') {
            $("#v4").show();
            $("#v4").html("Enter The Number");
            $("#v4").focus();
            $("#v4").css("color", "red");
            ph_error = "false";
            return false;
        }
        // else if(phone_val !== String ){
        //     //   $('t4').val('');
        
        //       $("#v4").show();
        //       $("#v4").html("Enter valid Number");
        //       $("#v4").focus();
        //       $("#v4").css("color", "red");
        //       error = "false";
        //       return false;
        // }
        else {
            $("#v4").hide();
        }
    }

    function check_pass() {
        var pass_val = $('#t5').val();
        if (pass_val.length == '') {
            $("#v5").show();
            $("#v5").html("Enter password");
            $("#v5").focus();
            $("#v5").css("color", "red");
            p_error = "false";
            return false;
        } else {
            $("#v5").hide();
        }
    }

    function cnf_pass() {
        var cnf_val = $('#t6').val();
        var pass_val = $('#t5').val();

        console.log(cnf_val)
        console.log(pass_val)
        if (cnf_val.length == '') {
            $("#v6").show();
            $("#v6").html("Enter Password");
            $("#v6").focus();
            $("#v6").css("color", "red");
            c_error = "false";
            return false;
        } else if (pass_val != cnf_val) {
            $("#v6").show();
            $("#v6").html("PassWord not Match");
            $("#v6").focus();
            $("#v6").css("color", "red");
            c_error = "false";
            return false;
        } else {
            $("#v6").hide();
        }
    }

    $("#btn").click(function(){
        n_error = true;
        u_error = true;
        e_error = true;
        ph_error = true;
        p_error = true;
        c_error = true;

        name_check();
        uname_check();
        email_check();
        phone_check();
        check_pass();
        cnf_pass();
 
        if((n_error == true) && (u_error == true) && (e_error == true) && (ph_error == true) && (p_error == true) && (c_error == true)){
            return true;
        }else{
            return false;
        }
    })



});

