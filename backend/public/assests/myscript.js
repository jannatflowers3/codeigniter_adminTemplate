
$(document).ready(function(){
    $("#officecode").change(function (){
        var code = $(this).val();
        // officecode ar value = code
        $.get("http://localhost:8080/reports/allstaff",
        {offcode:code},
        function(data){
            // alert(data);
            $("#show").html(data);
    
    })
    
    })


})

// orderlist 
$(document).ready(function(){
    $('#orderlist').click(function(){
        var start = $('#startdate').val();
        var end = $('#enddate').val();
        // alert(start +end);
        $.get("http://localhost:8080/reports/allorder",{start:start,end:end},
        
        function(data){
            alert(data);
            $('#show').html(data);
        })
    })
})
 