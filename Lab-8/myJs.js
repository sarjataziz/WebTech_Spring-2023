function get(id) {
        return document.getElementById(id);
    }

    function getValue(element_username) {
        // var username = element.value;
        var username = element_username.value;
        get("op").innerHTML = username;
        // if (username == "") {
        //     get("username").style.border = "1px solid red";
        // } else {
        //     get("username").style.border = "1px solid #ccc";
        // }
    }

    function viewGoogle() {
        var g_form = get("g_form");
        var button = get("button");
        if (g_form.style.display == "none") {
            g_form.style.display = "block";
            button.style.display = "none";
        } else {
            g_form.style.display = "none";
            button.style.display = "block";
        }
    }