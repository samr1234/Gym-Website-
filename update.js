function GetDetail(str) {
    if (str.length == 0) {
        document.getElementById("name").value = "";
        document.getElementById("age").value = "";
        document.getElementById("gender").value = "";
        document.getElementById("workexp").value = "";
        document.getElementById("timings").value = "";
        document.getElementById("achievements").value = "";
        document.getElementById("qualification").value = "";
        return;
    }
    else {

        // Creates a new XMLHttpRequest object
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {

            // Defines a function to be called when
            // the readyState property changes
            if (this.readyState == 4 && 
                    this.status == 200) {
                  
                // Typical action to be performed
                // when the document is ready
                var myObj = JSON.parse(this.responseText);

                // Returns the response data as a
                // string and store this array in
                // a variable assign the value 
                // received to first name input field
                  
                    document.getElementById("name").value = myObj[0];
                  
                // Assign the value received to
                // last name input field
                    document.getElementById("age").value = myObj[1];
                    document.getElementById("gender").value=myObj[2];
                    document.getElementById("workexp").value=myObj[3];
                    document.getElementById("timings").value=myObj[4];
                    document.getElementById("achievements").value=myObj[5];
                    document.getElementById("qualification").value=myObj[6];
            }
        };

        // xhttp.open("GET", "filename", true);
        xmlhttp.open("GET", "update.php?id=" + str, true);
          
        // Sends the request to the server
        xmlhttp.send();
    }
}