<!doctype html>
<html>
    <head>		
		<title>Checkbox Filter With Pagination</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

	    <!-- font libs -->
		<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- demo page styles -->
		<link href="//cdnjs.cloudflare.com/ajax/libs/jplist/5.2.0/css/jplist.demo-pages.min.css" rel="stylesheet" type="text/css" />	
		
		<!-- jQuery lib -->		
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<!-- jPList core js and css  -->
        <link href="css/jplist.core.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jplist.core-ajax.min.js"></script>

        <!-- jPList sort bundle -->
        <script src="js/jplist.sort-bundle.min.js"></script>

        <!-- jPList pagination bundle -->
        <script src="js/jplist.pagination-bundle.min.js"></script>
        <link href="css/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />

        <!-- jPList toggle bundle -->
        <script src="js/jplist.filter-toggle-bundle.min.js"></script>
        <link href="css/jplist.filter-toggle-bundle.min.css" rel="stylesheet" type="text/css" />
		
		<!-- preloader -->
        <script src="js/jplist.preloader-control.min.js"></script>
        <link href="css/jplist.preloader-control.min.css" rel="stylesheet" type="text/css" />
		
		<script>
		$('document').ready(function () {
			$('#demo').jplist({

				itemsBox: '.list'
				, itemPath: '.list-item'
				, panelPath: '.jplist-panel'

                ,storage: 'localstorage'
                ,storageName: 'php-mysql-html-with-localstorage'

				//data source
				, dataSource: {

					type: 'server'
					, server: {

						//ajax settings
						ajax: {
							url: 'server-html.php'
							, dataType: 'html'
							, type: 'POST'
						}
					}
				}

			});
		});
		</script>
		
    </head>
    <body>
				
		<!-- main content -->
		<div class="box">
			<div class="center">
			
				<div id="demo" class="box jplist">
					<!-- panel -->
				   <div class="col-md-3">
					<div class="jplist-panel box panel-top">						

						<!-- checkbox filters -->
						<div
							class="jplist-group"
							data-control-type="checkbox-group-filter"
							data-control-action="filter"
							data-control-name="themes">

							<input
								data-path=".architecture"
								id="architecture"
								type="checkbox"
							/>

							<label for="architecture">Architecture</label>

							<input
								data-path=".christmas"
								id="christmas"
								type="checkbox"
							/>

							<label for="christmas">Christmas</label>

							<input
								data-path=".nature"
								id="nature"
								type="checkbox"
							/>

							<label for="nature">Nature</label>

							<input
								data-path=".lifestyle"
								id="lifestyle"
								type="checkbox"
							/>

							<label for="lifestyle">Lifestyle</label>
						</div>
					</div>
				  </div>
				  <div class="col-md-9">
					<!-- ajax content here -->   
					<div class="list box text-shadow"></div>
										
					<!-- no result found -->
					<div class="box jplist-no-results text-shadow align-center jplist-hidden">
						<p>No results found</p>
					</div>
										
					<!-- ios button: show/hide panel -->
					<div class="jplist-ios-button">
						<i class="fa fa-sort"></i>
						jPList Actions
					</div>
										
					<!-- panel -->
					<div class="jplist-panel box panel-bottom" style="margin: 0 0 20px 0">						
																	
						<div 
							class="jplist-drop-down left" 
							data-control-type="items-per-page-drop-down" 
							data-control-name="paging" 
							data-control-action="paging"
							data-control-animate-to-top="true">
							<ul>
								<li><span data-number="6" data-default="true"> 6 per page </span></li>
							</ul>
						</div>
								
						<!-- pagination results -->
						<div 
							class="jplist-label" 
							data-type="{start} - {end} of {all}" 
							data-control-type="pagination-info" 
							data-control-name="paging" 
							data-control-action="paging">
						</div>
												
						<!-- pagination -->
						<div 
							class="jplist-pagination" 
							data-control-type="pagination" 
							data-control-name="paging" 
							data-control-action="paging"
                            data-control-storage="false"
							data-control-animate-to-top="true">
						</div>					
					</div>
				</div>
				</div>

				<!--<><><><><><><><><><><><><><><><><><><><><><><><><><>   END <><><><><><><><><><><><><><><><><><><><><><><><><><>-->				
			</div>		
		</div>	
		
		<!-- footer -->
		
    </body>
</html>