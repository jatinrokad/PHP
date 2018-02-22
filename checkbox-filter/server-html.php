<?php
	//added standard php/mysql config file with host, user and password info
	require "config.php";
	
	//models and collections
	require "filter-result-model.php";
	require "filter-result-collection.php";	
	
	//domain
	require "action.php";
	require "sorting.php";
	require "pagination.php";
	require "filtering.php";
	require "server.php";
	require "checkboxgroupfilter.php";
	require "filterselect.php";
    	
	class jPListHTML extends jPListServer{
			
		/**
		* get html for one item
		* @param {Object} $item
		* @return {string} html
		*/
		private function getHTML($item){
		
			$html = "";
		
			$html .= "<div class='list-item box'>";	
			$html .= "	<div class='img left'>";
			$html .= "		<img src='" . $item['image'] . "' alt='' title=''/>";
			$html .= "	</div>";
				
			$html .= "	<div class='block right'>";
			$html .= "		<p class='title'>" . $item['title'] . "</p>";
			$html .= "		<p class='desc'>" . $item['description'] . "</p>";
			$html .= "		<p class='like'>" . $item['likes'] . " Likes</p>";
            $html .= "		<p class='views'>" . $item['viewsnumber'] . " Views</p>";
			$html .= "		<p class='theme'>" . $item['keyword1'] . ", " . $item['keyword2'] . "</p>";
			$html .= "	</div>";
			$html .= "</div>";

			return $html;
		}
		
		/**
		* get the whole html
		* @param {string} $itemsHtml - items html
		* @return {string} html
		*/
		private function getHTMLWrapper($itemsHtml){
			
			$html = "";
			
			$html .= "<div data-type='jplist-dataitem' data-count='" . $this->pagination->numberOfPages . "' class='box'>";
			$html .= $itemsHtml;
			$html .= "</div>";		
			
			return $html;
		}
		
		/**
		* constructor
		*/
		public function __construct(){
			
			$html = "";
			
			try{
                parent::__construct();
				
				if(isset($this->statuses)){
					
					$items = $this->getData();
					
					if($items){
						foreach($items as $item){
							$html .= $this->getHTML($item);					
						}
					}
						
                    ob_clean();
                    
					//print html
					echo($this->getHTMLWrapper($html));
				}
				
				//close the database connection
				$this->db = NULL;
			}
			catch(PDOException $ex){
				print "Exception: " . $ex->getMessage();
			}
		}
	}
	
	/**
	* start
	*/
	new jPListHTML();
?>	