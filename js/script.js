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

// show/hide table cols
function show_hide_col(index){
    index++;
    // select specific col
    var head_col = document.querySelectorAll("th:nth-child("+index+")");
    var body_col = document.querySelectorAll("td:nth-child("+index+")");

    // get real display style
    var current_style = window.getComputedStyle(head_col[0], null).getPropertyValue("display");

    // just one element -> no need for a for
    // toggle display
    if(current_style == "none" || current_style == ""){
        head_col[0].style.display = "table-cell";
    }
    else{
        head_col[0].style.display = "none";
    }
    // for through the whole col
    for(var i = 0; i < body_col.length; i++){
        if(current_style == "none" || current_style == ""){
            body_col[i].style.display = "table-cell";
        }
        else{
            body_col[i].style.display = "none";
        }
    }
}
