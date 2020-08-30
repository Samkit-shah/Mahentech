//CEH
function mouseOverceh() {
    document.getElementById("cehimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutceh() {
    document.getElementById("cehimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}
//CHFI
function mouseOverchfi() {
    document.getElementById("chfiimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutchfi() {
    document.getElementById("chfiimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}
//ECSA
function mouseOverecsa() {
    document.getElementById("ecsaimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutecsa() {
    document.getElementById("ecsaimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}
//CASENET
function mouseOvercasenet() {
    document.getElementById("casenetimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutcasenet() {
    document.getElementById("casenetimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}
//CASEJAVA  
function mouseOvercasejava() {
    document.getElementById("casejavaimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutcasejava() {
    document.getElementById("casejavaimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}
//CEHMASTER
function mouseOvercehmaster() {
    document.getElementById("cehmasterimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutcehmaster() {
    document.getElementById("cehmasterimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}
//ECSAPRACTICAL
function mouseOverecsap() {
    document.getElementById("ecsapimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutecsap() {
    document.getElementById("ecsapimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}




$(document).ready(function() {
    $('.openbtn').click(function() {
        $('nav').toggleClass('active');
        $(".openbtn").css("display", "none");
        $(".closebtn").css("display", "block");
    })

})
$(document).ready(function() {
    $('.closebtn').click(function() {
        $('nav').toggleClass('active');
        $(".closebtn").css("display", "none");
        $(".openbtn").css("display", "block");
    })

})