


    <!-- BEGIN: Vendor JS-->
    <script src="{!!asset('dashboard')!!}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{!!asset('dashboard')!!}/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{!!asset('dashboard')!!}/app-assets/js/scripts/configs/vertical-menu-light.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/js/core/app-menu.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/js/core/app.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/js/scripts/components.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/js/scripts/footer.min.js"></script>
    <script src="{!!asset('dashboard')!!}/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{!!asset('dashboard')!!}/app-assets/js/scripts/pages/table-extended.min.js"></script>
    <!-- END: Page JS-->


<script type="text/javascript">


      $(document).ready(function() {
        $("#getData").click(function() { 
         $.ajax({ 
          type: "GET",
          url: "get/notification/list",      
           success: function (data) {
           console.log(data);
         
           $("#notification_items").empty();

                  if(data.length > 0){
                  document.getElementById("no_notification").style.display = "none";
                   

                  }


                  if(data.length == 0){
                   document.getElementById("all_notification").style.display = "none";
                   document.getElementById("scroller_notifications").style.display = "none";
                   

                   

                  }

                 
        

                $.each(data,function(i,dataItem){
                    $("#notification_items").append(` 
          
                                <div class="m-list-timeline__item">
                                 <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                    <span class="m-list-timeline__text">
                                        <a href="${dataItem.link}">
                                        ${dataItem.content}</a>
                                                                    
                                                                      
                                    </span>
                                    <span class="m-list-timeline__time"> ${dataItem.notification_date}</span>
                                </div>
                              
            `);
                });

                 

          } 
         
        });
      });
      });
      
     
    $(document).on('submit','.validate-in-submit',function(e){
        e.preventDefault();
        let data = new FormData(this);
        let route = $(this).attr('action'); 
        let method = $(this).attr('method'); 
        
        for(formInput of $(this).serializeArray()){
            // console.log(formInput.name);
            $(`[name="${formInput.name}"]`).parent().removeClass(`has-danger`); 
            $(`[name="${formInput.name}"]`).parent().find('div.form-control-feedback').remove();
        }

        $(this).find('input').each(function () {

            // console.log($(this).attr('name'));

        });
        sendRequest(route,method,data);

    });

    function sendRequest(route,method,data){
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax(
        {
            url: route,
            type: method , 
            dataType: "JSON",
            data:  data,
            contentType: false,
            cache: false,
            processData:false,
            success: function (response)
            {
                
                if (response.status == 1 ) {
                    toastr.success(response.message);
                    window.location = response.data.url;
                }else{

                    
                    for(inputError of response.message){
                        $(`[name="${inputError.input_name}"]`).parent().addClass(`has-danger`); 
                        $(`[name="${inputError.input_name}"]`).parent().find('div.form-control-feedback').remove();
                        $(`[name="${inputError.input_name}"]`).parent().prepend(`<div class="form-control-feedback">${inputError.error_message}</div>`);
                        toastr.error(inputError.error_message);

                        $(window).scrollTop($('.has-danger').offset().top - 300);
                        

                    }
                }
            },
            error: function(xhr) {
                ///
           }
        });
    }

</script>


