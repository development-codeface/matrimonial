function filter_data(data)
{
        var gender = $('#gender').val();
        
        var martial_status = $('#martial_status').val();
        
        var smoke = $('input[name=smoke]:checked').val();
        
        var drink = $('input[name=drink]:checked').val();
        
        var diet = $('input[name=diet]:checked').val();
        
        var disability = $('input[name=disability]:checked').val();
        
        var hiv_positive = $('input[name=hiv_positive]:checked').val();

        var smoke = $('input[name=smoke]:checked').val();
        
        var heightto = $('select[name=heightto]').val();

        var keysearch = $('#keysearch').val();
        
        var country = $('select[name=country]').val();
        
        var state = $('select[name=state]').val();
        
        var city = $('select[name=city]').val();
        
        var mtongue = $('select[name=mtongue]').val();
        
        var profile_for = $('select[name=profile_for]').val();
        
        var edu_level = $('select[name=edu_level]').val();
        
        var edu_field = $('select[name=edu_field]').val();
        
        var work_with = $('select[name=work_with]').val();
        
        var work_as = $('select[name=work_as]').val();
        
        var religion = $('select[name=religion]').val();
        
        var community = $('select[name=community]').val();
        
        
        var link = $('#url').val()+"muser/filter_data?martial_status="+martial_status+"&religion="+religion+"&smoke="+smoke+"&diet="+diet+"&drink="+drink+"&heightto="+heightto+"&mtongue="+mtongue+"&edu_level="+edu_level+"&edu_field="+edu_field+"&work_with="+work_with+"&work_as="+work_as+"&country="+country+"&state="+state+"&city="+city;
        $.post($('#url').val()+"muser/filter_data",{
               gender:gender,smoke:smoke,
               martial_status:martial_status,
               drink:drink,
               diet:diet,
               disability:disability,
               hiv_positive:hiv_positive,
               heightto:heightto,
               keysearch:keysearch,
               country:country,
               state:state,
               city:city,
               mtongue:mtongue,
               profile_for:profile_for,
               edu_level:edu_level,
               edu_field:edu_field,
               work_with:work_with,
               work_as:work_as,
               religion:religion,
               community:community,
               },function(data){
                $('#matches_change').html(data);
                document.getElementById('matches_change').scrollIntoView();
                
                });
}
/*
$(document).ready(function(){

        $('.pagination li').on("click", 'a',function(){
                var urlvalue = $(this).attr("href");
                var url = $('#url').val()+"muser/matches/";
                var page_segment = urlvalue.replace(url, '', true);
              var gender = $('#gender').val();
        
        var martial_status = $('#martial_status').val();
        
        var smoke = $('input[name=smoke]:checked').val();
        
        var drink = $('input[name=drink]:checked').val();
        
        var diet = $('input[name=diet]:checked').val();
        
        var disability = $('input[name=disability]:checked').val();
        
        var hiv_positive = $('input[name=hiv_positive]:checked').val();
        
        var heightto = $('select[name=heightto]').val();
        
        var country = $('select[name=country]').val();
        
        var state = $('select[name=state]').val();
        
        var city = $('select[name=city]').val();
        
        var mtongue = $('select[name=mtongue]').val();
        
        var profile_for = $('select[name=profile_for]').val();
        
        var edu_level = $('select[name=edu_level]').val();
        
        var edu_field = $('select[name=edu_field]').val();
        
        var work_with = $('select[name=work_with]').val();
        
        var work_as = $('select[name=work_as]').val();
        
        var religion = $('select[name=religion]').val();
      //  var link = $('#url').val()+"muser/t2?martial_status="+martial_status+"&religion="+religion+"&smoke="+smoke+"&diet="+diet+"&drink="+drink+"&heightto="+heightto+"&mtongue="+mtongue+"&edu_level="+edu_level+"&edu_field="+edu_field+"&work_with="+work_with+"&work_as="+work_as+"&country="+country+"&state="+state+"&city="+city;
        $.post($('#url').val()+"muser/filter_data1",{
                page_segment:page_segment,
               gender:gender,
               smoke:smoke,
               martial_status:martial_status,
               drink:drink,
               diet:diet,
               disability:disability,
               hiv_positive:hiv_positive,
               heightto:heightto,
               country:country,
               state:state,
               city:city,
               mtongue:mtongue,
               profile_for:profile_for,
               edu_level:edu_level,
               edu_field:edu_field,
               work_with:work_with,
               work_as:work_as,
               religion:religion,
               urlvalue:urlvalue 
               },function(data){
             $('#matches_change').html(data);
            //  console.log(data);
               // alert(data);
                
                });
            return false;   
        });
        
                //alert($('li a:first').attr('href'));
});

*/
/*
function ms_pagi()
{
       
       var martial_status = $('input[name=martial_status]:checked').val();
        
        var smoke = $('input[name=smoke]:checked').val();
        
        var drink = $('input[name=drink]:checked').val();
        
        var diet = $('input[name=diet]:checked').val();
        
        var heightto = $('select[name=heightto]').val();
        
        var country = $('select[name=country]').val();
        
        var state = $('select[name=state]').val();
        
        var city = $('select[name=city]').val();
        
        var mtongue = $('select[name=mtongue]').val();
        
        var profile_for = $('select[name=profile_for]').val();
        
        var edu_level = $('select[name=edu_level]').val();
        
        var edu_field = $('select[name=edu_field]').val();
        
        var work_with = $('select[name=work_with]').val();
        
        var work_as = $('select[name=work_as]').val();
        
        var religion = $('select[name=religion]').val();
        
       var segment_url = window.location.href;
       var link = $('#url').val()+"muser/filter_data";
       $.post(link, {segment_url:segment_url,
              smoke:smoke,
               martial_status:martial_status,
               drink:drink,
               diet:diet,
               heightto:heightto,
               country:country,
               state:state,
               city:city,
               mtongue:mtongue,
               profile_for:profile_for,
               edu_level:edu_level,
               edu_field:edu_field,
               work_with:work_with,
               work_as:work_as,
               religion:religion
              }, function(data)
              {
                 $('#matches_change').html(data);
              }              
              );
       
     // alert(myurl.substring(myurl.lastIndexOf("#"), 4));
       // alert("c"+$('#pagi>a').attr('href =#'));
}*/
function mstatus(data)
{
        var martial_status = $('#martial_status').val();
        alert(martial_status);
       // alert(data);
}

