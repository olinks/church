<?php
//function select marital status
function select_marital_status($st)
{

		if ($st == 'single')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="single" selected > Single</option>';
			$output .= '<option value="married" > Married</option>';
			$output .= '<option value="divorced" >Divorced</option>';
			$output .= '<option value="widowed" >Widowed</option>';


		}
		else if ($st == 'married')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="single"  > Single</option>';
			$output .= '<option value="married" selected> Married</option>';
			$output .= '<option value="divorced" >Divorced</option>';
			$output .= '<option value="widowed" >Widowed</option>';


		}
		else if ($st == 'divorced')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="single"  > Single</option>';
			$output .= '<option value="married" > Married</option>';
			$output .= '<option value="divorced" selected >Divorced</option>';
			$output .= '<option value="widowed" >Widowed</option>';


		}
		else if ($st == 'widowed')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="single"  > Single</option>';
			$output .= '<option value="married" > Married</option>';
			$output .= '<option value="divorced"  >Divorced</option>';
			$output .= '<option value="widowed" selected >Widowed</option>';


		}
		else
		{

			$output = '<option value="0" selected> -- Please Select --</option>';
			$output .= '<option value="single"  > Single</option>';
			$output .= '<option value="married" > Married</option>';
			$output .= '<option value="divorced" >Divorced</option>';
			$output .= '<option value="widowed" >Widowed</option>';

		}

	return $output;

}

//function select gender
function select_gender($gd)
{

		if ($gd == 'M')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="M" selected > Male</option>';
			$output .= '<option value="F" > Female</option>';


		}
		else if ($gd == 'F')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="M"> Male</option>';
			$output .= '<option value="F" selected > Female</option>';


		}
		else
		{

			$output = '<option value="0"  selected  > -- Please Select --</option>';
			$output .= '<option value="M"> Male</option>';
			$output .= '<option value="F"> Female</option>';
		}

	return $output;

}

//function select nationality
function select_nationality($n)
{

		if ($n == '159')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="159" selected > Nigerian</option>';
			$output .= '<option value="Others" > NON Nigerian</option>';


		}
		else if ($n == 'Others')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="159" > Nigerian</option>';
			$output .= '<option value="Others"  selected>  NON Nigerian</option>';


		}
		else
		{

			$output = '<option value="0"  selected > -- Please Select --</option>';
			$output .= '<option value="159"> Nigerian</option>';
			$output .= '<option value="Others" > Others</option>';
		}

	return $output;

}

//function select state
function select_state($con, $state)
{
	$r = mysqli_query($con, "SELECT id, name  FROM states  ORDER BY name ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($state == $row['id'])
			{
				$output = "<option value=\"$row[id]\" selected>";
				$output .=  $row['name'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[id]\" >";
				$output .= $row['name'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select state

function select_lga($con, $lga)
{
	$r = mysqli_query($con, "SELECT id, local_name  FROM lga  ORDER BY local_name ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($lga == $row['id'])
			{
				$output = "<option value=\"$row[id]\" selected>";
				$output .=  $row['local_name'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[id]\" >";
				$output .= $row['local_name'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select lga

//function select religion
function select_religion($r)
{

		if ($r == '1')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1" selected > Islam</option>';
			$output .= '<option value="2" > Christianity</option>';
			$output .= '<option value="3" > Traditional</option>';
			$output .= '<option value="4" > Others</option>';


		}
		else if ($r == '2')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > Islam</option>';
			$output .= '<option value="2" selected > Christianity</option>';
			$output .= '<option value="3" > Traditional</option>';
			$output .= '<option value="4" > Others</option>';


		}
		else if ($r == '3')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > Islam</option>';
			$output .= '<option value="2" > Christianity</option>';
			$output .= '<option value="3" selected  > Traditional</option>';
			$output .= '<option value="4" > Others</option>';


		}
		else if ($r == '4')
		{
			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="1"> Islam</option>';
			$output .= '<option value="2" > Christianity</option>';
			$output .= '<option value="3" > Traditional</option>';
			$output .= '<option value="4"  selected > Others</option>';


		}
		else
		{

			$output = '<option value="0"  selected> -- Please Select --</option>';
			$output .= '<option value="1"> Islam</option>';
			$output .= '<option value="2" > Christianity</option>';
			$output .= '<option value="3" > Traditional</option>';
			$output .= '<option value="4"  > Others</option>';
		}

	return $output;

}
//end of select religion

// selection all record
function selecting_all_records($table_name,$con,$date_start=null,$date_end=null,$column=null){
  if(empty($column)){
    $select_all="SELECT * FROM $table_name WHERE status !='0' order by id desc";
  }else{
    $select_all="SELECT * FROM $table_name WHERE status !='0' and $column between '$date_start' and '$date_end' ";
  }
    $sql_select_all= $con->query($select_all);
    if($sql_select_all->num_rows > 0){
             return $sql_select_all->fetch_all();
          }else{
              return 0;
          }

}

// selecting by id , please pass the tablename, id, database connection
function selecting_by_id($table_name,$id,$con,$column=null){




    if(empty($column)){
      $select="SELECT * FROM $table_name WHERE id='$id' AND status !='0'";
    }else{
        $select="SELECT * FROM $table_name WHERE $column='$id' AND status !='0'";
    }
		$result= $con->query($select);
			if($result->num_rows > 0){
               return $result->fetch_assoc();
      }
}

function selecting_by_id_status($table_name,$id,$con,$column=null,$status=null){




  if(empty($status)){
    $select="SELECT * FROM $table_name WHERE id='$id' AND status !='0'";
  }else{
      $select="SELECT * FROM $table_name WHERE $column='$id' AND status ='$status'";
  }
  $result= $con->query($select);
    if($result->num_rows > 0){
             return $result->fetch_assoc();
          }

}

// getting all titles on a select
function selecting_title($table_name,$con,$id=null){

  $option='';
  $select="SELECT * FROM $table_name WHERE status !='0'";
  $result= $con->query($select);
    if($result->num_rows > 0){


        while($row = $result->fetch_assoc()) {


          if(!empty($id) && $id == $row["id"] ){
            $option.='<option value="'.$row["id"].'" selected> '.$row["title"].' </option>';
          }else{
            $option.='<option value="'.$row["id"].'"> '.$row["title"].' </option>';
          }

        }
    }



    return $option;


}
?>
