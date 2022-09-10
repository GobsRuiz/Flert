function enterSite(){
    const params = new URLSearchParams(window.location.search);
    const password = "0apctn9q5lkj127l7m7k7azqq99saq5qqqqwet059a4qpouian2d56a6qf";

    if(params.get("enter") !== password){
        window.location.href = "/error.html";
    }
}
enterSite()