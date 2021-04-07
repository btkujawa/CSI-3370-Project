function deleteSavedWork() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
                        
        }
    };
    var path_id = document.getElementById();
    xhttp.open("GET", "../php/databaseinterface/deleteSavedWork.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send();
}