//to uncheck the burger-menu icon when resizing 
window.addEventListener('resize', (e) => {
	if (window.matchMedia('(min-width: 768px)').matches) {
        document.getElementById('nav-toggle').checked = false;
    }
    });

//MODAL
function hideModal() {
    //hide modal
    document.getElementById("modal").style = "display:none";
    document.getElementById("modal-gamename").innerText = "";
}

function viewGameInfo(gameName){
        //show modal
        document.getElementById("modal").style = "display:block";
        document.getElementById("modal-gamename").innerText = gameName;
}
