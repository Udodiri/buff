<?php 
    
    $donet_cherity = array("1"=>array("1"=>"Animal Charities and Wildlife conservation organizations A",
                                      "2"=>"Animal Charities and Wildlife conservation organizations B",
                                      "3"=>"Animal Charities and Wildlife conservation organizations C",
                                      "4"=>"Animal Charities and Wildlife conservation organizations D"
                                      ),
                            "2"=>array("1"=>"Environmental Protection A",
                                       "2"=>"Environmental Protection B",
                                       "3"=>"Environmental Protection C",
                                       "4"=>"Environmental Protection D"
                                       ),    
                            "3"=> array("1"=>"International NGOs A",
                                        "2"=>"International NGOs B",
                                        "3"=>"International NGOs C",
                                        "4"=>"International NGOs D"
                                        ),
                           "4"=>  array("1"=>"Health Charities A",
                                        "2"=>"Health Charities B",
                                        "3"=>"Health Charities C",
                                        "4"=>"Health Charities D"
                                        ),
                           "5"=>array("1"=>"Education Charity A",
                                       "2"=>"Education Charity B",
                                       "3"=>"Education Charity C",
                                       "4"=>"Education Charity D"
                                       ),
                           
                           "6"=>array("1"=> "Arts & Culture Charities A",
                                       "2"=>"Arts & Culture Charities B",
                                       "3"=>"Arts & Culture Charities C",
                                       "4"=>"Arts & Culture Charities D"
                                       ),

                           "7"=>array("1"=>"Non-Profit Startups A",
                                      "2"=>"Non-Profit Startups B",
                                      "3"=>"Non-Profit Startups C",
                                      "4"=>"Non-Profit Startups D"
                            )
                           );


if($_SERVER['REQUEST_METHOD']=="POST"){
    $parent_cherity = $_POST['p_cherity_id'];
     $exist_d_cherity = $_POST['exist_donet_cherity'];
    //echo $parent_cherity;
   foreach ($donet_cherity as $key => $cherity_arr) {
       if($key==$parent_cherity){
        foreach ($cherity_arr as $ckey => $value) {
            $select='';
            if($ckey==$exist_d_cherity)
            {
                $select='selected="selected"';
            }
         echo "<option ".$select." value=".$ckey.">".$value."</option>";

        }
       }
   }
    die();
}

?>