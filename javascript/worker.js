
var n = 0;


function kohaematur() {
    n = n + 1;
    postMessage(Math.floor(n/60));
    setTimeout("kohaematur()",1000);
}

kohaematur();
