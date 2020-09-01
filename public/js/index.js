$("form").submit(function() {
    $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
    return true; // ensure form still submits
});
