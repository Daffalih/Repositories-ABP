$(document).ready(function(){

    let sudahAmbil = false;

    function generateTHR(){
    let jumlah = Math.floor(Math.random() * 45000 + 5000);
    return "Rp " + jumlah.toLocaleString("id-ID");
}

    $("#thrBtn").click(function(){

        if(sudahAmbil){
            alert("THR sudah diambil");
            return;
        }

        $("#jumlahTHR").text(generateTHR());
        $("#thrModal").fadeIn();

        sudahAmbil = true;

        // disable tombol
        $("#thrBtn").text("✔ Sudah Diambil");
        $("#thrBtn").prop("disabled", true);
        $("#thrBtn").css("background", "gray");
    });

    $(".close").click(function(){
        $("#thrModal").fadeOut();
    });

    $(window).click(function(e){
        if ($(e.target).is("#thrModal")) {
            $("#thrModal").fadeOut();
        }
    });

});