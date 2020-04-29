function hide1(){
        document.getElementById("contconn").style.display="block";
        document.getElementById("contnew").style.display="none";

        document.getElementById("n").setAttribute("style","border-color:black");
        document.getElementById("c").setAttribute("style","border-color:blue");

        document.getElementById("n").setAttribute("style","font-weight: normal");
        document.getElementById("c").setAttribute("style","font-weight: bold");

        document.getElementById("n").setAttribute("class","border-bottom-primary");
        document.getElementById("c").setAttribute("class","border-bottom-light");
        
      }
function hide2(){
        document.getElementById("contnew").style.display="block";
        document.getElementById("contconn").style.display="none";

        document.getElementById("n").setAttribute("style","border-color:blue");
        document.getElementById("c").setAttribute("style","border-color:black");

        document.getElementById("c").setAttribute("style","font-weight: normal");
        document.getElementById("n").setAttribute("style","font-weight: bold");
        
        document.getElementById("c").setAttribute("class","border-bottom-primary");
        document.getElementById("n").setAttribute("class","border-bottom-light");
      
      }