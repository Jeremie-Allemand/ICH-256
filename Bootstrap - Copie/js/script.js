$(function() {

    let debut = $("#debut").val();
    let debutDate = toDate(debut,"h:m")
    let finDate = addMinutes(debutDate, 45);
    $("#fin").val(ToInputTime(finDate));

    //Convert une une date venant
    function toDate(dStr,format) {
        var temp = new Date(0);
        if (format == "h:m") {
            temp.setHours(dStr.substr(0,dStr.indexOf(":")));
            temp.setMinutes(dStr.substr(dStr.indexOf(":")+1));
            temp.setSeconds(0);
            return temp;
        }else
            return "Invalid Format";
    }

    function addMinutes(date, minutes) {
        return new Date(date.getTime() + minutes*60000);
    }
    function ToInputTime(date) {
        return ("0" + date.getHours()).slice(-2) + ":" +("0" + date.getMinutes()).slice(-2);
    }

});