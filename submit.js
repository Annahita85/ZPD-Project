let root = window.location.origin;
$("#submit").on("click", function(){
    let fData = new FormData();

    fData.append("fname", $("input#fname").val());
    fData.append("email", $("input#email").val());
    fData.append("password", $("input#password").val());

    let path = root+"/var/www/html/server.php";
    $.ajax({
        URL:Path,
        type: 'POST',
        contentType: false,
        processData:false,
        catch:false,
        data:fData,
        success :function(data){
            console.log("DATAAAA:",)

        },
        error:function (data) {
            console.log("error:",data)
            
        }
    })
})