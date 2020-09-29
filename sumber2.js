
$(document).ready(function(){
    $.ajax({
        type : "POST",
        url  : "sumber.php",
        data : {
            tipe:"dataindo"
        },
        success : function(data){
            let row = data.split("+");
            let positif = row[0];
            let sembuh = row[1];
            let meninggal = row[2];
            let dirawat = row[3];
            
            $(".positif").html(positif);
            $(".dirawat").html(dirawat);
            $(".sembuh").html(sembuh);
            $(".meninggal").html(meninggal);
        }
    });

    $.ajax({
        type : "POST",
        url  : "sumber.php",
        data : {
            tipe:"dataprov"
        },
        success : function(data){
            $(".isiprov").html(data);
        }
    });
});
