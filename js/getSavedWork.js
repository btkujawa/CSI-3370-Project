function getSavedWork() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var res = JSON.parse(this.responseText);
            console.log(res.image);
            for (var i = 0; i < res.image.length; i++) {
                var div = document.createElement('div');
                div.className = "thumbnail";
                div.id = "preview" + i;
                console.log();
                document.getElementById('body').appendChild(div);
                var img = document.createElement('img');
                //img.alt = "test";
                img.src = res.image[i]
                document.getElementById( div.id).appendChild(img);
                var bttnDiv = document.createElement('div');
                bttnDiv.className = "middle";
                bttnDiv.id = "bttnDiv" + i;
                document.getElementById(div.id).appendChild(bttnDiv);
                var openBttn = document.createElement('button');
                openBttn.innerHTML = "Open";
                openBttn.className = "buttons";
                openBttn.type = "button";
                document.getElementById(bttnDiv.id).appendChild(openBttn);
                var deleteBttn = document.createElement('button');
                deleteBttn.innerHTML = "Delete";
                deleteBttn.className = "buttons";
                deleteBttn.type = "button";
                deleteBttn.onclick = 'deleteSavedWork()';
                document.getElementById(bttnDiv.id).appendChild(deleteBttn);
                var shareBttn = document.createElement('button');
                shareBttn.innerHTML = "Share";
                shareBttn.className = "buttons";
                shareBttn.type = "button";
                document.getElementById(bttnDiv.id).appendChild(shareBttn);
            }
        }
    };

    xhttp.open("GET", "../php/databaseinterface/getSavedWork.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send();
}