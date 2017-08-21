$(document).ready(function(){
    $("#login").click(function(){
        if($("#arrow").hasClass("fa fa-chevron-down")){
            $("#arrow").addClass("fa-chevron-up").removeClass("fa-chevron-down");
        }else{
            $("#arrow").addClass("fa-chevron-down").removeClass("fa-chevron-up");
        }
        $("#login-wrap").slideToggle();
    });
    
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50 ) {
            $('#backtotop').fadeIn();
        } else {
            $('#backtotop').fadeOut();
        }
    });
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    $("#q_tags").tagit({
        fieldName: "q_tags",
    });
     var sampleTags = ['c++', 'java', 'php', 'coldfusion', 'javascript', 'asp', 'ruby', 'python', 'c', 'scala', 'groovy', 'haskell', 'perl', 'erlang', 'apl', 'cobol', 'go', 'lua'];
            $("#q_tags").tagit({
                availableTags: sampleTags
            });

    $('.deletelink').on('click',function(){
        id = $(this).attr('value');
        $del = $(this);
        $.ajax({
            method:'GET',
            url:'deletequestion.php',
            data:{id:id,}
        }).done(function(data){
            alert('deleted');
            $del.parent().parent().remove();
        });

    });
    $('.ansdelete').on('click',function(){
        id = $(this).attr('value');
        $del = $(this);
        $.ajax({
            method:'GET',
            url:'deleteanswer.php',
            data:{id:id,}
        }).done(function(data){
            alert('deleted');
            $del.parent().parent().parent().remove();
        });
    });
    $('.ansedit').on('click',function(){
        id = $(this).attr('value');
        $del = $(this);
        $.ajax({
            method:'GET',
            url:'editanswer.php',
            data:{id:id,}
        }).done(function(data){
            alert(data);
        });
    });

    $('#votecounter').on('click',function(){
        id = $(this).attr('value');
        parent = $(this);

        $.ajax({
            method:'GET',
            url:'uservoted.php',
            data:{id:id,}
        }).done(function(data){
            if(data=='true'){
            $vote = parseInt($(parent).find('p').text());
            $vote++;
            $(parent).find('p').html($vote);
            }
        });
    });
});   
