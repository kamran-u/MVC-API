</div>

    <div id="overlay">
        <div>
            <img src="/assets/images/loading.gif" width="64px" height="64px"/>
        </div>
    </div>
        
    </body>
</html>
<script>

(function(){
    let initializePagination = 1;
//    ajax(initializePagination, null);

})();

function ajax(page, params) {
    let url = '/';
    $.ajax({
        url: url,
        type: "GET",
        data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val()},
        beforeSend: function(){$("#overlay").show();},
        success: function(data){
        $("#pagination-result").html(data);
        setInterval(function() {$("#overlay").hide(); },500);
        },
        error: function() 
        {}          
   });
}
function changePagination(option) {
    if(option!= "") {
       console.error('option', option);
       // getCharacters("getresult.php");
    }
}
</script>