$(document).ready(function(){
   
        $("#religion").change(function(){
         var religion = $("#religion").val();
         var url = $("#url").val()+"global_fun/community";
             $.post(url, {religion:religion}, function(data) {
                 $("#community").html(data);
                 var select = $("select");
                 select.selectize({
                         onDropdownOpen: dropdownOpen,
                         onDropdownClose: dropdownClose,

                         allowEmptyOption: true,        
                 });    

                 });
         });
         $("#country").change(
                function(){
                   var country =    $("select[name='country']").val();
                   var link = $("#url").val()+"add_access/state";                    
                    $.post(link, {country: country}, function(data){
                       $("#state").html(data);
                       var select = $("select");
                        select.selectize({
                                onDropdownOpen: dropdownOpen,
                                onDropdownClose: dropdownClose,

                                allowEmptyOption: true,        
                        });
                   });
                  
                   }
        );
        $("#state").change(
                function(){
                var city =  $("select[name='state']").val();
                var link = $("#url").val()+"add_access/cities";                    
                $.post(link, {city: city}, function(data){
                $("#city").html(data);
                var select = $("select");
                        select.selectize({
                                onDropdownOpen: dropdownOpen,
                                onDropdownClose: dropdownClose,

                                allowEmptyOption: true,        
                        });
                });
                
                }
        );

        $("#countryprofile").change(
                function(){
                   var country = $("#countryprofile").val();
                   var link = $("#url").val()+"add_access/state";                    
                    $.post(link, {country: country}, function(data){
                       $("#stateprofile").html(data);
                       var select = $("select");
                        select.selectize({
                                onDropdownOpen: dropdownOpen,
                                onDropdownClose: dropdownClose,
                                allowEmptyOption: true,        
                        });
                   });
                  
                   }
        );
        $("#stateprofile").change(
                function(){
                var city = $("#state").val();
                var link = $("#url").val()+"add_access/cities";                    
                $.post(link, {city: city}, function(data){
                $("#city").html(data);
                var select = $("select");
                        select.selectize({
                                onDropdownOpen: dropdownOpen,
                                onDropdownClose: dropdownClose,
                                allowEmptyOption: true,        
                        });
                });
                
                }
        );



     });

     function refreshAlldropdown(){
        
        /*$("select").each(function(){
                var selectizeObj = $(this)[0].selectize;
                selectizeObj.onSearchChange('uniqueSearchQueryOrElseCacheWillBeUsed');

            });*/
            var select = $("select");
                 select.selectize({
                         onDropdownOpen: dropdownOpen,
                         onDropdownClose: dropdownClose,
                         allowEmptyOption: true,        
                 }); 
                 selectize.refreshOptions(true); 
     }

     function dropdownOpen($dropdown){
        $dropdown.addClass("opening");
    }
    function dropdownClose($dropdown){
        $dropdown.removeClass("opening");
    }
