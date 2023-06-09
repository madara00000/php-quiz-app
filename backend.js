

var di_vice_boos=document.getElementsByClassName("vice_boos")[0];

var di_contr=document.getElementsByClassName("div7_container");
console.log(di_contr);
di_contr[0].style.display="block";

var di_headr=document.getElementsByClassName("respo_header");
console.log(di_headr);
di_headr[0].style.display="block";

var btn_prv=document.getElementsByClassName("btn_P")[0];
var btn_n=document.getElementsByClassName("btn_N")[0];


var resp_di_btn_res=document.getElementsByClassName("resp_di_btn_res")[0];
console.log(resp_di_btn_res);
var btn_res=document.getElementById("btn_res");

var di_vice_boos_res=document.getElementsByClassName("vice_boos_res")[0];
var btn_ref=document.getElementsByClassName("btn_ref")[0];


var ind_contr=0;

btn_n.onclick=function(){
    if(ind_contr<di_contr.length-1){
        console.log(ind_contr);
        ind_contr++;
        di_contr[ind_contr].style.display="block";
        di_headr[ind_contr].style.display="block";
        di_contr[ind_contr-1].style.display="none";
        di_headr[ind_contr-1].style.display="none";
    }
    else{
        console.log(resp_di_btn_res);
        resp_di_btn_res.style.display="block";
        btn_res.onclick=function(){
            di_vice_boos.style.display="none";
            di_vice_boos_res.style.display="block";
            btn_ref.onclick=function(){
                location.reload();
            }
        }
    }
}


btn_prv.onclick=function(){
    if(ind_contr==0){
        di_contr[ind_contr].style.display="none";
        di_headr[ind_contr].style.display="none";
        ind_contr=di_contr.length-1;
        di_contr[ind_contr].style.display="block";
        di_headr[ind_contr].style.display="block";
    }
    else{
        ind_contr--;
        di_contr[ind_contr].style.display="block";
        di_headr[ind_contr].style.display="block";
        di_contr[ind_contr+1].style.display="none";
        di_headr[ind_contr+1].style.display="none";
    }
}

