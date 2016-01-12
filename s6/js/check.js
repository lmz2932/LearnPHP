function checkmtel(mtel){
    var str = mtel;
    var Expression = /^13(\d{9})$|^18(\d{9})$|^15(\d{9})$/;
    var objExp = new RegExp(Expression);
    if (objExp.test(str) == true){
        return true;
    }else{
        return false;
    }
}

function checkgtel(gtel){
    var str = gtel;
    var Expression = /^(\d{3}-)(\d{8})$|^(\d{4}-)(\d{7})$|^(\d{4}-)(\d{8})$/;
    var objExp = new RegExp(Expression);
    if (objExp.test(str) == true){
        return true;
    }else{
        return false;
    }
}

function checkemail(email){
    var str = email;
    var Expression = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
    var objExp = new RegExp(Expression);
    if (objExp.test(str) == true){
        return true;
    }else{
        return false;
    }
}

function checkpostal(postalcode){
    var str = postalcode;
    var Expression = /\d{7}/;
    var objExp = new RegExp(Expression);
    if (objExp.test(str) == true){
        return true;
    }else{
        return false;
    }
}

function chkreg(code){
    switch(code){
        case 1:
            if (checkpostal(document.getElementById("postalcode").value) &&
                checkemail(document.getElementById("email").value) &&
                checkgtel(document.getElementById("gtel").value) &&
                checkmtel(document.getElementById("mtel").value)){
                return true;
            }else{
                return false;
            }
            break;
        case 2:
            if (checkpostal(document.getElementById("postalcode").value)){
                document.getElementById("check_postalcode").innerHTML = '邮政编码验证成功！';
            }else{
                document.getElementById("check_postalcode").innerHTML = '邮政编码验证失败！';
            }
            return ;
        case 3:
            if (checkemail(document.getElementById("email").value)){
                document.getElementById("check_email").innerHTML = '邮箱验证成功！';
            }else{
                document.getElementById("check_email").innerHTML = '邮箱验证失败！';
            }
            return ;
        case 4:
            if (checkgtel(document.getElementById("gtel").value)){
                document.getElementById("check_gtel").innerHTML = '固定电话验证成功！';
            }else{
                document.getElementById("check_gtel").innerHTML = '固定电话验证失败！';
            }
            return ;
        case 5:
            if (checkmtel(document.getElementById("mtel").value)){
                document.getElementById("check_mtel").innerHTML = '移动电话验证成功！';
            }else{
                document.getElementById("check_mtel").innerHTML = '移动电话验证失败！';
            }
            return ;
        default:
            break;
    }
}
