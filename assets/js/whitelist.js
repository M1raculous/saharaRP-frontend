// Language: javascript
// Path: assets\js\whitelist.js
// Database Name: sahararp 
// Table Name: users

// We need to get the data from the database 
// we need to get the data from the table named "users"
function getUsers() {
    var users = [];
    var rows = db.get("SELECT * FROM users");
    for (var i = 0; i < rows.length; i++) {
        console.log(rows[i].steamID);
    }

}