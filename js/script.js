// variables for easier sorting
var asc  = 1;
var desc = 0;

// sorting function
function sort_table(x){
    // all table entries
    var all_countries = document.querySelectorAll("tbody tr:nth-child(n)");
    // empty array for sorted entries
    var countries = [];
    for(var i = 0; i < all_countries.length; i++){
        countries.push(all_countries[i].innerHTML);
    }

    // sort countries
    countries.sort();

    // writeback countries to table
    //sort asc
    if(x == asc){
        for(var i = 0; i < countries.length; i++){
            all_countries[i].innerHTML = countries[i];
        }
    }
    //sort desc
    else{
        for(var i=0; i < countries.length; i++){
            all_countries[i].innerHTML = countries[countries.length -i-1];
        }
    }
}

function show_hide_col(index){
    var tbl = document.getElementById("world_data");
    if(tbl != null) {
        if (index < 0 || index >= tbl.rows.length - 1) {
            return;
        }
        for(var i = 0; i < tbl.rows.length; i++) {
            for (var j = 0; j < tbl.rows[i].cells.length; j++) {
                if(j == index){
                    if(tbl.rows[i].cells[j].style.display == ""){
                        tbl.rows[i].cells[j].style.display = "none";
                    }
                    else{
                        tbl.rows[i].cells[j].style.display = "";
                    }
                }
            }
        }
    }
}
