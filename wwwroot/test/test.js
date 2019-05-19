
function showHint(str) {
    if (str.length == 0) {
        var table = document.getElementById("myTable");
        table.innerHTML = "";
        return;
    }
    else {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var results = this.responseText.split("\t");
                var table = document.getElementById("myTable");
                table.innerHTML = "";             
                
                var j = 0;
                for (var i = 0; i < results.length - 1; i+= 3) {
                    var row = table.insertRow(j);
                    row.insertCell(0).innerHTML = results[i];
                    row.insertCell(1).innerHTML = results[i+1];
                    row.insertCell(2).innerHTML = results[i + 2];
                    j++;
                }     
            }
        };
        xmlHttp.open("GET", "test2.php?q=" + str, true);
        xmlHttp.send();
    }
}

function popUp(rowNum, myRow)
{   
    if(myRow == true)
    {
        alert("My ID: " + rowNum);
    }
    else
    {
        alert("you have clicked on row: " + rowNum);
    }
}
