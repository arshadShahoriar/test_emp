<?php

namespace App\Http\Controllers;
Use App\User;
Use App\emp_data;
use Illuminate\Http\Request;

class homeController extends Controller
{
            public function login(Request $request){
                $user = User::where('email',$request->email)
                ->where('password',$request->password)
                ->first();

        if($user != ""){
        $request->session()->put('email',$request->email);

        return redirect()->route('home_index');
        }
        else{

        return redirect()->route('login');
        }
            
    }
    public function login_page(){

        
        return view('login');

       
    }

    public function index(){
          
        

        $emp_data= emp_data::all();
//        $emp_data_pos= emp_data::select('first_name','last_name','phone','Profession')->groupBy('Profession')->get();
       $emp_data_pos=emp_data::orderBy('Profession')->get(); 
            return view('index',compact(['emp_data','emp_data_pos']));
    
     }

     function action(Request $request)  {
      if($request->ajax())
      {
       $output = '';
       $query = $request->get('query');
       if($query != '')
       {
        $data = emp_data::select('*')
          ->where('first_name', 'like', '%'.$query.'%')
          ->orWhere('last_name', 'like', '%'.$query.'%')
          ->orWhere('phone', 'like', '%'.$query.'%')
          ->get();
          
       }
     
       $total_row = $data->count();
       if($total_row > 0)
       {
        foreach($data as $row)
        {
         $output .= '
         <tr>
          <td>'.$row->id.'</td>
          <td>'.$row->phone.'</td>
          <td>'.$row->first_name.'</td>
          <td>'.$row->last_name.'</td>
          <td>'.$row->Profession.'</td>
         </tr>
         ';
        }
       }
       else
       {
        $output = '
        <tr>
         <td align="center" colspan="5">No Data Found</td>
        </tr>
        ';
       }
       $data = array(
        'table_data'  => $output,
        'total_data'  => $total_row
       );
 
       echo json_encode($data);
      }
     }
 
 


    public function showvalues(Request $request){

        
         $delete = content::truncate();
   
   
         for($i=0;$i<15;$i++){

            $parent_id=$request->content[$i];

            if($parent_id=="parent_id_1")
                $parent_order_id=1;
            elseif($parent_id=="parent_id_2")
                $parent_order_id=2;
            elseif($parent_id=="parent_id_3")
                $parent_order_id=3;

            $i++;
            
            for($j=$i;$j<15;$j++){

                       if($request->content[$j]=="end"){
                            $i=$j;
                            break;
                        }
            

                       $child_id= $request->content[$j];

                        if(($child_id=="row_1_col_1")||($child_id=="row_2_col_1")||($child_id=="row_3_col_1")){
                                $child_order_id= 1;
                        }
                        elseif(($child_id=="row_1_col_2")||($child_id=="row_2_col_2")||($child_id=="row_3_col_2")){
                            $child_order_id= 2;
                        }
                        elseif(($child_id=="row_1_col_3")||($child_id=="row_2_col_3")){
                            $child_order_id= 3;
                        }
                        elseif($child_id=="row_2_col_4"){
                            $child_order_id= 4;
                        }

               

                        $contentpp= new content();       
                        $contentpp->parent_id= "#".$parent_id;
                        
                        $contentpp->child_id="#".$child_id;
                        $contentpp->parent_order_id=$parent_order_id;
                        $contentpp->child_order_id= $child_order_id;
                        $contentpp->save();
                            
               
            }     

       
         }
    
		
             return redirect('/home');		
	
    }

   
}
