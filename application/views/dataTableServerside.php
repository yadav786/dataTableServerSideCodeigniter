<!DOCTYPE html>
<html>
<head>
<title>DataTable with Serverside in Codeigniter</title>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<!-- Latest compiled and minified CSS -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

</head>  
<body>      
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 ">
    <h3 class="text-center">DataTable with Serverside in Codeigniter</h3>                       
    <form id="form-filter">  
 
					<div class="form-group">
                 
                        <div class="col-sm-3">                          
                           
                        </div>
                    </div>
					
	<div class="form-group">
                        <label for="country" class="col-sm-1 control-label">User Name</label>
                        <div class="col-sm-3">                          
                             <input type="text" class="form-control" id="user_name">
                        </div>
                    </div>
                
                    <div class="form-group ">                         
                        <div class="col-sm-12 text-center">
                         <br/>
                            <button type="button" id="btn-filter" class="btn btn-primary">Search</button>
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
    </form>
</div>
  	 		
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users' List </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                       
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                   
                    <div class="form-group ">
                         
                 <table class="table table-hover" id="example">
                  <thead>
                    <tr>             
                      <th class="">id</th>                                     
                      <th class="">User Name</th>                                     
                      <th class="">Pincode</th>                                     
                      <th class="">Address</th>                                       
                    </tr>  
                  </thead>  

                </table>
 
                    </div>
                    <!-- </form> -->
              
                  </div>
                </div>
              </div>

<!-- /.Pagination -->
       
              
   
        </div>      
        </div>      
         
        <script>
        
     $(document).ready(function(){
     
      var source = $("#user_name").val();
         
      table = $('#example').DataTable({     
        "searching":false,       
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.   
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('index.php/admin_controller/ajax_load_posts')?>",
            "type": "POST",    
               "data": function ( data ) {
                data.user_name = $('#user_name').val(); 
            }  
        },
  
        //Set column definition initialisation properties.

        columns: [ 
        { data: 'id' },
        { data: 'user_name'},
        { data: 'pincode'},
        { data: 'address'}
		]  
 /*       
 "columnDefs": [ {
    "targets": 0,
    "data": "download_link",
    "render": function ( data, type, full, meta ) {
      return '<a href="'+data+'">Download</a>';
    }
  } ]
  
  
       { data: 'truck_type'},
        {data : 'calculated_distance', "render": function(data, type, full, meta){ 
                var edit_button = '<button  class="btn btn-success btn-sm" data-method="edit"  data-id="'+full.id+'">Edit</button>';                                                     
              //  return edit_button ; 
              var delete_button = '<button  class="btn btn-danger btn-sm" data-method="delete"  data-id="'+full.id+'">Delete</button>';
              return edit_button + "" + delete_button ;
        
                } } 
				
				  
*/
    });   

  $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload(null,false);  //just reload table
    });    
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload(null,false);  //just reload table
    });
    
   }); 
        </script>
        <!-- /page content -->
</body>
</html>


