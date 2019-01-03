
$(document).ready(function(){
    $('.onoffswitch-checkbox').on("change",function(){
        if(this.checked){
            $(this).parents("a").removeClass("used");
        } else {
            $(this).parents("a").addClass("used");
        }
        let rownumber = this.id.split("_")[1];
        console.log(rownumber,this.checked);

        $.post("save.php",{id:rownumber,checked:this.checked}).done(function(data){
            console.log(data);
        });
    });
});